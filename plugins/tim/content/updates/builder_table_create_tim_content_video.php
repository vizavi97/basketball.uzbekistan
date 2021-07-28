<?php namespace Tim\Content\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTimContentVideo extends Migration
{
    public function up()
    {
        Schema::create('tim_content_video', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('video_id');
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tim_content_video');
    }
}
