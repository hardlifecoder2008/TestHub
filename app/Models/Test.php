<?php

namespace App\Models;

use App\Models\Question;
use App\Models\HighLevel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function levels()
    {
        return $this->belongsToMany(HighLevel::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

}
