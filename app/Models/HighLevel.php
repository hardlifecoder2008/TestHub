<?php

namespace App\Models;

use App\Models\Test;
use App\Models\Answer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HighLevel extends Model
{
    /** @use HasFactory<\Database\Factories\HighLevelFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'total_question',
        'category_id',
        'ball'
    ];

    public function test()
    {
        return $this->hasOne(Test::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function answer()
    {
        return $this->hasMany(Answer::class);
    }
}
