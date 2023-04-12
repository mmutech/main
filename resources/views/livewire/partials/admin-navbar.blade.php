<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul class="sidebar-vertical">
                <li class="menu-title">
                    <span>Main</span>
                </li>

                <li>
                    <a href="{{ url('/dashboard') }}" style="{{ Request::is('dashboard') ? 'color: #ff9b44;' : '' }}">
                        <i class="la la-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="submenu">
                    <a href="#">
                        <i class="la la-user-o"></i>
                        <span> Employees </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('all-employees') }}" style="{{ Request::is('all-employees') ? 'color: #ff9b44;' : '' }}">Employees</a></li>
                        <li><a href="{{ url('create-employee') }}" style="{{ Request::is('create-employee') ? 'color: #ff9b44;' : '' }}">Add Employee</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="la la-bed"></i> <span> Leave </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('all-reports') }}" style="{{ Request::is('all-reports') ? 'color: #ff9b44;' : '' }}">Leave Management</a></li>
                        <li><a href="{{ url('new-report') }}" style="{{ Request::is('new-report') ? 'color: #ff9b44;' : '' }}"> /---/ </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-sign-out-alt"></i> <span> Exit Procedure</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('exit-type-component') }}" style="{{ Request::is('exit-type-component') ? 'color: #ff9b44;' : '' }}">Exit Type</a></li>
                        <li><a href="{{ url('exit-interview-component') }}" style="{{ Request::is('exit-interview-component') ? 'color: #ff9b44;' : '' }}">Exit Interview Questions</a></li>
                        <li><a href="{{ url('new-user') }}" style="{{ Request::is('') ? 'color: #ff9b44;' : 'new-user' }}">Setting</a></li>
                        <li><a href="{{ url('exit-init-component') }}" style="{{ Request::is('exit-init-component') ? 'color: #ff9b44;' : '' }}">Initiate/Check Status</a></li>
                        <li><a href="{{ url('exit-init-component') }}" style="{{ Request::is('exit-init-component') ? 'color: #ff9b44;' : '' }}">All Exit Procedures</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-tools"></i> <span> Preferences </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('division') }}" style="{{ Request::is('division') ? 'color: #ff9b44;' : '' }}">Division</a></li>
                        <li><a href="{{ url('department-component') }}" style="{{ Request::is('department-component') ? 'color: #ff9b44;' : '' }}">Department</a></li>
                        <li><a href="{{ url('unit-component') }}" style="{{ Request::is('unit-component') ? 'color: #ff9b44;' : '' }}">Unit</a></li>
                        <li><a href="{{ url('job-role-component') }}" style="{{ Request::is('job-role-component') ? 'color: #ff9b44;' : '' }}">Job Role</a></li>
                        <li><a href="{{ url('designation-component') }}" style="{{ Request::is('designation-component') ? 'color: #ff9b44;' : '' }}">Designation</a></li>
                        <li><a href="{{ url('grade-level-component') }}" style="{{ Request::is('grade-level-component') ? 'color: #ff9b44;' : '' }}">Grade Level</a></li>
                        <li><a href="{{ url('location-component') }}" style="{{ Request::is('location-component') ? 'color: #ff9b44;' : '' }}">Location</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
