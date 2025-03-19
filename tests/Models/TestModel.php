<?php

namespace subashkhanal37\ReviewRating\Tests\Models;

use subashkhanal37\ReviewRating\Traits\HasReviewRating;
use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    use HasReviewRating;
    protected $table = 'designs';
    protected $guarded = [];
}
