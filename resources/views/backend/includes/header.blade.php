<header class="main-header" >
    {{ link_to_route('frontend.index', app_name(), [], ['class' => 'logo']) }}

    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">{{ trans('labels.general.toggle_navigation') }}</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                       
                        <span class="hidden-xs">{{ access()->user()->name }}</span>
                    </a>

                    <ul class="dropdown-menu">
    
                        <li class="user-footer">
                           
                            <div class="pull-right">
                                {{ link_to_route('auth.logout', trans('navs.general.logout'), [], ['class' => 'btn btn-default btn-flat']) }}
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-custom-menu -->
    </nav>
</header>