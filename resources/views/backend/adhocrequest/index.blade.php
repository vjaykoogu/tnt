@extends ('backend.layouts.master')

@section ('title', trans('labels.backend.access.view-app.main-title') . ' | ' . trans('labels.backend.access.view-app.filter-emp'))

@section('after-styles-end')
    {{ Html::style("css/backend/plugin/datatables/dataTables.bootstrap.min.css") }}
@stop

@section('page-header')
    <h1>
        {{ trans('labels.backend.access.view-app.main-title') }}
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.access.view-app.filter-emp') }}</h3>

        </div><!-- /.box-header -->

        <div class="box-body">


            <div class="table-responsive">
            <form id="search-form">
                <table class="table table-striped table-bordered">
    <tbody><tr>
        <td>Request from Date</td>
        <td><input type="text" id="pickupDate" name="pickupDate"></td>

        <td>Request to Date</td>
        <td><input type="text" id="pickupDateUpTo" name="pickupDateUpTo"></td>
    </tr>
    <tr>
        <td>Employee ID</td>
        <td><input type="text" id="employee_id" name="employee_id" disabled="disabled"></td>

        <td>Employee Name</td>
        <td><input type="text" id="employee_name" name="employee_name" disabled="disabled"></td>
    </tr>
    <tr>
        <td>Department</td>
        <td><input type="text" id="department" name="department" disabled="disabled"></td>

        <td>Team</td>
        <td><input type="text" id="team" name="team" disabled="disabled"></td>
    </tr>
    <tr>
        <td>Request ID</td>
        <td><input type="text" id="workFlowId" name="workFlowId"></td>

        <td>Status</td>
        <td>
          <select class="form-control" id="sel1" name="status">
            <option>Approved</option>
            <option>Cancelled</option>
            <option>Closed</option>
            <option>Not Submited</option>
            <option>open</option>
          </select>
          </td>
    </tr>
    <tr>
        <td></td>
        <td></td>

        <td></td>
        <td><input type="submit" id="submit" name="submit" value="Search" class="btn btn-primary"></td>
    </tr>

</tbody></table></form>

                <table id="roles-table" class="table table-condensed table-hover">
                    <thead>
                        <tr>
                            
                            <th>Request id</th>
                            <th>Requested Date</th>
                            <th>Requested Date To</th>
                            <th>Status</th>
                            
                        </tr>
                    </thead>
                </table>
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
    </div><!--box-->

  
@stop

@section('after-scripts-end')
    {{ Html::script("js/backend/plugin/datatables/jquery.dataTables.min.js") }}
    {{ Html::script("js/backend/plugin/datatables/dataTables.bootstrap.min.js") }}

    <script>
        $(function() {
           var oTable  = $('#roles-table').DataTable({
                 "bFilter": false,
                processing: true,
                serverSide: true,
                ajax: {
                       url:  '{{ route("admin.adhocrequest.getCustomFilterData") }}',
                       data: function (d) {
                        d.request_date_from = $('input[name=pickupDate]').val();
                        d.request_date_to = $('input[name=pickupDateUpTo]').val();
                        d.workFlowId = $('input[name=workFlowId]').val();
                        d.status = $('input[name=status]').val();
                    }
                    },
                columns: [
                    {data: 'workFlowId', name: 'workFlowId'},
                    {data: 'contactNumber', name: 'contactNumber'},
                    {data: 'pickupDate', name: 'pickupDate'},
                    {data: 'pickupDateUpTo', name: 'pickupDateUpTo'},
                   
                ],
                order: [[3, "asc"]],
                searchDelay: 500
            });
        });

        $('#search-form').on('submit', function(e) {
        oTable.draw();
        e.preventDefault();
    });
    </script>
@stop

@section('after-scripts-end')

    {{ Html::script('js/backend/adhocrequest/script.js') }}
    
@stop
