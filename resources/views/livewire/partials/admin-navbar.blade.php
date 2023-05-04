<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul class="sidebar-vertical">
                <li class="menu-title">
                    <span>Main</span>
                </li>

                <li>
                    <a href="{{ url('/admin/dashboard') }}" style="{{ Request::is('dashboard') ? 'color: #ff9b44;' : '' }}">
                        <i class="la la-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="submenu">
                    <a href="#" class="{{ Request::is('all-employees')  || Request::is('create-employee') ? 'noti-dot active' : ''}}">
                        <i class="la la-user-o"></i>
                        <span> Employees </span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none;">
                        <li><a href="{{ url('/admin/all-employees') }}"
                                style="{{ Request::is('all-employees') ? 'color: #ff9b44;' : '' }}">Employees</a></li>
                        <li><a href="{{ url('/admin/create-employee') }}"
                                style="{{ Request::is('create-employee') ? 'color: #ff9b44;' : '' }}">Add Employee</a>
                        </li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="la la-bed"></i> <span> Leave </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('/admin/manage-leave') }}"
                                style="{{ Request::is('all-reports') ? 'color: #ff9b44;' : '' }}">Leave Management</a>
                        </li>
                        <li><a href="{{ url('/admin/leave-settings') }}"
                                style="{{ Request::is('new-report') ? 'color: #ff9b44;' : '' }}"> Leave Settings </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-sign-out-alt"></i> <span> Exit Procedure</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('/admin/exit-type-component') }}"
                                style="{{ Request::is('exit-type-component') ? 'color: #ff9b44;' : '' }}">Exit Type</a>
                        </li>
                        <li><a href="{{ url('/admin/exit-interview-component') }}"
                                style="{{ Request::is('exit-interview-component') ? 'color: #ff9b44;' : '' }}">Exit
                                Interview Questions</a></li>
                        <li><a href="{{ url('/admin/exit-init-component') }}"
                                style="{{ Request::is('exit-init-component') ? 'color: #ff9b44;' : '' }}">Initiate/Check
                                Status</a></li>
                        <li><a href="{{ url('/admin/exit-init-component') }}"
                                style="{{ Request::is('exit-init-component') ? 'color: #ff9b44;' : '' }}">All Exit
                                Procedures</a></li>
                        <li><a href="{{ url('/admin/settings') }}"
                                style="{{ Request::is('') ? 'color: #ff9b44;' : 'new-user' }}">Settings</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-tools"></i> <span> Preferences </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('/admin/division') }}"
                                style="{{ Request::is('division') ? 'color: #ff9b44;' : '' }}">Division</a></li>
                        <li><a href="{{ url('/admin/department-component') }}"
                                style="{{ Request::is('department-component') ? 'color: #ff9b44;' : '' }}">Department</a>
                        </li>
                        <li><a href="{{ url('/admin/unit-component') }}"
                                style="{{ Request::is('unit-component') ? 'color: #ff9b44;' : '' }}">Unit</a></li>
                        <li><a href="{{ url('/admin/job-role-component') }}"
                                style="{{ Request::is('job-role-component') ? 'color: #ff9b44;' : '' }}">Job Role</a>
                        </li>
                        <li><a href="{{ url('/admin/designation-component') }}"
                                style="{{ Request::is('designation-component') ? 'color: #ff9b44;' : '' }}">Designation</a>
                        </li>
                        <li><a href="{{ url('/admin/grade-level-component') }}"
                                style="{{ Request::is('grade-level-component') ? 'color: #ff9b44;' : '' }}">Grade
                                Level</a></li>
                        <li><a href="{{ url('/admin/location-component') }}"
                                style="{{ Request::is('location-component') ? 'color: #ff9b44;' : '' }}">Location</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
