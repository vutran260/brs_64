<header class="main-header">
    <a href="{{ action('Admin\HomeController@index') }}" class="logo">
        <span class="logo-lg">@lang('admin.admin_area')</span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
         </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {!! Html::image('/user/images/user2-160x160.jpg', 'User Image', [
                            'class' => 'user-image',
                        ]) !!}
                        <span class="hidden-xs">@lang('admin.admin_area')</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            {!! Html::image('/user/images/user2-160x160.jpg', 'User Image', [
                                'class' => 'img-circle elevation-2',
                            ]) !!}
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">@lang('auth.profile')</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat">@lang('auth.logout')</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
