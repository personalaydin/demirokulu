<?php

namespace App\Http\Controllers\Web;

use App\Models\Entities\Page;
use App\Models\Entities\Video;
use App\Models\Entities\Videoparent;
use Breadcrumbs;
use Exception;
use Illuminate\View\View;

class VideoController extends WebController
{
    public function index()
    {
        // Get page
        $page = cache()->rememberForever('page_video_'.app()->getLocale(), function()  {
            return Page::where('template', 'Video')->firstOrFail();
        });
        view()->share('page', $page);

        // // Get data
        // $videos = cache()->rememberForever('videos_'.app()->getLocale(), function()  {
        //     return Video::all();
        // });
        // view()->share('videos', $videos);

        $videoparents = cache()->rememberForever('videoparents_'.app()->getLocale(), function()  {
            return Videoparent::all();
        });

        view()->share('categories', $videoparents);


        // Set meta tags
        $page->setMetaTags();

        // Set localization url
        $this->setLocalizationURLS($page);

        // Breadcrumbs
        Breadcrumbs::for('web.'.app()->getLocale().'.video.index', function ($trail) use ($page) {
            $trail->parent('web.'.app()->getLocale().'.home');
            $trail->push($page->getTitle(), $page->getViewLink());
        });

        
        // Return custom or detail view
        return view($page->getTemplate());
    }

    public function detail($slug)
    {
        // Get page
        $page = cache()->rememberForever('page_video_'.app()->getLocale(), function()  {
            return Page::where('template', 'Video')->firstOrFail();
        });
        view()->share('page', $page);

        // Get row
        $row = cache()->rememberForever('video_'.app()->getLocale().'_'.$slug, function() use ($slug) {
            return video::findBySlug($slug)->firstOrFail();
        });
        view()->share('row', $row);


        // Prev and Next element of object 
        $categoryVideos = $row->parents()->first()->videos;
        foreach($categoryVideos as $i => $categoryVideo){
            if ($categoryVideo->id == $row->id) {
                if (isset($categoryVideos[$i-1])){
                    $prev = $categoryVideos[$i-1];
                    view()->share('prev', $prev);
                }
                if (isset($categoryVideos[$i+1])){
                    $next = $categoryVideos[$i+1];
                    view()->share('next', $next);
                }
            }
        }


        // Set meta tags
        $row->setMetaTags();

        // Set localization url
        $this->setLocalizationURLS($row);

        // Breadcrumbs
        Breadcrumbs::for('web.'.app()->getLocale().'.video.detail', function ($trail) use ($page, $row) {
            $trail->parent('web.'.app()->getLocale().'.home');
            $trail->push($page->getTitle(), $page->getViewLink());
            $trail->push($row->getTitle(), $row->getViewLink());
        });

        // Return custom or detail view
        return view('web.'.$row->modelMeta['name'].'.detail');
    }
}
