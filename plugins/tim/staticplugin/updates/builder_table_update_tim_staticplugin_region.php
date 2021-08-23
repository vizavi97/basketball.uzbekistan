<?php namespace Tim\Staticplugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimStaticpluginRegion extends Migration
{
    public function up()
    {
        Schema::table('tim_staticplugin_region', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('code');
            $table->string('title')->change();
        });
    }
    
    public function down()
    {
        Schema::table('tim_staticplugin_region', function($table)
        {
            $table->dropColumn('id');
            $table->dropColumn('code');
            $table->string('title', 191)->change();
        });
    }
}
