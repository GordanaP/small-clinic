@extends('layouts.admin.dashboard')

@section('title', 'Google charts')

@section('content')
    @adminPageHeader(['title' => 'Google charts', 'item' => 'Charts'])
    @endadminPageHeader

    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Region chart</h4>
                    <div class="google-chart-container">
                        <div id="regions-chart" class="google-charts"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Bar chart</h4>
                    <div class="google-chart-container d-flex align-items-center justify-content-center h-100">
                        <div id="Bar-chart" class="google-charts"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Histogram chart</h4>
                    <div class="google-chart-container">
                        <div id="Histogram-chart" class="google-charts"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Area Chart</h4>
                    <div class="google-chart-container">
                        <div id="area-chart" class="google-charts"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Donut Chart</h4>
                    <div class="google-chart-container">
                        <div id="Donut-chart" class="google-charts"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Curve Chart</h4>
                    <div class="google-chart-container">
                        <div id="curve_chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/js/google-charts.js') }}"></script>
@endsection