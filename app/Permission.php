<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    // 添加权限与角色的多对多关系
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
