<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.layout.master');
});


Route::get('/addVendor',   'OwnerController\VendorController@add');
Route::Post('/SaveVendor', 'OwnerController\VendorController@saveVendor')->name('saveVendor');
Route::get('/Vendor/{id}/edit', 'OwnerController\VendorController@editVendor')->name('editVendor');
Route::delete('/Vendor/{id}/delete','OwnerController\VendorController@deleteVendor')->name('deleteVendor');
Route::delete('/Vendor/{id}/delete','OwnerController\VendorController@deleteVendor')->name('deleteVendor');
Route::post('/Vendor/{id}/update', 'OwnerController\VendorController@updateVendor')->name('updateVendor');





Route::get('/addSubVendor',      'OwnerController\SubVendorController@add');
Route::Post('/SaveSubVendor',     'OwnerController\SubVendorController@saveSubVendor')->name('saveSubVendor');
Route::get('/SubVendor/{id}/edit', 'OwnerController\SubVendorController@editSubVendor')->name('editSubVendor');
Route::delete('/SubVendor/{id}/delete','OwnerController\SubVendorController@deleteSubVendor')->name('deleteSubVendor');
Route::post('/SubVendor/{id}/update', 'OwnerController\SubVendorController@updateSubVendor')->name('updateSubVendor');









Route::get('/addCustomer', 'CustomerController\CustomerController@addCustomer');
Route::Post('/saveCustomer', 'CustomerController\CustomerController@saveCustomer')->name('saveCustomer');
Route::get('/Customer/{id}/edit', 'CustomerController\CustomerController@editCustomer')->name('editCustomer');
Route::post('/Customer/{id}/update', 'CustomerController\CustomerController@updateCustomer')->name('updateCustomer');
Route::delete('/Customer/{id}/delete','CustomerController\CustomerController@deleteCustomer')->name('deleteCustomer');








Route::get('/addEntry', 'EntryController\EntryController@addEntry');
Route::Post('/SaveEntry', 'EntryController\EntryController@saveEntry')->name('saveEntry');
Route::get('/viewEntry', 'EntryController\EntryController@viewEntry');
Route::get('/Entry/{id}/edit', 'EntryController\EntryController@editEntry')->name('editEntry');
Route::post('/Entry/{id}/update','EntryController\EntryController@updateEntry')->name('updateEntry');
Route::delete('/Entry/{id}/delete','EntryController\EntryController@deleteEntry')->name('deleteEntry');


Route::get('/addLorry', 'LorryController\LorryController@addLorry');
Route::Post('/SaveLorry', 'LorryController\LorryController@saveLorry')->name('saveLorry');

Route::get('/Vendor', 'LorryController\LorryController@ShowAllVendor');
Route::get('/SubVendor', 'LorryController\LorryController@ShowAllSubVendor');
Route::get('/VendorName', 'LorryController\LorryController@ShowVendorName');