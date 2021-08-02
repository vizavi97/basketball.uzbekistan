<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballPlayers6 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_players', function($table)
        {
            $table->string('gender', 191)->default('M')->change();
            $table->text('trauma')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_players', function($table)
        {
            $table->string('gender', 191)->default(null)->change();
            $table->string('trauma', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
