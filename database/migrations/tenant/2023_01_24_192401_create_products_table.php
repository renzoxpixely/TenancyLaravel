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
            $table->string('codigo');
            $table->text('name', 255)->nullable();
            $table->float('sale_price_igv', 8, 2);
            $table->float('purchase_price_noigv', 8, 2);
            $table->text('sku', 255)->nullable();
            $table->string('unitary_presentation');
            $table->integer('factor');
            $table->string('line');
            $table->text('brand_id', 255)->nullable();
            $table->unsignedInteger('quantity');
            $table->unsignedInteger('type_product');            
            $table->timestamps();

            $table->foreignId('branch_id')->nullable()->constrained('branches')->onDelete('cascade');
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




