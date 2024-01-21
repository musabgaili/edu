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
        Schema::create('course_applications', function (Blueprint $table) {
            $table->id();

            // $table->string('course_name');
            $table->unsignedBigInteger('course_id'); //associate the address with a user
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');

            $table->string('email');
            $table->string('phone');
            $table->string('name');

            $table->enum('type', ['student', 'parent', 'manager'])->default('manager');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_applications');
    }
};
