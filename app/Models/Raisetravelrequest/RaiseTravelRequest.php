<?php

namespace App\Models\Raisetravelrequest;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RaiseTravelRequest
 * @package App\Models\Raisetravelrequest\RaiseTravelRequest
 */
class RaiseTravelRequest extends Model
{
    //use RoleAccess, RoleAttribute, RoleRelationship;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'travelRequest';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    // 'Mobile_no', 
    //                        'Pickup_date', 
    //                        'Pickup_date_to',
    //                        'Pickup_addredd',
    //                        'Pickup_landmark',
    //                        'Drop_address',
    //                        'Reason_for_request',
            'uniqueId'
                           ];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        
    }
}
