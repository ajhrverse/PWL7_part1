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
        Schema::create('loans', function (Blueprint $table) {
            $table->integer('id', 20)->primary();
            $table->string('user_npm');
            $table->foreign('user_npm')->references('npm')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->date('loan_at');
            $table->date('return_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
