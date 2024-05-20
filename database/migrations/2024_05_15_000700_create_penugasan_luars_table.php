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
        Schema::create('penugasan_luars', function (Blueprint $table) {
            $table->id();
            $table->string('penugasan');
            $table->string('lokasi');
            $table->bigInteger('personels_id')->unsigned();

            $table->foreign('personels_id')->references('id')->on('personels')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penugasan_luars');
    }
};
