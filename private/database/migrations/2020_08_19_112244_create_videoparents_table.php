<?php

use App\Models\Entities\Permission;
use App\Models\Entities\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoparentsTable extends Migration
{
    public function __construct()
    {
        $this->permissions = [
            'admin.videoparent.index' => 'Videoparent - Page: Index',
            'admin.videoparent.edit' => 'Videoparent - Page: Edit',
            'admin.videoparent.create' => 'Videoparent - Page: Create',
            'admin.videoparent.delete' => 'Videoparent - Page: Delete',
            'admin.videoparent.hard-delete' => 'Videoparent - Page: Hard Delete',
            'admin.videoparent.restore' => 'Videoparent - Page: Restore',
        ];
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videoparents', function (Blueprint $table) {
            $table->increments('id');

            $table->string('template')->nullable();
            $table->string('image')->nullable();
            $table->boolean('redirect_first_child')->default(0);

            $table->nestedSet();

            $table->nullableTimestamps();
            $table->softDeletes();
        });

        Schema::create('videoparent_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('videoparent_id')->unsigned();
            $table->string('locale')->index();

            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('force_slug')->nullable();
            $table->mediumText('excerpt')->nullable();
            $table->longText('content')->nullable();
            $table->string('meta_title')->nullable();
            $table->mediumText('meta_description')->nullable();

            $table->unique(['videoparent_id','locale']);
            $table->foreign('videoparent_id')->references('id')->on('videoparents')->onDelete('cascade');
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

        Schema::dropIfExists('videoparents');
        Schema::dropIfExists('videoparent_translations');

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