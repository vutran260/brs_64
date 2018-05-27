<nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ action('HomeController@index') }}">@lang('setting.site_name')</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        {{ strtoupper(app()->getLocale()) }}<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ action('LanguageController@index', ['locale' => 'en']) }}">EN</a></li>
                        <li><a href="{{ action('LanguageController@index', ['locale' => 'vn']) }}">VN</a></li>
                    </ul>
                </li>
                @if (Auth::guard()->check())
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> @lang('user.setting')</a></li>
                            <li><a href="{{ route('logout') }}"><span class="glyphicon glyphicon-log-out"></span> @lang('auth.logout')</a></li>
                        </ul>
                    </li>
                @else
                    <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> @lang('auth.login.name')</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
