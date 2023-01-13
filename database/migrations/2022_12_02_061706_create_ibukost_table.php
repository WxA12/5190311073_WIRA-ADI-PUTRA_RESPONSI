<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibukost', function (Blueprint $table) {
            $table->bigIncrements('idibukost');
            $table->string('name',50)->require();
            $table->string('alamat',100)->require();
            $table->string('no_telp',50)->require();
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
        Schema::dropIfExists('ibukost');
    }
};
