<?php

namespace App\Models;

use App\Models\Question;
use Illuminate\Database\Eloquent\Model;

class ResultTest extends Model
{
    protected $fillable = [
        'question_id',
        'selected_answer',
        'is_correct',
        'amount_ball'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
