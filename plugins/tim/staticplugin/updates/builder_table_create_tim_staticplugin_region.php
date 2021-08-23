<?php namespace Tim\Staticplugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTimStaticpluginRegion extends Migration
{
    public function up()
    {
        Schema::create('tim_staticplugin_region', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('title');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tim_staticplugin_region');
    }
}
