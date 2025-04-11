<?php

function routeByRole($adminRoute, $ownerRoute, $param = null)
{
    $role = auth()->user()->role ?? null;
    if ($role === 'admin') return $param ? route($adminRoute, $param) : route($adminRoute);
    if ($role === 'owner') return $param ? route($ownerRoute, $param) : route($ownerRoute);
    return route('login');
}

?>
