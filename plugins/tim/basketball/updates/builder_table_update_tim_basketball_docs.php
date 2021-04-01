<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballDocs extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_docs', function($table)
        {
            $table->dropColumn('docs');
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_docs', function($table)
        {
            $table->string('docs', 191);
        });
    }
}
