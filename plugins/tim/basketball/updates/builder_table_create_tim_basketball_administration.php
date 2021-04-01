<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTimBasketballAdministration extends Migration
{
    public function up()
    {
        Schema::create('tim_basketball_administration', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('surname');
            $table->string('position');
            $table->string('preview_img');
            $table->string('detail_img')->nullable();
            $table->text('text')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tim_basketball_administration');
    }
}
