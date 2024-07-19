<?php

use App\Models\Category;
use App\Models\Configurations\Configuration;
use App\Models\Notification;
use App\Models\Otp;
use App\Models\Store;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Vinkla\Hashids\Facades\Hashids;

if (!function_exists('settings')) {
    /**
     * @param $field
     * @param string $default
     * @return mixed
     */
    function settings($field, $default = '')
    {
        $records = new Configuration;
        return !empty($records->getOptionValue($field)) ? $records->getOptionValue($field) : $default;
    }
}
if (!function_exists('currency')) {
    function currency($symbol=false)
    {
        return $symbol ? settings('currency_symbol') : settings('currency');
    }
}


if (!function_exists('check_otp')) {
    function check_otp($otp) {
        return Otp::where('user_id', auth()->user()->id)
                ->where('used', 0)
                ->where('expires_at', '>=', now())
                ->latest()
                ->first()
                ->otp == $otp ? true : false;
    }
}

if (!function_exists('default_pagination_number')) {
    function default_pagination_number() {
        return 10;
    }
}


if (!function_exists('contract_participants')) {
    function contract_participants() {
        return [
            // 'divisions',
            // 'departments',
            // 'branches',
            // 'groups',
            'roles',
            'users',
        ];
    }
}



if (!function_exists('user_has_role')) {
    /**
     * Check if the current user has the specified role(s).
     *
     * @param  array|string $roles Role or roles to check against.
     * @param  boolean $required All roles are required if true, any one if false.
     * @return boolean
     */
    function user_has_role($roles, $required = false)
    {
        if (!$roles) {
            return false;
        }

        $user = user(); // Assuming 'user()' fetches the authenticated user.

        if (!$user) {
            return false; // No authenticated user found.
        }

        if (is_string($roles)) {
            $roles = [$roles]; // Ensure $roles is always an array.
        }

        foreach ($roles as $role) {
            // Check if the role is in cache
            if (!Cache::has('role_exists_' . $role)) {
                // Role not in cache, check database and create if not exists
                if (!Role::where('name', $role)->first()) {
                    Role::create(['name' => $role, 'display_name' => ucfirst(str_replace('_', ' ', $role))]); // Assume 'name' is the field for role
                }
                // Cache the role existence
                Cache::forever('role_exists_' . $role, true);
            }
        }

        if ($required) {
            return $user->hasAllRoles($roles);
        }
        return $user->hasRole($roles);

    }
}

if (!function_exists('user_has_permission')) {
    /**
     * Generate a url for the application.
     * @param  string $guard
     * @return boolean
     */
    function user_has_permission($permissions, $required=false)
    {
        if(!$permissions) return false;

        $user = user(); // Assuming 'user()' fetches the authenticated user.

        if (!$user) {
            return false; // No authenticated user found.
        }

        if (is_string($permissions)) {
            $permissions = [$permissions]; // Ensure $roles is always an array.
        }
        foreach ($permissions as $permission) {
            // Check if the permission is in cache
            if (!Cache::has('permission_exists_' . $permission)) {
                // permission not in cache, check database and create if not exists
                if (!Permission::where('name', $permission)->exists()) {
                    Permission::create(['name' => $permission, 'display_name' => ucfirst(str_replace('_', ' ', $permission))]); // Assume 'name' is the field for permission
                }
                // Cache the Permission existence
                Cache::forever('permission_exists_' . $permission, true);
            }
        }
        
        if ($required) {
            return $user->hasAllPermissions($permissions);
        }
        return $user->hasAnyPermission($permissions);
    }
}

if (!function_exists('is_admin')) {
    function is_admin(){
        return user_has_role(['admin']);
    }
}

if (!function_exists('user_has_role_ids')) {
    function user_has_role_ids($role_ids){
        $roles = Role::whereIn('id', $role_ids)->pluck('name')->toArray();
        return user_has_role($roles);
    }
}

if (!function_exists('get_role_user_ids')) {
    function get_role_user_ids($role,$type='id'){
        if ($type=='id') {
            $role = Role::findById($role);
        }else{
            $role = Role::findByName($role);
        }
        $users = $role->users;
        if ($users->count()) {
            return $users->pluck('id')->toArray();
        }else{
            return [];
        }
     
    }
}


if (!function_exists('generate_sku')) {
     function generate_sku($productId,$count)
    {
        $prefix = 'VSC-'; // You can change this prefix as needed
        return $prefix .$count.str_pad($productId, 8, '0', STR_PAD_LEFT);
    }
}

if (!function_exists('get_stores')) {
     function get_stores($take=5)
    {
        return Store::take($take)->get();
    }
}

if (!function_exists('get_food_categories')) {
     function get_food_categories()
    {
        $categories = Category::all();
        $cats = [];
        foreach ($categories as $key => $value) {
            $cats[] =['label' => $value->name, 'value' => $value->id];
        }
        return $cats;
    }
}

