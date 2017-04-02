<?php namespace Jab\Airports\Api\Controllers;

use Response;
// fractal api
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;

use Illuminate\Routing\Controller;
use Jab\Airports\Models\Airports as AirportsModel;

class Airports extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
        $this->fractal = new Manager();
    }
    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        // $airports = AirportsModel::get();
        $airports = AirportsModel::with('type')->where('type_id', '1')->take(5)->get();
        // return $airports;


        $resource = new Collection($airports, function(AirportsModel $airport) {
            return [
                'id'      => (int) $airport['id'],
                'airport_id'   => (int) $airport['airport_id'],
                'name'    => $airport['name'],
                'iata'    => $airport['iata'],
                'icao'    => $airport['icao'],
                'location'  => [
                    'city'  => $airport['city'],
                    'country' => $airport['country'],
                    'latitude' => $airport['latitude'],
                    'longitude' => $airport['longitude'],
                ],
                'altitude'    => $airport['altitude'],
                'timezone'    => $airport['timezone'],
                'dst'    => $airport['dst'],
                'tz_database_timezone'    => $airport['tz_database_time'],
                'type'    => $airport['type'],
                'source'    => $airport['source'],
                'links'   => [
                    [
                        'rel' => 'self',
                        'uri' => '/api/v1/airport/'.$airport['id'],
                    ]
                ]
            ];
        });

        $data = $this->fractal->createData($resource)->toJson();
        return Response::json(['name' => 'Steve', 'state' => 'CA']);

       // return view('jab.airports::airports-index');

        // Turn all of that into a JSON string
        // return  ;
        // return $airports;
    }
}