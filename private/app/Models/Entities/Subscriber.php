<?php

namespace App\Models\Entities;

use App\Models\Traits\ActionsTrait;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Subscriber extends Model
{
    use ActionsTrait;
    use LogsActivity;

    /**
     * Set model meta properties
     */
    public $modelMeta = [
        'name' => 'subscriber',
    ];

    /**
     * Set logable fields
     */
    protected static $logAttributes = [
        'email',
    ];

    /**
     * Set fillable fields
     */
    protected $fillable = [
        'email',
    ];

    /**
     * Returns title alias of email
     * @return string
     */
    public function getTitle()
    {
        return $this->getEmail();
    }

    /**
     * Returns email
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}
