<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Peribadatan Umat Islam di Kabupaten Sleman</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    <!-- Latest compiled and minified CSS -->

    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.42.0/apexcharts.min.css" integrity="sha512-nnNXPeQKvNOEUd+TrFbofWwHT0ezcZiFU5E/Lv2+JlZCQwQ/ACM33FxPoQ6ZEFNnERrTho8lF0MCEH9DBZ/wWw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->

    <link href="{{ asset('css/styles02.css') }}" rel="stylesheet" />


    <style>
        /* Menambahkan gaya untuk mengatur margin pada chart */
        .card-body {
            margin-top: 15px;
            /* Sesuaikan nilai ini sesuai kebutuhan Anda */
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="https://slemankab.bps.go.id/">BPS Kabupaten Sleman</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Persebaran</a></li>


                    <!-- Dropdown Button -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('index') }}">WebMap</a>
                            <a class="dropdown-item" href="https://youtu.be/Hj5cZp-yaXw?si=Xc_G1wNF0-syaVWa">Cinematic</a>
                        </div>
                    </li>
                    <!-- End Dropdown Button -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead-->


      <header class="masthead" id="about">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Peribadatan Umat Muslim di Kabupaten Sleman</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Sleman, sebuah kabupaten di Daerah Istimewa Yogyakarta, terkenal
                        sebagai asal buah salak pondoh. Keindahan dan keberkahan dapat ditemukan dalam tempat
                        peribadatan umat Islam yang indah di seluruh wilayah ini. Dengan arsitektur megah dan kegiatan
                        keagamaan yang penuh makna, kita dapat menjelajahi kecantikan spiritual bersama.
                    </p>
                    <a class="btn btn-primary btn-xl" href="#services">Temukan Lebih Lanjut</a>
                </div>
            </div>
        </div>

    </header>



    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Peribadatan Umat Islam di Kabupaten Sleman</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-star-fill fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Keindahan Arsitektur</h3>
                        <p class="text-muted mb-0">Masjid-masjid dan mushola dengan arsitektur yang indah dan
                            menakjubkan di Kabupaten Sleman.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-calendar fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Kegiatan Keagamaan</h3>
                        <p class="text-muted mb-0">Berbagai kegiatan keagamaan dan event yang diselenggarakan
                            di masjid-masjid Kabupaten Sleman seperti pengajian, doa bersama, dan masih banyak lagi.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Berkolaborasi dalam Iman</h3>
                        <p class="text-muted mb-0">Kolaborasi dalam keimanan untuk memperkuat hubungan harmonis
                            antarumat lewat kegiatan antar sesama.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-hand-index-thumb fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Dukungan Sosial</h3>
                        <p class="text-muted mb-0">Layanan bantuan sosial dan dukungan bagi masyarakat
                            di Kabupaten Sleman.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/1.jpg') }}">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/a.jpg') }}" alt="..." />
                        <div class="portfolio-box-caption"></div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/2.jpg') }}">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/b.jpg') }}" alt="..." />
                        <div class="portfolio-box-caption"></div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/3.jpg') }}">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/c.jpg') }}" alt="..." />
                        <div class="portfolio-box-caption"></div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/4.jpg') }}">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/d.jpg') }}" alt="..." />
                        <div class="portfolio-box-caption"></div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/5.jpg') }}">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/e.jpg') }}" alt="..." />
                        <div class="portfolio-box-caption"></div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/6.jpg') }}">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/f.jpg') }}" alt="..." />
                        <div class="portfolio-box-caption"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
<!-- Chart -->
<div class="container mt-4 mb-4"> <!-- Added mb-4 for bottom margin -->
    <div class="card">
        <div class="card-header">
            <h5>Jumlah Masjid, Musholla, dan Langgar di Kabupaten Sleman per Tahun 2022</h5>
        </div>
        <div class="card-body">
            <div id="chart"></div>
        </div>
    </div>
</div>

<!-- Call to action-->
<section class="page-section bg-dark text-white">
    <div class="container px-4 px-lg-5 text-center">
        <h2 class="mb-4">Ingin mencari tempat peribadatan di sekitar anda?</h2>
        <a class="btn btn-light btn-xl" href="{{ route('index') }}">Klik disini!</a>
    </div>
</section>



    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2023 - Miftah</div>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha384-cBzAV4WjUZdAdq7xQacRAgT2YKGgE3azN6l1ZPcypdSA2NcFqQ6pIZ1aZYo5lFfB" crossorigin="anonymous"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.42.0/apexcharts.min.js" integrity="sha512-HctQcT5hnI/elQck4950pvd50RuDnjCSGSoHI8CNyQIYVxsUoyJ+gSQIOrll4oM/Z7Kfi7WCLMIbJbiwYHFCpA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        var options = {
            series: [{
                    name: 'Masjid',
                    data: [89, 124, 96, 103, 113, 129, 198, 106, 103, 125, 116, 173, 133, 105, 114, 90, 91],
                },
                {
                    name: 'Musholla',
                    data: [9, 14, 20, 24, 44, 35, 41, 23, 22, 20, 12, 40, 47, 19, 23, 19, 17],
                },
                {
                    name: 'Langgar',
                    data: [49, 59, 58, 68, 73, 57, 90, 74, 69, 69, 111, 96, 64, 119, 45, 31, 31],
                },
            ],
            chart: {
                type: 'bar',
                height: 350,
                stacked: true,
                stackType: '100%',
            },
            plotOptions: {
                bar: {
                    horizontal: true,
                },
            },
            stroke: {
                width: 1,
                colors: ['#fff'],
            },
            title: {
                text: 'Jumlah Tempat Ibadah berdasarkan Kecamatan',
            },
            xaxis: {
                categories: [
                    'Moyudan', 'Minggir', 'Seyegan', 'Godean', 'Gamping',
                    'Mlati', 'Depok', 'Berbah', 'Prambanan', 'Kalasan',
                    'Ngemplak', 'Ngaglik', 'Sleman', 'Tempel', 'Turi', 'Pakem', 'Cangkringan',
                ],
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return val.toLocaleString();
                    },
                },
            },
            fill: {
                opacity: 1,
            },
            legend: {
                position: 'top',
                horizontalAlign: 'left',
                offsetX: 40,
            },
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>

</body>

</html>