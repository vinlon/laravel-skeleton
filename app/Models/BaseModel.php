<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
    use SerializeDateTrait;

    // 除 id, created_at, updated_at 外的其它字段都是 fillable
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
