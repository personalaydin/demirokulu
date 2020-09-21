<?php

namespace App\Models\Entities;

use App\Models\Scopes\DefaultOrderScope;
use App\Models\Scopes\LocalizationScope;
use App\Models\Traits\ActionsTrait;
use App\Models\Traits\ImageTrait;
use App\Models\Traits\MetaTrait;
use App\Models\Traits\Sluggable;
use Astrotomic\Translatable\Translatable;
use Exception;
use File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;
use Route;
use Spatie\Activitylog\Traits\LogsActivity;

class Videoparent extends Model
{
    use ActionsTrait;
    use ImageTrait;
    use LogsActivity;
    use MetaTrait;
    use NodeTrait;
    use Sluggable;
    use SoftDeletes;
    use Translatable;

    /**
     * Set model meta properties
     */
    public $modelMeta = [
        'name' => 'videoparent',
    ];

    /**
     * Set translatable fields
     */
    public $translatedAttributes = [
        'title',
        'slug',
        'force_slug',
        'excerpt',
        'content',
        'meta_title',
        'meta_description',
    ];

    /**
     * Set required fields for localization
     */
    public $requiredLocalizationAttributes = [
        'title',
    ];

    /**
     * Set logable fields
     */
    protected static $logAttributes = [
        'parent_id',
    ];

    /**
     * Set fillable fields
     */
    protected $fillable = [
        'parent_id',
    ];

    /**
     * Set image attributes
     */
    public $imageAttributes = [
        'image' => [
            [
                'w' => 900,
                'h' => 350,
                'template' => 'featured',
            ],
            [
                'w' => 450,
                'h' => 175,
                'template' => 'small_featured',
            ],
            [
                'w' => 300,
                'h' => 300,
                'template' => 'medium_featured',
            ],
        ]
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['translations'];

    /**
     * Boot
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new DefaultOrderScope());
        static::addGlobalScope(new LocalizationScope());
    }

     /**
     * Relationships
     */
    public function videos()
    {
        return $this->belongsToMany(Video::class);
    }



    /**
     * Generate viewable link
     * @param  string $locale
     * @return string
     */
    public function getViewLink($locale = null)
    {
        if (is_null($locale)) {
            $locale = app()->getLocale();
        }

        $routeName = 'web.'.$locale.'.'.$this->modelMeta['name'].'.detail';

        if (!Route::has($routeName)) {
            return null;
        }

        return route($routeName, ['slug' => $this->getSlug($locale)]);
    }

    /**
     * Returns title
     * @param null $locale
     * @return string
     */
    public function getTitle($locale = null)
    {
        return is_null($this->translate($locale)) ? null : $this->translate($locale)->title;
    }

    /**
     * Returns excerpt
     * @param null $locale
     * @return string
     */
    public function getExcerpt($locale = null)
    {
        return is_null($this->translate($locale)) ? null : $this->translate($locale)->excerpt;
    }

    /**
     * Returns content
     * @param null $locale
     * @return string
     */
    public function getContent($locale = null)
    {
        return is_null($this->translate($locale)) ? null : $this->translate($locale)->content;
    }

    /**
     * SEO
     */
    public function seoMetaTitle($locale = null)
    {
        return is_null($this->translate($locale)) ? null : $this->translate($locale)->meta_title;
    }

    public function seoMetaDescription($locale = null)
    {
        return is_null($this->translate($locale)) ? null : $this->translate($locale)->meta_description;
    }
}
