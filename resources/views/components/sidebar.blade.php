<div class="startbar d-print-none">
    <!--start brand-->
    <div class="brand">
        <a href="#" class="logo">
            <span>
                <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
            </span>
            <span class="">
                <img src="assets/images/logo.png" style="width: 210px;" alt="logo-large" class=" logo-light">
                <img src="assets/images/logo.png" style="width: 210px;" alt="logo-large" class="logo-lg logo-dark">
            </span>
        </a>
    </div>
    <!--end brand-->
    <!--start startbar-menu-->
    <div class="startbar-menu">
        <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
            <div class="d-flex align-items-start flex-column w-100">
                <!-- Navigation -->
                <ul class="navbar-nav mb-auto w-100">
                    <li class="menu-label mt-2">
                        <span>Navigation</span>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Route::is("home") ? 'active' : '' }}" href="/" role="button"
                           aria-expanded="false" aria-controls="sidebarDashboards">
                            <iconify-icon icon="solar:monitor-bold-duotone" class="menu-icon"></iconify-icon>
                            <span>Tableau de bord</span>
                        </a>
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is("visits") ? 'active' : '' }}" href="{{ url("/visits") }}">
                            <iconify-icon icon="solar:users-group-rounded-bold-duotone"
                                          class="menu-icon"></iconify-icon>
                            <span>Liste des visites</span>
                        </a>
                    </li><!--end nav-item-->
                    @if (Auth::user()->role == "ADMIN")
                     <li class="nav-item">
                        <a class="nav-link {{ Route::is("users_manage") ? 'active' : '' }}" href="{{ url("/users_manage") }}">
                            <iconify-icon icon="solar:shield-user-broken"
                                          class="menu-icon"></iconify-icon>
                            <span>Gestion des utilisateurs</span>
                        </a>
                    </li><!--end nav-item-->
                    @endif
                   

                    <li class="menu-label mt-2">
                        <small class="label-border">
                            <div class="border_left hidden-xs"></div>
                            <div class="border_right"></div>
                        </small>
                        <span>Affichage</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/stories">
                            <iconify-icon icon="solar:history-2-bold"
                                          class="menu-icon"></iconify-icon>
                            <span>Historique</span>
                        </a>
                    </li><!--end nav-item-->
                    @if (Auth::user()->role == "ADMIN")
                    <li class="menu-label mt-2">
                        <small class="label-border">
                            <div class="border_left hidden-xs"></div>
                            <div class="border_right"></div>
                        </small>
                        <span>Paramètres</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is("configs") ? 'active' : '' }}" href="{{ url("/configs") }}">
                            <iconify-icon icon="solar:settings-minimalistic-broken" class="menu-icon"></iconify-icon>
                            <span>Paramètres</span>
                        </a>
                    </li><!--end nav-item-->
                    @endif
                </ul><!--end navbar-nav--->
            </div>
        </div><!--end startbar-collapse-->
    </div><!--end startbar-menu-->
</div>
