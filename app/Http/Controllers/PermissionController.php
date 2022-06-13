<?php

namespace App\Http\Controllers;

use App\Services\PermissionService;

class PermissionController extends BaseController
{

    /**
     * @param PermissionService $permissionService
     */
    public function __construct(PermissionService $permissionService)
    {
        $this->baseService = $permissionService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getPermissions()
    {
        $permissions = $this->baseService->getPermissions();
        return view('permissions.index', compact('permissions'));
    }
}
