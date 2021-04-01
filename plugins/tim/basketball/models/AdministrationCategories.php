<?php namespace Tim\Basketball\Models;

use Model;

/**
 * Model
 */
class AdministrationCategories extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'tim_basketball_administration_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
