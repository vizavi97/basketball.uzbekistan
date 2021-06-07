<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballAdministration2 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_administration', function($table)
        {
            $table->integer('category');
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_administration', function($table)
        {
            $table->dropColumn('category');
        });
    }
}
