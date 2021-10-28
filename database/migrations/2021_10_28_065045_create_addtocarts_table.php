<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddtocartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addtocarts', function (Blueprint $table) {
            $table->id();
            $table->string('P_name',101);
            $table->string('P_price',20);
            $table->string('P_categories',30);
            $table->string('P_quantity',50);
            $table->string('P_tprice',50);
            $table->string('P_size',50);
            $table->string('U_username',50);
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
        Schema::dropIfExists('addtocarts');
    }
}
