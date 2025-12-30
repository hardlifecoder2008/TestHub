<?php

namespace App\Models;

use App\Models\HighLevel;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'high_level_id',
        'level_ball',
        'correct_answer'
    ];

    public function levels()
    {
        return $this->belongsTo(HighLevel::class);
    }
}
