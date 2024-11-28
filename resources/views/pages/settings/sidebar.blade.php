<div class="content-sidebar-body">
    <ul class="nav flex-column nxl-content-sidebar-item">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('settings/profile*') ? 'active'  : '' }}" href="{{ url('settings/profile') }}">
                <i class="feather-minus"></i>
                <span>Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('settings/company-detail*') ? 'active'  : '' }}" href="{{ url('settings/company-detail') }}">
                <i class="feather-minus"></i>
                <span>Company Detail</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('settings/change-password*') ? 'active'  : '' }}" href="{{ url('settings/change-password') }}">
                <i class="feather-minus"></i>
                <span>Change Password</span>
            </a>
        </li>
    </ul>
</div>