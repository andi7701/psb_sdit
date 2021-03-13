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

                @if (Auth::user()->status === 'Register')
                <li class="sidebar-item {{ (request()->is('home')) ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item {{ (request()->is('user/payment')) ? 'active' : '' }}">
                    <a href="{{ route('payment') }}" class='sidebar-link'>
                        <i class="bi bi-cash"></i>
                        <span>Payment</span>
                    </a>
                </li>

                <li class="sidebar-item {{ (request()->is('user/kontakkami')) ? 'active' : '' }}">
                    <a href="{{ route('contact') }}" class='sidebar-link'>
                        <i class="bi bi-telephone-forward-fill"></i>
                        <span>Kontak Kami</span>
                    </a>
                </li>

                @else
                
                <li class="sidebar-item {{ (request()->is('home')) ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Biodata</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item  {{ (request()->is('user/datasiswa')) ? 'active' : '' }}">
                            <a href="{{ route('datasiswa') }}">Data Siswa</a>
                        </li>
                        <li class="submenu-item  {{ (request()->is('user/dataortu')) ? 'active' : '' }}">
                            <a href="{{ route('dataortu') }}">Data Orang Tua</a>
                        </li>
                        <li class="submenu-item {{ (request()->is('user/datapendukung')) ? 'active' : '' }}">
                            <a href="{{ route('datapendukung') }}">Data Pendukung</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item {{ (request()->is('user/uploadfile')) ? 'active' : '' }}">
                    <a href="{{ route('uploadfile') }}" class='sidebar-link'>
                        <i class="bi bi-cloud-upload"></i>
                        <span>Upload File</span>
                    </a>
                </li>

                <li class="sidebar-item  {{ (request()->is('user/pengumuman')) ? 'active' : '' }} ">
                    <a href="{{ route('showpengumuman') }}" class='sidebar-link'>
                        <i class="bi bi-calendar-date"></i>
                        <span>Pengumuman</span>
                    </a>
                </li>

                <li class="sidebar-item {{ (request()->is('user/kontakkami')) ? 'active' : '' }}">
                    <a href="{{ route('contact') }}" class='sidebar-link'>
                        <i class="bi bi-telephone-forward-fill"></i>
                        <span>Kontak Kami</span>
                    </a>
                </li>
                @endif
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>