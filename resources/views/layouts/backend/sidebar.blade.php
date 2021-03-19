<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    {{-- <a href="index.html"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo" srcset=""></a> --}}
                    <h3>Sekolah Darma Bangsa</h3>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item  {{ (request()->is('home')) ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item  has-sub {{ (request()->is('backend/pendaftar/*')) ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Data Pendaftar</span>
                    </a>
                    <ul class="submenu {{ (request()->is('backend/pendaftar/*')) ? 'active' : '' }}">
                        <li class="submenu-item {{ (request()->is('backend/pendaftar/dataregister')) ? 'active' : '' }}">
                            <a href="{{ route('dataregister') }}">Register</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('backend/pendaftar/datapayment')) ? 'active' : '' }}">
                            <a href="{{ route('datapayment') }}">Payment</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('backend/pendaftar/datarepayment')) ? 'active' : '' }}">
                            <a href="{{ route('datarepayment') }}">Repayment</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('backend/pendaftar/datasuccess')) ? 'active' : '' }}">
                            <a href="{{ route('datasuccess') }}">Success</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item has-sub {{ (request()->is('backend/settings/*')) ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Settings</span>
                    </a>
                    <ul class="submenu {{ (request()->is('backend/settings/*')) ? 'active' : '' }}">
                        <li class="submenu-item ">
                            <a href="layout-default.html">Manage Admin</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="layout-vertical-1-column.html">Manage Site</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('backend/settings/showcontact')) ? 'active' : '' }}">
                            <a href="{{ route('showcontact') }}">Manage Kontak</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Manage Biaya</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>