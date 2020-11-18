<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailySessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_sessions', function (Blueprint $table) {
            $table->id();

            $table->dateTime('date');
            $table->string('when')->nullable(); // 10 am - 10.45 minutes
            $table->integer('duration'); // in minutes;
            $table->string('topic');

            $table->unsignedBigInteger('user_id');
            $table->text('remarks')->nullable();
            $table->integer('order')->default(1);
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
        Schema::dropIfExists('daily_sessions');
    }
}
