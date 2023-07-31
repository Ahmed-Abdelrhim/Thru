<!DOCTYPE html>
<!-- Coding by CodingNepal || www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
    <title>Drive-Thru</title>
    <link rel="stylesheet" href="{{asset('frontend/css/custom/style.css')}}"/>

    <link rel="stylesheet" href="{{ asset('frontend/css/iziToast.min.css') }}">

</head>
<body onload=display_ct6();>
<!-- navbar -->
<nav class="navbar">
    <div class="logo_item">
        <!-- Sidebar Open / Close -->
        <div class="expand_sidebar" id="sidebarOpen">
            <img class="" src="{{asset('images/dashboard/e422b1d1-e9e7-4619-886c-869091f6116a.png')}}" alt="">
        </div>

        @if(auth()->user()->role == 1)
            <div class="collapse_sidebar">
                <img class="" src="{{asset('images/dashboard/e422b1d1-e9e7-4619-886c-869091f6116a.png')}}" alt="">
            </div>
        @endif
    </div>

    <div class="qudra-logo">
        <img class="" src="{{asset('images/dashboard/3a451dbf-8e41-4d8f-a7b2-706cc4639b34.png')}}" alt="">
    </div>

    <div class="data-time">
        <p class="time" id='ct6'></p>
        <p class="date">
            {{ ucwords(Carbon\Carbon::now()->format('F d l')) }}
        </p>

        @if(auth()->user()->role == 0)
            <a class="logout-user"
               onclick="event.preventDefault();document.getElementById('logout-form-user').submit();">
                Logout
            </a>
            <form class="d-none" id="logout-form-user" action="{{route('user.logout.form')}}" method="post">
                @csrf
            </form>
        @endif


    </div>


</nav>

