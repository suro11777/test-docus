<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    /**
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->baseService = $userService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getUsers(Request $request)
    {
        $users = $this->baseService->getUsers($request->get('search'));
        return view('users.index', compact('users'));
    }
}
