<?php

namespace App\Models\Entities;

use App\Models\Traits\ActionsTrait;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Contact extends Model
{
    use ActionsTrait;
    use LogsActivity;

    /**
     * Set model meta properties
     */
    public $modelMeta = [
        'name' => 'contact',
    ];

    /**
     * Set logable fields
     */
    protected static $logAttributes = [
        'first_name',
        'last_name',
        'email',
        'message',
    ];

    /**
     * Set fillable fields
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'message',
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
     * Returns first name and last name
     * @return string
     */
    public function getFullName()
    {
        return sprintf('%s %s', $this->first_name, $this->last_name);
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
