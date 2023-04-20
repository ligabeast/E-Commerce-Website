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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80);
            $table->integer('price');
            $table->string('description', 1000);
            $table->bigInteger('creator_id', false, true);
            $table->foreign('creator_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamp('created_at');
            $table->string('state',50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
