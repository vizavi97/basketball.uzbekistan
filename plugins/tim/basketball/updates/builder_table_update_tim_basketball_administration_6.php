<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballAdministration6 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_administration', function($table)
        {
            $table->integer('number');
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_administration', function($table)
        {
            $table->dropColumn('number');
        });
    }
}
