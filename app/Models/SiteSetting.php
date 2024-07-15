<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SiteSetting extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'user_id', 'profile', 'about_me', 'what_i_do', 'feedbacks_enabled', 'customers_enabled'
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'what_i_do' => 'array',
        'feedbacks_enabled' => 'boolean',
        'customers_enabled' => 'boolean',
    ];

    /**
     * when item delete it removing image in storage
     *
     * @return void
     */
    protected static function boot(): void
    {
        parent::boot();

        static::deleting(function ($siteSetting) {
            /**
             * remove profile image
             */
            if ($siteSetting->profile) {
                Storage::disk('public')->delete($siteSetting->profile);
            }

            /**
             * remove icons
             */
            if (is_array($siteSetting->what_i_do)) {
                foreach ($siteSetting->what_i_do as $item) {
                    if (isset($item['icon'])) {
                        Storage::disk('public')->delete($item['icon']);
                    }
                }
            }
        });
    }
}
