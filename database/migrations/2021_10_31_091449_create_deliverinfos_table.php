<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliverinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliverinfos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('o_id');
            $table->foreign('o_id')->references('id')->on('myorders');
            $table->string('Order_id',50);
            $table->string('P_price',50);
            $table->string('d_username',50);
            $table->string('date&time',50);
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
        Schema::dropIfExists('deliverinfos');
    }
}
