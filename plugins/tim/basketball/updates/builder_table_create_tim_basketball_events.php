<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTimBasketballEvents extends Migration
{
    public function up()
    {
        Schema::create('tim_basketball_events', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->dateTime('time_start');
            $table->dateTime('time_end');
            $table->boolean('is_over');
            $table->string('address')->nullable();
            $table->text('short_desc')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tim_basketball_events');
    }
}
