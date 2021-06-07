<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteTimBasketballMatchEvent extends Migration
{
    public function up()
    {
        Schema::dropIfExists('tim_basketball_match_event');
    }
    
    public function down()
    {
        Schema::create('tim_basketball_match_event', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('event_id');
            $table->integer('match_id');
        });
    }
}
