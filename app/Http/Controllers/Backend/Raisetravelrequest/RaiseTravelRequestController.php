<?php
/**
 * This Form only has form section ie: Raise Adhoc Request.
 * Might change after DEMO 1.
 */
namespace App\Http\Controllers\Backend\Raisetravelrequest;

use App\Models\Raisetravelrequest\RaiseTravelRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\RaiseTravelRequest\StoreRaiseTravelRequest;
use App\Http\Requests\Backend\RaiseTravelRequest\ManageRaiseTravelRequest;
use App\Models\Access\User\Traits\UserAccess; //For permission.

/**
 * Class AdhocRequestController
 * @package App\Http\Controllers\Backend\AdhocRequest
 */
class RaiseTravelRequestController extends Controller
{
	
    /**
     * @param ManageRaiseTravelRequest $request
     * @return mixed
     */
    public function create(ManageRaiseTravelRequest $request)
    {	
        return view('backend.Raisetravelrequest.create');
    }

    /**
     * @param  StoreRaiseTravelRequest $request
     * @return mixed
     */
    public function store(StoreRaiseTravelRequest $request)
    {
    	if($request->ajax())
        {
            $input = $request->all();
            $uniqueId = $input['_token'];

            $raiseTravelRequest =  RaiseTravelRequest::firstOrCreate(['uniqueId' => $uniqueId]);

            $raiseTravelRequest->uniqueId = $input['_token'];
            $raiseTravelRequest->requestedBy = $input['associated_permissions'];
            $raiseTravelRequest->requestedfor = $input['onbehalfof'];
            $raiseTravelRequest->isBillable =  $input['is_billable'];
            $raiseTravelRequest->billableCostCenter = $input['billable_cost_center'];
            $raiseTravelRequest->travelType = $input['typetravel'];
            //$raiseTravelRequest->approver = $input['approver'];
            $raiseTravelRequest->purpose =  $input['purpose_of_travel'];
            //$raiseTravelRequest->projectType =  $input['project_type'];
            //$raiseTravelRequest->projectName =  $input['project_name'];
           // $raiseTravelRequest->briefSummary = $input['specific_purpose'];
            $raiseTravelRequest->forexReq = $input['forex_required'];
            $raiseTravelRequest->cardNumber = $input['card_number'];
            $raiseTravelRequest->personnelMailId = $input['personal_email_id'];
            $raiseTravelRequest->ticketBookngReq = $input['ticket_booking'];
            $raiseTravelRequest->accomodationReq = $input['visa_required'];
            $raiseTravelRequest->visaReq =  $input['visa_required'];
            $raiseTravelRequest->insuranceReq = $input['travel_insurance_req'];
            $raiseTravelRequest->visaType = $input['type_of_visa'];
            $raiseTravelRequest->visaReq = $input['visa_required'];

            $raiseTravelRequest->save();
        }
        
        //Redirection with Message.
        return redirect()->route('admin.raisetravelrequest.create')->withFlashSuccess(trans('alerts.backend.AdhocRequest.created'));
    }

    /**
     * @param ManageRaiseTravelRequest $request
     * @return mixed
     */
    public function index(ManageRaiseTravelRequest $request)
    {   
        return view('backend.Raisetravelrequest.index');
    }

    /**
     * Form one method
     */
    public function form_one(StoreRaiseTravelRequest  $request)
    {
       // print_r($_post);
        if($request->ajax())
        {
            print_r($request->all());
        }

    }
}