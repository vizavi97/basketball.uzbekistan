<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteTimBasketballAdministrationCatsRelation extends Migration
{
    public function up()
    {
        Schema::dropIfExists('tim_basketball_administration_cats_relation');
    }
    
    public function down()
    {
        Schema::create('tim_basketball_administration_cats_relation', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('administration_id');
            $table->integer('categories_id');
        });
    }
}
