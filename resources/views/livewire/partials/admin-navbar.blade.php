<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul class="sidebar-vertical">
                <li class="menu-title">
                    <span>Main</span>
                </li>

                <li>
                    <a href="{{ url("/") }}" class="active"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-user-o"></i> <span> Employees </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('all-employees') }}">Employees</a></li>
                        <li><a href="{{ url('new-employee') }}">Add Employee</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="la la-bed"></i> <span> Leave </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('all-reports') }}">Leave Management</a></li>
                        <li><a href="{{ url('new-report') }}"> /---/ </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-pen"></i> <span> Exit </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('all-users') }}">Exits</a></li>
                        <li><a href="{{ url('new-user') }}">New Exit</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
