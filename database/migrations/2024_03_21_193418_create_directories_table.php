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
        Schema::create('directories', function (Blueprint $table) {
            $table->id();
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->unsignedBigInteger('categorie_id')->nullable();
            $table->string('image');
            $table->string('name');
            $table->string('model');
            $table->string('fabricacion');
            $table->string('capacidad');
            $table->string('componentes');
            $table->text('objetivo');
            $table->integer('order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directories');
    }
};
