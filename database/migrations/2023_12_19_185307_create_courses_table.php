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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('content');
            // $table->string('price')->nullable();
            // $table->string('location')->nullable();
            $table->string('agenda');
            // Duration By Weeks
            $table->string('duration');
            $table->string('thumbnail');

            $table->boolean('published')->default(true);
            // show course in home Screen??
            $table->boolean('home_screen')->default(false);

            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
