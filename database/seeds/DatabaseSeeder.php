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
        $this->call(UserSeeder::class);
        $this->call(UserProfileSeeder::class);
        $this->call(SysMenuGroupSeeder::class);
        $this->call(SysMenuSeeder::class);
        $this->call(SysRoleSeeder::class);
        $this->call(SysRoleMenuSeeder::class);
        $this->call(StoreSeeder::class);
    }
}
