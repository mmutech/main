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
                        <li><a href="{{ url('create-employee') }}">Add Employee</a></li>
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
                    <a href="#"><i class="la la-sign-out-alt"></i> <span> Exit Procedure</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('exit-type-component') }}">Exit Type</a></li>
                        <li><a href="{{ url('exit-interview-component') }}">Exit Interview Questions</a></li>
                        <li><a href="{{ url('new-user') }}">Setting</a></li>
                        <li><a href="{{ url('exit-init-component') }}">Initiate/Check Status</a></li>
                        <li><a href="{{ url('exit-init-component') }}">All Exit Procedures</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-tools"></i> <span> Preferences </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('division') }}">Division</a></li>
                        <li><a href="{{ url('department-component') }}">Department</a></li>
                        <li><a href="{{ url('unit-component') }}">Unit</a></li>
                        <li><a href="{{ url('job-role-component') }}">Job Role</a></li>
                        <li><a href="{{ url('designation-component') }}">Designation</a></li>
                        <li><a href="{{ url('grade-level-component') }}">Grade Level</a></li>
                        <li><a href="{{ url('location-component') }}">Location</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
