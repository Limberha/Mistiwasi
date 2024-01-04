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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50)->unique();
            $table->string('img', 100);
            $table->integer('gramos');
            $table->string('palitos_crochet', 10);
            $table->decimal('precio', $precision = 4, $scale = 2);            
            $table->unsignedBigInteger('tipo_fibra_id');
            $table->integer('stock');
            $table->unsignedBigInteger('coleccion_id');            
            $table->string('grosor',20); 
            $table->timestamps();
            $table->foreign('tipo_fibra_id')->references('id')->on('tipofibra');
            $table->foreign('coleccion_id')->references('id')->on('coleccion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
