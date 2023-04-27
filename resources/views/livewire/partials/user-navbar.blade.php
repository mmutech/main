<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul class="sidebar-vertical">
                <li class="menu-title">
                    <span>User Dashboard</span>
                </li>

                <li>
                    <a href="{{ url('/user-dashboard') }}"
                        style="{{ Request::is('user-dashboard') ? 'color: #ff9b44;' : '' }}">
                        <i class="la la-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('myprofile') }}" style="{{ Request::is('myprofile') ? 'color: #ff9b44;' : '' }}">
                        <i class="la la-user"></i>
                        <span>Profile</span>
                    </a>
                </li>

                <li class="submenu">
                    <a href="#"
                        class="{{ Request::is('all-employees') || Request::is('create-employee') ? 'noti-dot active' : '' }}">
                        <i class="la la-sign-out-alt"></i>
                        <span> Requests </span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none;">
                        <li>
                            <a href="{{ url('all-employees') }}"
                                style="{{ Request::is('all-employees') ? 'color: #ff9b44;' : '' }}">Apply for Leave</a>
                        </li>
                        <li>
                            <a href="{{ url('create-employee') }}"
                                style="{{ Request::is('create-employee') ? 'color: #ff9b44;' : '' }}">Apply for
                                Exits</a>
                        </li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#">
                        <i class="la la-graduation-cap"></i>
                        <span> Performance </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none;">
                        <li>
                            <a href="{{ url('new-report') }}"
                                style="{{ Request::is('new-report') ? 'color: #ff9b44;' : '' }}">Attendance & Time
                                tracking</a>
                        </li>
                        <li>
                            <a href="{{ url('all-reports') }}"
                                style="{{ Request::is('all-reports') ? 'color: #ff9b44;' : '' }}">Compliance</a>
                        </li>
                        <li>
                            <a href="{{ url('all-reports') }}"
                                style="{{ Request::is('all-reports') ? 'color: #ff9b44;' : '' }}">Training</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
s
