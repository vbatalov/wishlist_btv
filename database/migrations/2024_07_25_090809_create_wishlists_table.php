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
        Schema::create('wishlists', function (Blueprint $table) {
            $table->id();
            $table->string("image")->default("https://media.istockphoto.com/id/1396814518/ru/векторная/изображение-скоро-появится-нет-фотографии-нет-миниатюры-изображения-векторная-иллюстрация.jpg?s=1024x1024&w=is&k=20&c=JtLw6-VQd2n9yLt8FMYgJxESm6xZlIyuEzfzHJo9rd8=");
            $table->string("name")->nullable();
            $table->string("link")->nullable();
            $table->date("expires_at")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wishlists');
    }
};
