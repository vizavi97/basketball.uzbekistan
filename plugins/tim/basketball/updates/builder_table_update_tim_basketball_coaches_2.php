<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballCoaches2 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_coaches', function($table)
        {
            $table->integer('region_id');
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_coaches', function($table)
        {
            $table->dropColumn('region_id');
        });
    }
}
