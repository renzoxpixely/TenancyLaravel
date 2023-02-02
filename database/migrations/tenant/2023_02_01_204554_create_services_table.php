<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('service_name');
            $table->decimal('cost',12,2)->nullable();
            $table->enum('debit_credit',['DEBIT','CREDIT'])->default('DEBIT');   
            $table->string('Ledger_account');
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
        Schema::dropIfExists('services');
    }
}
