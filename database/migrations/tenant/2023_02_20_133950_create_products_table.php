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
            $table->string('code')->unique();

            $table->string('name')->unique();
            $table->string('slug')->unique()->nullable();

            $table->integer('stock')->default(0);
            $table->decimal('sell_price',12,2);

            $table->mediumText('short_description')->nullable();
            $table->longText('long_description')->nullable();

            $table->enum('status',['DRAFT','SHOP','POS','BOTH','DISABLED'])->default('DRAFT'); 

            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            

            $table->integer('views')->nullable();

            $table->softDeletes();

            // $table->unsignedBigInteger('subcategory_id');
            // $table->foreign('subcategory_id')->references('id')->on('subcategories');
            $table->unsignedBigInteger('provider_id')->nullable();
            $table->foreign('provider_id')->references('id')->on('providers');


            $table->foreignId('branch_id')->nullable()->constrained('branches')->onDelete('cascade');

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