<!-- Start sidebar -->
@if(auth()->user()->role == 1)
    <nav class="sidebar">
        <div class="menu_content">
            <div class="logo">
                <img class="" src="{{asset('images/dashboard/a7564dd9-79ac-40de-8d3c-1cf4b741a814.png')}}" alt="">
            </div>


            <ul class="menu_items">
                <li class="item">
                    <a href="{{route('export-cars')}}" class="nav_link">
                <span class="navlink_icon">
                    <img class="" src="{{asset('images/dashboard/o.png')}}" alt="">
                </span>
                        <span class="navlink">Average Serving Time</span>
                    </a>
                </li>
                <li class="item">
                    <a href="{{route('count-cars-per-day-export')}}" class="nav_link">
                        <span class="navlink_icon">
                            <img class="" src="{{asset('images/dashboard/o.png')}}" alt="">
                        </span>
                        <span class="navlink">Count Of Cars Per Day</span>
                    </a>
                </li>
                {{--                <li class="item">--}}
                {{--                    <a href="#" class="nav_link">--}}
                {{--                <span class="navlink_icon">--}}
                {{--                    <img class="" src="{{asset('images/dashboard/o.png')}}" alt="">--}}
                {{--                </span>--}}
                {{--                        <span class="navlink">Count Of Cars Per Hour</span>--}}
                {{--                    </a>--}}
                {{--                </li>--}}

                {{--                <li class="item">--}}
                {{--                    <a href="#" class="nav_link">--}}
                {{--                <span class="navlink_icon">--}}
                {{--                    <img class="" src="{{asset('images/dashboard/o.png')}}" alt="">--}}
                {{--                </span>--}}
                {{--                        <span class="navlink">Average Waiting Time</span>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                {{--                <li class="item">--}}
                {{--                    <a href="#" class="nav_link">--}}
                {{--                <span class="navlink_icon">--}}
                {{--                    <img class="" src="{{asset('images/dashboard/o.png')}}" alt="">--}}
                {{--                </span>--}}
                {{--                        <span class="navlink">Total Served Cars</span>--}}
                {{--                    </a>--}}
                {{--                </li>--}}

                <li class="item">
                    <a href="{{route('user.create')}}" class="nav_link">
                <span class="navlink_icon">
                    <img class="" src="{{asset('images/dashboard/o.png')}}" alt="">
                </span>
                        <span class="navlink">Users</span>
                    </a>
                </li>

                <!--
                <li class="item">
                    <a href="{{route('role.index')}}" class="nav_link">
                    <span class="navlink_icon">
                        <img class="" src="{{asset('images/dashboard/o.png')}}" alt="">
                    </span>
                        <span class="navlink">Roles</span>
                    </a>
                </li>
            -->


                <div class="bottom_content"
                     onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <div class="bottom">
                        <img class="" src="{{asset('images/dashboard/Logout.png')}}" alt="">
                        <span> Logout</span>
                    </div>
                </div>

                <form class="d-none" id="logout-form" action="{{route('user.logout.form')}}" method="post">
                    @csrf
                </form>

        </div>
    </nav>
@endif
<!-- End sidebar -->

<div class="main">
    <!-- START CASHIER IMAGES -->
    <img class="left-arrow" id="left-arrow" src="{{asset('images/dashboard/0a3b996d-fc85-405b-86f4-31f3e1641813.png')}}"
         alt="">
    <img class="right-arrow" id="right-arrow"
         src="{{asset('images/dashboard/4dc5a9b3-2f19-4f07-bb91-d47ba4c26760.png')}}" alt="">


    <img class="right-arrow-img" src="{{asset('images/dashboard/7a440a85-5b42-419d-9ccc-fb39f31b57d5.png')}}" alt="">


    <img class="block-1" src="{{asset('images/dashboard/7a440a85-5b42-419d-9ccc-fb39f31b57d5.png')}}" alt="">
    <img class="car-1" id="car-1" style="display: none;"
         src="{{asset('images/dashboard/42cd8f47-ae12-474b-933b-40ad4b367db4.png')}}" alt="">
    <span class="word-1">CASHIER</span>

    <img class="left-arrow-img" id="left-arrow-img"
         src="{{asset('images/dashboard/0a3b996d-fc85-405b-86f4-31f3e1641813.png')}}"
         alt="">

    <!-- END CASHIER IMAGES -->

    <img class="block-2" src="{{asset('images/dashboard/7a440a85-5b42-419d-9ccc-fb39f31b57d5.png')}}" alt="">
    {{--    <img class="car-2" src="{{asset('images/dashboard/be035fa7-72e8-4c4e-9a6d-535892e93606.png')}}" alt="">--}}


    <!-- TOP RIGHT CARS -->
    <img class="car-3" id="car-3" style="display:none;"
         src="{{asset('images/dashboard/be035fa7-72e8-4c4e-9a6d-535892e93606.png')}}" alt="">
    {{--        <img class="car-4" src="{{asset('images/dashboard/85ae1435-4b89-421f-bdcc-8e8c501d1645.png')}}" alt="">--}}
    {{--        <img class="car-5" src="{{asset('images/dashboard/85ae1435-4b89-421f-bdcc-8e8c501d1645.png')}}" alt="">--}}
    {{--        <img class="car-6" src="{{asset('images/dashboard/85ae1435-4b89-421f-bdcc-8e8c501d1645.png')}}" alt="">--}}
    {{--        <img class="car-20" src="{{asset('images/dashboard/85ae1435-4b89-421f-bdcc-8e8c501d1645.png')}}" alt="">--}}


    <!-- CENTER RIGHT CARS -->
    {{--    <img class="car-7" src="{{asset('images/dashboard/83555579-5394-48a5-b459-86d754e5f329.png')}}" alt="">--}}
    {{--    <img class="car-8" src="{{asset('images/dashboard/199a5fee-7daa-4de2-89fd-ce51b1efd602.png')}}" alt="">--}}


    <!-- BOTTOM LEFT CARS -->
    <img class="car-9" style="display: none;" id="car-9"
         src="{{asset('images/dashboard/876c14c3-ca08-4d8b-acd0-26a7cdb38248.png')}}" alt="">

    <img class="car-10" style="display: none;"
         src="{{asset('images/dashboard/876c14c3-ca08-4d8b-acd0-26a7cdb38248.png')}}" alt="">
    <img class="car-11" style="display: none;"
         src="{{asset('images/dashboard/876c14c3-ca08-4d8b-acd0-26a7cdb38248.png')}}" alt="">
    <img class="car-12" style="display: none;"
         src="{{asset('images/dashboard/876c14c3-ca08-4d8b-acd0-26a7cdb38248.png')}}" alt="">
    <img class="car-13" style="display: none;"
         src="{{asset('images/dashboard/876c14c3-ca08-4d8b-acd0-26a7cdb38248.png')}}" alt="">
    <img class="car-14" style="display: none;"
         src="{{asset('images/dashboard/876c14c3-ca08-4d8b-acd0-26a7cdb38248.png')}}" alt="">
    <img class="car-15" style="display: none;"
         src="{{asset('images/dashboard/876c14c3-ca08-4d8b-acd0-26a7cdb38248.png')}}" alt="">
    <img class="car-16" style="display: none;"
         src="{{asset('images/dashboard/876c14c3-ca08-4d8b-acd0-26a7cdb38248.png')}}" alt="">

    {{--    <img class="block-3" src="{{asset('images/dashboard/7a440a85-5b42-419d-9ccc-fb39f31b57d5.png')}}" alt="">--}}


    {{--    <span class="word-2">PRE-MENU</span>--}}
    <div class="inner-main">
        <div class="columns-3">
            <div class="box bg-1">
                <p class="head">
                    {{--                    <a href="{{route('export-cars')}}">--}}
                    Average Serving Time
                    {{--                    </a>--}}
                </p>
                <h2 style="color:#689552">
                    @if(isset($avgServingTime))
                        {{$avgServingTime}}
                    @else
                        45
                        {{-- 95 --}}
                    @endif

                </h2>
                <div class="list">
                    <div class="list-1">
                        <p>Prev</p>
                        <p style="color:#D60606">1:50</p>
                    </div>
                    <div class="list-2">
                        <p>Best</p>
                        <p style="color:#D2771F">1:50</p>
                    </div>
                    <div class="list-3">
                        <p>Pace</p>
                        <p style="color:#689552">1:50</p>
                    </div>
                    <div class="list-4">
                        <p>Goal</p>
                        <p style="color:#252F49">1:50</p>
                    </div>
                </div>
            </div>
            <div class="box bg-2">
                <p class="head">Count Of Cars / Day</p>
                <h2 style="color:#689552" id="count-cars-per-day">
                    @if(isset($carsCount))
                        {{$carsCount}}
                    @else
                        400
                    @endif
                </h2>
            </div>
            <div class="box bg-3">
                <p class="head">Count Of Cars / Hr</p>
                <h2 style="color:#689552" id="count-cars-per-hour">
                    @if(isset($carsCountPerHour))
                        {{ $carsCountPerHour }}
                    @else
                        40
                    @endif

                </h2>
            </div>
        </div>
        <div class="columns-3">
            <div class="box bg-1">
                <p class="head">Average Waiting Time</p>
                <h2 style="color:#D2B231">5:48</h2>
            </div>
            <div class="box bg-2">
                <p class="head">Total Experience Time (TET)</p>
                <h2 style="color:#E65050">2:50</h2>
                <p>Hour AVG</p>
                <p style="color:#689552">1:50</p>
            </div>
            <div class="box bg-3">
                <p class="head">Total Served Cars</p>
                <h2 style="color:#A97C50" id="total-served-cars">
                    @if(isset($totalServedCars))
                        {{$totalServedCars}}
                    @else
                        350
                    @endif
                </h2>
            </div>
        </div>
    </div>
</div>
<!-- JavaScript -->
<script src="{{asset('frontend/js/custom/index.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous">
</script>


<script src="{{ asset('frontend/js/iziToast.min.js') }}"></script>

<script src="https://js.pusher.com/7.0/pusher.min.js"></script>

<script>
    function display_ct6() {
        var x = new Date()
        var ampm = x.getHours() >= 12 ? ' PM' : ' AM';
        hours = x.getHours() % 12;
        hours = hours ? hours : 12;
        hours = hours - 1;
        if (hours === 0) {
            hours = 12;
        }
        var x1 = x.getMonth() + 1 + "/" + x.getDate() + "/" + x.getFullYear();
        // x1 = x1 + " - " +  hours + ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm;
        // x1 = hours + ":" + x.getMinutes() + ":" + x.getSeconds() + ":" + ampm;
        x1 = hours + ":" + x.getMinutes() + ":" + x.getSeconds() + ampm;
        document.getElementById('ct6').innerHTML = x1;
        display_c6();
    }

    function display_c6() {
        var refresh = 1000; // Refresh rate in milli seconds
        mytime = setTimeout('display_ct6()', refresh)
    }

    display_c6();


</script>

<script>
    $(document).ready(function () {
        let display_car_number = 0;
        $('.right-arrow').on('click', function () {
            // console.log('right-arrow');
            carLoginAt();
        });

        $('.left-arrow').on('click', function () {
            // console.log('left-arrow');
            carLogoutAt();
        });

        $('.left-arrow-img').on('click', function () {
            cars_count = $("img[id='car-9']").length - 1;
            if (cars_count != 0) {
                $('.car-3').attr('style', 'display:block');
                car_class_number = cars_count + 8;
                $('.' + 'car-' + car_class_number).attr('style', 'display:none');
            }
        });


        function carLoginAt() {
            console.log('increaseCarCount');
            clone = $('#car-9').clone().insertBefore('.car-9:last');
            cars_count = $("img[id='car-9']").length - 1;
            display_car_number = cars_count + 8;
            $('.' + 'car-' + display_car_number).attr('style', 'display:block');
            console.log(cars_count);
            makeAjaxRequestForLoginAt();
        };

        function makeAjaxRequestForLoginAt() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: '{{route('car.login')}}',
                success: function (response) {
                    if (response.status != 200) {
                        iziToast.error({
                            title: 'error',
                            message: 'Something Went Wrong',
                            position: 'topRight'
                        });
                    }
                }
            });
        };


        function carLogoutAt() {
            console.log('decreaseCarCount');
            cars_count = $("img[id='car-9']").length - 1;

            let isVisible = $("#car-3").is(":visible");

            if (cars_count != 0 && isVisible) {
                $(".car-9:last").remove();
                console.log('In Decrease Car Count Function => ' + cars_count);
                car_class_number = cars_count + 8;
                $('.' + 'car-' + car_class_number).attr('style', 'display:none');
                // Show The Getting Out Car
                $('.car-1').attr('style', 'display:block');
                // Make Car Invisible After 3 Seconds

                // $('#left-arrow').off('click');
                $('#left-arrow').attr('style', 'cursor:default');
                $('.car-3').attr('style', 'display:none');

                var makeCarInvisible = 3000;
                setTimeout(invisibleCar, makeCarInvisible);
                makeAjaxRequestForLogoutAt();
            }
        };

        function invisibleCar() {
            $('.car-1').attr('style', 'display:none');
            // $('#left-arrow').on('click');
            $('#left-arrow').attr('style', 'cursor:pointer');
        }


        function makeAjaxRequestForLogoutAt() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: '{{route('car.logout.at')}}',
                success: function (response) {
                    if (response.status != 200) {
                        iziToast.error({
                            title: 'error',
                            message: 'Something Went Wrong',
                            position: 'topRight'
                        });
                    }
                    if (response.status == 200) {
                        incrementCountByOne();
                    }
                }
            });
        };

        function incrementCountByOne() {
            // Here Increase Count Of Cars / Day By One
            let countOfCars = $('#count-cars-per-day').text().trim();
            countOfCarsAfterIncreaseByOne = parseInt(countOfCars) + 1;
            $('#count-cars-per-day').html('');
            $('#count-cars-per-day').text(countOfCarsAfterIncreaseByOne);

            // Here Increase Count Of Cars / Hr By One
            let countOfCarsPerHour = $('#count-cars-per-hour').text().trim();
            countOfCarsPerHourAfterIncreaseByOne = parseInt(countOfCarsPerHour) + 1;
            $('#count-cars-per-hour').html('');
            $('#count-cars-per-hour').text(countOfCarsPerHourAfterIncreaseByOne);

            // Here Increase Total Served Cars By One
            let totalServedCars = $('#total-served-cars').text().trim();
            totalServedCarsAfterIncreaseByOne = parseInt(totalServedCars) + 1;
            $('#total-served-cars').html('');
            $('#total-served-cars').text(totalServedCarsAfterIncreaseByOne);
        };

    });


</script>

<script>
    // Initialize Pusher with your credentials
    const pusher = new Pusher('33e49c17d20f548b9f47', {
        cluster: 'eu',
        // Additional options if required
    });

    // Subscribe to the channel where the events are broadcasted
    const channel = pusher.subscribe('car-get-in-channel');

    // Listen for the CarEnteredDriveThru event
    // channel.bind('App\\Events\\CarGetInEvent', function(data) {
    channel.bind('carIn', function(data) {
        // Update the UI with the new countOfCars without refreshing the page
        document.getElementById('total-served-cars').innerText = data.countOfCars;
    });
</script>

</body>


</html>
