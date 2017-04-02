<?php namespace Jab\Airports\Models;

use Backend\Models\ExportModel;
use Jab\Airports\Models\Airports;

class AirportsExport extends ExportModel
{
    /**
     * @var array The rules to be applied to the data.
     */
    public $rules = [];

    public function exportData($columns, $sessionKey = null)
    {
        $airports = Airports::all();
        $airports->each(function($subscriber) use ($columns) {
            $subscriber->addVisible($columns);
        });
        return $airports->toArray();
    }
}