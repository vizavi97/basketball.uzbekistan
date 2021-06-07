<?php namespace Tim\Basketball\Models;

use Model;

/**
 * Model
 */
class Player extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    public $attachOne = [
        'preview_img' => 'System\Models\File',
        'national_preview_img' => 'System\Models\File'
    ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'tim_basketball_players';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    
    public $belongsToMany = [
        'team' => [
        	'Tim\Basketball\Models\Team',
        	'table' => 'tim_basketball_players_teams',
        	'order' => 'name'
        	],
        'national' => [
        	'Tim\Basketball\Models\NationalTeams',
        	'table' => 'tim_basketball_players_national_teams',
        	'order' => 'short_title'
        	]
    ];
}
