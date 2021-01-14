<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(admin_seeder::class);
        $this->call(ban_seeder::class);
        $this->call(loai_mon_seeder::class);
        $this->call(mon_an_seeder::class);
        $this->call(nhan_vien_seeder::class);
        
        
    }
}
