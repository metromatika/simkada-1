@extends('layouts.user_type.auth')

@section('content')
    <div class="row mt-4">
        <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-body px-0 pt-0 pb-2" id="Kecamatan">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kelurahan
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        L (orang)
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        P (orang)
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Total
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">1.</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Lalang</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">13</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">40</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">53</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                            <i class="fas fa-edit text-secondary"></i>
                                        </a>
                                        <span>
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="card z-index-2">
                <div class="card-body p-3">
                    <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
                        <div class="chart">
                            <canvas id="chart-bars" class="chart-canvas" height="280"></canvas>
                        </div>
                    </div>
                    <h6 class="ms-2 mt-4 mb-0"> Hitung Cepat Kab/Kota Aceh Selatan </h6>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('grafik-quick-count')
    <script>
        window.onload = function() {
            var ctx = document.getElementById("chart-bars").getContext("2d");

            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ["Bakongan", "Kluet Utara", "Selatan", "Labuhan", "Meukek", "Samadua", "Sawang",
                        "Tapatua", "Trumon", "Pasie Raja", "Baongan", "Kluet Tengah", "Kluet Timur",
                        "Trumon", "Labuhan", "Labuhan", "Kota Bahagia", "Trumon"
                    ],
                    datasets: [{
                            label: "Jokowi",
                            tension: 0.4,
                            borderWidth: 0,
                            borderRadius: 4,
                            borderSkipped: false,
                            backgroundColor: "#ea0606",
                            data: [20, 32, 25, 34, 29, 35, 17, 22, 15, 28, 12, 13, 10, 9, 17, 23, 12, 18],
                            maxBarThickness: 6
                        },
                        {
                            label: "Ma'ruf Amin",
                            tension: 0.4,
                            borderWidth: 0,
                            borderRadius: 4,
                            borderSkipped: false,
                            backgroundColor: "#82d616",
                            data: [8, 28, 22, 19, 23, 33, 18, 22, 17, 24, 8, 19, 12, 11, 24, 23, 16, 18],
                            maxBarThickness: 6
                        },
                        {
                            label: "Prabowo",
                            tension: 0.4,
                            borderWidth: 0,
                            borderRadius: 4,
                            borderSkipped: false,
                            backgroundColor: "#fbcf33",
                            data: [14, 20, 35, 22, 32, 36, 30, 11, 25, 33, 8, 14, 16, 15, 19, 16, 17, 13],
                            maxBarThickness: 6
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                            },
                            ticks: {
                                suggestedMin: 0,
                                suggestedMax: 500,
                                beginAtZero: true,
                                padding: 15,
                                font: {
                                    size: 14,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                                color: "#fff"
                            },
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false
                            },
                            ticks: {
                                display: false
                            },
                        },
                    },
                },
            });
        }
    </script>
@endpush
