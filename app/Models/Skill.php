<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = ['type', 'name', 'percentage_of_expertise', 'user_id'];
}
