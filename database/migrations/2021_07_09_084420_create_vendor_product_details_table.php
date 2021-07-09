<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_product_details', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('vendor_id');
            $table->string('date');
            $table->string('order_no');
            $table->string('branch');
            $table->string('gender');
            $table->string('men');
            $table->string('women');
            $table->string('model_number');
            $table->string('size');
            $table->string('color');
            $table->string('quantity');
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
        Schema::dropIfExists('vendor_product_details');
    }
}
