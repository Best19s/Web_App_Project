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
        Schema::create('Department', function (Blueprint $table) {
            $table->id();
            // $table->integer('Faculties_id')->unsigned();
            $table->bigInteger('Faculties_id')->unsigned();
            $table->string('Department_name',200);
            $table->timestamps();
            $table->softDeletes();

            // foreign key
            $table->foreign('Faculties_id')->references('id')->on('faculties');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Department');
    }
};
