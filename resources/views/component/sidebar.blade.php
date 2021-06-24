<nav class="sidebar-main">
    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
    <div id="sidebar-menu">
        <ul class="sidebar-links" id="simple-bar">
            <li class="back-btn">
                <a href="{{route('dashboard')}}">
                    <img class="img-fluid" src="{{asset('images/logo/logo-icon.png')}}" alt="">
                </a>
                <div class="mobile-back text-end"><span>Back</span>
                    <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                </div>
            </li>
            <li class="sidebar-main-title">
                <div>
                    <h6 class="lan-1">General</h6>
                    <p class="lan-2">Dashboards,widgets & layout.</p>
                </div>
            </li>
            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title link-nav" href="{{ route('college.index') }}">
                    <i class=" fa fa-university"></i>
                    <span>List Kampus</span>
                </a>
            </li>
            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title link-nav" href="{{ route('faculty.index') }}">
                    <i class="fa fa-graduation-cap"> </i>
                    <span>List Fakultas</span>
                </a>
            </li>
            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title link-nav" href="{{ route('program-study.index') }}">
                    <i class="fa fa-graduation-cap"> </i>
                    <span>Program Study Fakultas</span>
                </a>
            </li>
            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title link-nav" href="{{ route('learning-path.index') }}">
                    <i class="fa fa-graduation-cap"> </i>
                    <span>Mata Kuliah</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
</nav>
