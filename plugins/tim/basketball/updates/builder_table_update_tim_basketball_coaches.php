<?php namespace Tim\Basketball\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTimBasketballCoaches extends Migration
{
    public function up()
    {
        Schema::table('tim_basketball_coaches', function($table)
        {
            $table->string('pc_quality');
            $table->integer('user_id');
            $table->string('teams_id');
            $table->text('langs');
            $table->string('living_address');
            $table->string('working_address');
            $table->string('birth');
        });
    }
    
    public function down()
    {
        Schema::table('tim_basketball_coaches', function($table)
        {
            $table->dropColumn('pc_quality');
            $table->dropColumn('user_id');
            $table->dropColumn('teams_id');
            $table->dropColumn('langs');
            $table->dropColumn('living_address');
            $table->dropColumn('working_address');
            $table->dropColumn('birth');
        });
    }
}
