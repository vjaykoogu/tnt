<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranpRrequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tranp_request', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_from')->nullable();
            $table->date('date_to')->nullable();
            $table->time('pick_time');
            $table->string('pickup_landmark')->nullable();
            $table->string('pickup_address')->nullable();
            $table->string('drop_address')->nullable();
            $table->time('drop_time');
            $table->text('reason_for_request')->nullable();   
                     
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
