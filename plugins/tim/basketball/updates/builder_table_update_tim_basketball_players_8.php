<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballPlayers8 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_players', function($table)
        {
            $table->integer('father_height')->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('phone_number', 20)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_players', function($table)
        {
            $table->smallInteger('father_height')->nullable(false)->unsigned(false)->default(null)->change();
            $table->smallInteger('phone_number')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
