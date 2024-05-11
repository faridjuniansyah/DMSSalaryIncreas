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
        Schema::create('tanda_kehormatans', function (Blueprint $table) {
            $table->id();
            $table->string('tanda_kehormatan');
            $table->string('tmt');

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
        Schema::dropIfExists('tanda_kehormatans');
    }
};
