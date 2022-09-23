<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 128)->unique();
            $table->integer('price')->default('55');
            $table->integer('price_discount')->default('55');
            $table->boolean('is_on_discount')->default(false);
            $table->string('text', 2250)->nullable();
            $table->string('img_url', 500)->nullable();
            $table->string('kategorija', 20);
            $table->json('additional_fields')->nullable();
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
