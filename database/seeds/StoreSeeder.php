<?php

use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
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
                'store' => [
                    'owner' => 1,
                    'name' => 'WAPRON',
                    'logo' => '-',
                    'code' => \App\Http\Controllers\GenerateRandomController::code('WAPRON')
                ],
                'worker' => [
                    ['role_id' => 1, 'username' => 'owner', 'name' => 'OWNER', 'password' => \Illuminate\Support\Facades\Crypt::encryptString('dev')],
                ],
                'unit' => [
                    ['id' => 1, 'name' => 'android'],
                    ['id' => 2, 'name' => 'website'],
                ],
                'products' => [
                    ['unit_bisnis_id' => 1, 'name' => 'wapron']
                ]
            ],
        ];
        foreach ($data as $d) {
            $store = new \App\store();
            $store->owner = $d['store']['owner'];
            $store->name = $d['store']['name'];
            $store->logo = $d['store']['logo'];
            $store->code = $d['store']['code'];
            $store->save();

            foreach ($d['worker'] as $w) {
                $worker = new \App\storeWorker();
                $worker->role_id = $w['role_id'];
                $worker->store_id = $store->id;
                $worker->username = $w['username'];
                $worker->name = $w['name'];
                $worker->password = $w['password'];
                $worker->save();
            }

            foreach ($d['unit'] as $u) {
                $unit = new \App\storeUnitBisnis();
                $unit->id = $u['id'];
                $unit->store_id = $store->id;
                $unit->name = $u['name'];
                $unit->info = '-';
                $unit->save();
            }

            foreach ($d['products'] as $p) {
                $prod = new \App\storeProducts();
                $prod->store_id = $store->id;
                $prod->unit_bisnis_id = $p['unit_bisnis_id'];
                $prod->name = $p['name'];
                $prod->save();
            }
        }
    }
}
