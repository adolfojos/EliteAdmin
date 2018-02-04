<li class="nav-small-cap m-t-10">--- {{__('Main Menu')}}</li>
<li><a href="{{ url('/home') }}" class="waves-effect"><i class="zmdi zmdi-view-dashboard zmdi-hc-fw fa-fw"></i> <span class="hide-menu">Dashboard</span></a> </li>
<li>
    <a href="javascript:void(0)" class="waves-effect"><i class="zmdi zmdi-accounts"></i> <span class="hide-menu">{{__('Users')}}<span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">
        <li><a href="{{ url('/users') }}">{{__('All users')}}</a></li>
        <li><a href="{{ url('/add_user') }}">{{__('Add user')}}</a></li>
    </ul>
</li>
<li>
    <a href="javascript:void(0)" class="waves-effect"><i class="zmdi zmdi-copy zmdi-hc-fw fa-fw"></i> <span class="hide-menu">Multi Dropdown<span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">
        <li> <a href="javascript:void(0)">Second Level Item</a> </li>
        <li> <a href="javascript:void(0)">Second Level Item</a> </li>
        <li>
            <a href="javascript:void(0)" class="waves-effect">Third Level <span class="fa arrow"></span></a>
            <ul class="nav nav-third-level">
                <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                <li> <a href="javascript:void(0)">Third Level Item</a> </li>
            </ul>
        </li>
    </ul>
</li>