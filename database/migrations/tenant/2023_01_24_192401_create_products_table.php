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
            $table->integer('codigo')->unique();
            $table->string('name');
            $table->bigInteger('sale_price_igv')->nullable();
            $table->bigInteger('purchase_price_noigv')->nullable();
            $table->string('sku');
            $table->string('unitary_presentation');
            $table->integer('factor');
            $table->string('line');
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('quantity');
            $table->unsignedInteger('type_product');            
            $table->timestamps();
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




