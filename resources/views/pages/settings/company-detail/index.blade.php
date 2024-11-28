@extends('layouts.app')

@push('style')
@endpush

@section('main')
    <div class="main-content d-flex">
        <!-- [ Content Sidebar ] start -->
        <div class="content-sidebar content-sidebar-md" data-scrollbar-target="#psScrollbarInit">
            <div class="content-sidebar-header bg-white sticky-top hstack justify-content-between">
                <h4 class="fw-bolder mb-0">Settings</h4>
                <a href="javascript:void(0);" class="app-sidebar-close-trigger d-flex">
                    <i class="feather-x"></i>
                </a>
            </div>
            @include('pages.settings.sidebar')
        </div>
        <!-- [ Content Sidebar  ] end -->
        <!-- [ Main Area  ] start -->
        <div class="content-area" data-scrollbar-target="#psScrollbarInit">
            <div class="content-area-header bg-white sticky-top">
                <div class="page-header-left">
                    <a href="javascript:void(0);" class="app-sidebar-open-trigger me-2">
                        <i class="feather-align-left fs-24"></i>
                    </a>
                </div>
                <div class="page-header-right ms-auto">
                    <div class="d-flex align-items-center gap-3 page-header-right-items-wrapper">
                        <a href="javascript:void(0);" class="text-danger">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary successAlertMessage">
                            <i class="feather-save me-2"></i>
                            <span>Save Changes</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="content-area-body">
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label class="form-label">Company</label>
                                    <input type="text" class="form-control" placeholder="Company">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label class="form-label">street Address</label>
                                    <input type="text" class="form-control" placeholder="street Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" placeholder="City">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label class="form-label">State</label>
                                    <input type="text" class="form-control" placeholder="State">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label class="form-label">Post Code</label>
                                    <input type="text" class="form-control" placeholder="Post Code">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label class="form-label">Website</label>
                                    <input type="text" class="form-control" placeholder="https://xxxx/">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Content Area ] end -->
    </div>
@endsection

@push('scripts')
<script src="{{ asset('assets/js/settings-init.min.js') }}"></script>
@endpush
