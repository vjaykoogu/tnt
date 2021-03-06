<?php

namespace App\Http\Requests\Backend\TransportReports;

use App\Http\Requests\Request;

/**
 * Class ManageRoleRequest
 * @package App\Http\Requests\Backend\Access\Role
 */
class ManageTransportReports extends Request
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return access()->allow('view-backend');
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			//
		];
	}
}