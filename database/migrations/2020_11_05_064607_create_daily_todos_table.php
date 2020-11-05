<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_todos', function (Blueprint $table) {
            $table->id();

            $table->dateTime('date');
            $table->string('title');
            $table->string('slug');
            $table->boolean('is_completed')->default(false);
            $table->integer('duration')->default(0);

            $table->text('remarks')->nullable();
            $table->integer('order')->default(1);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daily_todos');
    }
}
