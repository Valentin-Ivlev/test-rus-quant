<?php

namespace App\Domains\Feedback\Storage;

use App\Domains\Feedback\Models\Feedback;

class DatabaseFeedbackStorage implements FeedbackStorageInterface
{
    public function store(array $data)
    {
        $feedback = new Feedback($data);
        $feedback->saveOrFail();
    }
}
