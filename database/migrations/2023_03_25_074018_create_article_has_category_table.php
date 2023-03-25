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
        Schema::create('article_has_category', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('article_category_id', false, true);
            $table->foreign('article_category_id')->references('id')->on('article_categories')->onDelete('cascade');
            $table->bigInteger('article_id', false, true);
            $table->foreign('id')->references('id')->on('articles')->onDelete('cascade');
            $table->unique(array('article_id', 'article_category_id'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_has_category');
    }
};
