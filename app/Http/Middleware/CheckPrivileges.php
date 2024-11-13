<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class CheckPrivileges
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $user = session('user_details');
        // Check if user role is superadmin, bypass privileges check if true
        if ($user['user_role'] == 'superadmin') {
            return $next($request);  // Allow full access
        }

        // Access decoded privileges directly
        $privileges = json_decode($user['user_privileges'], true)['permissions'] ?? [];

        // Mapping URLs to privilege names
        $routeToPrivilege = [
            'dashboard' => 'Dashboard',
            'modules' => 'Modules',
            'operators' => 'Users',
            'subscription' => 'Subscription',
            'queries' => 'Queries',
            'markets' => 'Markets',
            'marketupdates' => 'Market Updates',
            'media' => 'Media',
            'categories' => 'Categories',
            'setting' => 'Setting',
            'notification' => 'Notification',
        ];

        // Get the requested route name
        $currentRoute = $request->path();
        
        // Check if the current route has a mapped privilege
        foreach ($routeToPrivilege as $route => $privilegeName) {
            if (Str::startsWith($currentRoute, $route)) {  // Check if URL starts with the route name
                $permission = $privileges[$privilegeName]['view'] ?? null;
                // dd($permission);

                // If 'view' permission is not granted, deny access
                if ($permission != 'on') {
                    return redirect()->back();
                }

                break;
            }
        }

        return $next($request);
    }
}
