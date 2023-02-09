<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_details', function (Blueprint $table) {
            $table->id();

            // $table->unsignedBigInteger('purchase_id');
            // $table->foreign('purchase_id')->references('id')->on('purchases');
            $table->foreignId('purchase_id')->nullable()->constrained('purchases')->onDelete('cascade');


            // $table->unsignedBigInteger('product_id');
            // $table->foreign('product_id')->references('id')->on('products');
            $table->foreignId('product_id')->nullable()->constrained('products')->onDelete('cascade');


            $table->integer('quantity');
            $table->decimal('price');

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
        Schema::dropIfExists('purchase_details');
    }
}
