<?php

Route::group(['module' => 'Library', 'middleware' => ['web'], 'namespace' => 'App\Modules\Library\Controllers'], function() {

    Route::resource('Library', 'LibraryController');

});
