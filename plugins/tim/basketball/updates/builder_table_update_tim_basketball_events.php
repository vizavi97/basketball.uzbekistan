<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballEvents extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_events', function($table)
        {
            $table->smallInteger('is_main');
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_events', function($table)
        {
            $table->dropColumn('is_main');
        });
    }
}
