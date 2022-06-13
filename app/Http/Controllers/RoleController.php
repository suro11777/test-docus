<?php

namespace App\Http\Controllers;

use App\Services\RoleService;

class RoleController extends BaseController
{
    /**
     * @param RoleService $roleService
     */
    public function __construct(RoleService $roleService)
    {
        $this->baseService = $roleService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getRoles()
    {
        $roles = $this->baseService->getRoles();
        return view('roles.index', compact('roles'));
    }
}
