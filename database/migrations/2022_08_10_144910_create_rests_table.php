<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rests', function (Blueprint $table) {
            $table->id();
            $table->foreign('attendance_id')->references('id')->on('attendances');
            $table->unique(['attendance_id']);
            $table->time('rest_start')->useCurrent()->nullable();
            $table->time('rest_end');
            $table->timestamp('rest_created_at')->useCurrent()->nullable();
            $table->timestamp('rest_updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rests');
    }
}
