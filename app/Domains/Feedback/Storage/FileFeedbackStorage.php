<?php

namespace App\Domains\Feedback\Storage;

use Illuminate\Support\Facades\Storage;

class FileFeedbackStorage implements FeedbackStorageInterface
{
    public function store(array $data)
    {
        $content = implode(',', $data);
        Storage::disk('local')->append('feedbacks.txt', $content);
    }
}
