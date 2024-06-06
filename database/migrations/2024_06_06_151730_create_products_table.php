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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // nombre del producto
            $table->string('name');
            // descripcion del product
            $table->text('description');
            // imagen del producto
            $table->string('image')->nullable();
            // precio del producto
            $table->decimal('price', 10, 2, true);
            // updated_at y created_at
            $table->timestamps();

            // añadimos relacion con la tabla categories
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
