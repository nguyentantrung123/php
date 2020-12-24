<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class admin_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            ["email"=>"toan@gmail.com","password"=>bcrypt('123456789'),"TrangThai"=>1],
            ["email"=>"thuan@gmail.com","password"=>bcrypt('123456790'),"TrangThai"=>1],
        ]);


    }
}
