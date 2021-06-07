<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTimBasketballPlayers extends Migration
{
    public function up()
    {
        Schema::create('tim_basketball_players', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('surname');
            $table->date('birth');
            $table->string('nationality');
            $table->integer('number');
            $table->string('born_place');
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->boolean('is_publish');
            $table->string('citizenship');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('father_name')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tim_basketball_players');
    }
}
