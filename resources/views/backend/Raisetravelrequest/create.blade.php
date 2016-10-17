  @extends ('backend.layouts.master')

  @section ('title', trans('labels.backend.access.travelreim.title') . ' | ' . trans('labels.backend.access.travelreim.create'))

  @section('page-header')
      <h1>
          {{ trans('labels.backend.access.travelreim.title') }}
          <small>{{ trans('labels.backend.access.travelreim.create') }}</small>
      </h1>
  @endsection

  @section('content')
      {{ Form::open(['route' => 'admin.raisetravelrequest.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create_role']) }}

<div class="container-fluid" id='create-role'>
  <!-- Global Traveller's Details -->
    <div class="container-fluid" >
    <h4>Traveller's Details</h4>
    <hr>
   
       <div class="form-group">
            <label class="control-label col-sm-2">Employee Name</label>
            <div class="col-md-6">
             <input type="text" class="form-control" disabled>
            </div>
            <label class="control-label col-sm-2">Employee ID</label>
            <div class="col-md-2">
             <input type="text" class="form-control" disabled>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Department</label>
            <div class="col-md-6">
             <input type="text" class="form-control" disabled>
            </div>
            <label class="control-label col-sm-2">Team</label>
            <div class="col-md-2">
             <input type="text" class="form-control" disabled>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Designation</label>
            <div class="col-md-3">
             <input type="text" class="form-control" disabled>
            </div>
            <label class="control-label col-sm-1">Site</label>
            <div class="col-md-2">
             <input type="text" class="form-control" disabled>
            </div>
        </div>
  </div>
  <!-- @End Global Traveller's Details -->
         

     <div class="container">
  	<div class="row">
  		<section>
          <div class="wizard">
              <div class="wizard-inner">
                  <div class="connecting-line"></div>
                  <ul class="nav nav-tabs" role="tablist">

                      <li role="presentation" class="active">
                          <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Traveller's Details">
                              <span class="round-tab">
                                  <i class="glyphicon glyphicon-folder-open"></i>
                              </span>
                          </a>
                      </li>

                      <li role="presentation" class="disabled">
                          <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Travel Details">
                              <span class="round-tab">
                                  <i class="glyphicon glyphicon-pencil"></i>
                              </span>
                          </a>
                      </li>
                      <li role="presentation" class="disabled">
                          <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Travel Advance">
                              <span class="round-tab">
                                  <i class="glyphicon glyphicon-picture"></i>
                              </span>
                          </a>
                      </li>

                      <li role="presentation" class="disabled">
                          <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Additional Details">
                              <span class="round-tab">
                                  <i class="glyphicon glyphicon-ok"></i>
                              </span>
                          </a>
                      </li>
                  </ul>
              </div>

              
                  <div class="tab-content">
                                 
                      <div class="tab-pane active" role="tabpanel" id="step1">

              <!-- Form 1 start's from  here -->
              <div class="box box-success">
             


              <div class="box-body">
                  <div class="form-group">
                      {{ Form::label('name', trans('validation.attributes.backend.access.Travelreim.requested-for'), ['class' => 'col-md-2 control-label']) }}

                      <div class="col-md-3">
                           {{ Form::select('associated_permissions', array('self' => trans('labels.general.self'), 'on-behalf' => trans('labels.general.on-behalf')), 'all', ['class' => 'form-control', 'onchange' => "if(this.value=='on-behalf'){this.form['onbehalfof'].style.visibility='visible'}else {this.form['onbehalfof'].style.visibility='hidden'};" ]) }}
                      </div><!--col-lg-10-->

                      {{ Form::label('onbehalfof', trans('validation.attributes.backend.access.Travelreim.on-behalf-of'), ['class' => 'col-md-2 control-label', 'style' => 'visibility:hidden;']) }}

                      <div class="col-md-3">
                       {{ Form::text('onbehalfof', null, ['class' => 'form-control', 'style' => 'visibility:hidden;', 'placeholder' => trans('validation.attributes.backend.access.Travelreim.on-behalf-of')]) }}
                       </div><!--col-lg-10-->

                  </div><!--form control-->

                  
                  <div class="form-group">
                      {{ Form::label('is_billable', trans('validation.attributes.backend.access.Travelreim.is-billable'), ['class' => 'col-lg-2 control-label']) }}

                      <div class="col-md-3">
                         {{ Form::select('is_billable', array('yes' => trans('labels.general.yes'), 'no' => trans('labels.general.no')), 'all', ['class' => 'form-control']) }}
                      </div><!--col-lg-10-->

                      {{ Form::label('sort', trans('validation.attributes.backend.access.Travelreim.billable-cost-center'), ['class' => 'col-lg-2 control-label']) }}

                       <div class="col-md-3">
                         {{ Form::text('billable_cost_center', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.Travelreim.billable-cost-center')]) }}
                      </div><!--col-lg-10-->

                  </div><!--form control-->

                   <div class="form-group">
                      {{ Form::label('typetravel', trans('validation.attributes.backend.access.Travelreim.type-of-travel'), ['class' => 'col-lg-2 control-label']) }}

                      <div class="col-md-3">
                         {{ Form::select('typetravel', array('domestic' => trans('labels.general.domestic'), 'international' => trans('labels.general.international')), 'all', ['class' => 'form-control','id'=>'type_travel']) }}
                      </div><!--col-lg-10-->

                      {{ Form::label('approver', trans('validation.attributes.backend.access.Travelreim.approver'), ['class' => 'col-lg-2 control-label']) }}

                      <div class="col-md-3">
                         {{ Form::select('approver', array('self' => trans('labels.general.self'), 'custom' => trans('labels.general.custom')), 'all', ['class' => 'form-control']) }}
                      </div><!--col-lg-10-->

                   </div>

              </div><!-- /.box-body -->
          </div><!--box-->

          <!-- Travel Insurance Form -->
          <div class="box box-success" id='hiddendiv'>
              <div class="box-body">
               <div class="box-header with-border">
                  <h3 class="box-title">{{ trans('labels.backend.access.travelreim.tid') }}</h3>
              </div><!-- /.box-header --><br />

              <div class="form-group">
                  {{ Form::label('travel_insurance_req', trans('validation.attributes.backend.access.Travelreim.travel-insurance-req'), ['class' => 'col-lg-2 control-label']) }}

                  <div class="col-md-2">
                       {{ Form::select('travel_insurance_req', array('yes' => trans('labels.general.yes'), 'no' => trans('labels.general.no')), 'all', ['class' => 'form-control']) }}
                  </div>

                  {{ Form::label('visa_required', trans('validation.attributes.backend.access.Travelreim.visa-required'), ['class' => 'col-lg-2 control-label']) }}

                   <div class="col-md-2">
                       {{ Form::select('visa_required', array('yes' => trans('labels.general.yes'), 'no' => trans('labels.general.no')), 'all', ['class' => 'form-control']) }}
                  </div>
              </div>

              <div class="form-group">
                  {{ Form::label('type_of_visa', trans('validation.attributes.backend.access.Travelreim.type-of-visa'), ['class' => 'col-lg-2 control-label']) }}

                   <div class="col-md-2">
                       {{ Form::select('type_of_visa', array('business' => trans('labels.visa.business'), 'work-permit' => trans('labels.visa.work-permit'),'visa-on-arrival' => trans('labels.visa.visa-on-arrival'),'d-type' => trans('labels.visa.d-type'),'b1' => trans('labels.visa.b1'),'b2' => trans('labels.visa.b2'),'Others' => trans('labels.visa.Others')), 'all', ['class' => 'form-control']) }}
                  </div>

              </div>

               <div class="form-group">
                  {{ Form::label('sex', trans('validation.attributes.backend.access.Travelreim.sex'), ['class' => 'col-lg-2 control-label']) }}

                  <div class="col-md-2">
                       {{ Form::select('sex', array('male' => trans('labels.general.male'), 'female' => trans('labels.general.female')), 'all', ['class' => 'form-control']) }}
                  </div>

                  {{ Form::label('dob', trans('validation.attributes.backend.access.Travelreim.dob'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-md-4">
                      {{ Form::text('dob', null, ['class' => 'form-control','id' => 'dob', 'placeholder' => trans('validation.attributes.backend.access.Travelreim.dob')]) }}
                  </div>

               </div>

               <div class="form-group">
                  {{ Form::label('passport_number', trans('validation.attributes.backend.access.Travelreim.passport-number'), ['class' => 'col-lg-2 control-label']) }}

                  <div class="col-md-4">
                      {{ Form::text('passport_number', null, ['class' => 'form-control','id' => 'dob', 'placeholder' => trans('validation.attributes.backend.access.Travelreim.passport-number')]) }}
                  </div>

               </div>

               <div class="form-group">
                  {{ Form::label('address_insured_person', trans('validation.attributes.backend.access.Travelreim.address-insured-person'), ['class' => 'col-lg-2 control-label']) }}

                   <div class="col-md-4">
                      {{ Form::textarea('address_insured_person', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.Travelreim.address-insured-person')]) }}
                  </div>

               </div>

                <div class="form-group">
                  {{ Form::label('surname', trans('validation.attributes.backend.access.Travelreim.surname'), ['class' => 'col-lg-2 control-label']) }}

                   <div class="col-md-4">
                      {{ Form::text('surname', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.Travelreim.surname')]) }}
                  </div>

                  {{ Form::label('nominee_name', trans('validation.attributes.backend.access.Travelreim.nominee-name'), ['class' => 'col-lg-2 control-label']) }}

                   <div class="col-md-3">
                      {{ Form::text('nominee_name', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.Travelreim.nominee-name')]) }}
                  </div>
               </div>

                <div class="form-group">
                  {{ Form::label('state', trans('validation.attributes.backend.access.Travelreim.state'), ['class' => 'col-lg-2 control-label']) }}

                  <div class="col-md-4">
                       {{ Form::select('state', array('male' => trans('labels.general.male'), 'female' => trans('labels.general.female')), 'all', ['class' => 'form-control']) }}
                  </div>

                  {{ Form::label('mobile_no', trans('validation.attributes.backend.access.Travelreim.mobile-no'), ['class' => 'col-lg-2 control-label']) }}

                  <div class="col-md-2">
                   {{ Form::text('mobile_no', null, ['class' => 'form-control', 'maxlength' => '10', 'placeholder' => trans('validation.attributes.backend.access.Travelreim.mobile-no')]) }}
                   </div>

                </div>

                 <div class="form-group">
                      {{ Form::label('relationship', trans('validation.attributes.backend.access.Travelreim.relationship'), ['class' => 'col-lg-2 control-label']) }}

                      <div class="col-md-4">
                       {{ Form::select('relationship', array('father' => trans('labels.general.father'), 'mother' => trans('labels.general.mother'),'brother' => trans('labels.general.brother'), 'sister' => trans('labels.general.sister'), 'spouse' => trans('labels.general.spouse'),'otherr' => trans('labels.general.otherr')), 'all', ['class' => 'form-control']) }}
                  </div>
                 </div>

              </div>
          </div>
          <!-- End Travel Insurance Form -->
           
          <!-- @End of form 1 or Tab -->
                          <ul class="list-inline pull-right">
                              <li><input type="submit" class="btn btn-primary next-step" id="form_one" value="Submit"></li>
                              <!--li><button type="button" class="btn btn-primary next-step" id="form_one">Save and continue</button></li-->
                          </ul>
                      </div> <!-- End form 1 here.-->
                         
                      <div class="tab-pane" role="tabpanel" id="step2">
                         <!-- Form 2nd start's from  here -->
              <div class="box box-success">      

              <div class="box-body">
                  <div class="form-group">
                   <div class="box-header with-border">
                 		 <h3 class="box-title">Travel Detail's</h3>
              	</div><!-- /.box-header --><br />
                      {{ Form::label('purpose_of_travel', trans('validation.attributes.backend.access.Travelreim.purpose-of-travel'), ['class' => 'col-md-2 control-label']) }}

                      <div class="col-md-3">
                           {{ Form::select('purpose_of_travel', array('business-meeting' => trans('labels.general.business-meeting'), 'training' => trans('labels.general.training'), 'Knowledge-transfer' => trans('labels.general.Knowledge-transfer'), 'seminar-workshop' => trans('labels.general.seminar-workshop'), 'business-knowledge' => trans('labels.general.business-knowledge'), 'work-on-site' => trans('labels.general.work-on-site')), 'all', ['class' => 'form-control']) }}
                      </div><!--col-lg-10-->

                      {{ Form::label('project_type', trans('validation.attributes.backend.access.Travelreim.project-type'), ['class' => 'col-lg-2 control-label']) }}

                      <div class="col-md-3">
                         {{ Form::select('project_type', array('bau' => trans('labels.general.bau'), 'client-project' => trans('labels.general.client-project'), 'internal-project' => trans('labels.general.internal-project'), 'otherr' => trans('labels.general.otherr')), 'all', ['class' => 'form-control']) }}
                      </div><!--col-lg-10-->

                  </div><!--form control-->

                  
                  <div class="form-group">
                      {{ Form::label('specific_purpose', trans('validation.attributes.backend.access.Travelreim.specific-purpose'), ['class' => 'col-md-2 control-label']) }}

                      <div class="col-md-3">
                      {{ Form::textarea('specific_purpose', null, ['class' => 'form-control', 'id' => 'pickup_address', 'size' => '30x5']) }}
                       </div><!--col-lg-10-->

                      {{ Form::label('project_name', trans('validation.attributes.backend.access.Travelreim.project-name'), ['class' => 'col-lg-2 control-label']) }}

                       <div class="col-md-3">
                        
                          {{ Form::textarea('project_name', null, ['class' => 'form-control', 'id' => 'pickup_address', 'size' => '30x5']) }}

                      </div><!--col-lg-10-->

                  </div><!--form control-->

                  <div class="form-group">
                  	 {{ Form::label('ticket-booking', trans('validation.attributes.backend.access.Travelreim.ticket-booking'), ['class' => 'col-lg-2 control-label']) }}

                       <div class="col-md-3">
                        {{ Form::select('ticket_booking', array('no' => trans('labels.general.no'), 'yes' => trans('labels.general.yes')), 'all', ['class' => 'form-control','id'=>'ticket_booking']) }}
                      </div><!--col-lg-10-->

                      {{ Form::label('amount_requested', trans('validation.attributes.backend.access.Travelreim.amount-requested'), ['class' => 'col-lg-2 control-label']) }}

                       <div class="col-md-3">
                        {{ Form::select('amount_requested', array('no' => trans('labels.general.no'), 'yes' => trans('labels.general.yes')), 'all', ['class' => 'form-control','id'=>'amount_requested']) }}
                      </div><!--col-lg-10-->

                  </div>

                 

              </div><!-- /.box-body -->
          </div><!--box-->   

          <!-- Table's-->
           <!-- Form 2nd start's from  here -->
           <div class="box box-success" id='row_dim' >      
              <div class="box-body">
               <div class="box-header with-border">
                  <h3 class="box-title">Ticket Booking</h3>
              </div><!-- /.box-header --><br />
               	<div class="form-group">
               		<div class="container">
      <div class="row clearfix">
  		<div class="col-md-12 column">
  			<table class="table table-bordered table-hover" id="tab_logic">
  				<thead>
  					<tr >
  						<th class="text-center">
  							#
  						</th>
  						<th class="text-center">
  							From
  						</th>
  						<th class="text-center">
  							To
  						</th>
  						<th class="text-center">
  							Date of Travel
  						</th>
  						<th class="text-center">
  							Ticketing Details
  						</th>
  					</tr>
  				</thead>
  				<tbody>
  					<tr id='addr0'>
  						<td>
  						1
  						</td>
  						<td>
  						<input type="text" name='from'  placeholder='From' class="form-control"/>
  						</td>
  						<td>
  						<input type="text" name='to' placeholder='To' class="form-control"/>
  						</td>
  						<td>
  						<input type="text" name='travel_date' id='from_date' placeholder='Travel Date' class="form-control"/>
  						</td>
  						<td>
  						{{ Form::select('travel_type', array('air' => trans('labels.general.air'), 'train' => trans('labels.general.train')), 'all', ['class' => 'form-control'  ]) }}
  						</td>
  					</tr>
                      <tr id='addr1'></tr>
  				</tbody>
  			</table>
  		</div>
  	</div>
  	<a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
    </div>
               	</div>
              </div>
           </div>

           <!-- Accomodation Form-->

           <div class="box box-success" id='accomodation' >      
              <div class="box-body">
               <div class="box-header with-border">
                  <h3 class="box-title">Accomodation</h3>
              </div><!-- /.box-header --><br />
               	<div class="form-group">
               		<div class="container">
      <div class="row clearfix">
  		<div class="col-md-12 column">
  			<table class="table table-bordered table-hover" id="tab_logicc">
  				<thead>
  					<tr >
  						<th class="text-center">
  							#
  						</th>
  						<th class="text-center">
  							City
  						</th>
  						<th class="text-center">
  							From Date
  						</th>
  						<th class="text-center">
  							To Date
  						</th>
  						<th class="text-center">
  							Time Of Reporting
  						</th>
  					</tr>
  				</thead>
  				<tbody>
  					<tr id='addr0'>
  						<td>
  						1
  						</td>
  						<td>
  						<input type="text" name='city'  placeholder='City' class="form-control"/>
  						</td>
  						<td>
  						<input type="text" name='from_date' placeholder='To' class="form-control" id = 'fr_date'/>
  						</td>
  						<td>
  						<input type="text" name='to_date' id='to_date' placeholder='To Date' class="form-control"/>
  						</td>
  						<td>
  						{{ Form::select('travel_type', array('air' => trans('labels.general.air'), 'train' => trans('labels.general.train')), 'all', ['class' => 'form-control'  ]) }}
  						</td>
  					</tr>
                      <tr id='addr1'></tr>
  				</tbody>
  			</table>
  		</div>
  	</div>
  	<a id="add_roww" class="btn btn-default pull-left">Add Row</a><a id='delete_roww' class="pull-right btn btn-default">Delete Row</a>
    </div>
               	</div>
              </div>
           </div>


                          <ul class="list-inline pull-right">
                              <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                              <li><input type="Submit" class="btn btn-primary next-step" id="form_two" value="Submit and Continue"></li>
                          </ul>
                      </div>
                         
                      <div class="tab-pane" role="tabpanel" id="step3">
                          <!-- Step 3 form-->
                          <div class="box box-success">          


              <div class="box-body">
                  <div class="form-group">
                      {{ Form::label('forex_required', trans('validation.attributes.backend.access.Travelreim.forex-required'), ['class' => 'col-md-2 control-label']) }}

                      <div class="col-md-3">
                           {{ Form::select('forex_required', array('no' => trans('labels.general.no'), 'yes' => trans('labels.general.yes')), 'all', ['class' => 'form-control', 'id' => 'forex_required' ]) }}
                      </div><!--col-lg-10-->  

                        {{ Form::label('card_number', trans('validation.attributes.backend.access.Travelreim.card-number'), ['class' => 'col-lg-2 control-label']) }}

                       <div class="col-md-3">
                         {{ Form::text('card_number', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.Travelreim.card-number')]) }}
                      </div><!--col-lg-10-->

                  </div><!--form control-->

                  
                  <div class="form-group" id="travel_advance">

               		<div class="container">
      <div class="row clearfix">
  		<div class="col-md-12 column">
  			<table class="table table-bordered table-hover" id="tab_logicacc">
  				<thead>
  					<tr >
  						<th class="text-center">
  							#
  						</th>
  						<th class="text-center">
  							Amount
  						</th>
  						<th class="text-center">
  							Curreny
  						</th>						
  					</tr>
  				</thead>
  				<tbody>
  					<tr id='addr0'>
  						<td>
  						1
  						</td>
  						<td>
  							<input type="text" name='amount'  placeholder='Amount' class="form-control"/>
  						</td>
  						
  						<td>
  						{{ Form::select('amount', array('select' => trans('labels.general.select'), 
  						'inr' => trans('labels.general.inr'),
  						'usd' => trans('labels.general.usd'),
  						'euro' => trans('labels.general.euro'),
  						'singapore-dollar' => trans('labels.general.singapore-dollar'),
  						'gbp' => trans('labels.general.gbp'),
  						'hkd' => trans('labels.general.hkd'),
  						'japanese-yen' => trans('labels.general.japanese-yen'),
  						'chf' => trans('labels.general.chf'),
  						'aed' => trans('labels.general.aed'),
  						), 'all', ['class' => 'form-control'  ]) }}
  						</td>
  					</tr>
                      <tr id='addr1'></tr>
  				</tbody>
  			</table>
  		</div>
  	</div>
  	<a id="add_rowacc" class="btn btn-default pull-left">Add Row</a><a id='delete_rowacc' class="pull-right btn btn-default">Delete Row</a>
    </div>
               	</div>

                 
              </div><!-- /.box-body -->
          </div><!--box-->


                          <ul class="list-inline pull-right">
                              <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                              
                              <li><input type="Submit" class="btn btn-primary next-step" id="form_three" value="Save and Continue"></li>
                          </ul>
                      </div>
                       
                      <div class="tab-pane" role="tabpanel" id="complete">
                          <div class="box box-success">  
              <div class="box-body">

              	 <div class="form-group">
                      {{ Form::label('attached-documents', trans('validation.attributes.backend.access.Travelreim.attached-documents'), ['class' => 'col-md-2 control-label']) }}

                      <div class="col-md-3">
                           {!! Form::file('file') !!}
                      </div><!--col-lg-10--> 

                       {{ Form::label('personal_email_id', trans('validation.attributes.backend.access.Travelreim.personal-email-id'), ['class' => 'col-md-2 control-label']) }}

                      <div class="col-md-3">
                          {{ Form::text('personal_email_id', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.Travelreim.personal-email-id')]) }}
                      </div><!--col-lg-10--> 

                  </div><!--form control-->

                  <div class="form-group">
                      {{ Form::label('remarks', trans('validation.attributes.backend.access.Travelreim.remarks'), ['class' => 'col-md-2 control-label']) }}

                      <div class="col-md-3">
                           {{ Form::textarea('remarks', null, ['class' => 'form-control', 'id' => 'remarks', 'size' => '30x5']) }}
                      </div><!--col-lg-10--> 
                  </div><!--form control-->

              </div><!-- /.box-body -->
          </div><!--box-->

          	 <ul class="list-inline pull-right">
                              <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                             
                              <li><input type="Submit" class="btn btn-primary next-step" id="form_four" value="Save and Continue"></li>
                          </ul>

                      </div>
                      <div class="clearfix"></div> 
                  </div>
             
          </div>
      </section>
     </div>
  </div>
{{ Form::close() }}

<script type="text/javascript">
$.ajaxSetup({
   headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});
</script>
     
  @stop

  @section('after-scripts-end')
      {{ Html::script('js/backend/raisetravelrequest/script.js') }}
      {{ Html::style('css/backend/raisetravelrequest/style.css') }}
  @stop
