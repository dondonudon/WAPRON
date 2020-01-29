<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'id' => 1,
                'email' => 'dev@wapron.id',
                'name' => 'Developer',
                'password' => \Illuminate\Support\Facades\Crypt::encryptString('dev'),
                'email_verified_at' => date('Y-m-d')
            ]
        ];
        foreach ($user as $u) {
            $dtUser = new \App\User();
            $dtUser->email = $u['email'];
            $dtUser->name = $u['name'];
            $dtUser->password = $u['password'];
            $dtUser->email_verified_at = $u['email_verified_at'];
            $dtUser->save();
        }
    }
}
