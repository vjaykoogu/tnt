<?php
/**
 * This Form only has form section ie: Raise Transport Reports.
 * Might change after DEMO 1.
 */
namespace App\Http\Controllers\Backend\Transportreports;

use App\Models\Transportreports\Transportreports;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\TransportReports\ManageTransportReports;
use App\Models\Access\User\Traits\UserAccess; //For permission.

/**
 * Class TransportRequestController
 * @package App\Http\Controllers\Backend\AdhocRequest
 */
class TransportReportsController extends Controller
{
	

    /**
     * @param ManageTransportRequest $request
     * @return mixed
     */
    public function index(ManageTransportReports $request)
    {	
        return view('backend.Transportreports.index');
    }


    /**
	 * @param ManageRoleRequest $request
	 * @return mixed
	 */
	public function get(ManageTransportReports $request)
	{
		return Datatables::of($this->roles->getForDataTable())
			->addColumn('permissions', function($role) {
				$permissions = [];

				if ($role->all)
					return '<span class="label label-success">' . trans('labels.general.all') . '</span>';

				if (count($role->permissions) > 0) {
					foreach ($role->permissions as $permission) {
						array_push($permissions, $permission->display_name);
					}

					return implode("<br/>", $permissions);
				} else {
					return '<span class="label label-danger">' . trans('labels.general.none') . '</span>';
				}
			})
			->addColumn('users', function($role) {
				return $role->users()->count();
			})
			->addColumn('actions', function($role) {
				return $role->action_buttons;
			})
			->make(true);
	}
    
}