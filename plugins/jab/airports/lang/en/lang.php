<?php return [
    'plugin' => [
        'name' => 'Airports',
        'description' => 'Airports plugin contains using data from http://openflights.org',
    ],
    'airport' => [
        'menuName' => 'Airports',
        'field' => [
            'airportId' => 'Airport ID',
            'name' => 'Name',
            'city' => 'City',
            'country' => 'Country',
            'iata' => 'IATA',
            'icao' => 'ICAO',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'timezone' => 'Timezone',
            'dst' => 'DST',
            'tzDatabaseTime' => 'Tz database time',
            'type' => 'Type',
            'source' => 'Source',
            'altitude' => 'Altitude',
        ],
    ],
    'type' => [
        'fields' => [
            'typeName' => 'Name',
        ],
    ],
];