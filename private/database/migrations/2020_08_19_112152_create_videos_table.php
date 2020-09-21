<?php

use App\Models\Entities\Permission;
use App\Models\Entities\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    public function __construct()
    {
        $this->permissions = [
            'admin.video.index' => 'Video - Page: Index',
            'admin.video.edit' => 'Video - Page: Edit',
            'admin.video.create' => 'Video - Page: Create',
            'admin.video.delete' => 'Video - Page: Delete',
            'admin.video.hard-delete' => 'Video - Page: Hard Delete',
            'admin.video.restore' => 'Video - Page: Restore',
        ];
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('template')->nullable();
            $table->string('image')->nullable();
            $table->boolean('redirect_first_child')->default(0);

            $table->nestedSet();

            $table->nullableTimestamps();
            $table->softDeletes();
        });

        Schema::create('video_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('video_id')->unsigned();
            $table->string('locale')->index();

            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('force_slug')->nullable();
            $table->string('doctor')->nullable();
            $table->mediumText('embed')->nullable();
            $table->mediumText('excerpt')->nullable();
            $table->longText('content')->nullable();
            $table->string('meta_title')->nullable();
            $table->mediumText('meta_description')->nullable();

            $table->unique(['video_id','locale']);
            $table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade');
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

        Schema::dropIfExists('videos');
        Schema::dropIfExists('video_translations');

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