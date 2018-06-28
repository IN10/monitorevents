<?php

Route::view('/', 'index');

Route::get('/fire', function () {
    $amount = '20';
    // this fires the event
    $event =  new App\Domain\SiteEvents\SiteDown();

    event(new App\Events\SiteEvent($event));
    return 'done';
});