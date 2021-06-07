<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTimBasketballMatchEvent extends Migration
{
    public function up()
    {
        Schema::create('tim_basketball_match_event', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('event_id');
            $table->integer('match_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tim_basketball_match_event');
    }
}
