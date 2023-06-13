<!-- BEGIN: Header-->
<nav
    class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a>
                </li>
            </ul>

            <ul class="nav navbar-nav bookmark-icons">
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#"
                                                          data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                          title="Email"><i class="ficon" data-feather="mail"></i></a>
                </li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-bs-toggle="tooltip"
                                                          data-bs-placement="bottom" title="Chat"><i class="ficon"
                                                                                                     data-feather="message-square"></i></a>
                </li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#"
                                                          data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                          title="Calendar"><i class="ficon" data-feather="calendar"></i></a>
                </li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-bs-toggle="tooltip"
                                                          data-bs-placement="bottom" title="Todo"><i class="ficon"
                                                                                                     data-feather="check-square"></i></a>
                </li>
            </ul>


            <ul class="nav navbar-nav">
                <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon text-warning"
                                                                                            data-feather="star"></i></a>
                    <div class="bookmark-input search-input">
                        <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0"
                               data-search="search">
                        <ul class="search-list search-list-bookmark"></ul>
                    </div>
                </li>
            </ul>
        </div>


        <ul class="nav navbar-nav align-items-center ms-auto">
            <li class="nav-item dropdown dropdown-language">
                <a class="nav-link dropdown-toggle" id="dropdown-flag" href="#" data-bs-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i
                        class="flag-icon flag-icon-us">
                    </i>
                    <span class="selected-language" style="color: #252F49; font-weight: bold;" id='ct6'>
{{--                        {{Carbon\Carbon::now()->format('g:i A')}}   --}}
                    </span>
                </a>
            </li>


            <li class="nav-item d-none d-lg-block">
                <a class="nav-link nav-link-style">
                    <i class="ficon" data-feather="moon"></i>
                </a>
            </li>


            <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#"
                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none">
                        <span
                            class="user-name fw-bolder" style="color: #252F49; font-weight: bold;">
                            {{ ucwords(Carbon\Carbon::now()->format('F d l')) }}
                            {{--                            MAY 18 THURSDAY --}}
                        </span>
                    </div>
                </a>
            </li>
        </ul>


    </div>
</nav>


<!-- END: Header-->
