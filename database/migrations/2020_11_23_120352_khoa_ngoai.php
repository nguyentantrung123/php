<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KhoaNgoai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // mon an
        Schema::table('mon_ans', function (Blueprint $table) {
        
            $table->foreign('Loai')->references('id')->on('loai_mons');
        });
        
        //ds
        Schema::table('ds_goimons', function (Blueprint $table) {
            
        
            $table->foreign('MaBan')->references('id')->on('bans');
        });

        Schema::table('ds_goimons', function (Blueprint $table) {
            
        
            $table->foreign('MaMon')->references('id')->on('mon_ans');
        });

        //hoa don
        Schema::table('hoa_dons', function (Blueprint $table) {
           
        
            $table->foreign('MaBan')->references('id')->on('bans');
        });

        Schema::table('hoa_dons', function (Blueprint $table) {
          
        
            $table->foreign('MaNV')->references('id')->on('nhan_viens');
        });


        // chi tiet hoa don
        Schema::table('chitiet_hoadons', function (Blueprint $table) {
           
        
            $table->foreign('MaBan')->references('id')->on('bans');
        });

        Schema::table('chitiet_hoadons', function (Blueprint $table) {
        
            $table->foreign('MaMon')->references('id')->on('mon_ans');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
