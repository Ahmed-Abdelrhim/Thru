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


    <link rel="stylesheet" href="{{ asset('frontend/css/iziToast.min.css') }}">
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
                <a href="#" class="nav_link">
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

<div class="main">
    <!-- START ROLE CREATE FORM -->
    <div class="columns-3">
        <form  method="POST" action="{{route('user.store')}}" >
            @csrf
            <div class="form-group">
                <label for="name" class="role-input">User Name</label>
                <input type="text" class="input-form @error('name') is-invalid @enderror" id="name" name="name" >
                @error('name')
                <div class="input-validation" >{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group" style="margin-top: 20px;">
                <label for="email" class="role-input">User Email</label>
                <input type="text" class="input-form @error('email') is-invalid @enderror" id="email" name="email" >
                @error('email')
                <div class="input-validation" >{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group" style="margin-top: 20px;">
                <label for="role" class="role-input">User Role</label>
                <select class="input-form" aria-label="Default select example" name="role" id="role">
                    <option selected>-- Choose User Role -- </option>
                    <option value="1">User</option>
                    <option value="2">Admin</option>
                </select>

                @error('role')
                <div class="input-validation" >{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group" style="margin-top: 20px;">
                <label for="password" class="role-input">User Password</label>
                <input type="password" class="input-form @error('password') is-invalid @enderror" id="password" name="password" >
                @error('password')
                <div class="input-validation" >{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="input-button">Submit</button>
        </form>

    </div>


    <!-- END ROLE CREATE FORM -->

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
            if (hours === 0) {
                hours = 12;
            }
            var x1 = x.getMonth() + 1 + "/" + x.getDate() + "/" + x.getFullYear();
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>
    <script src="{{ asset('frontend/js/iziToast.min.js') }}"></script>

    <!-- iziToast -->
    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch (type) {
            case 'info':
                iziToast.info({
                    title: 'info',
                    message: '{{ session('message') }}',
                    position: 'topRight'
                });
                break;

            case 'success':
                iziToast.success({
                    title: 'Success',
                    message: '{{ session('message') }}',
                    position: 'topRight'
                });
                break;

            case 'warning':
                iziToast.warning({
                    title: 'warning',
                    message: '{{ session('message') }}',
                    position: 'topRight'
                });
                break;

            case 'error':
                iziToast.error({
                    title: 'error',
                    message: '{{ session('message') }}',
                    position: 'topRight'
                });
                break;
        }
        @endif
    </script>
    <!-- iziToast -->

    <!-- Swal -->
    <script type="text/javascript">
        function deleteConfirmation(id) {
            swal.fire({
                title: "Delete?",
                icon: 'question',
                text: "Please ensure and then confirm!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: !0
            }).then(function (e) {
                if (e.value === true) {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        type: 'POST',
                        url: "{{url('Admin/role/delete')}}/" + id,
                        data: {_token: CSRF_TOKEN},
                        dataType: 'JSON',
                        success: function (results) {
                            if (results.success === true) {
                                swal.fire("Done!", results.message, "success");
                                // refresh page after 2 seconds
                                setTimeout(function () {
                                    location.reload();
                                }, 2000);
                            } else {
                                swal.fire("Error!", results.message, "error");
                            }
                        }
                    });
                } else {
                    e.dismiss;
                }
            }, function (dismiss) {
                return false;
            })
        }
    </script>
    <!-- Swal -->


</body>
</html>
