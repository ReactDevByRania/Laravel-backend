<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Facades\DB;





class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Associations for the "secret" role
        $secretAssociations = [
            ['role' => 'secrt', 'permission' => 'view-appointments'],
            ['role' => 'secrt', 'permission' => 'view-quotes'],
            ['role' => 'secrt', 'permission' => 'update-appointments'],
            ['role' => 'secrt', 'permission' => 'reply-to-clients'],
        ];

        foreach ($secretAssociations as $association) {
            $roleId = DB::table('roles')->where('role', $association['role'])->value('id');
            $permissionId = DB::table('permissions')->where('name', $association['permission'])->value('id');

            if ($roleId && $permissionId) {
                DB::table('role_permission')->insert(['role_id' => $roleId, 'permission_id' => $permissionId]);
            }
        }

        // Associations for the "admin" role
        $adminAssociations = [
            ['role' => 'admin', 'permission' => 'create-product'],
            ['role' => 'admin', 'permission' => 'edit-product'],
            ['role' => 'admin', 'permission' => 'delete-product'],
            ['role' => 'admin', 'permission' => 'view-product'],
        ];

        foreach ($adminAssociations as $association) {
            $roleId = DB::table('roles')->where('role', $association['role'])->value('id');
            $permissionId = DB::table('permissions')->where('name', $association['permission'])->value('id');

            if ($roleId && $permissionId) {
                DB::table('role_permission')->insert(['role_id' => $roleId, 'permission_id' => $permissionId]);
            }
        }
    }
}