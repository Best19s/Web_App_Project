<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Event_Detail_Participant', function (Blueprint $table) {
            $table->increments('Status')->unsigned();
            $table->bigInteger('User_ID')->unsigned();
            $table->bigInteger('Event_ID')->unsigned();
            $table->text('Feedback');
            $table->integer('Review_score');
            $table->dateTime('Leave_Datetime');
            $table->timestamps();
            $table->softDeletes();

            // foreign
            $table->foreign('User_ID')->references('id')->on('users');
            $table->foreign('Event_ID')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Event_Detail_Participant');
    }
};
