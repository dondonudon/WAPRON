<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenerateRandomController extends Controller
{
    public static function code($namaToko) {
        $namaToko = strtoupper($namaToko);
        try {
            $code = null;
            if (strlen($namaToko) > 5) {
                $newName = substr($namaToko, 0, 5);
                $code = $newName;
            } else {
                $code = $namaToko;
            }

            $stat = false;
            $storeCode = DB::table('stores')->select('code');
            $length = 5;
            while ($stat == false) {
                $result = clone $storeCode->where('code','=',$code);
                if ($result->doesntExist()) {
                    $stat = true;
                } else {
                    $code = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'),1,$length);
                }
            }
            return $code;
        } catch (\Exception $ex) {
            dd($ex);
        }
    }
}
