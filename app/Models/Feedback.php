<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Feedback extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'feedbacks';

    /**
     * @var string[]
     */
    protected $fillable = ['profile', 'name', 'description', 'user_id', 'status'];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * when item delete it removing image in storage
     *
     * @return void
     */
    public static function boot(): void
    {
        parent::boot();
        self::deleting(fn(Feedback $feedback) => Storage::disk('public')->delete($feedback->profile));
    }
}
