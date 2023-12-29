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
        Schema::create('stack_overflow_questions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('link');
            $table->dateTime('creation_date');
            $table->boolean('is_answered');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stack_overflow_questions');
    }
};
