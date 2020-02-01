<?php

namespace App\Http\Controllers;

use App\Mail\RegisterEmail;
use App\store;
use App\storeWorker;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function index() {
        return 'register';
    }

    public function add(Request $request) {
        $result = [
            'status' => '-',
            'message' => '-'
        ];
        $email = $request->email;
        $password = Crypt::encryptString($request->password);
        $name = $request->nama;
        $toko = $request->toko;
        try {
            DB::beginTransaction();

            if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
                $dtUser = DB::table('users')->where('email','=',$email);
                $dtToko = DB::table('stores')->where('name','=',$toko);
                if ($dtUser->doesntExist()) {
                    if ($dtToko->doesntExist()) {
                        $user = new User();
                        $user->email = $email;
                        $user->password = $password;
                        $user->name = $name;
                        $user->save();

                        $store = new store();
                        $store->owner = $user->id;
                        $store->name = $toko;
                        $store->logo = '-';
                        $store->code = GenerateRandomController::code($toko);
                        $store->save();

                        $worker = new storeWorker();
                        $worker->role_id = 1;
                        $worker->store_id = $store->id;
                        $worker->username = $store->code.'-owner';
                        $worker->name = $user->name;
                        $worker->password = $password;
                        $worker->save();

                        $dataEmail = [
                            'id' => $user->id,
                            'name' => $user->name,
                        ];
                        Mail::to($email)->send(new RegisterEmail($dataEmail));

                        $result['status'] = 'success';
                    } else {
                        $result['status'] = 'failed';
                        $result['message'] = 'toko terdaftar';
                    }
                } else {
                    $result['status'] = 'failed';
                    $result['message'] = 'email terdaftar';
                }
            } else {
                $result['status'] = 'failed';
                $result['message'] = 'email tidak valid';
            }

            DB::commit();
            return $result;
        } catch (\Exception $ex) {
            DB::rollBack();
            return dd($ex);
        }
    }

    public function mail() {
        try {
            Mail::to("laurentiuskevin44@gmail.com")->send(new RegisterEmail());

            return 'email terkirim';
        } catch (\Exception $ex) {
            return dd($ex);
        }
    }

    public function verifyIndex($id) {
        return view('verification')->with([
            'id' => $id
        ]);
    }

    public function verify(Request $request) {
        $id = $request->id;
        try {
            $user = DB::table('users')
                ->where('id','=',$id)
                ->update([
                    'email_verified_at' => date('Y-m-d H:i:s')
                ]);
        } catch (\Exception $ex) {
            return response()->json([$ex]);
        }
    }
}
