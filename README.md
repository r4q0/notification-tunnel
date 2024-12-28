# Notification API

This is a simple notifications API that allows you to create notifications through the `POST /create` endpoint by passing a title, description, and optionally a URL. It runs on a SQLite database, which you can set up by running `php artisan migrate`.

This API is designed to work without authentication and was created to integrate with another Android project that polls this API at intervals to receive direct notifications. This way, you do not have to rely on Google or Apple's services.

## Setup

1. Clone the repository.
2. Run `php artisan migrate` to set up the SQLite database.
3. Start the server.

## Usage

To create a notification, send a POST request to the `/create` endpoint with the following parameters:
- `title`: The title of the notification (required).
- `description`: The description of the notification (required).
- `url`: An optional URL associated with the notification.

## Related Project

I created this api to use A another project I created for Android. You can find more information about that project [here](#bol.com).

---

Created by Bilal Kerkeni  
Sponsored by Milo van Dam