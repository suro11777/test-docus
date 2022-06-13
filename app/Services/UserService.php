<?php

namespace App\Services;

use App\Models\User;

class UserService extends BaseService
{
    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getUsers($search)
    {
        return User::when(isset($search), function ($q) use ($search){
            $q->whereRaw('lower(name) like (?)', ['%' . mb_strtolower($search) . '%']);
        })->with('roles')->paginate(15, ['id', 'name', 'email']);
    }
}
