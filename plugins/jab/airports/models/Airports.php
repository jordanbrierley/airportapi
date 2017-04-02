<?php namespace Jab\Airports\Models;

use Model;

/**
 * Model
 */
class Airports extends Model
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
    public $table = 'jab_airports_airports';

    public $fillable = [
        'airport_id',
        'name',
        'city',
        'country',
        'iata',
        'icao',
        'latitude',
        'longitude',
        'altitude',
        'timezone',
        'dst',
        'tz_database_time',
        'type',
        'source'
    ];

    public $belongsTo = [
        'type' => ['Jab\Airports\Models\Type', 'key' => 'type_id']
    ];
}