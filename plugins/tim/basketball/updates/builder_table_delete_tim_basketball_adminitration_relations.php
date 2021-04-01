<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteTimBasketballAdminitrationRelations extends Migration
{
    public function up()
    {
        Schema::dropIfExists('tim_basketball_adminitration_relations');
    }
    
    public function down()
    {
        Schema::create('tim_basketball_adminitration_relations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('person_id');
            $table->integer('category_id');
        });
    }
}
