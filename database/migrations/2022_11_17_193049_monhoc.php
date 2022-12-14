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
        //
        if(! Schema::hasTable('monhoc')){
            Schema::create('monhoc', function(Blueprint $table){
                $table->increments('id');
                $table->string('tenmonhoc');
                $table->integer('sotinchi');
                $table->string('thaotac');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('monhoc');
    }
};
