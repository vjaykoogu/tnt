<?php

namespace App\Repositories\Backend\AdhocRequest;

use App\Models\AdhocRequest\AdhocRequest;

/**
 * Interface AdhocRequestRepositaryContract
 * @package app\Repositories\AdhocRequest
 */
interface AdhocRequestRepositaryContract
{

    /**
     * @param  string  $order_by
     * @param  string  $sort
     * @param  bool    $withPermissions
     * @return mixed
     */
    public function getAllAdhocRequest($order_by = 'id', $sort = 'asc', $withPermissions = false);

    /**
     * @param  $input
     * @return mixed
     */
    public function create($input);

    /**
     * @return mixed
     */
    public function getCount();

}