<?php

$locales = array_reverse(config('app.locales')); // Because 'tr' is first language and {slug?} route is broken

// Sitemap
foreach ($locales as $locale => $localeData) {
    Route::group(['prefix' => ($locale == 'tr' ? '' : $locale)], function () use ($locale) {
        Route::get('sitemap.xml', [
            'uses' => 'SEOController@sitemapIndex',
            'as' => 'web.' . $locale . '.sitemap.index',
        ]);

        Route::get('sitemap/pages.xml', [
            'uses' => 'SEOController@sitemapPages',
            'as' => 'web.' . $locale . '.sitemap.pages',
        ]);
    });
}