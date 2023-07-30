<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
    <table class="table">
        <thead>
        <tr>
            <th style="font-weight: bold; width: 100px;" >  Client        </th>
            <th style="font-weight: bold; width: 150px;">  Login At      </th>
            <th style="font-weight: bold; width: 150px;">  Logout At     </th>
            <th style="font-weight: bold; width: 100px;">  Total Minutes </th>
        </tr>
        </thead>
        <tbody>
        @foreach($cars as $key => $car)
            <tr>
                <td>
                    Client - {{++$key}}
                </td>

                <td>
                    {{$car->login_at->format('d-M-Y H:i')}}
                </td>

                <td>
                    {{$car->logout_at->format('d-M-Y H:i')}}
                </td>

                <td>
                    {{$car->total}}
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>


{{--@extends('frontend.app.master')--}}
{{--@section('main-content')--}}
{{--    <!-- BEGIN: Content-->--}}
{{--    <div class="app-content content ">--}}
{{--        <div class="content-overlay"></div>--}}
{{--        <div class="header-navbar-shadow"></div>--}}
{{--        <div class="content-wrapper container-xxl p-0">--}}
{{--            <div class="content-body">--}}
{{--                <!-- Basic Tables start -->--}}
{{--                <div class="row" id="basic-table">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="card">--}}
{{--                            <div class="table-responsive">--}}
{{--                                <table class="table">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th> <span style="font-weight: bold"> Client </span> </th>--}}
{{--                                        <th>  <span style="font-weight: bold"> Login At  </span> </th>--}}
{{--                                        <th> <span style="font-weight: bold"> Logout At  </span> </th>--}}
{{--                                        <th> <span style="font-weight: bold"> Total Minutes  </span> </th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    @foreach($cars as $key => $car)--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                Client - {{$key++}}--}}
{{--                                            </td>--}}

{{--                                            <td>--}}
{{--                                                {{$car->login_at}}--}}
{{--                                            </td>--}}

{{--                                            <td>--}}
{{--                                                {{$car->logout_at}}--}}
{{--                                            </td>--}}

{{--                                            <td>--}}
{{--                                                {{$car->total}}--}}
{{--                                            </td>--}}

{{--                                        </tr>--}}
{{--                                    @endforeach--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Basic Tables end -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- END: Content-->--}}
{{--@endsection--}}







