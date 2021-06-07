<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTimBasketballMatches extends Migration
{
    public function up()
    {
        Schema::create('tim_basketball_matches', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->date('match_date');
            $table->string('game_score');
            $table->integer('tour');
            $table->string('address');
            $table->boolean('is_finisher');
            $table->integer('match_number');
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tim_basketball_matches');
    }
}
