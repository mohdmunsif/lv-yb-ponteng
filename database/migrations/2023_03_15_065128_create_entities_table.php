<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entities', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('first_name');
            $table->string('last_name');

            $table->integer('dob');
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
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entities');
    }
};

