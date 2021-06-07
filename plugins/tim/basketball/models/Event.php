<?php namespace Tim\Basketball\Models;

use Model;

/**
 * Model
 */
class Event extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'tim_basketball_events';


    public $attachOne = [
        'preview_img' => 'System\Models\File',
    ];
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
