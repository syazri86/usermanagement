<?php

// Route::get('greeting', function () {
//     return 'Hi, this is your awesome package!';
// });

Route::get('greeting', 'Teknomuslim\CurrencyFormatter\Controllers\CurrencyFormatterController@greeting');
