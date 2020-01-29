<?php

use Illuminate\Database\Seeder;

class SysMenuSeeder extends Seeder
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
                'group_id' => 1,
                'name' => 'Sinkronisasi Data dari Device ke Cloud',
                'sys' => 0,
                'icon' => '-',
                'ord' => 1
            ],
            [
                'id' => 2,
                'group_id' => 1,
                'name' => 'Sinkronisasi Data dari Cloud ke Device',
                'sys' => 0,
                'icon' => '-',
                'ord' => 2
            ],
            [
                'id' => 3,
                'group_id' => 2,
                'name' => 'Unit Bisniss',
                'sys' => 0,
                'icon' => '-',
                'ord' => 1
            ],
            [
                'id' => 4,
                'group_id' => 2,
                'name' => 'Master Data',
                'sys' => 0,
                'icon' => '-',
                'ord' => 2
            ],
            [
                'id' => 5,
                'group_id' => 2,
                'name' => 'Stock Management',
                'sys' => 0,
                'icon' => '-',
                'ord' => 3
            ],
            [
                'id' => 6,
                'group_id' => 2,
                'name' => 'User Management',
                'sys' => 0,
                'icon' => '-',
                'ord' => 4
            ],
            [
                'id' => 7,
                'group_id' => 3,
                'name' => 'New Transaction',
                'sys' => 0,
                'icon' => '-',
                'ord' => 1
            ],
            [
                'id' => 8,
                'group_id' => 3,
                'name' => 'Order List',
                'sys' => 0,
                'icon' => '-',
                'ord' => 2
            ],
            [
                'id' => 9,
                'group_id' => 3,
                'name' => 'Laporan Penjualan',
                'sys' => 0,
                'icon' => '-',
                'ord' => 3
            ],
            [
                'id' => 10,
                'group_id' => 4,
                'name' => 'Toko Saya',
                'sys' => 0,
                'icon' => '-',
                'ord' => 1
            ],
            [
                'id' => 11,
                'group_id' => 4,
                'name' => 'Settings',
                'sys' => 0,
                'icon' => '-',
                'ord' => 1
            ],
        ];
        foreach ($data as $d) {
            $group = new \App\sysMenu();
            $group->group_id = $d['group_id'];
            $group->name = $d['name'];
            $group->sys = $d['sys'];
            $group->route_id = 0;
            $group->icon = $d['icon'];
            $group->ord = $d['ord'];
            $group->save();
        }
    }
}
