<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ykuser extends Model
{
      //主键id
      public $primaryKey='user_id';

      //绑定表名
      protected $table='ykuser';
}
