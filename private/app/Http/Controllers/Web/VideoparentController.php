<?php

namespace App\Http\Controllers\Web;

use App\Models\Entities\Page;
use App\Models\Entities\Videoparent;
use Breadcrumbs;
use Exception;
use Illuminate\View\View;

class VideoparentController extends WebController
{
    public function index()
    {
        
        // Get page
        $page = cache()->rememberForever('page_videoparent_'.app()->getLocale(), function()  {
            return Page::where('template', 'Videoparent')->firstOrFail();
        });
        view()->share('page', $page);

        // Get data
        $videoparents = cache()->rememberForever('videoparents_'.app()->getLocale(), function()  {
            return Videoparent::all();
        });
        view()->share('videoparents', $videoparents);

        // Set meta tags
        $page->setMetaTags();

        // Set localization url
        $this->setLocalizationURLS($page);

        // Breadcrumbs
        Breadcrumbs::for('web.'.app()->getLocale().'.videoparent.index', function ($trail) use ($page) {
            $trail->parent('web.'.app()->getLocale().'.home');
            $trail->push($page->getTitle(), $page->getViewLink());
        });

        // Return custom or detail view
        return view($page->getTemplate());
    }

    public function detail($slug)
    {
        
        // Get page
        $page = cache()->rememberForever('page_videoparent_'.app()->getLocale(), function()  {
            return Page::where('template', 'Videoparent')->firstOrFail();
        });
        view()->share('page', $page);

        // Get row
        $row = cache()->rememberForever('videoparent_'.app()->getLocale().'_'.$slug, function() use ($slug) {
            return videoparent::findBySlug($slug)->firstOrFail();
        });
        view()->share('row', $row);

        // Set meta tags
        $row->setMetaTags();

        // Set localization url
        $this->setLocalizationURLS($row);

        // Breadcrumbs
        Breadcrumbs::for('web.'.app()->getLocale().'.videoparent.detail', function ($trail) use ($page, $row) {
            $trail->parent('web.'.app()->getLocale().'.home');
            $trail->push($page->getTitle(), $page->getViewLink());
            $trail->push($row->getTitle(), $row->getViewLink());
        });

        // Return custom or detail view
        return view('web.'.$row->modelMeta['name'].'.detail');
    }
}
