<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Facades\Cache;
use Spatie\Permission\Models\Permission;

class PermissionService extends BaseService
{

    /**
     * @return mixed
     */
    public function getPermissions()
    {
        $time = config('settings.cache_time', 1);
        $permissions = Cache::remember('permissions', $time, function () {
            return $this->_getPermissions();
        });
        return $permissions;
    }

    /**
     * @return array
     */
    public function _getPermissions()
    {
        return Permission::paginate(15, ['id', 'name']);
    }

}
