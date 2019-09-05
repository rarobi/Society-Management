<?php

Route::group(['module' => 'Account', 'middleware' => ['web'], 'namespace' => 'App\Modules\Account\Controllers'], function() {

    Route::resource('Account', 'AccountController');

});
