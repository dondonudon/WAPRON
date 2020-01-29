<?php

use Illuminate\Database\Seeder;

class SysMenuGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Singkronisasi',
                'sys' => 0,
                'icon' => '-',
                'ord' => 1
            ],
            [
                'id' => 2,
                'name' => 'Master',
                'sys' => 0,
                'icon' => '-',
                'ord' => 2
            ],
            [
                'id' => 3,
                'name' => 'Transaction',
                'sys' => 0,
                'icon' => '-',
                'ord' => 3
            ],
            [
                'id' => 4,
                'name' => 'Lainnya',
                'sys' => 0,
                'icon' => '-',
                'ord' => 4
            ],
        ];
        foreach ($data as $d) {
            $group = new \App\sysMenuGroup();
            $group->id = $d['id'];
            $group->name = $d['name'];
            $group->sys = $d['sys'];
            $group->icon = $d['icon'];
            $group->ord = $d['ord'];
            $group->save();
        }
    }
}
