<?php

namespace Subash\ReviewRating\Events;

use Subash\ReviewRating\Models\Review;

class ReviewCreatedEvent
{
    public Review $review;

    public function __construct(Review $review)
    {
        $this->review = $review;
    }
}
