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
        Schema::create('entity_truancies', function (Blueprint $table) {
            $table->id();
            $table->date('session_date');
            $table->unsignedBigInteger('entity_id');

            $table->timestamps();

            $table->foreign('entity_id')->references('id')->on('entities')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entity_truancies');
    }
};
