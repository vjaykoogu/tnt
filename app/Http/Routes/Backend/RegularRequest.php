<?php

Route::group([
    'prefix'     => '',
    'namespace'  => 'Regularrequest',
], function() {

	/**
	 * Regular Request Management
	 * Route's removed "Create, Update, DESTROY"
	 */
	Route::group([
		'middleware' => 'access.routeNeedsPermission:view-backend',
	], function() {
		Route::group([], function () {
			Route::resource('regularrequest', 'RegularRequestController', ['except' => ['create','update', 'destroy']]);

			//For DataTables
			//Route::get('Adhocrequest/get', 'RoleController@get')->name('admin.access.role.get');
		});
	});
});