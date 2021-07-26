<?php namespace Tim\Basketball\Models;

use Model;

/**
 * Model
 */
class Section extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'tim_basketball_sections';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
