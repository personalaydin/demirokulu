<?php

use App\Models\Entities\Permission;
use App\Models\Entities\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscribersTable extends Migration
{
    private $rootPermissions;
    private $adminPermissions;
    private $permissions;

    public function __construct()
    {
        $this->rootPermissions = [
            'admin.subscriber.index' => 'Admin - Subscriber: Index',
            //'admin.subscriber.edit' => 'Admin - Subscriber: Edit',
            //'admin.subscriber.create' => 'Admin - Subscriber: Create',
            'admin.subscriber.delete' => 'Admin - Subscriber: Delete',
            'admin.subscriber.hard-delete' => 'Admin - Subscriber: Hard Delete',
            'admin.subscriber.restore' => 'Admin - Subscriber: Restore',
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
        Schema::create('subscribers', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('email')->nullable();

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

        Schema::dropIfExists('subscribers');

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
