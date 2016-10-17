<?php

Route::group([
    'prefix'     => '',
    'namespace'  => 'Transportreports',
], function() {

	/**
	 * Adhoc Request Management
	 * Route's removed "Create, Update, DESTROY"
	 */
	Route::group([
		'middleware' => 'access.routeNeedsPermission:view-backend',
	], function() {
		Route::group([], function () {
			Route::resource('transportreports', 'TransportReportsController', ['except' => ['create','update', 'destroy']]);

			/**
			 * For DataTables
			 */
			Route::get('transportreports/get', 'TransportReportsController@get');
		});
	});
});