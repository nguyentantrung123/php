<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonAnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('mon_ans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('TenMon',100);
            $table->decimal('Gia',18,3);
            $table->string('MoTa',100);
            $table->string('HinhAnh',50);
            $table->unsignedBigInteger('Loai');
            $table->integer('TrangThai');
            $table->timestamps();
            $table->softDeletes();
        });

       
       
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mon_ans');
    }
}
