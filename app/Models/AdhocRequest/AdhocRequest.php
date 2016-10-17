<?php

namespace App\Models\AdhocRequest;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AdhocRequest
 * @package App\Models\AdhocRequest\AdhocRequest
 */
class AdhocRequest extends Model
{
    //use RoleAccess, RoleAttribute, RoleRelationship;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'transportRequests';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Mobile_no', 
                           'Pickup_date', 
                           'Pickup_date_to',
                           'Pickup_addredd',
                           'Pickup_landmark',
                           'Drop_address',
                           'Reason_for_request',
                           ];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        
    }
}
