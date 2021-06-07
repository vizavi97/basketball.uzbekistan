<?php namespace Tim\Basketball\Models;

use Model;

/**
 * Model
 */
class Administration extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = [
					"name",
					"surname",
					"position",
					"text",
    ];

    public $attachOne = [
        'preview_img' => 'System\Models\File',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'tim_basketball_administration';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
