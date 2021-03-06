<?php namespace Tim\Basketball\Models;

use Model;

/**
 * Model
 */
class Team extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;


    protected $dates = ['deleted_at'];
    
    public $belongsTo = [
      'tournament' => [
        	'Tim\Basketball\Models\Event',
        	],
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'tim_basketball_teams';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $attachOne = [
    'img' => 'System\Models\File',
    'section_preview_img' => 'System\Models\File',
    ];
    
}
