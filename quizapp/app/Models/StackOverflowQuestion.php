<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class StackOverflowQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'link', 'creation_date', 'is_answere'];

    public function tags():BelongsToMany
    {
        return $this->belongsToMany(StackOverflowTag::class, 'stack_overflow_question_tags');
    }
}
