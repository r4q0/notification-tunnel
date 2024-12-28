<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

Route::get('/', function () {
    return NotificationController::displayNotifications();
});

Route::post('/create', function (Illuminate\Http\Request $request) {
    $title = $request->input('title');
    $description = $request->input('description');
    $url = $request->input('url');

    NotificationController::createNotification($title, $description, $url);

    return response()->json(["status" => "Notification created successfully ;)"]);
})->withoutMiddleware([VerifyCsrfToken::class]);
