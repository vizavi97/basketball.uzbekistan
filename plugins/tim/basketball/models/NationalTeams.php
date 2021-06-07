<?php namespace Tim\Basketball\Models;

use Model;

/**
 * Model
 */
class NationalTeams extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'tim_basketball_national_teams';
		
    public $attachOne = [
    'preview_img' => 'System\Models\File',
		'images' => 'System\Models\File',
    ];
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
