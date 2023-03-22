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
        Schema::create('parliament_seats', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('parilament_name');
            $table->string('total_voters');

            $table->string('slug')->nullable();
            $table->boolean('is_active')->default(true);

            $table->unsignedBigInteger('added_by_user_id')->nullable();

            $table->timestamps();

            $table->foreign('added_by_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parliament_seats');
    }
};
