<?php

namespace App\Events\Backend\RaiseTravelRequest;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;

/**
 * Class RoleCreated
 * @package App\Events\Backend\Access\Role
 */
class RaiseTravelRequestCreated extends Event
{
	use SerializesModels;

	/**
	 * @var $role
	 */
	public $RaiseTravelRequest;

	/**
	 * @param $role
	 */
	public function __construct($RaiseTravelRequest)
	{
		$this->RaiseTravelRequest = $RaiseTravelRequest;
	}
}