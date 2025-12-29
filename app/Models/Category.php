<?php

namespace App\Models;

use App\Models\HighLevel;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public function level()
    {
        return $this->hasOne(HighLevel::class);
    }
}
