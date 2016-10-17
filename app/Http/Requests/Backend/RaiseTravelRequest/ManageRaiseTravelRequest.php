<?php

namespace App\Http\Requests\Backend\RaiseTravelRequest;

use App\Http\Requests\Request;

/**
 * Class ManageRoleRequest
 * @package App\Http\Requests\Backend\Access\Role
 */
class ManageRaiseTravelRequest extends Request
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return access()->allow('view-backend;manage-users,true');
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