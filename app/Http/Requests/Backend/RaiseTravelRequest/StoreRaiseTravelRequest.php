<?php

namespace App\Http\Requests\Backend\RaiseTravelRequest;

use App\Http\Requests\Request;

/**
 * Class StoreAdhocRequest
 * @package App\Http\Requests\Backend\Adhoc
 */
class StoreRaiseTravelRequest extends Request
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
            // 'mobile_number' => 'required',
            // 'date_pick'     => 'date_format:"m/d/Y"|required',
            // 'date_pick_to'  => 'date_format:"m/d/Y"|required',
            // 'pickup_time'   => 'required',
            // 'pickup_address'=> 'required',
            // 'reason_for_request' => 'required'
        ];
    }
}
