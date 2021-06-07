<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballDocs2 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_docs', function($table)
        {
            $table->string('type');
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_docs', function($table)
        {
            $table->dropColumn('type');
        });
    }
}
