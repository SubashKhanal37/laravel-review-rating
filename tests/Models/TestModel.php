<?php

namespace Subash\ReviewRating\Tests\Models;

use Subash\ReviewRating\Traits\HasReviewRating;
use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    use HasReviewRating;
    protected $table = 'designs';
    protected $guarded = [];
}
