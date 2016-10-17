<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
         

            <!-- Optionally, you can add icons to the links -->
            <li class="{{ Active::pattern('admin/dashboard') }}">
                {{ link_to_route('admin.dashboard', trans('menus.backend.sidebar.dashboard')) }}
            </li>

            
            @permission('manage-users')
            <!-- User MAnagement -->
            <!--li class="{{ Active::pattern('admin/access/user*') }} treeview">
                <a href="#">
                    <span>{{ trans('menus.backend.user-management.main') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu {{ Active::pattern('admin/access/user*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/access/user*', 'display: block;') }}">
                    <li class="{{ Active::pattern('admin/access/user') }}">
                        {{ link_to('admin/access/user', trans('menus.backend.user-management.dashboard')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/access/user/create') }}">
                        {{ link_to('admin/access/user/create', trans('menus.backend.user-management.new-user')) }}
                    </li>
                </ul>
            </li-->
            <!-- End User MAnagement -->
            @endauth

            @permission('manage-users')
            <!-- Role Management-->
            <li class="{{ Active::pattern('admin/access/role*') }} treeview">
                <a href="#">
                    <span>{{ trans('menus.backend.role-management.main') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu {{ Active::pattern('admin/access/role*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/access/role*', 'display: block;') }}">
                    <li class="{{ Active::pattern('admin/access/role') }}">
                        {{ link_to('admin/access/role', trans('menus.backend.role-management.dashboard')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/access/role/create') }}">
                        {{ link_to('admin/access/role/create', trans('menus.backend.role-management.new-user')) }}
                    </li>
                </ul>
            </li>
            <!--End Role Management-->
             @endauth

            <!-- This is Travel Module-->
             <li class="header">Travel </li>
            <li class="{{ Active::pattern('admin/raisetravelrequest*') }} treeview">
                <a href="#">
                    <span>{{ trans('menus.backend.travel-reimbursement.main') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu {{ Active::pattern('admin/raisetravelrequest*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/raisetravelrequest*', 'display: block;') }}">
                    <li class="{{ Active::pattern('admin/raisetravelrequest/create') }}">
                        {{ link_to('admin/raisetravelrequest/create', trans('menus.backend.travel-reimbursement.menua')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/access/role/create') }}">
                        {{ link_to('admin/raisetravelrequest/', trans('menus.backend.travel-reimbursement.menub')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/access/role/create') }}">
                        {{ link_to('admin/access/role/create', trans('menus.backend.travel-reimbursement.menuc')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/access/role/create') }}">
                        {{ link_to('admin/access/role/create', trans('menus.backend.travel-reimbursement.menud')) }}
                    </li>
                </ul>
            </li>
           
            <!--@end Travel Module-->


 <!-- ************************* SEPARATOR ************************* -->


            <!-- This is Travel Module-->
                <li class="header">Transport </li>
                <!-- Optionally, you can add icons to the links -->
                  <li class="{{ Active::pattern('admin/adhocrequest*') }} treeview">
                <a href="#">
                    <span>{{ trans('menus.backend.transport.menua') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu {{ Active::pattern('admin/adhocrequest*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/adhocrequest*', 'display: block;') }}">
                    <li class="{{ Active::pattern('admin/adhocrequest/create') }}">
                        {{ link_to('admin/adhocrequest/create', trans('menus.backend.transport.submenua')) }}
                    </li>
                    <li class="{{ Active::pattern('admin/adhocrequest/index') }}">
                        {{ link_to('admin/adhocrequest/', trans('menus.backend.transport.submenub')) }}
                    </li>
                   
                   <li class="{{ Active::pattern('admin/access/transport/create') }}">
                        {{ link_to('admin/access/manageapprover', trans('menus.backend.transport.submenue')) }}
                    </li>
                </ul>
            </li>
            <!-- @end Travel Module-->

             <!-- Transport  Management Regular Request-->
            <li class="{{ Active::pattern('admin/regularrequest*') }} treeview">
                <a href="#">
                    <span>{{ trans('menus.backend.transport.menub') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu {{ Active::pattern('admin/regularrequest*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/regularrequest*', 'display: block;') }}">
                    <li class="{{ Active::pattern('admin/regularrequest') }}">
                        {{ link_to('admin/regularrequest', trans('menus.backend.transport.submenuc')) }}
                    </li>
                   
                   
                </ul>
            </li>
            <!--End Regular Request Travel Management-->

             <!-- Transport Report Management-->
            <li class="{{ Active::pattern('admin/access/transportreport*') }} treeview">
                <a href="#">
                    <span>{{ trans('menus.backend.transport.menuc') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu {{ Active::pattern('admin/access/transportreport*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/transportreports*', 'display: block;') }}">
                    <li class="{{ Active::pattern('admin/transportreports') }}">
                        {{ link_to('admin/transportreports', trans('menus.backend.transport.submenud')) }}
                    </li>
                   
                   
                </ul>
            </li>
            <!--End Transport Report Management-->

        </ul><!-- /.sidebar-menu -->
    </section><!-- /.sidebar -->
</aside>