<?php namespace Tim\Basketball\Models;

use Model;

/**
 * Model
 */
class Calendar extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'tim_basketball_calendar';
    
    protected $jsonable = ['type'];

    public $belongsTo = [
      'tournament' => [
        	'Tim\Basketball\Models\Event',
        	],
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
