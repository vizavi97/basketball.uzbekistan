<?php namespace Tim\Basketball\Models;

use Model;

/**
 * Model
 */
class Match extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'tim_basketball_matches';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $belongsTo = [
      'team_home' => [
        	'Tim\Basketball\Models\Team',
        	],
      'team_versus' => [
        	'Tim\Basketball\Models\Team',
        	],
      'tournament' => [
        	'Tim\Basketball\Models\Event',
        	],
    ];
    
    public $attachOne = [
		'images' => 'System\Models\File',
    ];
}
