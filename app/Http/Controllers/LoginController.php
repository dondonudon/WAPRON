<?php

namespace App\Http\Controllers;

use App\store;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index() {
        return 'login';
    }

    public function emailLogin($email,$password) {
        $result = [];
        try {
            $user = DB::table('users')->where('email','=',$email);
            if ($user->exists()) {
                $dtUser = $user->first();
                if ($password == Crypt::decryptString($dtUser->password)) {
                    $result['status'] = 'success';
                    $result['user'] = DB::table('users')
                        ->select('users.id','users.email','users.name','users.created_at','user_profiles.role_id','user_profiles.max_store','user_profiles.max_worker','user_profiles.max_device')
                        ->leftJoin('user_profiles','users.id','=','user_profiles.user_id')
                        ->where('email','=',$email)
                        ->first();
                } else {
                    $result['status'] = 'failed';
                    $result['message'] = 'Password Salah!';
                }
            } else {
                $result['status'] = 'failed';
                $result['message'] = 'Email tidak terdaftar!';
            }
            return $result;
        } catch (\Exception $ex) {
            return response()->json([$ex]);
        }
    }

    public function usernameLogin($username,$password) {
        $result = [];
        try {
            $user = DB::table('store_workers')->where('username','=',$username);
            if ($user->exists()) {
                $dtUser = $user->first();
                if ($password == Crypt::decryptString($dtUser->password)) {
                    $result['status'] = 'success';
                } else {
                    $result['status'] = 'failed';
                    $result['message'] = 'Password Salah!';
                }
            } else {
                $result['status'] = 'failed';
                $result['message'] = 'Username tidak terdaftar!';
            }
            return $result;
        } catch (\Exception $ex) {
            return response()->json([$ex]);
        }
    }

    public function check(Request $request) {
        $email = $request->email;
        $password = $request->password;
        $result = [];

        if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $result = $this->emailLogin($email,$password);
        } else {
            $result = $this->usernameLogin($email,$password);
        }

        if ($result['status'] == 'success') {
            $result['nav_drawer'] = AndroidRoleController::getMenu($result['user']->role_id);
            $result['store'] = DB::table('stores')->where('owner','=',$result['user']->id)->get();
        }

        return $result;
    }
}
