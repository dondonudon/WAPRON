<?php

use Illuminate\Database\Seeder;

class UserProfileSeeder extends Seeder
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
                'user_id' => 1,
                'role_id' => 1,
                'max_store' => 1,
                'max_worker' => 5,
                'max_device' => 5,
            ]
        ];
        foreach ($data as $d) {
            $profile = new \App\userProfile();
            $profile->user_id = $d['user_id'];
            $profile->role_id = $d['role_id'];
            $profile->max_store = $d['max_store'];
            $profile->max_worker = $d['max_worker'];
            $profile->max_device = $d['max_device'];
            $profile->save();
        }
    }
}
