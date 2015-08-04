<?php

Route::get('/', 'HomeController@index');

Route::get('/plate/add/{reg?}', 'PlateController@addVideo')->where('reg', '[0-9A-Za-z]+');

Route::get('/plate/search', 'PlateController@search');

Route::get('/plate/{reg}', 'PlateController@plate')->where('reg', '[0-9A-Za-z]+');

Route::post('/plate', 'PlateController@storeVideo');