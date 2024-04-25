<?php

namespace App\Http\Controllers;

use App\Domains\Feedback\Models\Feedback;
use App\Domains\Feedback\Storage\FeedbackStorageFactory;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate(
            (new Feedback)->rules()
        );

        $storage = FeedbackStorageFactory::create('database');
        $storage->store($data);

        $storage = FeedbackStorageFactory::create('file');
        $storage->store($data);

        return response()->json(['message' => 'Сообщение успешно отправлена']);
    }
}
