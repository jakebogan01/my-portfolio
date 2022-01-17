<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * @var string[]
     */
    protected $casts = [
        'social_links' => 'array'
    ];

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'job_title',
        'city',
        'state',
        'social_links',
        'body',
    ];

    /**
     * @var string
     */
    protected $table = 'about_users';

    /**
     * @return BelongsTo
     */
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
