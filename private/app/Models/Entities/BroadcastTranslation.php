<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class BroadcastTranslation extends Model
{
    use LogsActivity;

    public $timestamps = false;

    protected $fillable = [
        'title',
        'slug',
        'force_slug',
        'excerpt',
        'content',
        'meta_title',
        'meta_description',
        'embed'
    ];

    /**
     * Set logable fields
     */
    protected static $logAttributes = [
        'page_id',
        'locale',
        'title',
        'slug',
        'force_slug',
        'excerpt',
        'content',
        'meta_title',
        'meta_description',
    ];
}
