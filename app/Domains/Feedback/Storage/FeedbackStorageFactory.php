<?php

namespace App\Domains\Feedback\Storage;

class FeedbackStorageFactory
{
    public static function create($type)
    {
        switch ($type) {
            case 'database':
                return new DatabaseFeedbackStorage();
            case 'file':
                return new FileFeedbackStorage();
            default:
                throw new \Exception('Неверный тип хранилища');
        }
    }
}
