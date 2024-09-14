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
        Schema::create('Events', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Status_Event_ID')->unsigned();
            $table->bigInteger('Organizer_ID')->unsigned();
            $table->string('Event_name',200);
            $table->text('Event_detail');
            $table->string('Event_location',200);
            $table->dateTime('Event_Start_Datetime');
            $table->dateTime('Event_End_Datetime');
            $table->dateTime('Event_Reg_Start_Datetime');
            $table->dateTime('Event_Reg_End_Datetime');
            $table->string('Event_image',200);
            $table->integer('Max_Participants');
            $table->timestamps();
            $table->softDeletes();

            // foreign
            $table->foreign('Status_Event_ID')->references('id')->on('status_event');
            $table->foreign('Organizer_ID')->references('id')->on('organizer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Events');
    }
};
