<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('images/favicon.png" type="image/x-icon')}}">
    {{--    <title>Cuba - Premium Admin Template</title>--}}
    @if(isset($title))
        <title>{{ config('app.name', 'Laravel') - $title }}</title>
    @else
        <title>{{ config('app.name', 'Laravel') }}</title>
@endif
<!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
          rel="stylesheet')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
          rel="stylesheet')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/date-picker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/select2.css') }}">
    <!-- Plugins css Ends-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/summernote.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/datatables.css') }}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('css/color-1.css" media="screen')}}">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
{{--    <link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}
    @livewireStyles
    <!-- Scripts -->
{{--    <script src="{{ mix('js/app.js') }}" defer></script>--}}
</head>
<body onload="startTime()">
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        <div class="header-wrapper row m-0">
            <form class="form-inline search-full col" action="#" method="get">
                <div class="form-group w-100">
                    <div class="Typeahead Typeahead--twitterUsers">
                        <div class="u-posRelative">
                            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                   placeholder="Search Cuba .." name="q" title="" autofocus>
                            <div class="spinner-border Typeahead-spinner" role="status"><span
                                    class="sr-only">Loading...</span></div>
                            <i class="close-search" data-feather="x"></i>
                        </div>
                        <div class="Typeahead-menu"></div>
                    </div>
                </div>
            </form>
            <div class="header-logo-wrapper col-auto p-0">
                <div class="logo-wrapper"><a href="{{ route('dashboard') }}">
                        <img class="img-fluid" src="{{asset('images/logo/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="toggle-sidebar">
                    <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                </div>
            </div>
            <div class="left-header col horizontal-wrapper ps-0">
                <ul class="horizontal-menu">
                </ul>
            </div>
            <div class="nav-right col-8 pull-right right-header p-0">
                <ul class="nav-menus">
                    <li><span class="header-search"><i data-feather="search"></i></span></li>
                    <li>
                        <div class="mode"><i class="fa fa-moon-o"></i></div>
                    </li>
                    <li class="maximize"><a class="text-dark" href="#!" onclick="toggleFullScreen()"><i
                                data-feather="maximize"></i></a></li>
                    <li class="profile-nav onhover-dropdown p-0 me-0">
                        <div class="media profile-media"><img class="b-r-10"
                                                              src="{{asset('images/dashboard/profile.jpg')}}" alt="">
                            <div class="media-body"><span>{{auth()->user()->name}}</span>
                                <p class="mb-0 font-roboto">{{ \App\Http\Controllers\Helper::getNameRole(auth()->user()->role) }}
                                    <i class="middle fa fa-angle-down"></i>
                                </p>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            {{--                            <div class="block px-4 py-2 text-xs text-gray-400">--}}
                            {{--                                {{ __('Manage Team') }}--}}
                            {{--                            </div>--}}

                            {{--                            <!-- Team Settings -->--}}
                            {{--                            <li><a href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"><i--}}
                            {{--                                        data-feather="user"></i><span>{{ __('Team Settings') }}</span></a></li>--}}


                            {{--                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())--}}
                            {{--                                <li>--}}
                            {{--                                    <a href="{{ route('teams.create') }}">--}}
                            {{--                                        <i data-feather="user"></i><span>{{ __('Create New Team') }}</span>--}}
                            {{--                                    </a>--}}
                            {{--                                </li>--}}
                            {{--                            @endcan--}}

                            {{--                            <div class="border-t border-gray-100"></div>--}}

                            {{--                            <!-- Team Switcher -->--}}
                            {{--                            <div class="block px-4 py-2 text-xs text-gray-400">--}}
                            {{--                                {{ __('Switch Teams') }}--}}
                            {{--                            </div>--}}

                            {{--                            @foreach (Auth::user()->allTeams() as $team)--}}
                            {{--                                <x-jet-switchable-team :team="$team"/>--}}
                            {{--                            @endforeach--}}

                            {{--                            <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>--}}
                            {{--                            <li><a href="#"><i data-feather="file-text"></i><span>Taskboard</span></a></li>--}}
                            {{--                            <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>--}}
                            <li>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"><i data-feather="log-in"> </i><span>Log out</span></button>
                                </form>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>

            <script class="result-template" type="text/x-handlebars-template">
                <div class="ProfileCard u-cf">
                    <div class="ProfileCard-avatar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-airplay m-0">
                            <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                            <polygon points="12 15 17 21 7 21 12 15"></polygon>
                        </svg>
                    </div>
                    <div class="ProfileCard-details">
                        <div class="ProfileCard-realName"></div>
                    </div>
                </div>
            </script>
            <script class="empty-template" type="text/x-handlebars-template">
                <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down,
                    yikes!
                </div></script>
        </div>
    </div>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
            <div>
                <div class="logo-wrapper"><a href="{{ route('dashboard') }}"><img class="img-fluid for-light"
                                                                                  src="{{asset('images/logo/logo.png')}}"
                                                                                  alt=""><img
                            class="img-fluid for-dark" src="{{asset('images/logo/logo_dark.png')}}" alt=""></a>
                    <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i>
                    </div>
                </div>
                <div class="logo-icon-wrapper">
                    <a href="{{ route('dashboard') }}">
                        <img class="img-fluid" src="{{asset('images/logo/logo-icon.png')}}" alt="">
                    </a>
                </div>
                @include('component.sidebar')
            </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        {{ $header }}
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                {{$slot}}
            </div>
            <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2020 © Cuba theme by pixelstrap </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
@stack('modals')
<!-- latest jquery-->
<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
<!-- Bootstrap js-->
<script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<!-- feather icon js-->
<script src="{{asset('js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- scrollbar js-->
<script src="{{asset('js/scrollbar/simplebar.js')}}"></script>
<script src="{{asset('js/scrollbar/custom.js')}}"></script>
<!-- Sidebar jquery-->
<script src="{{asset('js/config.js')}}"></script>
<!-- Plugins JS start-->
<script src="{{asset('js/sidebar-menu.js')}}"></script>
<script src="{{asset('js/chart/chartist/chartist.js')}}"></script>
<script src="{{asset('js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
<script src="{{asset('js/chart/knob/knob.min.js')}}"></script>
<script src="{{asset('js/chart/knob/knob-chart.js')}}"></script>
<script src="{{asset('js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{asset('js/notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('js/dashboard/default.js')}}"></script>
<script src="{{asset('js/notify/index.js')}}"></script>
<script src="{{asset('js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('js/datepicker/date-picker/datepicker.custom.js')}}"></script>
<script src="{{asset('js/typeahead/handlebars.js')}}"></script>
<script src="{{asset('js/typeahead/typeahead.bundle.js')}}"></script>
<script src="{{asset('js/typeahead/typeahead.custom.js')}}"></script>
<script src="{{asset('js/typeahead-search/handlebars.js')}}"></script>
<script src="{{asset('js/typeahead-search/typeahead-custom.js')}}"></script>
<script src="{{asset('js/jquery.ui.min.js')}}"></script>
<script src="{{asset('js/editor/summernote/summernote.js')}}"></script>
<script src="{{asset('js/editor/summernote/summernote.custom.js')}}"></script>
<script src="{{ asset('js/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('js/select2/select2-custom.js') }}"></script>
<script src="{{asset('js/tooltip-init.js')}}"></script>
<script src="{{asset('js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/datatable/datatables/datatable.custom.js')}}"></script>
<script src="{{asset('js/form-validation-custom.js')}}"></script>

<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/theme-customizer/customizer.js')}}"></script>
<!-- login js-->
<!-- Plugin used-->
@livewireScripts
</body>
</html>
