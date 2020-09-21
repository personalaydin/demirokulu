<?php

if (!Schema::hasTable('pages')) {
    return;
}

use Spatie\Honeypot\ProtectAgainstSpam;

$locales = array_reverse(config('app.locales')); 



foreach ($locales as $locale => $localeData) {
    // Route::group(['prefix' => ($locale == 'tr' ? '' : $locale)], function () use ($locale) {
    Route::group(['prefix' => $locale], function () use ($locale) {
        // Home
        Route::get('/', 'HomeController@index')->name('web.'.$locale.'.home');

        // Ajax Contact Form
        Route::post('ajax/contact', [
            'uses' => 'FormController@contact',
            'as' => 'web.'.$locale.'.ajax.contact',
        ])->middleware(ProtectAgainstSpam::class);
  
        // Ajax Ask To Doctor Form
        Route::post('ajax/askToDoctor', [
            'uses' => 'FormController@askToDoctor',
            'as' => 'web.'.$locale.'.ajax.askToDoctor',
        ])->middleware(ProtectAgainstSpam::class);

        // Ajax Subscriber Form
        Route::post('ajax/subscriber', [
            'uses' => 'FormController@subscriber',
            'as' => 'web.'.$locale.'.ajax.subscriber',
        ])->middleware(ProtectAgainstSpam::class);
        
        // Ajax Delete User Request
        Route::post('ajax/deleteUser/{id}', [
            'uses' => 'AuthController@deleteUser',
            'as' => 'web.'.$locale.'.ajax.deleteUser',
        ]);
        
        
        // Video Resource
        $videoPage = App\Models\Entities\Page::whereTemplate('Video')->first();
        if (!is_null($videoPage) && !is_null($videoPage->getSlug($locale))) {
            Route::get($videoPage->getSlug($locale), [
                'uses' => 'VideoController@index',
                'as' => 'web.' . $locale . '.video.index',
            ]);

            Route::get($videoPage->getSlug($locale) . '/{slug}', [
                'uses' => 'VideoController@detail',
                'as' => 'web.tr.video.detail',
            ]);
        }
        
        // Videoparent Resource
        $videoparentPage = App\Models\Entities\Page::whereTemplate('Videoparent')->first();
        if (!is_null($videoparentPage) && !is_null($videoparentPage->getSlug($locale))) {
            Route::get($videoparentPage->getSlug($locale), [
                'uses' => 'VideoparentController@index',
                'as' => 'web.' . $locale . '.videoparent.index',
            ]);

            Route::get($videoparentPage->getSlug($locale) . '/{slug}', [
                'uses' => 'VideoparentController@detail',
                'as' => 'web.' . $locale . '.videoparent.detail',
            ]);
        }

        // Broadcast Resource
        $broadcastPage = App\Models\Entities\Page::whereTemplate('Broadcast')->first();
        if (!is_null($broadcastPage) && !is_null($broadcastPage->getSlug($locale))) {
            Route::get($broadcastPage->getSlug($locale), [
                'uses' => 'BroadcastController@index',
                'as' => 'web.' . $locale . '.broadcast.index',
            ]);

            Route::get($broadcastPage->getSlug($locale) . '/{slug}', [
                'uses' => 'BroadcastController@detail',
                'as' => 'web.' . $locale . '.broadcast.detail',
            ]);
        }
        

        // Other Pages
        Route::get('/{slug?}', [
            'uses' => 'PageController@index',
            'as' => 'web.'.$locale.'.page',
            'except' => '_debugbar',
        ]);
        
        
        //INNER_PART_FOR_STUB_GENERATION_DONT_DELETE

       
    });
}

