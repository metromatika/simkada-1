<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="align-items-center d-flex m-0 navbar-brand text-wrap" href="{{ route('dashboard') }}">
            <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="...">
            <span class="ms-3 font-weight-bold">SIMKADA</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse h-auto w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            {{-- Section APPLICATIONS --}}
            <li class="nav-item mt-2">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">APPLICATIONS</h6>
            </li>
            {{-- Bagian Dashboard --}}
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{ url('dashboard') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title> Dashboard </title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(0.000000, 148.000000)">
                                            <path class="color-background opacity-6"
                                                d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z">
                                            </path>
                                            <path class="color-background"
                                                d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            {{-- DD Bagian Master Data --}}
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#masterData"
                    class="nav-link collapsed {{ Request::is('master-data/*') ? 'active' : '' }}"
                    aria-controls="applicationsExamples" role="button"
                    aria-expanded="{{ Request::is('master-data/data-TPS', 'master-data/data-jumlah-DPT') ? 'false' : '' }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="1rem" height="1rem" viewBox="0 0 16 16" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title> Master Data </title>
                            <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Rounded-Icons" transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF"
                                    fill-rule="nonzero">
                                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                        <g id="shop-" transform="translate(0.000000, 148.000000)">
                                            <path class="color-background"
                                                d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Master Data</span>
                </a>
                <div class="collapse {{ Request::is('master-data/*') ? 'show' : '' }}" id="masterData" style="">
                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('master-data/data-TPS') ? 'active' : '' }}"
                                href="{{ url('master-data/data-TPS') }}">
                                <span class="sidenav-normal"> Data TPS </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('master-data/data-jumlah-DPT') ? 'active' : '' }}"
                                href="{{ url('master-data/data-jumlah-DPT') }}">
                                <span class="sidenav-normal"> Data Jumlah DPT </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- Bagian Pasangan Calon --}}
            <li class="nav-item">
                <a class="nav-link {{ Request::is('pasangan-calon') ? 'active' : '' }}"
                    href="{{ url('pasangan-calon') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title> Pasangan Calon </title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(1.000000, 0.000000)">
                                            <path class="color-background opacity-6"
                                                d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z">
                                            </path>
                                            <path class="color-background"
                                                d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z">
                                            </path>
                                            <path class="color-background"
                                                d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Pasangan Calon</span>
                </a>
            </li>
            {{-- DD Bagian Tim Relawan --}}
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#TimRelawan"
                    class="nav-link collapsed {{ Request::is('tim-relawan/*') ? 'active' : '' }}"
                    aria-controls="applicationsExamples" role="button" aria-expanded="false">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="1rem" height="1rem" viewBox="0 0 16 16" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>laravel </title>
                            <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                fill-rule="evenodd">
                                <g id="Rounded-Icons" transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF"
                                    fill-rule="nonzero">
                                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                        <g id="shop-" transform="translate(0.000000, 148.000000)">
                                            <path class="color-background"
                                                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Tim Relawan</span>
                </a>
                <div class="collapse {{ Request::is('tim-relawan/daftar-tim', 'tim-relawan/personil-relawan') ? 'show' : '' }}"
                    id="TimRelawan">
                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('tim-relawan/daftar-tim') ? 'active' : '' }}"
                                href="{{ url('tim-relawan/daftar-tim') }}">
                                <span class="sidenav-normal"> Daftar Tim </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ Request::is('tim-relawan/personil-relawan') ? 'active' : '' }}"
                                href="{{ url('tim-relawan/personil-relawan') }}">
                                <span class="sidenav-normal"> Personil/Relawan </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- Bagian Log Relawan --}}
            <li class="nav-item">
                <a class="nav-link {{ Request::is('log-relawan-saksi') ? 'active' : '' }}"
                    href="{{ url('log-relawan-saksi') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="24px" height="24px" viewBox="0 0 16 16" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>office</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF"
                                    fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g id="office" transform="translate(153.000000, 2.000000)">
                                            <path class="color-background"
                                                d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Log Relawan/Saksi</span>
                </a>
            </li>
            {{-- Bagian Data DPT --}}
            <li class="nav-item">
                <a class="nav-link {{ Request::is('data-DPT') ? 'active' : '' }}" href="{{ url('data-DPT') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 16 16" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>office</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF"
                                    fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g id="office" transform="translate(153.000000, 2.000000)">
                                            <path class="color-background"
                                                d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z" />
                                            <path class="color-background"
                                                d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM9.98 5.356 11.372 10h.128a.5.5 0 0 1 0 1H11a.5.5 0 0 1-.479-.356l-.94-3.135-1.092 5.096a.5.5 0 0 1-.968.039L6.383 8.85l-.936 1.873A.5.5 0 0 1 5 11h-.5a.5.5 0 0 1 0-1h.191l1.362-2.724a.5.5 0 0 1 .926.08l.94 3.135 1.092-5.096a.5.5 0 0 1 .968-.039Z" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Data DPT</span>
                </a>
            </li>
            {{-- Bagian Data Pemilih/Pendukung --}}
            <li class="nav-item">
                <a class="nav-link {{ Request::is('data-pemilih-pendukung') ? 'active' : '' }}"
                    href="{{ url('/data-pemilih-pendukung') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 16 16" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>office</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF"
                                    fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g id="office" transform="translate(153.000000, 2.000000)">
                                            <path class="color-background"
                                                d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm1.354 4.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Data Pemilih/Pendukung</span>
                </a>
            </li>
            {{-- Bagian Simulasi Kemenangan --}}
            <li class="nav-item">
                <a class="nav-link {{ Request::is('simulasi-kemenangan') ? 'active' : '' }}"
                    href="{{ url('/simulasi-kemenangan') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 16 16" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>office</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF"
                                    fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g id="office" transform="translate(153.000000, 2.000000)">
                                            <path class="color-background"
                                                d="M.5 0a.5.5 0 0 1 .5.5v15a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 .5 0zM2 1.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Simulasi Kemenangan</span>
                </a>
            </li>
            {{-- Bagian Operator Simkada --}}
            <li class="nav-item">
                <a class="nav-link {{ Request::is('operator-simkada') ? 'active' : '' }}"
                    href="{{ url('/operator-simkada') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 16 16" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>office</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF"
                                    fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g id="office" transform="translate(153.000000, 2.000000)">
                                            <path class="color-background"
                                                d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Operator Simkada</span>
                </a>
            </li>
            {{-- DD Bagian Data Saksi --}}
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#DataSaksi"
                    class="nav-link collapsed {{ Request::is('data-saksi/*') ? 'active' : '' }}"
                    aria-controls="applicationsExamples" role="button" aria-expanded="false">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="1rem" height="1rem" viewBox="0 0 16 16" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>laravel </title>
                            <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                fill-rule="evenodd">
                                <g id="Rounded-Icons" transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF"
                                    fill-rule="nonzero">
                                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                        <g id="shop-" transform="translate(0.000000, 148.000000)">
                                            <path class="color-background"
                                                d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Data Saksi</span>
                </a>
                <div class="collapse {{ Request::is('data-saksi/list-daftar-saksi', 'data-saksi/monitoring-saksi') ? 'show' : '' }}"
                    id="DataSaksi">
                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('data-saksi/list-daftar-saksi') ? 'active' : '' }}"
                                href="{{ url('data-saksi/list-daftar-saksi') }}">
                                <span class="sidenav-normal"> List Daftar Saksi </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ Request::is('data-saksi/monitoring-saksi') ? 'active' : '' }}"
                                href="{{ url('data-saksi/monitoring-saksi') }}">
                                <span class="sidenav-normal"> Monitoring Saksi </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- DD Bagian Manajemen Logistik --}}
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#ManajemenLogistik"
                    class="nav-link collapsed
                    {{ Request::is('manajemen-logistik/*') ? 'active' : '' }}"
                    aria-controls="applicationsExamples" role="button" aria-expanded="false">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="1rem" height="1rem" viewBox="0 0 16 16" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title> Manajemen Logistik </title>
                            <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                fill-rule="evenodd">
                                <g id="Rounded-Icons" transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF"
                                    fill-rule="nonzero">
                                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                        <g id="shop-" transform="translate(0.000000, 148.000000)">
                                            <path class="color-background"
                                                d="M15.985 8.5H8.207l-5.5 5.5a8 8 0 0 0 13.277-5.5zM2 13.292A8 8 0 0 1 7.5.015v7.778l-5.5 5.5zM8.5.015V7.5h7.485A8.001 8.001 0 0 0 8.5.015z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Manajemen Logistik</span>
                </a>
                <div class="collapse
                    {{ Request::is(
                        'manajemen-logistik/daftar-stok-barang',
                        'manajemen-logistik/pemesanan-barang',
                        'manajemen-logistik/penerimaan-barang',
                        'manajemen-logistik/pengeluaran-barang',
                    )
                        ? 'show'
                        : '' }}"
                    id="ManajemenLogistik">
                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item ">
                            <a class="nav-link {{ Request::is('manajemen-logistik/daftar-stok-barang') ? 'active' : '' }}"
                                href="{{ url('manajemen-logistik/daftar-stok-barang') }}">
                                <span class="sidenav-normal"> Daftar Stok Barang </span>
                            </a>
                            <a class="nav-link {{ Request::is('manajemen-logistik/pemesanan-barang') ? 'active' : '' }}"
                                href="{{ url('manajemen-logistik/pemesanan-barang') }}">
                                <span class="sidenav-normal"> Pemesanan Barang </span>
                            </a>
                            <a class="nav-link {{ Request::is('manajemen-logistik/penerimaan-barang') ? 'active' : '' }}"
                                href="{{ url('manajemen-logistik/penerimaan-barang') }}">
                                <span class="sidenav-normal"> Penerimaan Barang </span>
                            </a>
                            <a class="nav-link {{ Request::is('manajemen-logistik/pengeluaran-barang') ? 'active' : '' }}"
                                href="{{ url('manajemen-logistik/pengeluaran-barang') }}">
                                <span class="sidenav-normal"> Pengeluaran Barang </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- DD Bagian Monitoring Isu Politik --}}
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#MonitoringIsuPolitik"
                    class="nav-link collapsed {{ Request::is('monitoring-isu-politik/*') ? 'active' : '' }}"
                    aria-controls="applicationsExamples" role="button" aria-expanded="false">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="1rem" height="1rem" viewBox="0 0 16 16" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>laravel </title>
                            <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                fill-rule="evenodd">
                                <g id="Rounded-Icons" transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF"
                                    fill-rule="nonzero">
                                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                        <g id="shop-" transform="translate(0.000000, 148.000000)">
                                            <path class="color-background"
                                                d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Monitoring Isu Politik</span>
                </a>
                <div class="collapse {{ Request::is('monitoring-isu-politik/daftar-isu', 'monitoring-isu-politik/rekapitulasi-isu') ? 'show' : '' }}"
                    id="MonitoringIsuPolitik">
                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item ">
                            <a class="nav-link {{ Request::is('monitoring-isu-politik/daftar-isu') ? 'active' : '' }}"
                                href="{{ url('monitoring-isu-politik/daftar-isu') }}">
                                <span class="sidenav-normal"> Daftar Isu </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('monitoring-isu-politik/rekapitulasi-isu') ? 'active' : '' }}"
                                href="{{ url('monitoring-isu-politik/rekapitulasi-isu') }}">
                                <span class="sidenav-normal"> Rekapitulasi Isu </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- Section SIMKADA --}}
            <li class="nav-item mt-2">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">SIMKADA</h6>
            </li>
            {{-- DD Bagian Rekapitulasi --}}
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#Rekapitulasi"
                    class="nav-link collapsed
                    {{ Request::is('rekapitulasi/*') ? 'active' : '' }}"
                    aria-controls="applicationsExamples" role="button" aria-expanded="false">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="1rem" height="1rem" viewBox="0 0 16 16" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>laravel </title>
                            <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                fill-rule="evenodd">
                                <g id="Rounded-Icons" transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF"
                                    fill-rule="nonzero">
                                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                        <g id="shop-" transform="translate(0.000000, 148.000000)">
                                            <path class="color-background" fill-rule="evenodd"
                                                d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8V1z" />
                                            <path class="color-background"
                                                d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                            <path class="color-background"
                                                d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Rekapitulasi</span>
                </a>
                <div class="collapse {{ Request::is('rekapitulasi/*') ? 'show' : '' }}" id="Rekapitulasi">
                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item ">
                            <a class="nav-link {{ Request::is('rekapitulasi/relawan') ? 'active' : '' }}"
                                href="{{ url('rekapitulasi/relawan') }}">
                                <span class="sidenav-normal"> Relawan </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('rekapitulasi/pemilih-pendukung') ? 'active' : '' }}"
                                href="{{ url('rekapitulasi/pemilih-pendukung') }}">
                                <span class="sidenav-normal"> Pemilih/Pendukung </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('rekapitulasi/dpt') ? 'active' : '' }}"
                                href="{{ url('rekapitulasi/dpt') }}">
                                <span class="sidenav-normal"> DPT </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('rekapitulasi/dpt-manual') ? 'active' : '' }}"
                                href="{{ url('rekapitulasi/dpt-manual') }}">
                                <span class="sidenav-normal"> DPT Manual </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('rekapitulasi/jumlah-tps') ? 'active' : '' }}"
                                href="{{ url('rekapitulasi/jumlah-tps') }}">
                                <span class="sidenav-normal"> Jumlah TPS </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('rekapitulasi/tabulasi-suara') ? 'active' : '' }}"
                                href="{{ url('rekapitulasi/tabulasi-suara') }}">
                                <span class="sidenav-normal"> Tabulasi Suara </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- DD Bagian Survey --}}
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#Survey"
                    class="nav-link collapsed {{ Request::is('survey/*') ? 'active' : '' }}"
                    aria-controls="applicationsExamples" role="button" aria-expanded="false">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="1rem" height="1rem" viewBox="0 0 16 16" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>laravel </title>
                            <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                fill-rule="evenodd">
                                <g id="Rounded-Icons" transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF"
                                    fill-rule="nonzero">
                                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                        <g id="shop-" transform="translate(0.000000, 148.000000)">
                                            <path class="color-background"
                                                d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1zm9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-3zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-3zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Survey</span>
                </a>
                <div class="collapse {{ Request::is('survey/*') ? 'show' : '' }}" id="Survey">
                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item ">
                            <a class="nav-link {{ Request::is('survey/input-data') ? 'active' : '' }}"
                                href="{{ url('survey/input-data') }}">
                                <span class="sidenav-normal"> Input Data </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('survey/hasil-survey') ? 'active' : '' }}"
                                href="{{ url('survey/hasil-survey') }}">
                                <span class="sidenav-normal"> Hasil Survey </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- DD Bagian Quick Count --}}
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#QuickCount"
                    class="nav-link collapsed {{ Request::is('quick-count/*') ? 'active' : '' }}"
                    aria-controls="applicationsExamples" role="button" aria-expanded="false">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="1rem" height="1rem" viewBox="0 0 16 16" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>laravel </title>
                            <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                fill-rule="evenodd">
                                <g id="Rounded-Icons" transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF"
                                    fill-rule="nonzero">
                                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                        <g id="shop-" transform="translate(0.000000, 148.000000)">
                                            <path class="color-background"
                                                d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Quick Count</span>
                </a>
                <div class="collapse {{ Request::is('quick-count/*') ? 'show' : '' }}" id="QuickCount">
                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item ">
                            <a class="nav-link {{ Request::is('quick-count/input-data') ? 'active' : '' }}"
                                href="{{ url('quick-count/input-data') }}">
                                <span class="sidenav-normal"> Input Data </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('quick-count/grafik-quick-count') ? 'active' : '' }}"
                                href="{{ url('quick-count/grafik-quick-count') }}">
                                <span class="sidenav-normal"> Grafik Quick Count </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- DD Bagian Real Count --}}
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#RealCount"
                    class="nav-link collapsed {{ Request::is('real-count/*') ? 'active' : '' }}"
                    aria-controls="applicationsExamples" role="button" aria-expanded="false">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="1rem" height="1rem" viewBox="0 0 16 16" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>laravel </title>
                            <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                fill-rule="evenodd">
                                <g id="Rounded-Icons" transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF"
                                    fill-rule="nonzero">
                                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                        <g id="shop-" transform="translate(0.000000, 148.000000)">
                                            <path class="color-background" fill-rule="evenodd"
                                                d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Real Count</span>
                </a>
                <div class="collapse {{ Request::is('real-count/*') ? 'show' : '' }}" id="RealCount" style="">
                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item ">
                            <a class="nav-link {{ Request::is('real-count/input-data') ? 'active' : '' }}"
                                href="{{ url('real-count/input-data') }}">
                                <span class="sidenav-normal"> Input Data </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('real-count/grafik-real-count') ? 'active' : '' }}"
                                href="{{ url('real-count/grafik-real-count') }}">
                                <span class="sidenav-normal"> Grafik Real Count </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- Section SYSTEM CONFIG --}}
            <li class="nav-item mt-2">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">SYSTEM CONFIG</h6>
            </li>
            {{-- Bagian User Profile --}}
            <li class="nav-item">
                <a class="nav-link {{ Request::is('user-profile') ? 'active' : '' }} "
                    href="{{ url('user-profile') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 16 16" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>customer-support</title>
                            <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                fill-rule="evenodd">
                                <g id="Rounded-Icons" transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF"
                                    fill-rule="nonzero">
                                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                        <g id="customer-support" transform="translate(1.000000, 0.000000)">
                                            <path class="color-foreground" d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            <path fill-rule="evenodd" class="color-foreground"
                                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">User Profile</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
        <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
            <div class="full-background"
                style="background-image: url('../assets/img/curved-images/white-curved.jpeg')"></div>
            <div class="card-body d-flex align-items-center justify-content-between p-1">
                <div class="me-7 mt-2">
                    <h6 class="text-white up">DINSOS</h6>
                    <p class="text-xs font-weight-bold text-white">Admin</p>
                </div>
                <a href="/logout" class="">
                    <i class="ni ni-button-power text-danger font-weight-bold text-gradient text-lg top-0"></i>
                </a>
            </div>
        </div>
    </div>
</aside>
