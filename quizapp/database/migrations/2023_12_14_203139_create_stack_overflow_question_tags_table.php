<?php

use App\Models\StackOverflowQuestion;
use App\Models\StackOverflowTag;
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
        Schema::create('stack_overflow_question_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(StackOverflowQuestion::class)->constrained();
            $table->foreignIdFor(StackOverflowTag::class)->constrained;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stack_overflow_question_tags');
    }
};
