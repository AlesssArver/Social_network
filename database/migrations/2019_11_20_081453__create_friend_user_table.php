<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendUserTable extends Migration
{

    public function up()
    {
        Schema::create('friend_user', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('friend_id');
            $table->primary(['user_id', 'friend_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('friends');
    }
}
