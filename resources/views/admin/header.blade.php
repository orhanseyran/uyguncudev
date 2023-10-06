<header class="header header-nav-menu header-nav-links">
    <div class="logo-container">
        <a href="../" class="logo">
            <img src="{{ asset("resimler/admin.png") }}" class="logo-image" width="250" height="120" alt="Porto Admin" /><img src="{{ asset("resimler/admin.png") }}" class="logo-image-mobile" width="90" height="41" alt="Porto Admin" />
        </a>


        <!-- start: header nav menu -->
        <div class="header-nav collapse">
            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 header-nav-main-square">

            </div>
        </div>
        <button class="btn header-btn-collapse-nav d-lg-none" data-bs-toggle="collapse" data-bs-target=".header-nav">
            <i class="fas fa-bars"></i>
        </button>

        <!-- end: header nav menu -->
    </div>


    <!-- start: search & user box -->
    <div class="header-right">

        <a class="btn search-toggle d-none d-md-inline-block d-xl-none" data-toggle-class="active" data-target=".search"><i class="bx bx-search"></i></a>




        <div id="userbox" class="userbox">
            <a href="#" data-bs-toggle="dropdown">

                <span class="profile-picture profile-picture-as-text">JD</span>
                <div class="profile-info profile-info-no-role" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                    <span class="name">Merhaba, {{ auth()->user()->role }} <strong class="font-weight-semibold">{{ auth()->user()->name }}</strong></span>
                </div>

                <i class="fas fa-chevron-down text-color-dark"></i>
            </a>

            <div class="dropdown-menu">
                <ul class="list-unstyled">

                    <li>
                        <a role="menuitem" tabindex="-1" href="{{ route("logout") }}"><i class="bx bx-log-out"></i> Çıkış Yap</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end: search & user box -->
</header>
<!-- end: header -->
