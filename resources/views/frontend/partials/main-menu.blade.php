<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true" style="width: 250px;">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand" href="#">
                    <img src="{{asset('images/qudra_logo.svg')}}" alt="Not Found" style="width: 53px;height: 45px"/>
                    <h2 class="brand-text">Q-Thru</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
                    <i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                    <i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                        data-ticon="disc"></i></a></li>
        </ul>
    </div>



    <div class="shadow-bottom"></div>


    <div class="main-menu-content" style="background-color: #4C556B !important;">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" style="background-color: #4C556B !important; ">
{{--            <li class=" nav-item " ><a class="d-flex align-items-center" href="#">--}}

{{--                    <span class="menu-title text-truncate"--}}
{{--                                                      data-i18n="Dashboards" style="color: white !important;">Dashboards</span><span--}}
{{--                        class="badge badge-light-warning rounded-pill ms-auto me-1">2</span></a>--}}
{{--            </li>--}}



            <li class=" navigation-header" style="background-color: #4C556B; text-align: center" >
                <span data-i18n="Apps &amp; Pages">
                                        <img src="{{asset('images/side_menu_logo.svg')}}" alt="Not Found"
                                             style="width: 100px;height: 100px"/>
                </span>
                <i data-feather="more-horizontal"></i>
            </li>


            <li class=" nav-item"><a class="d-flex align-items-center" href="#">
                    <i class="fa-regular fa-circle" style="color: white"></i>

                    <span class="menu-title text-truncate li-color" data-i18n="Email" >
                        Average Serving Time
                    </span></a>
            </li>

            <li class=" nav-item"><a class="d-flex align-items-center" href="#">
                    <i class="fa-regular fa-circle" style="color: white"></i>

                    <span class="menu-title text-truncate li-color" data-i18n="Email">
                        Count Of Cars Per Day
                    </span></a>
            </li>

            <li class=" nav-item"><a class="d-flex align-items-center" href="#">
                    <i class="fa-regular fa-circle" style="color: white"></i>
                    <span class="menu-title text-truncate li-color" data-i18n="Email">
                        Count Of Cars Per Hour
                    </span></a>
            </li>

            <li class=" nav-item"><a class="d-flex align-items-center" href="#">
                    <i class="fa-regular fa-circle" style="color: white"></i>
                    <span class="menu-title text-truncate li-color" data-i18n="Email">
                       Average Waiting Time
                    </span></a>
            </li>

            <li class=" nav-item"><a class="d-flex align-items-center" href="#">
                    <i class="fa-regular fa-circle" style="color: white"></i>
                    <span class="menu-title text-truncate li-color" data-i18n="Email">
                       Total Served Cars
                    </span></a>
            </li>
        </ul>

        <div class="logout" style="margin-top: 82%; margin-left: 6%;">
            <a onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <img src="{{asset('images/logout.svg')}}" alt="" />
                <span class="menu-title text-truncate" data-i18n="Email" style="color: #E65050; font-weight: bold; margin-left: 8px;" >
                Logout
            </span>
            </a>
        </div>

        <form class="d-none" id="logout-form" action="{{route('user.logout.form')}}" method="post">
            @csrf
        </form>
    </div>
</div>
<!-- END: Main Menu-->
