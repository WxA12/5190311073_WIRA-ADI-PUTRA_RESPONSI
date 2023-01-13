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
        Schema::create('anakkost', function (Blueprint $table) {
            $table->bigIncrements('idanakkost');
            $table->enum('gender',['laki-laki','perempuan']);
            $table->string('pekerjaan',50);
            $table->string('no_telp',15);
            $table->string('alamat',100);
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
        Schema::dropIfExists('anakkost');
    }
};
