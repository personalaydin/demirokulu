<?php

use App\Models\Entities\Permission;
use App\Models\Entities\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    private $rootPermissions;
    private $adminPermissions;
    private $permissions;

    public function __construct()
    {
        $this->rootPermissions = [
            'admin.contact.index' => 'Admin - Contact: Index',
            //'admin.contact.edit' => 'Admin - Contact: Edit',
            //'admin.contact.create' => 'Admin - Contact: Create',
            'admin.contact.delete' => 'Admin - Contact: Delete',
            'admin.contact.hard-delete' => 'Admin - Contact: Hard Delete',
            'admin.contact.restore' => 'Admin - Contact: Restore',
        ];

        $this->adminPermissions = $this->rootPermissions;
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->longText('message')->nullable();

            $table->nullableTimestamps();
        });

        // Permissions
        $rootRole = Role::find(1);
        $adminRole = Role::find(2);

        foreach ($this->rootPermissions as $name => $title) {
            $permission = Permission::firstOrCreate([
                'name' => $name,
                'title' => $title,
            ]);

            if (!is_null($rootRole)) {
                $rootRole->givePermissionTo($permission);
            }
        }

        foreach ($this->adminPermissions as $name => $title) {
            $permission = Permission::firstOrCreate([
                'name' => $name,
                'title' => $title,
            ]);

            if (!is_null($adminRole)) {
                $adminRole->givePermissionTo($permission);
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @throws Exception
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        Schema::dropIfExists('contacts');

        // Permissions
        $this->permissions = array_merge($this->rootPermissions, $this->adminPermissions);

        foreach ($this->permissions as $name => $title) {
            $permission = Permission::where('name', $name)->first();

            if (!is_null($permission)) {
                $permission->delete();
            }
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
