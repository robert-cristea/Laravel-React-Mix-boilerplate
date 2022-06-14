<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

//Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
//    return (int) $user->id === (int) $id;
//});
\Illuminate\Support\Facades\Log::info('out side channel');
Broadcast::channel("order", function ($user, $id) {
    \Illuminate\Support\Facades\Log::Info("Authorizing private-channel event");
    return true;
//    return (int) $user->id === (int) \App\Models\Order::find($id)->customer;
});

Broadcast::channel("order", function ($user, $id) {
    \Illuminate\Support\Facades\Log::Info("Authorizing private-channel event");
    return true;
//    return (int) $user->id === (int) \App\Models\Order::find($id)->customer;
});

Broadcast::channel("private-private-order", function($user) {
    Log::Info("Authorizing private-private-channel event");
    return 0;
});

Broadcast::channel("private-order", function($user) {
    Log::Info("Authorizing private-channel event");
    return 0;
});
