<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteTimBasketballAdministrationRelations extends Migration
{
    public function up()
    {
        Schema::dropIfExists('tim_basketball_administration_relations');
    }
    
    public function down()
    {
        Schema::create('tim_basketball_administration_relations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('person_id');
            $table->integer('categories_id');
        });
    }
}
