<?php

use Illuminate\Database\Seeder;

class SysRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1,'name' => 'superuser'],
            ['id' => 2,'name' => 'admin'],
            ['id' => 3,'name' => 'kasir'],
        ];
        foreach ($data as $d) {
            $role = new \App\sysRole();
            $role->id = $d['id'];
            $role->name = $d['name'];
            $role->save();
        }
    }
}
