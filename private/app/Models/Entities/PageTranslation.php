<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class PageTranslation extends Model
{
    use LogsActivity;

    public $timestamps = false;

    protected $fillable = [
        'title',
        'title_uppercase',
        'slug',
        'force_slug',
        'excerpt',
        'content',
        'meta_title',
        'meta_description',
    ];

    /**
     * Set logable fields
     */
    protected static $logAttributes = [
        'page_id',
        'locale',
        'title',
        'title_uppercase',
        'slug',
        'force_slug',
        'excerpt',
        'content',
        'meta_title',
        'meta_description',
    ];
}
