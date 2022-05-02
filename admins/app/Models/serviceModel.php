<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class serviceModel extends Model
{
    use HasFactory;
//     public $table='services';
// public $primaryKey='id';
// public $incrementing=true;
// public $keyType='int';
// public  $timestamps=false;

    protected $table='services';
     public  $timestamps=false;
        protected $primaryKey='id';
        protected $fillable =['service_name','service_des','service_img'];
}
