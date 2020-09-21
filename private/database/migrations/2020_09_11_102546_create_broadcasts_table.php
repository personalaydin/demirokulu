<?php

use App\Models\Entities\Permission;
use App\Models\Entities\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBroadcastsTable extends Migration
{
    public function __construct()
    {
        $this->permissions = [
            'admin.broadcast.index' => 'Broadcast - Page: Index',
            'admin.broadcast.edit' => 'Broadcast - Page: Edit',
            // 'admin.broadcast.create' => 'Broadcast - Page: Create',
            // 'admin.broadcast.delete' => 'Broadcast - Page: Delete',
            // 'admin.broadcast.hard-delete' => 'Broadcast - Page: Hard Delete',
            // 'admin.broadcast.restore' => 'Broadcast - Page: Restore',
        ];
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('broadcasts', function (Blueprint $table) {
            $table->increments('id');

            $table->string('template')->nullable();
            $table->string('image')->nullable();
            $table->boolean('redirect_first_child')->default(0);

            $table->nestedSet();

            $table->nullableTimestamps();
            $table->softDeletes();
        });

        Schema::create('broadcast_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('broadcast_id')->unsigned();
            $table->string('locale')->index();

            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('force_slug')->nullable();
            $table->mediumText('embed')->nullable();
            $table->mediumText('excerpt')->nullable();
            $table->longText('content')->nullable();
            $table->string('meta_title')->nullable();
            $table->mediumText('meta_description')->nullable();

            $table->unique(['broadcast_id','locale']);
            $table->foreign('broadcast_id')->references('id')->on('broadcasts')->onDelete('cascade');
        });
        // Permissions
        $rootRole = Role::find(1);
        $adminRole = Role::find(2);

        foreach ($this->permissions as $name => $title) {
            $permission = Permission::firstOrCreate([
                'name' => $name,
                'title' => $title,
            ]);

            if (!is_null($rootRole)) {
                $rootRole->givePermissionTo($permission);
            }

            if (!is_null($adminRole)) {
                $adminRole->givePermissionTo($permission);
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        Schema::dropIfExists('broadcasts');
        Schema::dropIfExists('broadcast_translations');

        // Permissions
        foreach ($this->permissions as $name => $title) {
            $permission = Permission::where('name', $name)->first();

            if (!is_null($permission)) {
                $permission->delete();
            }
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}