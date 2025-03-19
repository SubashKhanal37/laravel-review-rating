<?php

namespace subashkhanal37\ReviewRating\Events;

use subashkhanal37\ReviewRating\Models\Review;

class ReviewCreatedEvent
{
    public Review $review;

    public function __construct(Review $review)
    {
        $this->review = $review;
    }
}
