<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietHoadonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('chitiet_hoadons', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('SoLuong');
            $table->decimal('Gia',18,3);
            $table->unsignedBigInteger('MaBan');
            $table->unsignedBigInteger('MaMon');
            $table->decimal('DonGia',18,3);
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
        Schema::dropIfExists('chitiet_hoadons');
    }
}
