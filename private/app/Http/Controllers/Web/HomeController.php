<?php

namespace App\Http\Controllers\Web;

use App\Models\Entities\Page;
use Exception;
use Illuminate\View\View;
use App\Models\Entities\Article;
use Redirect;
use Auth;
use App;

class HomeController extends WebController
{
    /**
     * Show the application home page
     *
     * @return View
     * @throws Exception
     */
    public function index()
    {
        $testData = [
            'ad' => '',
            'soyad' => '',
            'mail' => '',
            'password' => '',
            'phone' => '',
            'city' => '',
            'selected' => '',
            'checked' => '',
            'hospitalPharmacy' => '',
        ];
        if (App::isLocal()){
            $testData = [
                'ad' => 'Burak',
                'soyad' => 'Turan',
                'mail' => 'burak@enustkat.com.tr',
                'password' => '123456',
                'phone' => '12345678',
                'city' => 'ist',
                'hospitalPharmacy' => 'hospitalPharmacy',
                'selected' => 'selected',
                'checked' => 'checked',
            ];
        }

        view()->share('testData', $testData);

        // Get page
        $page = cache()->rememberForever('page_home_'.app()->getLocale(), function()  {
            return Page::where('template', 'Home')->firstOrFail();
        });

        view()->share('page', $page);

        // // Get news
        // $news = cache()->rememberForever('news_home_'.app()->getLocale(), function()  {
        //     return Article::get();
        // });
        // view()->share('news', $news);

        // Set meta tags
        $page->setMetaTags();

        // Set Localization
        $this->setLocalizationURLS($page);

        return view($page->getTemplate());
    }
}
