<?php

use Illuminate\Database\Seeder;
use App\Models\Entities\Videoparent;

class VideoCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete All Rows
        $rows = Videoparent::all();
        foreach ($rows as $row) {
            $row->forceDelete();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Videoparent::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        // Set new rows
        $rows = [
            [   
                'template' => 'VideoKategori1',
                'id' => 1,
                '_lft' => 1,
                '_rgt' => 2,
                'tr' => [
                    'title' => 'Video Kategori 1',
                ]
            ],
            [   
                'template' => 'VideoKategori2',
                'id' => 2,
                '_lft' => 3,
                '_rgt' => 4,
                'tr' => [
                    'title' => 'Video Kategori 2',
                ]
            ],
            [   
                'template' => 'VideoKategori3',
                'id' => 3,
                '_lft' => 5,
                '_rgt' => 6,
                'tr' => [
                    'title' => 'Video Kategori 3',
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
        $instance = Videoparent::create($attributes);

        foreach (config('app.locales') as $locale => $localeMeta) {
            // Slug
            if ($locale == 'ru') {
                $slug = $instance->generateSlug($instance->getTitle('en'), $locale); // override slug as en
            } else {
                $slug = $instance->generateSlug($instance->getTitle($locale), $locale);
            }
            $instance->{'slug:' . $locale} = $slug;

            $forceSlug = $attributes[$locale]['force_slug'] ?? null;
            if ($forceSlug) {
                if ($forceSlug != $slug) {
                    $instance->{'slug:' . $locale} = $forceSlug;
                    $instance->{'force_slug:' . $locale} = $forceSlug;
                } else {
                    $instance->{'force_slug:' . $locale} = null;
                }
            }

            $instance->update();
        }
        $instance->save();
    }
}
