@extends('frontend.app.master')

@section('main-content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">

                    <div class="row match-height">
                        <!-- Average Serving Time starts -->
                        <div class="col-lg-4 col-12 card-height">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4 class="card-title">Avg Serving Time</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row" style="">
                                        <div class="">
                                            <h1 class="font-large-2 fw-bolder mt-2 mb-0" style="font-weight: bold; color: #689552;">95</h1>
                                            <p class="card-text"></p>
                                        </div>
                                        <div class="col-sm-10 col-12 d-flex justify-content-center">
                                            <div id="support-trackers-chart"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="text-center">
                                            <p class="card-text mb-50">Prev</p>
                                            <span class="font-large-1 fw-bold" style="color: #D60606; font-weight: bold">70</span>
                                        </div>
                                        <div class="text-center">
                                            <p class="card-text mb-50">Best</p>
                                            <span class="font-large-1 fw-bold" style="font-weight: bold; color: #D2771F">125</span>
                                        </div>
                                        <div class="text-center">
                                            <p class="card-text mb-50">Pace</p>
                                            <span class="font-large-1 fw-bold" style="font-weight: bold; color: #689552">105</span>
                                        </div>

                                        <div class="text-center">
                                            <p class="card-text mb-50">Goal</p>
                                            <span class="font-large-1 fw-bold" style="font-weight: bold; color: #172240">65</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Average Serving Time ends -->

                        <!-- Count Of Cars / Day starts -->
                        <div class="col-lg-4 col-12 card-height">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4 class="card-title" style="color: #252F49; font-weight: bold"># Cars / Day</h4>
                                    <div class="dropdown chart-dropdown">
                                        <button class="btn btn-sm border-0 dropdown-toggle p-50" type="button"
                                                id="dropdownItem4" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">

                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownItem4">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row" style="">
                                        <div class="" >
                                            <h1 class="font-large-2 fw-bolder mt-2 mb-0" style="color: #689552">400</h1>
                                            <p class="card-text"></p>
                                        </div>
                                        <div class="col-sm-10 col-12 d-flex justify-content-center">
                                            <div id="support-trackers-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Count Of Cars / Day ends -->

                        <!-- Total Served Cars starts -->
                        <div class="col-lg-4 col-12 card-height">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4 class="card-title" style="color: #252F49; font-weight: bold">Total Served</h4>
                                    <div class="dropdown chart-dropdown">
                                        <button class="btn btn-sm border-0 dropdown-toggle p-50" type="button"
                                                id="dropdownItem4" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">

                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownItem4">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row" >
                                        <div class="" >
                                            <h1 class="font-large-2 fw-bolder mt-2 mb-0" style="color: #A97C50">350</h1>
                                            <p class="card-text"></p>
                                        </div>
                                        <div class="col-sm-10 col-12 d-flex justify-content-center">
                                            <div id="support-trackers-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Total Served Cars ends -->
                    </div>


                    <div class="row match-height">

                        <!-- Average Waiting Time starts -->
                        <div class="col-lg-4 col-12 card-height">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4 class="card-title" style="color: #252F49; font-weight: bold">Avg Waiting Time</h4>
                                    <div class="dropdown chart-dropdown">
                                        <button class="btn btn-sm border-0 dropdown-toggle p-50" type="button"
                                                id="dropdownItem4" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">

                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownItem4">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row" >  <!-- style="margin-top: 17%; margin-left: 35%;"-->
                                        <div class="" >
                                            <h1 class="font-large-2 fw-bolder mt-2 mb-0" style="color: #D2B231; font-weight: bold">5:48</h1>
                                            <p class="card-text"></p>
                                        </div>
                                        <div class="col-sm-10 col-12 d-flex justify-content-center">
                                            <div id="support-trackers-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Average Waiting Time ends -->

                        <!-- Total Experience Time (TET) starts -->
                        <div class="col-lg-4 col-12 card-height">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4 class="card-title" style="color: #252F49; font-weight: bold">Total Exp Time</h4>
                                    <div class="dropdown chart-dropdown">
                                        <button class="btn btn-sm border-0 dropdown-toggle p-50" type="button"
                                                id="dropdownItem4" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            Last 7 Days
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownItem4">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="" >
                                            <h1 class="font-large-2 fw-bolder mt-2 mb-0" style="color: #E65050">2:50</h1>
                                            <p class="card-text">Hour AVG 1:50</p>
                                        </div>
                                        <div class="col-sm-10 col-12 d-flex justify-content-center">
                                            <div id="support-trackers-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Total Experience Time (TET) ends -->

                        <!-- Total Served Cars starts -->
                        <div class="col-lg-4 col-12 card-height">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4 class="card-title" style="color: #252F49; font-weight: bold">Total Served</h4>
                                    <div class="dropdown chart-dropdown">
                                        <button class="btn btn-sm border-0 dropdown-toggle p-50" type="button"
                                                id="dropdownItem4" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">

                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownItem4">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row" >
                                        <div class="" >
                                            <h1 class="font-large-2 fw-bolder mt-2 mb-0" style="color: #A97C50">350</h1>
                                            <p class="card-text"></p>
                                        </div>
                                        <div class="col-sm-10 col-12 d-flex justify-content-center">
                                            <div id="support-trackers-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Total Served Cars ends -->


                    </div>

                </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

@section('scripts')
    <script src="{{asset('assets/js/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/dashboard-analytics.js')}}"></script>
@endsection

{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900">--}}
{{--                    {{ __("You're logged in!") }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}






{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900">--}}
{{--                    {{ __("You're logged in!") }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}
