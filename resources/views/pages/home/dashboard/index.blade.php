@extends('layouts.app')

@push('style')
    <link href="https://cdn.jsdelivr.net/npm/boxicons/css/boxicons.min.css" rel="stylesheet">
@endpush

@section('page-header')
    @include('pages.home.page-header')
@endsection

@section('main')
    <div class="main-content mb-5">
        <div class="row">
            <div class="main-content">
                <div class="row" id="web-analytics" style="display: none">
                    @include('pages.home.dashboard.template-dashboard.web-analytics')
                </div>
                <div class="row" id="digital-marketing" style="display: none">
                    @include('pages.home.dashboard.template-dashboard.digital-marketing')
                </div>
                <div class="row" id="facebook-ads" style="display: flex">
                    @include('pages.home.dashboard.template-dashboard.facebook-ads')
                </div>
                <div class="row" id="facebook-ads" style="display: none">
                    @include('pages.home.dashboard.template-dashboard.facebook')
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="assets/js/analytics-init.min.js"></script>
    <script src="assets/js/dashboard-init.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Pilih elemen tombol Start from a template
            const startTemplateCard = document.querySelector('#start-template');
            // Pilih elemen container template selection
            const templateSection = document.querySelector('.template-selection');
            const startPage = document.querySelector('.start-page');

            // Tambahkan event listener ke card
            startTemplateCard.addEventListener('click', function() {
                // Tampilkan section template ketika card diklik
                templateSection.style.display = 'flex';
                // Sembunyikan section template di awal
                startPage.style.display = 'none';
            });

        });
    </script>
@endpush
