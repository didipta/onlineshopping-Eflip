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
            $table->string('P_id',20);
            $table->string('P_name',101);
            $table->string('P_price',20);
            $table->string('P_categories',30);
            $table->string('P_quantity',50);
            $table->string('P_details',300);
            $table->string('P_img1',250);
            $table->string('P_img2',250);
            $table->string('P_img3',250);
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
