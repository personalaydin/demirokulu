<?php

namespace App\Http\Controllers\Web;

use App\Models\Entities\GalleryCategory;
use App\Models\Entities\News;
use App\Models\Entities\Page;
use App\Models\Entities\Vlog;
use Sitemap;

class SEOController extends WebController
{
    /**
     * Sitemap
     *
     * @return \Illuminate\Http\Response
     */
    public function sitemapIndex()
    {
        // Get sitemaps
        Sitemap::addSitemap(route('web.'.app()->getLocale().'.sitemap.pages'));

        // Return the sitemap to the client.
        return Sitemap::index();
    }

    public function sitemapPages()
    {
        $rows = Page::whereNotIn('redirect_first_child', [1])->with('parent')->get();

        foreach ($rows as $row) {
            if ($row->template == 'Home') {
                $priority = 1;
            } else {
                $priority = 0.7;
            }

            $tag = Sitemap::addTag($row->getViewLink(), $row->updated_at, 'daily', $priority);

            if ($row->hasImage()) {
                $tag->addImage($row->getImageByTemplate('featured', 'image', true, false), null, null, $row->getTitle());
            }
        }

        return Sitemap::render();
    }
}
