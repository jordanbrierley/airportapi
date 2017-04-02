<?php namespace Jab\Airports\Models;

use Model;

/**
 * Model
 */
class Type extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'jab_airports_type';

    public $fillable = [
        'type_name'
    ];

    public $hasMany = [
        'airports' => 'Jab\Airports\Models\Airports'
    ];
}