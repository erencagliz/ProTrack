<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Method Routes
|--------------------------------------------------------------------------
*/

Route::post('TjBvAzsuHZ', [\App\Http\Controllers\Auth\Login::class, 'post'])->name('auth.login.post');

Route::prefix('c4024744ea6bcc1d17d285d24f031fb2')->middleware('auth')->group(function () {
    Route::post('xLHuhlhBiW', [\App\Http\Controllers\Users\Edit::class, 'post'])->name('users.edit.post');
    Route::post('mTjwYRpZHe', [\App\Http\Controllers\Users\Edit::class, 'perm_post'])->name('users.edit.perm_post');
    Route::post('ChqCebHLzd', [\App\Http\Controllers\Sales\AddSale::class, 'post'])->name('add-sale.post');
    Route::post('HvOvDXGCIK', [\App\Http\Controllers\Sales\PendingSales::class, 'post'])->name('pending-sales.post');
    Route::post('aMtiYATSxa', [\App\Http\Controllers\Files\Listing::class, 'post'])->name('files.listing.post');
    Route::post('JlPgeTlfoC', [\App\Http\Controllers\Users\Listing::class, 'add'])->name('users.listing.add');
    Route::post('FxZuFoAoBl', [\App\Http\Controllers\Users\Edit::class, 'todo_update'])->name('users.edit.todo_update');
    Route::post('SftZRWeMwH', [\App\Http\Controllers\Users\Edit::class, 'add_todo'])->name('users.edit.add_todo');
    Route::post('JjahwxdwWb', [\App\Http\Controllers\UserGroups\Listing::class, 'edit'])->name('user-groups.listing.edit');
    Route::post('iAWYxmCKBX', [\App\Http\Controllers\UserGroups\Listing::class, 'add'])->name('user-groups.listing.add');
    Route::post('IClMzuWduT', [\App\Http\Controllers\Calendar::class, 'drag_post'])->name('calendar.drag_post');
    Route::post('GgyBOTNCVL', [\App\Http\Controllers\Calendar::class, 'resize_post'])->name('calendar.resize_post');
    Route::post('HJTEpeLLLi', [\App\Http\Controllers\Calendar::class, 'remove_post'])->name('calendar.remove_post');
    Route::post('chiimzxlOg', [\App\Http\Controllers\Calendar::class, 'add_post'])->name('calendar.add_post');
    Route::post('MPnhHtQrOw', [\App\Http\Controllers\Calendar::class, 'edit_post'])->name('calendar.edit_post');
    Route::post('nqdxgukWvh', [\App\Http\Controllers\Offices\Listing::class, 'add_post'])->name('offices.listing.add_post');
    Route::post('SgCvraErWT', [\App\Http\Controllers\Offices\Listing::class, 'edit_post'])->name('offices.listing.edit_post');
    Route::post('rJKWXRsRbe', [\App\Http\Controllers\Projects\Listing::class, 'add_post'])->name('projects.listing.add_post');
    Route::post('olOPJxZJnm', [\App\Http\Controllers\Projects\Listing::class, 'edit_post'])->name('projects.listing.edit_post');
    Route::post('HnWUkwreVA', [\App\Http\Controllers\Offdays\Add::class, 'post'])->name('offdays.add.post');
    Route::post('kzzSvWVHbJ', [\App\Http\Controllers\Offdays\Edit::class, 'post'])->name('offdays.edit.post');
    Route::post('YrjOolLjPA', [\App\Http\Controllers\Products\Listing::class, 'add_post'])->name('products.listing.add_post');
    Route::post('NzgQevWmqn', [\App\Http\Controllers\Products\Listing::class, 'edit_post'])->name('products.listing.edit_post');
    Route::post('gSNBbhBQCf', [\App\Http\Controllers\Targets\Listing::class, 'add'])->name('targets.listing.add');
    Route::post('IYpfKHEcBk', [\App\Http\Controllers\Targets\Edit::class, 'edit_post'])->name('targets.edit.edit_post');
    Route::post('bijYChzCzA', [\App\Http\Controllers\HumanResources\Listing::class, 'add'])->name('human-resources.listing.add');
    Route::post('UMeBirQoXK', [\App\Http\Controllers\HumanResources\Listing::class, 'choose_owner'])->name('human-resources.listing.choose_owner');
    Route::post('ETavvGRWgs', [\App\Http\Controllers\HumanResources\Edit::class, 'edit'])->name('human-resources.edit.edit');
    Route::post('aySEQekBzZ/{id}', [\App\Http\Controllers\HumanResources\Edit::class, 'note_add'])->name('human-resources.edit.note_add');
    Route::post('RoePJMprPS', [\App\Http\Controllers\Ajax::class, 'add_sale'])->name('ajax.add_sale');
    Route::post('BeEwlRociH', [\App\Http\Controllers\Ajax::class, 'start_pause'])->name('ajax.start_pause');
    Route::post('kVjtSFMCJX', [\App\Http\Controllers\Ajax::class, 'end_pause'])->name('ajax.end_pause');
});

