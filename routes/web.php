<?php

// // rout tampilan scan
// Route::get('/pesanmakan', 'ProductscanController@index');
// Route::get('add-to-cart/{id}', 'ProductscanController@addToCart')->name('add_to_cart');
// Route::get('remove-from-cart/{id}', 'ProductscanController@removeFromCart')->name('remove_from_cart');
// Route::get('decrease-cart/{id}', 'ProductscanController@decreaseCart')->name('decrease_cart');
// Route::get('/order-success/{order}', 'ProductscanController@orderSuccess')->name('order.success');

// // akhir rout scan

// // route checkout
// Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
// Route::post('/checkout', 'CheckoutController@process')->name('checkout.process');
// Route::post('/midtrans-callback', 'CheckoutController@callback')->name('midtrans.callback');
// Route::get('/order-success/{order}', 'CheckoutController@success')->name('order.success');

// // tampilan web
// Route::get('/', 'FrontwebController@index');
// Route::get('/fetch-unavailable-times', 'FrontwebController@fetchUnavailableTimes');
// Route::post('/submit-booking', 'FrontwebController@submitBooking');

Route::get('/', 'IndexfrontController@index');
Route::get('/about', 'AboutfrontController@index');
Route::get('/product', 'ProductfrontController@index');
Route::get('/achievement', 'AchivmentfrontController@index');
Route::get('/contact', 'ContactfrontController@index');
Route::post('/contact', 'ContactfrontController@store')->name('contact.store');

Route::redirect('/loginadmin', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Sosial Media
    Route::delete('sosial-media/destroy', 'SosialMediaController@massDestroy')->name('sosial-media.massDestroy');
    Route::resource('sosial-media', 'SosialMediaController');

    // Footer
    Route::delete('footers/destroy', 'FooterController@massDestroy')->name('footers.massDestroy');
    Route::post('footers/media', 'FooterController@storeMedia')->name('footers.storeMedia');
    Route::post('footers/ckmedia', 'FooterController@storeCKEditorImages')->name('footers.storeCKEditorImages');
    Route::resource('footers', 'FooterController');

    // About
    Route::delete('abouts/destroy', 'AboutController@massDestroy')->name('abouts.massDestroy');
    Route::post('abouts/media', 'AboutController@storeMedia')->name('abouts.storeMedia');
    Route::post('abouts/ckmedia', 'AboutController@storeCKEditorImages')->name('abouts.storeCKEditorImages');
    Route::resource('abouts', 'AboutController');

    // Gallery
    Route::delete('galleries/destroy', 'GalleryController@massDestroy')->name('galleries.massDestroy');
    Route::post('galleries/media', 'GalleryController@storeMedia')->name('galleries.storeMedia');
    Route::post('galleries/ckmedia', 'GalleryController@storeCKEditorImages')->name('galleries.storeCKEditorImages');
    Route::resource('galleries', 'GalleryController');

    // Contact person
    Route::delete('contactpersons/destroy', 'ContactpersonController@massDestroy')->name('contactpersons.massDestroy');
    Route::post('contactpersons/media', 'ContactpersonController@storeMedia')->name('contactpersons.storeMedia');
    Route::post('contactpersons/ckmedia', 'ContactpersonController@storeCKEditorImages')->name('contactpersons.storeCKEditorImages');
    Route::resource('contactpersons', 'ContactpersonController');

    // Legalitas
    Route::delete('legalitys/destroy', 'LegalitasController@massDestroy')->name('legalitys.massDestroy');
    Route::post('legalitys/media', 'LegalitasController@storeMedia')->name('legalitys.storeMedia');
    Route::post('legalitys/ckmedia', 'LegalitasController@storeCKEditorImages')->name('legalitys.storeCKEditorImages');
    Route::resource('legalitys', 'LegalitasController');

    // Testimoni
    Route::delete('testimonis/destroy', 'TestimoniController@massDestroy')->name('testimonis.massDestroy');
    Route::post('testimonis/media', 'TestimoniController@storeMedia')->name('testimonis.storeMedia');
    Route::post('testimonis/ckmedia', 'TestimoniController@storeCKEditorImages')->name('testimonis.storeCKEditorImages');
    Route::resource('testimonis', 'TestimoniController');

    // Sertifikat
    Route::delete('sertifikats/destroy', 'SertifikatController@massDestroy')->name('sertifikats.massDestroy');
    Route::post('sertifikats/media', 'SertifikatController@storeMedia')->name('sertifikats.storeMedia');
    Route::post('sertifikats/ckmedia', 'SertifikatController@storeCKEditorImages')->name('sertifikats.storeCKEditorImages');
    Route::resource('sertifikats', 'SertifikatController');

    // Hero Section
    Route::delete('herosections/destroy', 'HerosectionController@massDestroy')->name('herosections.massDestroy');
    Route::resource('herosections', 'HerosectionController');

    // capabilitie
    Route::delete('capabilities/destroy', 'CapabilityController@massDestroy')->name('capabilities.massDestroy');
    Route::resource('capabilities', 'CapabilityController');

    // Otomotive
    Route::delete('otomotives/destroy', 'OtomotiveController@massDestroy')->name('otomotives.massDestroy');
    Route::resource('otomotives', 'OtomotiveController');

    // Trading
    Route::delete('tradings/destroy', 'TradingController@massDestroy')->name('tradings.massDestroy');
    Route::resource('tradings', 'TradingController');

    // Vision
    Route::delete('visions/destroy', 'VisionController@massDestroy')->name('visions.massDestroy');
    Route::resource('visions', 'VisionController');

    // Mission
    Route::delete('missions/destroy', 'MissionController@massDestroy')->name('missions.massDestroy');
    Route::resource('missions', 'MissionController');

    // Contact Us
    Route::delete('contacts/destroy', 'ContactusController@massDestroy')->name('contacts.massDestroy');
    Route::resource('contacts', 'ContactusController');

    // Product
    Route::delete('products/destroy', 'ProductController@massDestroy')->name('products.massDestroy');
    Route::post('products/media', 'ProductController@storeMedia')->name('products.storeMedia');
    Route::post('products/ckmedia', 'ProductController@storeCKEditorImages')->name('products.storeCKEditorImages');
    Route::resource('products', 'ProductController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
