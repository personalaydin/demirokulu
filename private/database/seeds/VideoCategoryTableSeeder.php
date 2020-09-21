<?php

use Illuminate\Database\Seeder;
use App\Models\Entities\Videoparent;

class VideoCategoryTableSeeder extends Seeder
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
                'template' => 'Kategori1',
                'tr' => [
                    'title' => 'Kategori 1',
                ]
            ],
            [   
                'template' => 'Kategori2',
                'tr' => [
                    'title' => 'Kategori 2',
                ]
            ],
            [   
                'template' => 'Kategori3',
                'tr' => [
                    'title' => 'Kategori 3',
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
        $categories = array_pull($attributes, 'parents');

        // Create instance
        $instance = Videoparent::create($attributes);
        foreach (config('app.locales') as $locale => $localeMeta) {
            // Slug
            $slug = $instance->generateSlug($instance->getTitle($locale), $locale);
            $instance->{'slug:' . $locale} = $slug;

            $instance->update();
        }
        $instance->save();

    }
}
