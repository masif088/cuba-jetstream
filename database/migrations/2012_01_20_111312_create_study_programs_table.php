<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudYProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_programs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('colleges_id');
            $table->timestamps();

            $table->foreign('colleges_id')
                ->references('id')
                ->on('colleges')
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
        Schema::dropIfExists('program_studies');
    }
}
