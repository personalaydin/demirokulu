<?php

use Illuminate\Database\Seeder;
use App\Models\Entities\Video;

class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete All Rows
        $rows = Video::all();
        foreach ($rows as $row) {
            $row->forceDelete();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Video::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        // Set new rows
        $rows = [
            [
                'parents' => [1],
                'image' => 'test1.jpg',
                'tr' => [
                    'title' => 'Vivamus congue varius 1',
                    'excerpt' => 'Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet ',
                    'doctor' => 'Doç. Dr.Ahmet Uyanık',
                    'embed' => 'https://www.youtube.com/watch?v=OeP4FFr88SQ',
                ]
            ],
            [
                'parents' => [1],
                'image' => 'test1.jpg',
                'tr' => [
                    'title' => 'Vivamus congue varius 2',
                    'excerpt' => 'Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet ',
                    'doctor' => 'Doç. Dr.Ahmet Uyanık',
                    'embed' => 'https://www.youtube.com/watch?v=OeP4FFr88SQ',
                ]
            ],
            [
                'parents' => [1],
                'image' => 'test1.jpg',
                'tr' => [
                    'title' => 'Vivamus congue varius 3',
                    'excerpt' => 'Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet ',
                    'doctor' => 'Doç. Dr.Ahmet Uyanık',
                    'embed' => 'https://www.youtube.com/watch?v=OeP4FFr88SQ',
                ]
            ],
            [
                'parents' => [2],
                'image' => 'test1.jpg',
                'tr' => [
                    'title' => 'Vivamus congue varius 4',
                    'excerpt' => 'Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet ',
                    'doctor' => 'Doç. Dr.Ahmet Uyanık',
                    'embed' => 'https://www.youtube.com/watch?v=OeP4FFr88SQ',
                ]
            ],
            [
                'parents' => [2],
                'image' => 'test1.jpg',
                'tr' => [
                    'title' => 'Vivamus congue varius 5',
                    'excerpt' => 'Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet ',
                    'doctor' => 'Doç. Dr.Ahmet Uyanık',
                    'embed' => 'https://www.youtube.com/watch?v=OeP4FFr88SQ',
                ]
            ],
            [
                'parents' => [2],
                'image' => 'test1.jpg',
                'tr' => [
                    'title' => 'Vivamus congue varius 6',
                    'excerpt' => 'Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet ',
                    'doctor' => 'Doç. Dr.Ahmet Uyanık',
                    'embed' => 'https://www.youtube.com/watch?v=OeP4FFr88SQ',
                ]
            ],
            [
                'parents' => [3],
                'image' => 'test1.jpg',
                'tr' => [
                    'title' => 'Vivamus congue varius 7',
                    'excerpt' => 'Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet ',
                    'doctor' => 'Doç. Dr.Ahmet Uyanık',
                    'embed' => 'https://www.youtube.com/watch?v=OeP4FFr88SQ',
                ]
            ],
            [
                'parents' => [3],
                'image' => 'test1.jpg',
                'tr' => [
                    'title' => 'Vivamus congue varius 8',
                    'excerpt' => 'Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet ',
                    'doctor' => 'Doç. Dr.Ahmet Uyanık',
                    'embed' => 'https://www.youtube.com/watch?v=OeP4FFr88SQ',
                ]
            ],
            [
                'parents' => [3],
                'image' => 'test1.jpg',
                'tr' => [
                    'title' => 'Vivamus congue varius 9',
                    'excerpt' => 'Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet ',
                    'doctor' => 'Doç. Dr.Ahmet Uyanık',
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
        $categories = array_pull($attributes, 'parents');

        // Create instance
        $instance = Video::create($attributes);
        foreach (config('app.locales') as $locale => $localeMeta) {
            // Slug
            $slug = $instance->generateSlug($instance->getTitle($locale), $locale);
            $instance->{'slug:' . $locale} = $slug;

            $instance->update();
        }
        $instance->save();

        $instance->parents()->sync($categories);
    }
}
