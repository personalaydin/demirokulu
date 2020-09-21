<?php

use App\Models\Entities\Permission;
use App\Models\Entities\Role;
use App\Models\Entities\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersRolesAndPermissions extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create Users
        $rootUser = User::create([
            'first_name' => 'Enustkat',
            'last_name' => 'Enustkat',
            'email' => 'admin@enustkat.com.tr',
            'password' => '$2y$12$upHx.AvzrXeyh23GHQCjVuEEo8Da6Ue6..W2a262wZj54dJs5HC9C', //enustkatpass
        ]);

        // Create Users
        $adminUser = User::create([
            'first_name' => 'Enustkat',
            'last_name' => 'Enustkat',
            'email' => 'info@enustkat.com.tr',
            'password' => '$2y$12$upHx.AvzrXeyh23GHQCjVuEEo8Da6Ue6..W2a262wZj54dJs5HC9C', //enustkatpass
        ]);

        // Create Roles
        $rootRole = Role::create([
            'name' => 'root',
            'title' => 'Root',
        ]);

        $adminRole = Role::create([
            'name' => 'admin',
            'title' => 'Admin',
        ]);

        // Create Base Permissions
        $basePermissions = [
            'admin.authenticate' => 'Admin - Authenticate',

            'admin.dashboard.index' => 'Admin - Dashboard: Index',
            'admin.settings.edit' => 'Admin - Settings: Edit',
            'admin.profile.edit' => 'Admin - Profile: Edit',
        ];

        foreach ($basePermissions as $name => $title) {
            $permission = Permission::create([
                'name' => $name,
                'title' => $title,
            ]);

            // Assign permission to roles
            $rootRole->givePermissionTo($permission);
            $adminRole->givePermissionTo($permission);
        }

        // Create Only Root Permissions
        $onlyRootPermissions = [
            'admin.user-switch.index' => 'Admin - User Switch: Index',
            'admin.user-switch.start' => 'Admin - User Switch: Start',

            'admin.activity-log.index' => 'Admin - Activity Log: Index',
            'admin.activity-log.show' => 'Admin - Activity Log: Show',

            'admin.error-log.index' => 'Admin - Error Log: Index',

            'admin.user.index' => 'Admin - User: Index',
            'admin.user.edit' => 'Admin - User: Edit',
            'admin.user.create' => 'Admin - User: Create',
            'admin.user.hard-delete' => 'Admin - User: Hard Delete',

            'admin.role.index' => 'Admin - Role: Index',
            'admin.role.edit' => 'Admin - Role: Edit',
            'admin.role.create' => 'Admin - Role: Create',
            'admin.role.hard-delete' => 'Admin - Role: Hard Delete',

            'admin.permission.index' => 'Admin - Permission: Index',
            'admin.permission.edit' => 'Admin - Permission: Edit',
            'admin.permission.create' => 'Admin - Permission: Create',
            'admin.permission.hard-delete' => 'Admin - Permission: Hard Delete',
        ];

        foreach ($onlyRootPermissions as $name => $title) {
            $permission = Permission::create([
                'name' => $name,
                'title' => $title,
            ]);

            // Assign permission to roles
            $rootRole->givePermissionTo($permission);
        }

        // Assing Roles
        $rootUser->assignRole($rootRole);
        $adminUser->assignRole($adminRole);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Delete Roles
        $rootRole = Role::find(1);
        if (!is_null($rootRole)) {
            $rootRole->delete();
        }

        $rootAdmin = Role::find(2);
        if (!is_null($rootAdmin)) {
            $rootAdmin->delete();
        }

        // Delete Users
        $userRoot = User::find(1);
        if (!is_null($userRoot)) {
            $userRoot->delete();
        }

        $userAdmin = User::find(2);
        if (!is_null($userAdmin)) {
            $userAdmin->delete();
        }
    }
}
