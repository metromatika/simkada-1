@extends('layouts.user_type.auth')

@section('content')
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah DPT</p>
                                <h5 class="font-weight-bolder mb-0">
                                    404.333
                                    {{-- <span class="text-success text-sm font-weight-bolder">+55%</span> --}}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah TPS</p>
                                <h5 class="font-weight-bolder mb-0">
                                    80.822
                                    {{-- <span class="text-success text-sm font-weight-bolder">+3%</span> --}}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Relawan</p>
                                <h5 class="font-weight-bolder mb-0">
                                    34
                                    {{-- <span class="text-danger text-sm font-weight-bolder">-2%</span> --}}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Pendukung</p>
                                <h5 class="font-weight-bolder mb-0">
                                    95
                                    {{-- <span class="text-success text-sm font-weight-bolder">+5%</span> --}}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card">

                <div class="card-body p-3">
                    <h5 class="font-weight-bolder text-center pb-1">Demografi</h5>
                    <div class="row px-3">
                        <div class="col-lg-4 shadow-lg border-info rounded-3 border-end border-start px-0 mx-auto">
                            <div class="d-flex flex-column h-100">
                                <p class="mb-1 pt-3 text-bold text-center">Daftar Pemilih Tetap</p>
                                <div class="text-center ">
                                    <div class="row g-1 py-4 px-2">
                                        <div class="col-6">
                                            <div class="p-1 text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                    fill="#0D7ED7" class="bi bi-gender-male" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2H9.5zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-1 text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                    fill="#AE3DC3" class="bi bi-gender-female" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-1 text-center text-bold">9.557</div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-1 text-center text-bold">307.060</div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-1 text-center">23.63%</div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-1 text-center">76.37%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 shadow-lg border-info rounded-3 border-end border-start px-0 mx-auto">
                            <div class="d-flex flex-column h-100">
                                <p class="mb-1 pt-3 text-bold text-center">Daftar Pemilih Tetap</p>
                                <div class="container text-center">
                                    <div class="row g-1 pt-4 pb-4">
                                        <div class="col-6">
                                            <div class="p-1 text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                    fill="#0D7ED7" class="bi bi-gender-male" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2H9.5zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-1 text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                    fill="#AE3DC3" class="bi bi-gender-female" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-1 text-center text-bold">9.557</div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-1 text-center text-bold">307.060</div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-1 text-center">23.63%</div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-1 text-center">76.37%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 shadow-lg border-info rounded-3 border-end border-start px-0 mx-auto">
                            <div class="d-flex flex-column h-100">
                                <p class="mb-1 pt-3 text-bold text-center">Daftar Pemilih Tetap</p>
                                <div class="container text-center">
                                    <div class="row g-1 pt-4 pb-4">
                                        <div class="col-6">
                                            <div class="p-1 text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                    fill="#0D7ED7" class="bi bi-gender-male" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2H9.5zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-1 text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                    fill="#AE3DC3" class="bi bi-gender-female" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-1 text-center text-bold">9.557</div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-1 text-center text-bold">307.060</div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-1 text-center">23.63%</div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-1 text-center">76.37%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card h-100 p-3">
                <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100"
                    style="background-image: url('../assets/img/ivancik.jpg');">
                    <span class="mask bg-gradient-dark"></span>
                    <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                        <h5 class="text-white font-weight-bolder mb-4 pt-2">Count Down Pilkada Serentak 2024</h5>
                        <p class="text-white font-weight-bold">27 November 2024</p>
                        <div class="container-lg">
                            <div class="row">
                                <div class="col">
                                    <h3 class="text-white text-center">3</h3>
                                </div>
                                <div class="col">
                                    <h3 class="text-white text-center">3</h3>
                                </div>
                                <div class="col">
                                    <h3 class="text-white text-center">3</h3>
                                </div>
                                <div class="col">
                                    <h3 class="text-white text-center">3</h3>
                                </div>
                                <div class="col">
                                    <h3 class="text-white text-center">3</h3>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col">
                                    <p class="text-white-50 text-center">Bulan</p>
                                </div>
                                <div class="col">
                                    <p class="text-white-50 text-center">Hari</p>
                                </div>
                                <div class="col">
                                    <p class="text-white-50 text-center">Jam</p>
                                </div>
                                <div class="col">
                                    <p class="text-white-50 text-center">Menit</p>
                                </div>
                                <div class="col">
                                    <p class="text-white-50 text-center">Detik</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 col-xl-4">
                <div class="card h-100">
                    <div class="bg-gradient-danger border-radius-md p-3 h-50">
                        <img src="../assets/img/jokowi.png"
                            class="img-fluid shadow border-radius-xl h-100 w-100 object-fit-cover" alt="invision_logo">
                    </div>
                    <div class="card-body px-3 pb-0">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-8">
                                    <p class="text-gradient text-dark mb-2 text-sm">Pasangan Calon <b>Presiden RI</b></p>
                                    <a href="javascript:;">
                                        <h5>
                                            Jokowi - Jokowi
                                        </h5>
                                    </a>
                                    <p class="mb-4 text-sm">
                                        Indonesia Maju!
                                    </p>
                                </div>
                                <div class="col-4 text-center">
                                    <p class="text-gradient text-dark mb-2 text-sm">Nomor urut <br>
                                    <h1><b></b>1</h1>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="{{ route('pasangan-calon') }}" type="button" class="btn btn-outline-primary btn-sm mb-0">Selengkapnya</a>
                            <div class="avatar-group mt-2">
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="PDIP">
                                    <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                                </a>
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Gerindra">
                                    <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                                </a>
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="PSI">
                                    <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                                </a>
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="PPP">
                                    <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="card h-100">
                    <div class="bg-gradient-dark border-radius-md p-3 h-50">
                        <img src="../assets/img/maruf.png"
                            class="img-fluid shadow border-radius-xl h-100 w-100 object-fit-cover" alt="invision_logo">
                    </div>
                    <div class="card-body px-3 pb-0">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-8">
                                    <p class="text-gradient text-dark mb-2 text-sm">Pasangan Calon <b>Presiden RI</b></p>
                                    <a href="javascript:;">
                                        <h5>
                                            Maruf - Maruf
                                        </h5>
                                    </a>
                                    <p class="mb-4 text-sm">
                                        Indonesia Jaya!
                                    </p>
                                </div>
                                <div class="col-4 text-center">
                                    <p class="text-gradient text-dark mb-2 text-sm">Nomor urut <br>
                                    <h1><b></b>2</h1>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="{{ route('pasangan-calon') }}" type="button" class="btn btn-outline-primary btn-sm mb-0">Selengkapnya</a>
                            <div class="avatar-group mt-2">
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="PDIP">
                                    <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                                </a>
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Gerindra">
                                    <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                                </a>
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="PSI">
                                    <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                                </a>
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="PPP">
                                    <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="card h-100">
                    <div class="bg-gradient-info border-radius-md p-3 h-50">
                        <img src="../assets/img/prabowo.png"
                            class="img-fluid shadow border-radius-xl h-100 w-100 object-fit-cover" alt="invision_logo">
                    </div>
                    <div class="card-body px-3 pb-0">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-8">
                                    <p class="text-gradient text-dark mb-2 text-sm">Pasangan Calon <b>Presiden RI</b></p>
                                    <a href="javascript:;">
                                        <h5>
                                            Prabowo - Prabowo
                                        </h5>
                                    </a>
                                    <p class="mb-4 text-sm">
                                        Indonesia Hebat!
                                    </p>
                                </div>
                                <div class="col-4 text-center">
                                    <p class="text-gradient text-dark mb-2 text-sm">Nomor urut <br>
                                    <h1><b></b>3</h1>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="{{ route('pasangan-calon') }}" type="button" class="btn btn-outline-primary btn-sm mb-0">Selengkapnya</a>
                            <div class="avatar-group mt-2">
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="PDIP">
                                    <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                                </a>
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Gerindra">
                                    <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                                </a>
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="PSI">
                                    <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                                </a>
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="PPP">
                                    <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-12 mt-4">
                <div class="card mb-4">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-1">Projects</h6>
                        <p class="text-sm">Architects design houses</p>
                    </div>
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                <div class="card card-blog card-plain">
                                    <div class="position-relative">
                                        <a class="d-block shadow-xl border-radius-xl">
                                            <img src="../assets/img/home-decor-1.jpg" alt="img-blur-shadow"
                                                class="img-fluid shadow border-radius-xl">
                                        </a>
                                    </div>
                                    <div class="card-body px-1 pb-0">
                                        <p class="text-gradient text-dark mb-2 text-sm">Project #2</p>
                                        <a href="javascript:;">
                                            <h5>
                                                Modern
                                            </h5>
                                        </a>
                                        <p class="mb-4 text-sm">
                                            As Uber works through a huge amount of internal management turmoil.
                                        </p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                                Project</button>
                                            <div class="avatar-group mt-2">
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Elena Morison">
                                                    <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Ryan Milly">
                                                    <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Nick Daniel">
                                                    <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                                                    <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                <div class="card card-blog card-plain">
                                    <div class="position-relative">
                                        <a class="d-block shadow-xl border-radius-xl">
                                            <img src="../assets/img/home-decor-2.jpg" alt="img-blur-shadow"
                                                class="img-fluid shadow border-radius-lg">
                                        </a>
                                    </div>
                                    <div class="card-body px-1 pb-0">
                                        <p class="text-gradient text-dark mb-2 text-sm">Project #1</p>
                                        <a href="javascript:;">
                                            <h5>
                                                Scandinavian
                                            </h5>
                                        </a>
                                        <p class="mb-4 text-sm">
                                            Music is something that every person has his or her own specific opinion about.
                                        </p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                                Project</button>
                                            <div class="avatar-group mt-2">
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Nick Daniel">
                                                    <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                                                    <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Elena Morison">
                                                    <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Ryan Milly">
                                                    <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                <div class="card card-blog card-plain">
                                    <div class="position-relative">
                                        <a class="d-block shadow-xl border-radius-xl">
                                            <img src="../assets/img/home-decor-3.jpg" alt="img-blur-shadow"
                                                class="img-fluid shadow border-radius-xl">
                                        </a>
                                    </div>
                                    <div class="card-body px-1 pb-0">
                                        <p class="text-gradient text-dark mb-2 text-sm">Project #3</p>
                                        <a href="javascript:;">
                                            <h5>
                                                Minimalist
                                            </h5>
                                        </a>
                                        <p class="mb-4 text-sm">
                                            Different people have different taste, and various types of music.
                                        </p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">View
                                                Project</button>
                                            <div class="avatar-group mt-2">
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                                                    <img alt="Image placeholder" src="../assets/img/team-4.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Nick Daniel">
                                                    <img alt="Image placeholder" src="../assets/img/team-3.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Ryan Milly">
                                                    <img alt="Image placeholder" src="../assets/img/team-2.jpg">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Elena Morison">
                                                    <img alt="Image placeholder" src="../assets/img/team-1.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                <div class="card h-100 card-plain border">
                                    <div class="card-body d-flex flex-column justify-content-center text-center">
                                        <a href="javascript:;">
                                            <i class="fa fa-plus text-secondary mb-3"></i>
                                            <h5 class=" text-secondary"> New project </h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        {{-- @include('layouts.footers.auth.footer') --}}
    </div>
@endsection
