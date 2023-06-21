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
</head>
<body onload=display_ct();>
<!-- navbar -->
<nav class="navbar">
    <div class="logo_item">
        <!-- Sidebar Open / Close -->
        <div class="expand_sidebar" id="sidebarOpen">
            <img class="" src="{{asset('images/dashboard/e422b1d1-e9e7-4619-886c-869091f6116a.png')}}" alt="">
        </div>
        <div class="collapse_sidebar">
            <img class="" src="{{asset('images/dashboard/e422b1d1-e9e7-4619-886c-869091f6116a.png')}}" alt="">
        </div>
    </div>

    <div class="qudra-logo">
        <img class="" src="{{asset('images/dashboard/3a451dbf-8e41-4d8f-a7b2-706cc4639b34.png')}}" alt="">
    </div>

    <div class="data-time">
        <p class="time" id='ct6'></p>
        <p class="date">
            {{ ucwords(Carbon\Carbon::now()->format('F d l')) }}
        </p>
    </div>

</nav>

<!-- sidebar -->
<nav class="sidebar">
    <div class="menu_content">
        <div class="logo">
            <img class="" src="{{asset('images/dashboard/a7564dd9-79ac-40de-8d3c-1cf4b741a814.png')}}" alt="">
        </div>
        <ul class="menu_items">
            <li class="item">
                <a href="#" class="nav_link">
                <span class="navlink_icon">
                    <img class="" src="{{asset('images/dashboard/o.png')}}" alt="">
                </span>
                    <span class="navlink">Average Serving Time</span>
                </a>
            </li>
            <li class="item">
                <a href="#" class="nav_link">
                <span class="navlink_icon">
                    <img class="" src="{{asset('images/dashboard/o.png')}}" alt="">
                </span>
                    <span class="navlink">Count Of Cars Per Day</span>
                </a>
            </li>
            <li class="item">
                <a href="#" class="nav_link">
                <span class="navlink_icon">
                    <img class="" src="{{asset('images/dashboard/o.png')}}" alt="">
                </span>
                    <span class="navlink">Count Of Cars Per Hour</span>
                </a>
            </li>
            <li class="item">
                <a href="#" class="nav_link">
                <span class="navlink_icon">
                    <img class="" src="{{asset('images/dashboard/o.png')}}" alt="">
                </span>
                    <span class="navlink">Average Waiting Time</span>
                </a>
            </li>
            <li class="item">
                <a href="#" class="nav_link">
                <span class="navlink_icon">
                    <img class="" src="{{asset('images/dashboard/o.png')}}" alt="">
                </span>
                    <span class="navlink">Total Served Cars</span>
                </a>
            </li>

            <li class="item">
                <a href="{{route('user.create')}}" class="nav_link">
                <span class="navlink_icon">
                    <img class="" src="{{asset('images/dashboard/o.png')}}" alt="">
                </span>
                    <span class="navlink">Users</span>
                </a>
            </li>

            <li class="item">
                <a href="{{route('role.index')}}" class="nav_link">
                <span class="navlink_icon">
                    <img class="" src="{{asset('images/dashboard/o.png')}}" alt="">
                </span>
                    <span class="navlink">Roles</span>
                </a>
            </li>


            <div class="bottom_content" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
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

<div class="main">
    <!-- START CASHIER IMAGES -->
    <img class="left-arrow" src="{{asset('images/dashboard/0a3b996d-fc85-405b-86f4-31f3e1641813.png')}}" alt="">
    <img class="right-arrow" src="{{asset('images/dashboard/4dc5a9b3-2f19-4f07-bb91-d47ba4c26760.png')}}" alt="">
    <img class="block-1" src="{{asset('images/dashboard/7a440a85-5b42-419d-9ccc-fb39f31b57d5.png')}}" alt="">
    <img class="car-1" src="{{asset('images/dashboard/42cd8f47-ae12-474b-933b-40ad4b367db4.png')}}" alt="">
    <span class="word-1">CASHIER</span>
    <!-- END CASHIER IMAGES -->

    <img class="block-2" src="{{asset('images/dashboard/7a440a85-5b42-419d-9ccc-fb39f31b57d5.png')}}" alt="">
    <img class="car-2" src="{{asset('images/dashboard/be035fa7-72e8-4c4e-9a6d-535892e93606.png')}}" alt="">
    <img class="car-3" src="{{asset('images/dashboard/be035fa7-72e8-4c4e-9a6d-535892e93606.png')}}" alt="">
    <img class="car-4" src="{{asset('images/dashboard/85ae1435-4b89-421f-bdcc-8e8c501d1645.png')}}" alt="">
    <img class="car-5" src="{{asset('images/dashboard/85ae1435-4b89-421f-bdcc-8e8c501d1645.png')}}" alt="">
    <img class="car-6" src="{{asset('images/dashboard/85ae1435-4b89-421f-bdcc-8e8c501d1645.png')}}" alt="">
    <img class="car-7" src="{{asset('images/dashboard/83555579-5394-48a5-b459-86d754e5f329.png')}}" alt="">
    <img class="car-8" src="{{asset('images/dashboard/199a5fee-7daa-4de2-89fd-ce51b1efd602.png')}}" alt="">
    <img class="car-9" src="{{asset('images/dashboard/876c14c3-ca08-4d8b-acd0-26a7cdb38248.png')}}" alt="">
    <img class="car-10" src="{{asset('images/dashboard/876c14c3-ca08-4d8b-acd0-26a7cdb38248.png')}}" alt="">
    <img class="car-11" src="{{asset('images/dashboard/876c14c3-ca08-4d8b-acd0-26a7cdb38248.png')}}" alt="">
    <img class="car-12" src="{{asset('images/dashboard/876c14c3-ca08-4d8b-acd0-26a7cdb38248.png')}}" alt="">
    <img class="block-3" src="{{asset('images/dashboard/7a440a85-5b42-419d-9ccc-fb39f31b57d5.png')}}" alt="">


    <span class="word-2">PRE-MENU</span>
    <div class="inner-main">
        <div class="columns-3">
            <div class="box bg-1">
                <p class="head">Average Serving Time</p>
                <h2 style="color:#689552">95</h2>
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
                <h2 style="color:#689552">400</h2>
            </div>
            <div class="box bg-3">
                <p class="head">Count Of Cars / Hr</p>
                <h2 style="color:#689552">40</h2>
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
                <h2 style="color:#A97C50">350</h2>
            </div>
        </div>
    </div>
</div>
<!-- JavaScript -->
<script src="{{asset('frontend/js/custom/index.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous">
</script>

<script>
    function display_ct6() {
        var x = new Date()
        var ampm = x.getHours() >= 12 ? ' PM' : ' AM';
        hours = x.getHours() % 12;
        hours = hours ? hours : 12;
        hours = hours - 1;
        if(hours === 0) {
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
    $(window).on('load', function () {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
</body>
</html>
