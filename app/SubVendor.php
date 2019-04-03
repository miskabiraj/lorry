<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubVendor extends Model
{
    public  function Vendor(){
        return $this->hasOne(Vendor::class,'id','vendor_name');

    }
}
