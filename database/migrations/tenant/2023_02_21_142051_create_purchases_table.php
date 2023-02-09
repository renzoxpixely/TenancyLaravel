<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();

            // $table->unsignedBigInteger('provider_id');
            // $table->foreign('provider_id')->references('id')->on('providers');
            $table->foreignId('provider_id')->nullable()->constrained('providers')->onDelete('cascade');


            // $table->unsignedBigInteger('user_id')->nullable();;
            // $table->foreign('user_id')->references('id')->on('users');
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');

            $table->dateTime('purchase_date');

            $table->decimal('tax');
            $table->decimal('total');

            $table->enum('status',['VALID','CANCELED'])->default('VALID');

            $table->string('picture')->nullable();

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
        Schema::dropIfExists('purchases');
    }
}
