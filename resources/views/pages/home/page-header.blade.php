@push('style')
    <style>
        .page-header-menu .menu-item {
            position: relative;
            text-decoration: none;
            color: #6c757d;
            padding: 5px 10px;
            transition: color 0.3s ease;
        }

        .page-header-menu .menu-item:hover {
            color: #495057;
        }

        .page-header-menu .menu-item.active {
            color: #000;
            /* Warna teks saat aktif */
            font-weight: bold;
        }

        .page-header-menu .menu-item.active::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            right: 0;
            height: 3px;
            background-color: #007bff;
            /* Warna border bawah */
            border-radius: 2px;
        }
    </style>
@endpush

<div class="page-header">
    <div class="page-header-left d-flex align-items-center">
        <div class="page-header-title">
            <h5 class="m-b-10">Home</h5>
        </div>
        <!-- Tambahkan menu di sini -->
        <div class="page-header-menu ms-3 d-flex align-items-center gap-3">
            <a href="/campaigns" class="menu-item {{ Request::is('campaigns') ? 'active' : '' }}">Campaigns</a>
            <a href="/dashboard" class="menu-item {{ Request::is('dashboard') ? 'active' : '' }}">Dashboard</a>
            <a href="#" class="menu-item {{ Request::is('task') ? 'active' : '' }}">Task</a>
        </div>
    </div>
    <div class="page-header-right ms-auto">
        <div class="page-header-right-items">
            <div class="d-flex d-md-none">
                <a href="javascript:void(0)" class="page-header-right-close-toggle">
                    <i class="feather-arrow-left me-2"></i>
                    <span>Back</span>
                </a>
            </div>
            <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                <div id="reportrange" class="reportrange-picker d-flex align-items-center">
                    <span class="reportrange-picker-field"></span>
                </div>
                <div class="dropdown filter-dropdown">
                    <a class="btn btn-md btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10"
                        data-bs-auto-close="outside">
                        <i class="feather-filter me-2"></i>
                        <span>Filter</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <div class="dropdown-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Role" checked="checked" />
                                <label class="custom-control-label c-pointer" for="Role">Role</label>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Team" checked="checked" />
                                <label class="custom-control-label c-pointer" for="Team">Team</label>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Email" checked="checked" />
                                <label class="custom-control-label c-pointer" for="Email">Email</label>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Member" checked="checked" />
                                <label class="custom-control-label c-pointer" for="Member">Member</label>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Recommendation"
                                    checked="checked" />
                                <label class="custom-control-label c-pointer"
                                    for="Recommendation">Recommendation</label>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <i class="feather-plus me-3"></i>
                            <span>Create New</span>
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <i class="feather-filter me-3"></i>
                            <span>Manage Filter</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-md-none d-flex align-items-center">
            <a href="javascript:void(0)" class="page-header-right-open-toggle">
                <i class="feather-align-right fs-20"></i>
            </a>
        </div>
    </div>
</div>
