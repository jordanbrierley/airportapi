<?php namespace Jab\Airports\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJabAirportsAirports extends Migration
{
    public function up()
    {
        Schema::table('jab_airports_airports', function($table)
        {
            $table->renameColumn('type', 'type_id');
        });
    }
    
    public function down()
    {
        Schema::table('jab_airports_airports', function($table)
        {
            $table->renameColumn('type_id', 'type');
        });
    }
}
