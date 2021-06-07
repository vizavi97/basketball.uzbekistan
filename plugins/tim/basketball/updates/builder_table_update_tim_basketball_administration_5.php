<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballAdministration5 extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_administration', function($table)
        {
            $table->string('category', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_administration', function($table)
        {
            $table->smallInteger('category')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
