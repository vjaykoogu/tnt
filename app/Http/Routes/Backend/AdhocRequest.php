<?php

Route::group([
    'prefix'     => '',
    'namespace'  => 'Adhocrequest',
], function() {

	/**
	 * Adhoc Request Management
	 * Route's removed "SHOW, Update, DESTROY"
	 */
	Route::group([
		'middleware' => 'access.routeNeedsPermission:view-backend;manage-users,true'
	], function() {
		Route::group([], function () {
			Route::resource('adhocrequest', 'AdhocRequestController', ['except' => ['show','update', 'destroy']]);

			//For DataTables
			Route::get('Adhocrequest/getCustomFilterData', 'AdhocRequestController@getCustomFilterData')->name('admin.adhocrequest.getCustomFilterData');
		});
	});
});