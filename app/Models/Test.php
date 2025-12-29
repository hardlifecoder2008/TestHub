<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    /** @use HasFactory<\Database\Factories\TestFactory> */
    use HasFactory;
    protected $fillable = [
        'method',
        'test_title',
        'owner_id',
        'code',
        'time_limit',
        'max_ball',
        'high_level_id'
    ];
}
