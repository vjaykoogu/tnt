<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('transportRequests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('workFlowId')->unique();
          //  $table->foreign('employee_id')->references('employee_id')->on('users');
           // $table->foreign('approver_id')->references('approver_id')->on('approver');
            $table->date('requestedDate');
            $table->string('onBehalfOf');
            $table->string('requestedFor');
            $table->date('pickupDate');
            $table->time('pickupTime');
            $table->string('employeeName');
            $table->string('department');
            $table->string('team');
            $table->string('contactNumber');
            $table->string('costCenter');
            $table->mediumText('pickUpAddress');
            $table->mediumText('dropAddress');
            $table->mediumText('pickLandMark');
            $table->mediumText('reason');
            $table->string('cabNumber');
            $table->string('driverName');
            $table->string('driverContactDetails');
            $table->mediumText('remark');
            $table->time('modifiedDate');
            $table->string('modifiedBy');
            $table->boolean('dropRequired')->default(false);
            $table->date('pickupDateUpTo');
            $table->time('dropTime');                     
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transportRequests');
    }
}
