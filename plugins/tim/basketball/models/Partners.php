<?php namespace Tim\Basketball\Models;

use Model;

/**
 * Model
 */
class Partners extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'tim_basketball_partners';

    /**
     * @var array Validation rules
     */
    public $attachOne = [
        'img' => 'System\Models\File'
    ];
    public $rules = [
    ];
}
