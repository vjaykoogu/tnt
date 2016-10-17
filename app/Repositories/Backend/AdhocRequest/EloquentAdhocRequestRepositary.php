<?php

namespace App\Repositories\Backend\AdhocRequest;

use App\Models\AdhocRequest\AdhocRequest;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;

use App\Events\Backend\AdhocRequest\AdhocRequestCreated;

/**
 * Class EloquentAdhocRequestRepositary
 * @package app\Repositories\AdhocRequest
 */
class EloquentAdhocRequestRepositary implements AdhocRequestRepositaryContract
{
    
	/**
     * @return mixed
     */
    public function getCount() {
        return AdhocRequest::count();
    }

	/**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getForDataTable() {
        return AdhocRequest::all();
    }

    /**
     * @param  string  $order_by
     * @param  string  $sort
     * @param  bool    $withPermissions
     * @return mixed
     */
    public function getAllAdhocRequest($order_by = 'sort', $sort = 'asc', $withPermissions = false)
    {
        if ($withPermissions) {
            return AdhocRequest::with('permissions')
                ->orderBy($order_by, $sort)
                ->get();
        }

        return AdhocRequest::orderBy($order_by, $sort)
            ->get();
    }

    /**
     * @param  $input
     * @param  $AdhocRequest
     * @throws GeneralException
     * @throws UserNeedsAdhocException
     * @return bool
     */
    public function create($input)
    {
        $AdhocRequest = $this->createAdhocRequest($input);

		DB::transaction(function() use ($AdhocRequest) {
			if ($AdhocRequest->save()) {
				
				event(new AdhocRequestCreated($AdhocRequest));
				return true;
			}

        	throw new GeneralException(trans('exceptions.backend.access.users.create_error'));
		});
    }

   
    /**
     * @param  $input
     * @return mixed
     */
    private function createAdhocRequest($input)
    {
        $AdhocRequest            		 = new AdhocRequest;
        $AdhocRequest->name              = $input['name'];
        $AdhocRequest->email             = $input['email'];
        $AdhocRequest->password          = bcrypt($input['password']);
        $AdhocRequest->status            = isset($input['status']) ? 1 : 0;
        $AdhocRequest->confirmation_code = md5(uniqid(mt_rand(), true));
        $AdhocRequest->confirmed         = isset($input['confirmed']) ? 1 : 0;
        return $AdhocRequest;
    }
  
}