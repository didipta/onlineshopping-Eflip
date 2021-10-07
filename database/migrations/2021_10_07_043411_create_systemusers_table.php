<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('systemusers', function (Blueprint $table) {
            $table->id();
            $table->string('U_Name',40);
            $table->string('U_phone',11)->unique();
            $table->string('U_address',200);
            $table->string('U_username',10)->unique();
            $table->string('U_email',50)->unique();
            $table->string('U_password',20);
            $table->string('Usertype',30);
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
        Schema::dropIfExists('systemusers');
    }
}