Route::prefix('37e3c64546b93cd0076b4b5bc0a40648')->middleware('auth')->group(function () {
    Route::get('oCLBhRrreS/{id}', [\App\Http\Controllers\Sales\AllSales::class, 'delete'])->name('sales.all-sales.delete');
    Route::get('PNMLBuAbxg/{id}', [\App\Http\Controllers\Sales\AllSales::class, 'active'])->name('sales.all-sales.active');
    Route::get('wlfgAvxNqF/{id}', [\App\Http\Controllers\Sales\AllSales::class, 'pending'])->name('sales.all-sales.pending');
    Route::get('MfDRebEbqP/{id}', [\App\Http\Controllers\UserGroups\Listing::class, 'delete'])->name('user-groups.listing.delete');
    Route::get('LGFmVVlfaQ/{id}', [\App\Http\Controllers\UserGroups\Listing::class, 'active'])->name('user-groups.listing.active');
    Route::get('UJSIxaDLTw/{id}', [\App\Http\Controllers\Users\Listing::class, 'delete'])->name('users.listing.delete');
    Route::get('bKiaaCwRIY/{id}', [\App\Http\Controllers\Users\Listing::class, 'active'])->name('users.listing.active');
    Route::get('MiFLmYMWxo/{id}', [\App\Http\Controllers\Users\Listing::class, 'pending'])->name('users.listing.pending');
    Route::get('pFrUuLYKau/{id}', [\App\Http\Controllers\Users\Edit::class, 'delete_todo'])->name('users.edit.delete_todo');
    Route::get('pFrUuLYKau/{id}', [\App\Http\Controllers\Users\Edit::class, 'delete_todo'])->name('users.edit.delete_todo');
    Route::get('txxtnAYhWr/{id}', [\App\Http\Controllers\Files\Listing::class, 'delete'])->name('files.listing.delete');
    Route::get('eVnrnxASUR/{id}', [\App\Http\Controllers\Offices\Listing::class, 'delete'])->name('offices.listing.delete');
    Route::get('GonmjZwrrf/{id}', [\App\Http\Controllers\Offices\Listing::class, 'active'])->name('offices.listing.active');
    Route::get('CiFDKVIJjV/{id}', [\App\Http\Controllers\Offices\Listing::class, 'pending'])->name('offices.listing.pending');
    Route::get('XXfgVSBoYs/{id}', [\App\Http\Controllers\Projects\Listing::class, 'delete'])->name('projects.listing.delete');
    Route::get('CmiObThopZ/{id}', [\App\Http\Controllers\Projects\Listing::class, 'active'])->name('projects.listing.active');
    Route::get('rvgsHPuLzy/{id}', [\App\Http\Controllers\Projects\Listing::class, 'pending'])->name('projects.listing.pending');
    Route::get('hIrfnnnKpt/{id?}', [\App\Http\Controllers\Offdays\Details::class, 'delete'])->name('offdays.details.delete');
    Route::get('HEHBtCqUJF/{id}', [\App\Http\Controllers\Products\Listing::class, 'delete'])->name('products.listing.delete');
    Route::get('QXZbGHaMNC/{id}', [\App\Http\Controllers\Products\Listing::class, 'active'])->name('products.listing.active');
    Route::get('KzVGyQXoet/{id}', [\App\Http\Controllers\Products\Listing::class, 'pending'])->name('products.listing.pending');
    Route::get('WSUDWbkVDh/{id}', [\App\Http\Controllers\Targets\Listing::class, 'delete'])->name('targets.listing.delete');
    Route::get('hlklkYwkwK/{id}', [\App\Http\Controllers\Targets\Listing::class, 'active'])->name('targets.listing.active');
    Route::get('xRctMNGQZe/{id}', [\App\Http\Controllers\Targets\Listing::class, 'pending'])->name('targets.listing.pending');
    Route::get('aZKkZMfouX/{id}', [\App\Http\Controllers\HumanResources\Listing::class, 'delete'])->name('human-resources.listing.delete');
    Route::get('mSAqXbvcwk/{id}', [\App\Http\Controllers\HumanResources\Listing::class, 'active'])->name('human-resources.listing.active');
    Route::get('bTVDtlnIBI/{id}', [\App\Http\Controllers\HumanResources\Listing::class, 'pending'])->name('human-resources.listing.pending');
    Route::get('VtdJwipOCt/{id}', [\App\Http\Controllers\Pause\Listing::class, 'delete'])->name('pause.listing.delete');
});

