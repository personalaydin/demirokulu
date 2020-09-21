<?php

namespace App\Http\Controllers\Web;

use App\Models\Entities\Broadcast;
use App\Models\Entities\Page;
use Breadcrumbs;
use Exception;
use Illuminate\View\View;

class BroadcastController extends WebController
{
    public function index()
    {
        // Get page
        $page = cache()->rememberForever('page_broadcast_'.app()->getLocale(), function()  {
            return Page::where('template', 'Broadcast')->firstOrFail();
        });
        view()->share('page', $page);

        // Get data
        $broadcasts = cache()->rememberForever('broadcasts_'.app()->getLocale(), function()  {
            return Broadcast::all();
        });
        view()->share('broadcasts', $broadcasts);

        // Get row
        $row = broadcast::latest()->first();
        
        view()->share('row', $row);

        // Set meta tags
        $page->setMetaTags();

        // Set localization url
        $this->setLocalizationURLS($page);

        // Breadcrumbs
        Breadcrumbs::for('web.'.app()->getLocale().'.broadcast.index', function ($trail) use ($page) {
            $trail->parent('web.'.app()->getLocale().'.home');
            $trail->push($page->getTitle(), $page->getViewLink());
        });

        // Return custom or detail view
        return view($page->getTemplate());
    }

    public function detail($slug)
    {
        // Get page
        $page = cache()->rememberForever('page_broadcast_'.app()->getLocale(), function()  {
            return Page::where('template', 'Broadcast')->firstOrFail();
        });
        view()->share('page', $page);

        // Get row
        $row = cache()->rememberForever('broadcast_'.app()->getLocale().'_'.$slug, function() use ($slug) {
            return broadcast::findBySlug($slug)->firstOrFail();
        });
        view()->share('row', $row);

        // Set meta tags
        $row->setMetaTags();

        // Set localization url
        $this->setLocalizationURLS($row);

        // Breadcrumbs
        Breadcrumbs::for('web.'.app()->getLocale().'.broadcast.detail', function ($trail) use ($page, $row) {
            $trail->parent('web.'.app()->getLocale().'.home');
            $trail->push($page->getTitle(), $page->getViewLink());
            $trail->push($row->getTitle(), $row->getViewLink());
        });

        // Return custom or detail view
        return view('web.'.$row->modelMeta['name'].'.detail');
    }
}
