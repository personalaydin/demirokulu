<?php

use Illuminate\Database\Seeder;
use App\Models\Entities\Broadcast;

class BroadcastTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete All Rows
        $rows = Broadcast::all();
        foreach ($rows as $row) {
            $row->forceDelete();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Broadcast::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        // Set new rows
        $rows = [
            [
                'image' => 'video-image-1',
                'tr' => [
                    'title' => 'Demirokulu Canlı Yayın',
                    'excerpt' => 'Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet ',
                    'embed' => 'https://www.youtube.com/watch?v=OeP4FFr88SQ',
                ]
            ],

        ];

        // Create
        foreach ($rows as $attributes) {
            $this->createRow($attributes);
        }
    }

    public function createRow($attributes)
    {
        // Create instance
        $instance = Broadcast::create($attributes);
        foreach (config('app.locales') as $locale => $localeMeta) {
            // Slug
            $slug = $instance->generateSlug($instance->getTitle($locale), $locale);
            $instance->{'slug:' . $locale} = $slug;

            $instance->update();
        }
        $instance->save();

    }
}
