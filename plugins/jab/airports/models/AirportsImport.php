<?php namespace Jab\Airports\Models;

use Backend\Models\ImportModel;
use Jab\Airports\Models\Airports;
use Jab\Airports\Models\Type;

class AirportsImport extends ImportModel
{
    /**
     * @var array The rules to be applied to the data.
     */
    public $rules = [];

    public function importData($results, $sessionKey = null)
    {
        $count = 0;
        foreach ($results as $row => $data) {

            if($count == 10)
                return;

            $data['type'] = $this->setType($data['type']);

            try {
                $airports = new Airports;
                $airports->fill($data);
                $airports->save();

                $this->logCreated();
            }
            catch (\Exception $ex) {
                $this->logError($row, $ex->getMessage());
            }

        }
    }

    /**
     * Checks if the type already exists, if not creates a new one
     * @param [type] $type [description]
     */
    public function setType($type)
    {
        $typeRecord = Type::where('type_name', $type)->first();
        
        if ($typeRecord) {
            return $typeRecord->id;
        }else{
            $typeRecord = Type::create(['type_name' => $type]);
            return $typeRecord->id;
        }

    }
}