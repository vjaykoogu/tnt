<?php

Route::group([
    'prefix'     => '',
    'namespace'  => 'Raisetravelrequest',
], function() {

	/**
	 * Adhoc Request Management
	 * Route's removed "SHOW, Update, DESTROY"
	 */
	Route::group([
		'middleware' => 'access.routeNeedsPermission:view-backend;manage-users,true',
	], function() {
		Route::group([], function () {
			Route::resource('raisetravelrequest', 'RaiseTravelRequestController', ['except' => ['show','update', 'destroy']]);

			//Route::post('raisetravelrequest', 'RaiseTravelRequestController@store')->name('admin.raisetravelrequest');
			//For DataTables
			//Route::get('Adhocrequest/get', 'RoleController@get')->name('admin.access.role.get');
		});
	});
});