<?php

namespace App\Providers;

//use Illuminate\Support\Facades\Gate;
use App\Permission;
use App\User;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(Gate $gate)
    {
        $this->registerPolicies($gate);
        foreach($this->getPermissions() as $permission){
            $gate->define($permission->name, function(User $user) use ($permission){
                return $user->hasRole($permission->roles);
            });
        }
    }

    // 获取所有权限
    public function getPermissions()
    {
        return Permission::with('roles')->get();
    }
}

