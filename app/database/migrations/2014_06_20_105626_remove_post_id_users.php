<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemovePostIdUsers extends Migration {

    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->dropColumn('post_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }

}
