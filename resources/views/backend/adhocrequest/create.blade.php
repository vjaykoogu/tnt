@extends ('backend.layouts.master')

@section ('title', trans('labels.backend.access.transport.main') . ' | ' . trans('labels.backend.access.transport.main'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.access.transport.main') }}
        <small>{{ trans('labels.backend.access.transport.empl_details') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::open(['route' => 'admin.adhocrequest.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'adhocform']) }}

        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.access.transport.empl_details') }}</h3>
            </div><!-- /.box-header -->

            <div class="box-body">
                <div class="form-group">
                    {{ Form::label('name', trans('validation.general.common.requested-for'), ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-md-3">
                        {{ Form::select('request_for', array('self' => trans('labels.general.self'), 'on-behalf' => trans('labels.general.on-behalf'), 'visitor' => trans('labels.general.visitor')), 'all', ['class' => 'form-control', 'onchange' => "if(this.value=='on-behalf' ||  this.value=='visitor'){this.form['request_for_name'].style.visibility='visible'}else {this.form['request_for_name'].style.visibility='hidden'};" ]) }}
                    </div><!--col-lg-10-->

                    <div class="col-md-3">
                        {{ Form::text('request_for_name', null, ['class' => 'form-control', 'id' => 'request_for_name','style' => 'visibility:hidden;', 'placeholder' => trans('validation.general.common.requested-for')]) }}
                    </div>


                </div><!--form control-->

                <div class="form-group">
                    {{ Form::label('employee_name', trans('validation.general.common.employee-id'), ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-md-3">
                        {{ Form::text('employee_id', null, ['class' => 'form-control', 'disabled' => 'disabled','placeholder' => trans('validation.general.common.employee-id')]) }}
                    </div>

                    {{ Form::label('employee_name', trans('validation.general.common.employee-name'), ['class' => 'col-lg-2 control-label']) }}

                     <div class="col-md-3">
                        {{ Form::text('employee_name', null, ['class' => 'form-control','disabled' => 'disabled', 'placeholder' => trans('validation.general.common.employee-name')]) }}
                    </div>

                </div><!--form control-->

                <div class="form-group">
                    {{ Form::label('approver', trans('validation.general.common.approver'), ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-md-3">
                       {{ Form::select('request_for', array('self' => trans('labels.general.self'), 'on-behalf' => trans('labels.general.on-behalf'), 'visitor' => trans('labels.general.visitor')), 'all', ['class' => 'form-control' ]) }}
                    </div><!--col-lg-10-->

                    {{ Form::label('mobile_number', trans('validation.general.common.mobile-number'), ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-md-3  valir">
                        {{ Form::text('mobile_number', null, ['class' => 'form-control', 'id' => 'mobile_number', 'autocomplete' => 'off', 'placeholder' => trans('validation.general.common.mobile-number')]) }}
                        <span class="glyphicon form-control-feedback" id="fname1"></span>
                    </div>

                </div><!--form control-->

                 <div class="form-group">
                    {{ Form::label('department', trans('validation.general.common.department'), ['class' => 'col-lg-2 control-label']) }}

                     <div class="col-md-3">
                        {{ Form::text('department', null, ['class' => 'form-control', 'disabled' => 'disabled', 'placeholder' => trans('validation.general.common.department')]) }}
                    </div>

                    {{ Form::label('team', trans('validation.general.common.team'), ['class' => 'col-lg-2 control-label']) }}

                        <div class="col-md-3">
                        {{ Form::text('team', null, ['class' => 'form-control','disabled' => 'disabled', 'placeholder' => trans('validation.general.common.team')]) }}
                    </div>

                 </div>

                 <br /><br />

            <!-- Request Details  section-->
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.access.transport.request_details') }}</h3>
            </div><!-- /.box-header -->

            <div class="box-body">
             <div class="form-group">
                 {{ Form::label('date_pick_lbl', trans('labels.backend.access.transport.pickup-date'), ['class' => 'col-lg-2 control-label']) }}

                 <div class="col-md-3 valir">
                    {{ Form::text('date_pick', null, ['class' => 'form-control', 'autocomplete' => 'off', 'id' => 'date_pick', 'autocomplete' => 'off']) }}
                    
                 </div>
                    
                    {{ Form::label('date_pick_lbl', trans('labels.backend.access.transport.pickup-date-to'), ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-md-3 valir">
                        {{ Form::text('date_pick_to', null, ['class' => 'form-control', 'autocomplete' => 'off', 'id' => 'date_pick_to', 'autocomplete' => 'off']) }}
                    </div>
             </div>

            

             <div class="form-group ">
              {{ Form::label('pickup_time', trans('labels.backend.access.transport.pickup-time'), ['class' => 'col-lg-2 control-label']) }}

              <div class="col-md-3 valir">
               {{ Form::text('pickup_time', null, ['class' => 'form-control', 'autocomplete' => 'off', 'id' => 'pickup_time']) }}
              </div>

              {{ Form::label('pickup_landmark', trans('labels.backend.access.transport.pickup-landmark'), ['class' => 'col-lg-2 control-label']) }}

              <div class="col-md-3 valir">
               {{ Form::text('pickup_landmark', null, ['class' => 'form-control', 'autocomplete' => 'off', 'id' => 'datepick']) }}
              </div>

             </div>


             <div class="form-group">
                {{ Form::label('pickup_address', trans('labels.backend.access.transport.pickup-address'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-md-3 valir">
                    {{ Form::textarea('pickup_address', null, ['class' => 'form-control', 'autocomplete' => 'off', 'id' => 'pickup_address', 'size' => '30x5']) }}
                </div>

                {{ Form::label('drop_address', trans('labels.backend.access.transport.drop-address'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-md-3 valir">
                    {{ Form::textarea('drop_address', null, ['class' => 'form-control', 'autocomplete' => 'off', 'id' => 'drop_address', 'size' => '30x5']) }}
                </div>

             </div>

              <div class="form-group">
                    {{ Form::label('drop_requred', trans('labels.backend.access.transport.drop-requred'), ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-md-3">
                        {{ Form::select('request_for', array('no' => trans('labels.general.no'), 'yes' => trans('labels.general.yes')), 'all', ['class' => 'form-control', 'onchange' => "if(this.value=='yes'){this.form['request_for_box'].style.visibility='visible'}else {this.form['request_for_box'].style.visibility='hidden'};" ]) }}
                    </div><!--col-lg-10-->

                    <div class="col-md-3 valir">
                        {{ Form::text('request_for_box', null, ['class' => 'form-control', 'autocomplete' => 'off', 'style' => 'visibility:hidden;', 'placeholder' => trans('labels.backend.access.transport.drop-time')]) }}
                    </div>


                </div><!--form control-->

                <div class="form-group">
                     {{ Form::label('reason_for_request', trans('labels.backend.access.transport.reason-for-request'), ['class' => 'col-lg-2 control-label']) }}

                      <div class="col-md-4 valir" id="reason_for_request">
                         {{ Form::textarea('reason_for_request', null, ['class' => 'form-control', 'autocomplete' => 'off', 'id' => 'reason_for_request', 'size' => '30x5']) }}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('adhoc_request_sheet', trans('labels.backend.access.transport.adhoc-request-sheet'), ['class' => 'col-lg-3 control-label']) }}

                    <div class="col-md-4">
                        {!! Form::file('file', null) !!}
                    </div>

                </div>

             </div> <!-- end box-body-->


            </div><!-- /.box-body -->
        </div><!--box-->

        <div class="box box-success">
            <div class="box-body">
                

                <div class="pull-right">
                    {{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-success btn-md']) }}
                </div><!--pull-right-->

                <div class="clearfix"></div>
            </div><!-- /.box-body -->
        </div><!--box-->

    {{ Form::close() }}
@stop

@section('after-scripts-end')
    {{ Html::script('js/backend/adhocrequest/script.js') }}
@stop
