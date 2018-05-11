<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // 设置角色与权限的多对多关系
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    } 

    // 赋予角色权限
    public function givePermission(Permission $permission)
    {
        return $this->permissions()->save($permission);
    }

    // 获取所有权限
    public function getPermissions()
    {
        return Permission::all();
    }
}
