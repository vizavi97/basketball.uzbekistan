<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteTimBasketballAdministration extends Migration
{
    public function up()
    {
        Schema::dropIfExists('tim_basketball_administration');
    }
    
    public function down()
    {
        Schema::create('tim_basketball_administration', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191);
            $table->string('surname', 191);
            $table->string('position', 191);
            $table->string('preview_img', 191);
            $table->string('detail_img', 191)->nullable();
            $table->text('text')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('category');
        });
    }
}
