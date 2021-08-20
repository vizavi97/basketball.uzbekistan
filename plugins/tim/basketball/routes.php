<?php


use Illuminate\Support\Facades\Route;
use RainLab\User\Models\User as UserModel;
use Tim\Basketball\Models\Coach;
use Tim\Basketball\Models\Player;
use Tim\Basketball\Models\PlayersTeam;
use Tim\Basketball\Models\Team;
use Tymon\JWTAuth\Facades\JWTAuth as JWT;
use Illuminate\Http\Request;
use Vdomah\JWTAuth\Models\Settings;
use System\Modal\files;

use Carbon\Carbon;
use Tim\Basketball\Models\Calendar;

Route::group(['prefix' => 'api'], function () {

    Route::get('calendar', function () {

        $events = Calendar::whereDate('date', '>', Carbon::now())->get();

        return response()->json($events);

    });

    Route::post('login', function (Request $request) {
        if (Settings::get('is_login_disabled'))
            App::abort(404, 'Page not found');

        $login_fields = Settings::get('login_fields', ['email', 'password']);

        $credentials = Input::only($login_fields);

        try {
            // verify the credentials and create a token for the user
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        $userModel = JWTAuth::authenticate($token);

        if ($userModel->methodExists('getAuthApiSigninAttributes')) {
            $user = $userModel->getAuthApiSigninAttributes();
        } else {
            $user = [
                'name' => $userModel->name,
                'surname' => $userModel->surname,
                'username' => $userModel->username,
                'email' => $userModel->email,
                'is_activated' => $userModel->is_activated,
                'phone' => $userModel->phone,
                'role' => $userModel->groups[0]->code
            ];
            if ($userModel->groups[0]->code == "coach") {
                $coach = Coach::where('user_id', $userModel->id)->first();
                return response()->json(compact('token', 'user', 'coach'));
            }
        }
        // if no errors are encountered we can return a JWT
        return response()->json(compact('token', 'user'));
    });

    Route::post('refresh', function (Request $request) {
        if (Settings::get('is_refresh_disabled'))
            App::abort(404, 'Page not found');

        $token = Request::get('token');

        try {
            // attempt to refresh the JWT
            if (!$token = JWTAuth::refresh($token)) {
                return response()->json(['error' => 'could_not_refresh_token'], 401);
            }
        } catch (Exception $e) {
            // something went wrong
            return response()->json(['error' => 'could_not_refresh_token'], 500);
        }

        // if no errors are encountered we can return a new JWT
        return response()->json(compact('token'));
    });

    Route::post('invalidate', function (Request $request) {
        if (Settings::get('is_invalidate_disabled'))
            App::abort(404, 'Page not found');

        $token = Request::get('token');

        try {
            // invalidate the token
            JWTAuth::invalidate($token);
        } catch (Exception $e) {
            // something went wrong
            return response()->json(['error' => 'could_not_invalidate_token'], 500);
        }

        // if no errors we can return a message to indicate that the token was invalidated
        return response()->json('token_invalidated');
    });

    Route::post('signup', function (Request $request) {
        if (Settings::get('is_signup_disabled'))
            App::abort(404, 'Page not found');

        $login_fields = Settings::get('signup_fields', ['email', 'password', 'password_confirmation']);
        $credentials = Input::only($login_fields);

        try {
            $userModel = UserModel::create($credentials);

            if ($userModel->methodExists('getAuthApiSignupAttributes')) {
                $user = $userModel->getAuthApiSignupAttributes();
            } else {
                $user = [
                    'id' => $userModel->id,
                    'name' => $userModel->name,
                    'surname' => $userModel->surname,
                    'username' => $userModel->username,
                    'email' => $userModel->email,
                    'is_activated' => $userModel->is_activated,
                    'phone' => $userModel->phone,
                ];
            }
        } catch (Exception $e) {
            return Response::json(['error' => $e->getMessage()], 401);
        }

        $token = JWTAuth::fromUser($userModel);

        return Response::json(compact('token', 'user'));
    });

    Route::post('profile', function (Request $request) {
        $token = $request->token;
        try {
            JWT::setToken($token); //<-- set token and check
            if (!$claim = JWT::getPayload()) {
                return response()->json(array('message' => 'user_not_found'), 404);
            }
            $userData = JWT::toUser($token);
            if (isset($userData->groups[0])) {
                $user = [
                    'name' => $userData->name,
                    'surname' => $userData->surname,
                    'username' => $userData->username,
                    'email' => $userData->email,
                    'is_activated' => $userData->is_activated,
                    'phone' => $userData->phone,
                    'role' => isset($userData->groups) ? $userData->groups[0]->code : null
                ];
                if ($userData->groups[0]->code == "coach") {
                    $user['id'] = $userData->id;
                    $coach = Coach::where('user_id', $userData->id)->first();
                    return response()->json(["user" => $user, "coach" => $coach]);
                }
            }
            $user = [
                'name' => $userData->name,
                'surname' => $userData->surname,
                'username' => $userData->username,
                'email' => $userData->email,
                'is_activated' => $userData->is_activated,
                'phone' => $userData->phone,
            ];

            return response()->json(["user" => $user]);


        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(array('message' => 'token_expired'), 404);
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(array('message' => 'token_invalid'), 404);
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(array('message' => 'token_absent'), 404);
        }
    });

    Route::post('change-user-info', function (Request $request) {
        $token = $request->header('Authorization');
        try {
            JWT::setToken($token); //<-- set token and check
            if (!$claim = JWT::getPayload()) {
                return response()->json(array('message' => 'user_not_found'), 404);
            }

            $userData = JWT::toUser($token);


            $user = UserModel::find($userData->id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->soc_facebook = $request->facebook;
            $user->soc_instagram = $request->instagram;
            $user->soc_telegram = $request->telegram;
            $user->save();

            $response = [
                'name' => $userData->name,
                'surname' => $userData->surname,
                'username' => $userData->username,
                'email' => $userData->email,
                'is_activated' => $userData->is_activated,
                'phone' => $userData->phone,
            ];
            return response()->json(["user" => $response]);

        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(array('message' => 'token_expired'), 404);
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(array('message' => 'token_invalid'), 404);
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(array('message' => 'token_absent'), 404);
        }
    });

    Route::post('coach-register', function (Request $request) {
        try {
            $coach = new Coach;
            $coach->name = $request->name;
            $coach->surname = $request->surname;
            $coach->user_id = $request->user_id;
            $coach->position = $request->position;
            $coach->pc_quality = $request->pc_quality;
            $coach->langs = $request->langs;
            $coach->living_address = $request->living_address;
            $coach->working_address = $request->working_address;
            $coach->birth = $request->birth;
            $coach->preview_img = $request->preview_img;
            $coach->diploma_file = $request->diploma_file;
            $coach->certificate_file = $request->certificate_file;
            $coach->categories_file = $request->categories_file;
            $coach->international_file = $request->international_file;
            $coach->preview_img = $request->preview_img;
            $coach->save();

            $user = UserModel::find($request->user_id);
            $user->is_activated = true;
            $user->name = $request->name;
            $user->surname = $request->surname;
            $user->activated_at = time();
            $user->groups = 3;
            $user->save();
            return response()->json([
                "is_activated" => true,
                "coach" => $coach,
                "user" => $user
            ]);
        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(array('message' => 'token_expired'), 404);
        }
    });

    Route::group(['prefix' => 'player'], function () {
        Route::post('create', function (Request $request) {
            $player = new Player;
            $player->name = $request->name;
            $player->surname = $request->surname;
            $player->father_name = $request->father_name;
            $player->gender = $request->gender;
            $player->game_number = $request->game_number;
            $player->birth = $request->birth;
            $player->nationality = $request->nationality;
            $player->place_of_birth = $request->place_of_birth;
            $player->place_of_living = $request->place_of_living;
            $player->phone_number = $request->phone_number;
            $player->height = $request->height;
            $player->position = $request->position;
            $player->age = $request->age;
            $player->preview_img = $request->preview_img;
            $player->training_time = $request->training_time;
            $player->playing_time = $request->playing_time;
            $player->trauma = $request->trauma;
            $player->mother_height = $request->mother_height;
            $player->father_height = $request->father_height;
            $player->coach_id = $request->coach_id;
            $player->save();
            return response()->json(["player" => $player, 'message' => "created"]);
        });
        Route::post('get-players', function (Request $request) {
            return response()->json(
                ["players" => Player::with('preview_img')->where('coach_id', $request->coach_id)->get()]
            );
        });
        Route::post('delete', function (Request $request) {
            Player::destroy($request->id);
            return response()->json(
                ["message" => "deleted"]
            );
        });
    });

    Route::group(['prefix' => 'team'], function () {
        Route::post('create', function (Request $request) {
            $team = new Team;
            $team->name = $request->title;
            $team->slug = $request->name;
            $team->gender = $request->gender;
            $team->type = $request->type;
            $team->age = $request->age;
            $team->coach_id = $request->coach_id;
            $team->img = $request->preview_img;
            $team->section_preview_img = $request->section_preview_img;
            $team->section_address = $request->section_address;
            $team->section_training_time = $request->section_training_time;
            $team->save();
            foreach (explode(",", $request->players) as $player_id) {
                $playersTeam = new PlayersTeam;
                $playersTeam->team_id = $team->id;
                $playersTeam->player_id = $player_id;
                $playersTeam->save();
            }
            return response()->json(["teams" => $team, 'message' => "created"]);
        });
        Route::post('get-teams', function (Request $request) {
            return response()->json(
                ["teams" => Team::with('img')->where('coach_id', $request->coach_id)->get()]
            );
        });
        Route::post('delete', function (Request $request) {
            Team::destroy($request->id);
            return response()->json(
                ["message" => "deleted"]
            );
        });
    });
});

