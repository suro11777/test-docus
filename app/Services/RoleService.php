<?php

namespace App\Services;

use Spatie\Permission\Models\Role;

class RoleService extends BaseService
{

    /**
     * @return mixed
     */
    public function getRoles()
    {
        return Role::with('permissions')->paginate(15, ['id', 'name']);
    }
}
