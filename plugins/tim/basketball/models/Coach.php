<?php namespace Tim\Basketball\Models;

use Model;

/**
 * Model
 */
class Coach extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'tim_basketball_coaches';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $attachOne = [
        'preview_img' => 'System\Models\File',
    ];
    
  	public $belongsToMany = [
    'team' => [
        	'Tim\Basketball\Models\Team',
        	'table' => 'tim_basketball_coaches_teams',
        	'order' => 'name'
        	],
    ];
}
