<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travelRequest', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uniqueId');
            $table->string('workFlowId');
            $table->string('currentStage');
            $table->integer('noOfStages');
            $table->date('requestedDate');
            $table->string('requestedfor'); //employee_id will below this
            $table->string('requestedBy');
            $table->string('personnelMailId'); //Approver id will come below this.
            $table->string('billableCostCenter');
            $table->boolean('isBillable');
            $table->string('oppCompany');
            $table->string('purpose');
            $table->boolean('accomodationReq');
            $table->boolean('insuranceReq');
            $table->boolean('forexReq');
            $table->boolean('advReq');
            $table->boolean('ticketBookngReq');
            $table->string('travelType');
            $table->string('description');
            $table->boolean('visaReq');
            $table->string('remark');
            $table->boolean('isReimbursed');
            $table->date('modifiedDate');
            $table->string('modifiedBy');
            $table->string('cardNumber');
            $table->string('commentOfApprover');
            $table->string('visaType');
            $table->string('otherVisa');
            $table->string('mobileNumber');
            $table->string('project_type');
            $table->string('project_name');
            $table->string('specific_purpose');
                     
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
        //
    }
}
