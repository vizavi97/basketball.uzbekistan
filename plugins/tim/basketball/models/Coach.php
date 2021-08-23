<?php namespace Tim\Basketball\Models;

use Model;
use Tim\Staticplugin\Models\Region;

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
        'diploma_file' => 'System\Models\File',
        'certificate_file' => 'System\Models\File',
        'categories_file' => 'System\Models\File',
        'international_file' => 'System\Models\File',
        'other_files' => 'System\Models\File',
    ];

    public $belongsTo = [
        "region" => Region::class
    ];
  	public $belongsToMany = [
    'team' => [
        	'Tim\Basketball\Models\Team',
        	'table' => 'tim_basketball_coaches_teams',
        	'order' => 'name'
        	],
    ];
}
