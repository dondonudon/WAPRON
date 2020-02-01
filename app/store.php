<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    public function UnitBisnis()
    {
        return $this->hasMany('App\storeUnitBisnis');
    }
}
