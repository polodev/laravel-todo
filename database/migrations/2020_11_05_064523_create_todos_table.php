<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug');
            $table->boolean('is_completed')->default(false);
            $table->boolean('is_active')->default(true);
            $table->string('when')->nullable(); // 10 am - 10.45 minutes


            $table->text('remarks')->nullable();
            $table->integer('order')->default(1);
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('todos');
    }
}
