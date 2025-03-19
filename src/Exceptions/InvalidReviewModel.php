<?php

namespace Subash\ReviewRating\Exceptions;

use Exception;

class InvalidReviewModel extends Exception
{
    public static function create(string $model): self
    {
        return new self("The model `{$model}` is invalid. A valid model must extend the model \Subash\ReviewRating\Models\Review.");
    }
}
