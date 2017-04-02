<?php namespace Jab\Airports\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJabAirportsAirports extends Migration
{
    public function up()
    {
        Schema::create('jab_airports_airports', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('airport_id');
            $table->string('name')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('iata')->nullable();
            $table->string('icao')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('altitude')->nullable();
            $table->string('timezone')->nullable();
            $table->string('dst')->nullable();
            $table->string('tz_database_time')->nullable();
            $table->integer('type')->nullable();
            $table->string('source')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jab_airports_airports');
    }
}
