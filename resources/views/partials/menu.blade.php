<aside class="main-sidebar" style="background-color:red">
    <section class="sidebar" style="height: auto;">
        <ul class="sidebar-menu tree" data-widget="tree">
                <li>
                    <a href="{{ route('admin.home') }}">
                        <i class="fas fa-tachometer-alt">

                        </i>
                        <span> {{ trans('global.dashboard') }}</span>
                        <span class="pull-right-container"></span>
                    </a>

                </li>
            {{-- @can('user_management_access') --}}
                <li class="treeview">
                    <a>
                        <i class="fa fa-exchange">

                        </i>
                        <span>{{ trans('global.userManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        {{-- @can('permission_access') --}}
                            <li
                                class="{{ request()->is('deposits') || request()->is('deposits/*') ? 'active' : '' }}">
                                <a href="{{ route('deposits') }}">
                                    <i class="fa fa-unlock-alt">

                                    </i>
                                    <span>Deposits</span>
                                </a>
                            </li>
                        {{-- @endcan --}}
                        {{-- @can('role_access') --}}
                            <li class="{{ request()->is('withdrawals') || request()->is('withdrawals/*') ? 'active' : '' }}">
                                <a href="{{ route('withdrawals') }}">
                                    <i class="fas fa-briefcase">

                                    </i>
                                    <span>Withdrawals</span>
                                </a>
                            </li>
                        {{-- @endcan --}}
                        {{-- @can('user_access')
                            <li class="{{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <a href="{{ route('admin.users.index') }}">
                                    <i class="fas fa-user">

                                    </i>
                                    <span>{{ trans('global.user.title') }}</span>
                                </a>
                            </li>
                        @endcan --}}
                    </ul>
                </li>
            {{-- @endcan --}}


            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i  class="fas fa-sign-out-alt">

                    </i>
                    <span>{{ trans('global.logout') }}</span>
                    <span class="pull-right-container"></span>
                </a>

            </li>
        </ul>
    </section>
</aside>
