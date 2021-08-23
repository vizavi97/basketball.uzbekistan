<?php namespace Tim\Staticplugin\Models;

use Model;

/**
 * Model
 */
class Region extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'tim_staticplugin_region';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
