<?php

use App\Models\Entities\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete All Pages
        $pages = Page::all();
        foreach ($pages as $row) {
            $row->forceDelete();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Page::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        // Set new pages
        $pages = [
            [
                'template' => 'Home',
                'tr' => [
                    'meta_title' => 'DemirOkulu | Ana Sayfa ',
                    'meta_description' => 'DemirOkulu | Ana Sayfa',
                    'title' => 'Ana Sayfa?',
                    'force_slug' => '/',
                ],
                'en' => [
                    'title' => 'Ana Sayfa',
                    'force_slug' => '/',
                ],
            ],
            [
                'template' => 'demirokulu-nedir',
                'tr' => [
                    'meta_title' => 'DemirOkulu | Demir Okulu Nedir?',
                    'meta_description' => 'DemirOkulu | Demir Okulu Nedir?',
                    'title' => 'Demir Okulu Nedir?',
                
                ],
                'en' => [
                    'title' => 'Demir Okulu',
                    
                ],
            ],
            [
                'template' => 'sukrozomiyal-teknoloji',
                'tr' => [
                    'meta_title' => 'DemirOkulu | Sukrozomiyal® Demir Teknoloji',
                    'meta_description' => 'DemirOkulu | Sukrozomiyal® Demir Teknoloji',
                    'title' => 'Sukrozomiyal® Demir',
                ],
                'en' => [
                    'title' => 'Sukrozomiyal® Demir',
                ],
            ],
            [
                'template' => 'Contact',
                'tr' => [
                    'meta_title' => 'DemirOkulu | İletişim',
                    'meta_description' => 'DemirOkulu | İletişim',
                    'title' => 'İletişim',
                ],
                'en' => [
                    'title' => 'İletişim',
                ],
            ],
            // [
            //     'template' => 'Products',
            //     'tr' => [
            //         'meta_title' => 'DemirOkulu | Canlı Yayın',
            //         'meta_description' => 'DemirOkulu | Canlı Yayın',
            //         'title' => 'Canlı Yayın',
            //         'content' => ''
            //     ],
            //     'en' => [
            //         'title' => 'Canlı Yayın',
            //     ],
            // ],
            [
                'template' => 'Katkida-bulunanlar',
                'tr' => [
                    'meta_title' => 'DemirOkulu | Katkıda Bulunanlar',
                    'meta_description' => 'DemirOkulu | Katkıda Bulunanlar',
                    'title' => 'Katkıda Bulunanlar',
                    'content' => ''
                ],
                'en' => [
                    'title' => 'Katkıda Bulunanlar',
                ],
            ],
            [
                'template' => 'Videos',
                'tr' => [
                    'meta_title' => 'DemirOkulu | Videolar',
                    'meta_description' => 'DemirOkulu | Videolar',
                    'title' => 'VideolarEski',
                    'content' => ''
                ],
                'en' => [
                    'title' => 'VideolarEski',
                ],
            ],
            [
                'template' => 'VideosDetail',
                'tr' => [
                    'meta_title' => 'DemirOkulu | Video Detay',
                    'meta_description' => 'DemirOkulu | Video Detay',
                    'title' => 'Video Detay',
                    'content' => ''
                ],
                'en' => [
                    'title' => 'Video Detay',
                ],
            ],
            [
                'template' => 'Broadcast',
                'tr' => [
                    'meta_title' => 'DemirOkulu | Canlı Video',
                    'meta_description' => 'DemirOkulu | Canlı Video',
                    'title' => 'Canlı Yayın',
                    'content' => ''
                ],
                'en' => [
                    'title' => 'Canlı yayın',
                ],
            ],
            [
                'template' => 'LoginPage',
                'tr' => [
                    'meta_title' => 'DemirOkulu | Giriş',
                    'meta_description' => 'DemirOkulu | Giriş',
                    'title' => 'GİRİŞ YAP',
                    'content' => ''
                ],
                'en' => [
                    'title' => 'GİRİŞ YAP',
                ],
            ],
           
            [
                'template' => 'Video',
                'tr' => [
                    'meta_title' => 'Video',
                    'meta_description' => 'Video',
                    'title' => 'Videolar',
                ],
                'en' => [
                    'title' => 'Videolar',
                ],
            ],

            [
                'template' => 'Videoparent',
                'tr' => [
                    'meta_title' => 'Videoparent',
                    'meta_description' => 'Videoparent',
                    'title' => 'Videoparent',
                ],
                'en' => [
                    'title' => 'Videoparent',
                ],
            ],

            //INNER_PART_FOR_STUB_GENERATION_DONT_DELETE

            [
                'template' => 'PrivacyPolicy',
                'tr' => [
                    'title' => 'Gizlilik Metni',
                    'content' => ''
                ],
                'en' => [
                    'title' => 'Privacy Policy',
                    'content' => ''
                ],
            ],

            [
                'template' => 'InformationText',
                'tr' => [
                    'title' => 'Bilgilendirme Metni',
                    'content' => ''
                ],
                'en' => [
                    'title' => 'Informational Text',
                    'content' => ''
                ],
            ],
            [
                'template' => 'InformationTextTwo',
                'tr' => [
                    'title' => 'Beyan Metni',
                    'content' => ''
                ],
                'en' => [
                    'title' => 'Agree Text',
                    'content' => ''
                ],
            ],
            [
                'template' => 'InformationUyelik',
                'tr' => [
                    'title' => 'Beyan Metni',
                    'content' => ''
                ],
                'en' => [
                    'title' => 'Agree Text',
                    'content' => ''
                ],
            ],
            [
                'template' => 'InformationUyelereYonelik',
                'tr' => [
                    'title' => 'Beyan Metni',
                    'content' => ''
                ],
                'en' => [
                    'title' => 'Agree Text',
                    'content' => ''
                ],
            ],
            [
                'template' => 'kvkkText',
                'tr' => [
                    'title' => 'Kişisel Verilerin Korunması Kanunu',
                    'content' => ''
                ],
                'en' => [
                    'title' => 'KVKK',
                    'content' => ''
                ],
            ],
            [
                'template' => 'Register',
                'tr' => [
                    'title' => 'Kayıt Ol',
                    'excerpt' => 'Fusce aliquam, est nec blandit ultricies, ante diam viverra neque, id tristique orci dolor id quam. Ut bibendum ex sapien, quis porta diam maximus vitae.',
                ],
                'en' => [
                    'title' => 'Register',
                    'excerpt' => 'Fusce aliquam, est nec blandit ultricies, ante diam viverra neque, id tristique orci dolor id quam. Ut bibendum ex sapien, quis porta diam maximus vitae.',
                ],
            ],
            [
                'template' => 'Login',
                'tr' => [
                    'title' => 'Giriş Yap',
                    'excerpt' => 'Fusce aliquam, est nec blandit ultricies, ante diam viverra neque, id tristique orci dolor id quam. Ut bibendum ex sapien, quis porta diam maximus vitae.',
                ],
                'en' => [
                    'title' => 'Login',
                    'excerpt' => 'Fusce aliquam, est nec blandit ultricies, ante diam viverra neque, id tristique orci dolor id quam. Ut bibendum ex sapien, quis porta diam maximus vitae.',
                ],
            ],
            [
                'template' => 'ForgotPassword',
                'tr' => [
                    'title' => 'Parolamı Unuttum',
                    'excerpt' => 'Fusce aliquam, est nec blandit ultricies, ante diam viverra neque, id tristique orci dolor id quam. Ut bibendum ex sapien, quis porta diam maximus vitae.',
                ],
                'en' => [
                    'title' => 'Forgot My Password',
                    'excerpt' => 'Fusce aliquam, est nec blandit ultricies, ante diam viverra neque, id tristique orci dolor id quam. Ut bibendum ex sapien, quis porta diam maximus vitae.',
                ],
            ],
            [
                'template' => 'PasswordReset',
                'tr' => [
                    'title' => 'Parola Sıfırla',
                    'excerpt' => 'Fusce aliquam, est nec blandit ultricies, ante diam viverra neque, id tristique orci dolor id quam. Ut bibendum ex sapien, quis porta diam maximus vitae.',
                ],
                'en' => [
                    'title' => 'Password Reset',
                    'excerpt' => 'Fusce aliquam, est nec blandit ultricies, ante diam viverra neque, id tristique orci dolor id quam. Ut bibendum ex sapien, quis porta diam maximus vitae.',
                ],
            ],
            [
                'template' => 'VerifyEmail',
                'tr' => [
                    'title' => 'E-posta Onay',
                    'excerpt' => 'Fusce aliquam, est nec blandit ultricies, ante diam viverra neque, id tristique orci dolor id quam. Ut bibendum ex sapien, quis porta diam maximus vitae.',
                ],
                'en' => [
                    'title' => 'Verify Email',
                    'excerpt' => 'Fusce aliquam, est nec blandit ultricies, ante diam viverra neque, id tristique orci dolor id quam. Ut bibendum ex sapien, quis porta diam maximus vitae.',
                ],
            ],
            [
                'template' => 'VerifiedEmail',
                'tr' => [
                    'title' => 'E-posta Onaylandı',
                    'excerpt' => 'Fusce aliquam, est nec blandit ultricies, ante diam viverra neque, id tristique orci dolor id quam. Ut bibendum ex sapien, quis porta diam maximus vitae.',
                ],
                'en' => [
                    'title' => 'Verified Email',
                    'excerpt' => 'Fusce aliquam, est nec blandit ultricies, ante diam viverra neque, id tristique orci dolor id quam. Ut bibendum ex sapien, quis porta diam maximus vitae.',
                ],
            ],
            [
                'template' => 'Profile',
                'tr' => [
                    'title' => 'Profil',
                ],
                'en' => [
                    'title' => 'Profile',
                ],
            ],
            [
                'template' => 'MissingPermission',
                'tr' => [
                    'title' => 'Yetkisiz Alana Erişim',
                ],
                'en' => [
                    'title' => 'Missing Permission',
                ],
            ],
        ];

        // Create
        foreach ($pages as $attributes) {
            $this->createRow($attributes);
        }
    }

    public function createRow($attributes, $parent = null)
    {
        $children = array_pull($attributes, 'children');

        // Create instance
        $instance = Page::create($attributes);

        if ($parent) {
            $instance->appendToNode($parent);
        }
        $instance->save();

        // Create children
        $relation = new \Illuminate\Database\Eloquent\Collection;
        foreach ((array)$children as $child) {
            $relation->add($child = $this->createRow($child, $instance));
            $child->setRelation('parent', $instance);
        }
        $instance->refreshNode();
        return $instance->setRelation('children', $relation);
    }
}
