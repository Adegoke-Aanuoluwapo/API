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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('guardian');
            $table->string('phone');
            $table->string('address');
            $table->string('mobile');
            $table->string('school');
            $table->string('department');
            $table->string('subtaken');
            $table->string('diffsub');
            $table->string('intresub');
            $table->string('intended_school');
            $table->string('jamb_comb');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};