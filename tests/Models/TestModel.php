<?php

namespace subashkhanal37\ReviewRating\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use subashkhanal37\ReviewRating\Traits\HasReviewRating;

class TestModel extends Model
{
    use HasReviewRating;
    protected $table = 'designs';
    protected $guarded = [];
}
