<!-- Navbar-->
<nav class="navbar navbar-marketing navbar-expand-lg bg-transparent navbar-dark fixed-top">
    <div class="container px-5">
        <a class="navbar-brand text-white" href="/">Siput Bucin SB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i data-feather="menu"></i></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-lg-5">
                <li class="nav-item dropdown dropdown-sm no-caret">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownDemos" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tentang Kami
                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end me-lg-n20 me-xl-n15 animated--fade-in-up" aria-labelledby="navbarDropdownPages">
                        <div class="row g-0">
                            <div class="col-lg-12 p-lg-5">
                                <h6 class="dropdown-header text-primary">Tentang Kami</h6>
                                <a class="dropdown-item" href="{{ route('story') }}">Kisah Kami</a>
                                <a class="dropdown-item" href="{{ route('vision') }}">Visi & Misi</a>
                                <div class="dropdown-divider border-0 d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-xl no-caret">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownPages" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Inti
                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end me-lg-n20 me-xl-n15 animated--fade-in-up" aria-labelledby="navbarDropdownPages">
                        <div class="row g-0">
                            <div class="col-lg-4 p-lg-5">
                                <h6 class="dropdown-header text-primary">Informasi</h6>
                                <a class="dropdown-item" href="{{ route('news') }}">Berita</a>
                                <a class="dropdown-item" href="{{ route('announcement') }}">Pengumuman</a>
                                <div class="dropdown-divider border-0 d-lg-none"></div>
                            </div>
                            <div class="col-lg-4 p-lg-5">
                                <h6 class="dropdown-header text-primary">Perizinan</h6>
                                <a class="dropdown-item" href="{{ route('production') }}">PIRT</a>
                                <a class="dropdown-item" href="{{ route('halal') }}">Sertifikasi Halal</a>
                                <a class="dropdown-item" href="{{ route('market') }}">Izin Edar</a>
                                <div class="dropdown-divider border-0 d-lg-none"></div>
                            </div>
                            <div class="col-lg-4 p-lg-5">
                                <h6 class="dropdown-header text-primary">Gabung Kami</h6>
                                <a class="dropdown-item" href="">Toko UMKM</a>
                                <a class="dropdown-item" href="">Daftar Sekarang</a>
                                <div class="dropdown-divider border-0 d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown no-caret">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dukungan
                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
                        <a class="dropdown-item py-3" href="" target="_blank">
                            <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="book-open"></i></div>
                            <div>
                                <div class="small text-gray-500">Dokumentasi</div>
                                Cara Bergabung
                            </div>
                        </a>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item py-3" href="" target="_blank">
                            <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="phone"></i></div>
                            <div>
                                <div class="small text-gray-500">Kontak</div>
                                08999002566
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
