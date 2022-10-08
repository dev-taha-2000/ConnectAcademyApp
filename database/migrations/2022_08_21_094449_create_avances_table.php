<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{ 
    public function up()
    {
        Schema::create('avances', function (Blueprint $table) {
            $table->id('id');  
            $table->string('username');
            $table->string('avence');
            $table->date('date');   
            $table->id('id_utidient');     
            $table->timestamps();
        });  
    }

    public function down()
    {
        Schema::dropIfExists('avances');
    }
};
