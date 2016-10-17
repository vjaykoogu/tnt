<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#frontend-navbar-collapse">
                <span class="sr-only">{{ trans('labels.general.toggle_navigation') }}</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            {{ link_to_route('frontend.index', app_name(), [], ['class' => 'navbar-brand']) }}
        </div><!--navbar-header-->

        <div class="collapse navbar-collapse" id="frontend-navbar-collapse">
           

            <ul class="nav navbar-nav navbar-right">
               
                    <li>{{ link_to('login', trans('navs.frontend.login')) }}</li>
                  
            </ul>
        </div><!--navbar-collapse-->
    </div><!--container-->
</nav>