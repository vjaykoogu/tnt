<?php
/**
 * This Form only has form section ie: Raise Transport Reports.
 * Might change after DEMO 1.
 */
namespace App\Http\Controllers\Backend\Regularrequest;

use App\Models\RegularRequest\RegularRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\RegularRequest\ManageRegularRequest;
use App\Models\Access\User\Traits\UserAccess; //For permission.

/**
 * Class AdhocRequestController
 * @package App\Http\Controllers\Backend\AdhocRequest
 */
class RegularRequestController extends Controller
{
	

    /**
     * @param ManageAdhocRequest $request
     * @return mixed
     */
    public function index(ManageRegularRequest $request)
    {	
        return view('backend.Regularrequest.index');
    }

    
}