<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{

    public $timestamps = false;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('content');
            $table->unsignedInteger('from_id');
            $table->foreign('from_id')->references('id')->on('users');
            $table->unsignedInteger('to_id');
            $table->foreign('to_id')->references('id')->on('users');
            $table->timestamp('time_sent');
            $table->timestamp('time_read')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
