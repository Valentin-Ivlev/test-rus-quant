<?php

namespace App\Domains\Feedback\Storage;

interface FeedbackStorageInterface
{
    public function store(array $data);
}
