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
        Schema::create('kost', function (Blueprint $table) {
            $table->bigIncrements('idkost');
            $table->string('name_kost',30);
            $table->bigInteger('nokamar_kost');
            $table->string('alamat',100);
            $table->timestamps();
        });
        //pemberian Foreign key
        Schema::table('kost', function (Blueprint $table) {
            $table->unsignedBigInteger('id_ibukost');
            $table->unsignedBigInteger('id_anakkost');
         
            $table->foreign('id_ibukost')->references('idibukost')->on('ibukost');
            $table->foreign('id_anakkost')->references('idanakkost')->on('anakkost');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kost');
    }
};
