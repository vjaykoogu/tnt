<?php

namespace App\Events\Backend\AdhocRequest;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;

/**
 * Class RoleCreated
 * @package App\Events\Backend\Access\Role
 */
class AdhocRequestCreated extends Event
{
	use SerializesModels;

	/**
	 * @var $role
	 */
	public $adhocRequest;

	/**
	 * @param $role
	 */
	public function __construct($adhocRequest)
	{
		$this->adhocRequest = $adhocRequest;
	}
}