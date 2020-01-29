<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AndroidRoleController extends Controller
{
    public function index() {
        return 'role';
    }

    public static function getMenu($roleID) {
        $androidSystem = 0;
        $result = [];
        try {
            $group = DB::table('sys_role_menus')->distinct()
                ->select(
                    'sys_menu_groups.id',
                    'sys_menu_groups.name',
                    'sys_menu_groups.icon',
                    'sys_menu_groups.ord',
                    'sys_menu_groups.created_at'
                )
                ->leftJoin('sys_menus','sys_role_menus.menu_id','=','sys_menus.id')
                ->leftJoin('sys_menu_groups','sys_menus.group_id','=','sys_menu_groups.id')
                ->where([
                    ['role_id','=',$roleID],
                    ['sys_menu_groups.sys','=',$androidSystem]
                ])
                ->orderBy('sys_menu_groups.ord','asc')
                ->get();
            foreach ($group as $g) {
                $result[] = [
                    'group' => $g,
                    'menu' => DB::table('sys_menus')
                        ->select('id','name','icon','ord','created_at')
                        ->where([
                            ['group_id','=',$g->id],
                            ['sys','=',$androidSystem],
                        ])
                        ->orderBy('ord','asc')
                        ->get()
                ];
            }
            return $result;
        } catch (\Exception $ex) {
            dd($ex);
        }
    }
}
