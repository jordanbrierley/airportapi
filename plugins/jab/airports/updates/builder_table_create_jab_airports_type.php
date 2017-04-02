<?php namespace Jab\Airports\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJabAirportsType extends Migration
{
    public function up()
    {
        Schema::create('jab_airports_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('type_name')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jab_airports_type');
    }
}
