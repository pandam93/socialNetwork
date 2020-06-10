<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->unsignedInteger('tutor_id')->nullable();
            $table->foreign('tutor_id')->references('id')->on('users');
        });

        Schema::table('signatures', function (Blueprint $table) {
            $table->unsignedInteger('course_id')->nullable();
            $table->foreign('course_id')->references('id')->on('courses');
        });

        Schema::table('tasks', function (Blueprint $table) {
            $table->unsignedInteger('signature_id')->nullable();
            $table->foreign('signature_id')->references('id')->on('signatures');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('course_id')->nullable();
            $table->foreign('course_id')->references('id')->on('courses');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign(['tutor_id']);
            $table->dropColumn('tutor_id');

        });

        Schema::table('signatures', function (Blueprint $table) {
            $table->dropForeign(['course_id']);
            $table->dropColumn('course_id');

        });

        Schema::table('tasks', function (Blueprint $table) {
            $table->dropForeign(['signature_id']);
            $table->dropColumn('signature_id');

        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['course_id']);
            $table->dropColumn('course_id');

        });
    }
}
