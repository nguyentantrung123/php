<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanViensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('nhan_viens', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('TenNV',50);
            $table->date('NgaySinh');
            $table->string('GioiTinh',3);
            $table->string('TaiKhoan',250);
            $table->string('MatKhau',250);
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
        Schema::dropIfExists('nhan_viens');
    }
}
