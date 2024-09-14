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
        Schema::create('Event_Detail', function (Blueprint $table) {
            $table->bigInteger('Event_Type_ID')->unsigned();
            $table->bigInteger('Event_ID')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            // foreign
            $table->foreign('Event_Type_ID')->references('id')->on('event_type');
            $table->foreign('Event_ID')->references('id')->on('events');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Event_Detail');
    }
};
