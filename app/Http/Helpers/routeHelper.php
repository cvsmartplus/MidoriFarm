<?php

function routeByRole($adminRoute = null, $ownerRoute = null, $petaniRoute = null, $akuntanRoute = null, $param = null)
{
    $role = strtolower(auth()->user()->role ?? null);

    $routes = [
        'admin'   => $adminRoute,
        'owner'   => $ownerRoute,
        'petani'  => $petaniRoute,
        'akuntan' => $akuntanRoute,
    ];

    $routeName = $routes[$role] ?? null;

    if (!$routeName) {
        return route('login');
    }

    return $param ? route($routeName, $param) : route($routeName);
}


?>
