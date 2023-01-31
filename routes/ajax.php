<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| AJAX Routes
|--------------------------------------------------------------------------
*/

Route::prefix('36fecd043115b43e689eb7f7ac4911e7')->group(function () {
    Route::get('IwnFxTrPoh/{project_id?}', [\App\Http\Controllers\Ajax::class, 'return_products_with_option'])->name('ajax.return_products_with_option');
    Route::post('HHFEfUYNys', [\App\Http\Controllers\Ajax::class, 'return_popover_users'])->name('ajax.return_popover_users');
    Route::get('wpEhDaOpfC/{type?}', [\App\Http\Controllers\Ajax::class, 'return_target_inputs'])->name('ajax.return_target_inputs');
});
