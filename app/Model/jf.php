<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class jf extends Model
{
     //主键id
     public $primaryKey='f_id';

     //绑定表名
     protected $table='jf';
        //关闭时间戳
    public $timestamps=false;

    //黑名单
    protected $guarded=[];
}
