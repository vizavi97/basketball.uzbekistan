<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTimBasketballCalendar extends Migration
{
    public function up()
    {
        Schema::create('tim_basketball_calendar', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('event');
            $table->text('description');
            $table->dateTime('date');
            $table->integer('tournament_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tim_basketball_calendar');
    }
}
