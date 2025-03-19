<?php

namespace Subash\ReviewRating\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Subash\ReviewRating\Traits\HasReviewRating;

class TestModel extends Model
{
    use HasReviewRating;
    protected $table = 'designs';
    protected $guarded = [];
}
