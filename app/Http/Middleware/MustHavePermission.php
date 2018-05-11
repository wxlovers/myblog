<?php

namespace App\Http\Middleware;

use Closure;
use Gate;

class MustHavePermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {        
        if($request->user() && $this->getControllerAndAction())
        {
            return $next($request);
        }
        //dd('你没有该权限');
        return redirect('/');
    }

    // 获取当前路由信息
    public function getControllerAndAction()
    {
        // 当前控制器方法
        $route_action = \Route::currentRouteAction();
        $controller_action = substr($route_action, strrpos($route_action,'\\') + 1);
        $now_action = strtolower(str_replace('Controller@', '-', $controller_action));
        //dd($now_action);
        // 判断该用户是否有访问该控制器的权限
        if (Gate::forUser(\Auth::User())->allows($now_action)) {
            return true;
        }
        return false;
    }
}
