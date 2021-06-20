<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_answers', function (Blueprint $table) {
            $table->id();
            $table->string('answer');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('test_id');
            $table->unsignedBigInteger('question_id');

            $table->timestamps();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->foreign('test_id')
                ->references('id')
                ->on('tests')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->foreign('question_id')
                ->references('id')
                ->on('questions')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_answer');
    }
}
