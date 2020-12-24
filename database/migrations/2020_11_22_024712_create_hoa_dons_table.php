<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoaDonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->decimal('TongTien',18,3);
            $table->dateTime('ThoiGianLap');
            $table->unsignedBigInteger('MaBan');
            $table->unsignedBigInteger('MaNV');
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
        Schema::dropIfExists('hoa_dons');
    }
}
