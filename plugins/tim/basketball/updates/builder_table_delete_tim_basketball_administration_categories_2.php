<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteTimBasketballAdministrationCategories2 extends Migration
{
    public function up()
    {
        Schema::dropIfExists('tim_basketball_administration_categories');
    }
    
    public function down()
    {
        Schema::create('tim_basketball_administration_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
}
