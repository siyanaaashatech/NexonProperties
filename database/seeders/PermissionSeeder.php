<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'create_users',
            'view_users',
            'update_users',
            'delete_users',
            'create_roles', 
            'view_roles',
            'update_roles',
            'delete_roles',
            'create_permissions',
            'view_permissions',
            'update_permissions',
            'delete_permissions',
            'view_history',
            'permanent_delete_users',
            'restore_users',
            'view_deleted_users',
            'can_register',
            'create_testimonials',
            'view_testimonials',
            'update_testimonials',
            'edit_testimonials',
            'delete_testimonials'
        ];
        
        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }
    }
}
