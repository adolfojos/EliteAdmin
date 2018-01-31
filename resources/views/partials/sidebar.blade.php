        <!-- Left navbar-sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- Search input-group this is only view in mobile -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="{{__('Search')}}...">
                            <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                        </span>
                        </div>
                        <!-- / Search input-group this is only view in mobile-->
                    </li>
                    <!-- User profile-->
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="{{   asset('plugins/images/users/varun.jpg')}}" alt="user-img" class="img-circle"> <span class="hide-menu"> {{ Auth::user()->name }}<span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="javascript:void(0)"><i class="ti-user"></i> {{__('My Profile')}}</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-wallet"></i> {{__('My Balance')}}</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-email"></i> {{__('Inbox')}}</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings"></i> {{__('Account Setting')}}</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> {{__('Logout')}}</a></li>
                        </ul>
                    </li>
                    <!-- User profile-->
                    <li class="nav-small-cap m-t-10">--- {{__('Main Menu')}}</li>
                    <li><a href="javascript:void(0)" class="waves-effect"><i class="zmdi zmdi-copy zmdi-hc-fw fa-fw"></i> <span class="hide-menu">Link type </span></a> </li>
                    <li>
                        <a href="javascript:void(0)" class="waves-effect active"><i class="zmdi zmdi-copy zmdi-hc-fw fa-fw"></i> <span class="hide-menu">Dropdown Link<span class="fa arrow"></span><span class="label label-rouded label-purple pull-right">2</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="javascript:void(0)">Link one</a></li>
                            <li><a href="javascript:void(0)">Link Two</a></li>
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
                </ul>
            </div>
        </div>
        <!-- Left navbar-sidebar end -->