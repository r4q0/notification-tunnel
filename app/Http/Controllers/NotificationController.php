<?php

namespace App\Http\Controllers;

use App\Models\Notification;

class NotificationController extends Controller
{

    public static function createNotification($title, $description, $url = null)
    {
        $notification = new Notification();
        $notification->title = $title;
        $notification->description = $description;
        $notification->url = $url;
        $notification->save();
    }

    public static function displayNotifications()
    {
        $notifications = Notification::where('viewed', false)->get();

        foreach ($notifications as $notification) {
            $notification->update(['viewed' => true]);
        }

        return response()->json($notifications);
    }
}
