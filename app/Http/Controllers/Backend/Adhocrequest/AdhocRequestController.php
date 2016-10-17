<?php
/**
 * This Form only has form section ie: Raise Adhoc Request.
 * Might change after DEMO 1.
 */
namespace App\Http\Controllers\Backend\Adhocrequest;

use App\Models\Adhocrequest\AdhocRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\AdhocRequest\StoreAdhocRequest;
use App\Http\Requests\Backend\AdhocRequest\ManageAdhocRequest;
use App\Models\Access\User\Traits\UserAccess; //For permission.
use Yajra\Datatables\Facades\Datatables;

/**
 * Class AdhocRequestController
 * @package App\Http\Controllers\Backend\AdhocRequest
 */
class AdhocRequestController extends Controller
{

     /**
     * @var AdhocRequestRepositaryContract
     */
    protected $adhoc;

    /**
     * @param AdhocRequestRepositoryContract       $adhoc
     * 
     */
    public function __construct(AdhocRequest $adhoc)
    {
        $this->adhoc = $adhoc;
    }

    public function getCustomFilterData(ManageAdhocRequest $request)
    {
        $adhocRequest = AdhocRequest::all();

        // if($request->get('workFlowId'));
        // echo $request->get('workFlowId');
        // else
        //     echo 'nothing here'; exit;
        echo $request->get('workFlowId');
        return Datatables::of($adhocRequest)
            ->filter(function ($instance) use ($request) {
                if ($request->has('workFlowId')) {
                $query->where('workFlowId', 'like', "%{$request->get('workFlowId')}%");
            }
            })
            ->make(true);
    }

	
	 /**
     * @param ManageAdhocRequest $request
     * @return mixed
     */
    public function index(ManageAdhocRequest $request)
    {	
        return view('backend.Adhocrequest.index');
    }

    /**
     * @param ManageAdhocRequest $request
     * @return mixed
     */
    public function create(ManageAdhocRequest $request)
    {	
        return view('backend.Adhocrequest.create');
    }

    /**
     * @param  StoreRoleRequest $request
     * @return mixed
     */
    public function store(StoreAdhocRequest $request)
    {   
         $input = $request->all();
        //  $ids   = \App\Models\Adhocrequest\AdhocRequest::pluck('id');
        //  print_r($ids);

         // Generate a new unique number
        //do {
            $id = rand(1000, 9999);
        //} while (in_array($id, $ids[0]));

        // echo '<pre>';
        // print_r($input);

    	$adhocRequest                    = new AdhocRequest;
        $adhocRequest->workFlowId        = 'wrk'.$id;
        $adhocRequest->onBehalfOf        = $input['request_for'];
        $adhocRequest->requestedFor      = isset($input['request_for_name']) ? $input['request_for_name'] :'';
        $adhocRequest->contactNumber     = $input['mobile_number'];
        $adhocRequest->pickupDate        = $input['date_pick'];
        $adhocRequest->pickupDate        = $input['date_pick'];
        $adhocRequest->pickupDateUpTo    = $input['date_pick_to'];
        $adhocRequest->pickupTime        = $input['pickup_time'];
        $adhocRequest->pickUpAddress     = $input['pickup_address'];
        $adhocRequest->dropAddress       = $input['drop_address'];
        $adhocRequest->pickLandMark      = $input['pickup_landmark'];
        $adhocRequest->reason            = $input['reason_for_request'];
        $adhocRequest->dropRequired      = isset($input['request_for_box']) ? $input['request_for_box'] :'';
       
       
         $adhocRequest->save();
        
        //Redirection with Message.
        return redirect()->route('admin.adhocrequest.create')->withFlashSuccess(trans('alerts.backend.AdhocRequest.created'));
    }
}