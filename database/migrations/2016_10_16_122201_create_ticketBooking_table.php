<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticketBooking', function (Blueprint $table) {
            $table->increments('ticketId'); 
            $table->unsignedInteger('id')->nullable();

            $table->string('fromCity');
            $table->string('toCity');
            $table->date('dateOfTravel');
            $table->string('ticketDetails');
            
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at');
            $table->softDeletes();
        });

        // Schema::table('ticketBooking', function($table) {
        //       $table->foreign('id')->references('ticketId')->on('travelRequest');
       //});
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
