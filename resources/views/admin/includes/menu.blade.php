<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                {!! Html::image('/user/images/user2-160x160.jpg', 'User avatar', [
                    'class' => 'img-circle',
                ]) !!}
            </div>
            <div class="pull-left info">
                <p>@lang('admin.admin_area')</p>
                <a href="#"><i class="fa fa-circle text-success"></i>@lang('admin.online')</a>
            </div>
        </div>
        {!! Form::open([
            'action' => 'Admin\HomeController@index',
            'class' => 'sidebar-form',
            'method' => 'GET',
        ]) !!}
            <div class="input-group">
                {!! Form::text('q', '', [
                    'placeholder' => trans('admin.menu.search'),
                    'class' => 'form-control',
                ]) !!}
                <span class="input-group-btn">
                    {!! Form::button('<i class="fa fa-search"></i>', [
                        'class' => 'btn btn-flat',
                        'type' => 'submit'
                    ]) !!}
                </span>
            </div>
        {!! Form::close() !!}
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{ action('Admin\HomeController@index') }}">
                    <i class="fa fa-dashboard"></i> <span>@lang('admin.menu.home')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
