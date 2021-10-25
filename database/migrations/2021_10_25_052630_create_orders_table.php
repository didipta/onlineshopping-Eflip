<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('O_id',40);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('systemusers');
            $table->unsignedBigInteger('Product_id');
            $table->foreign('Product_id')->references('id')->on('products');
            $table->string('P_size',40);
            $table->string('P_totalPrice',40);
            $table->string('P_quantatity',40);
            $table->string('Paymenttype',40);
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
        Schema::dropIfExists('orders');
    }
}
