<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sekolah BIAS Semarang</title>
        <!-- Favicon-->
        <link rel="icon" type="image/logo" href="gambar/logobias.jpeg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script
            src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>

        function validasi()
        {
            var nama = document.getElementById("nama").value;
            var sekolah = document.getElementById("sekolah").value;
            var nomor = document.getElementById("nomor").value;
            var email = document.getElementById("email").value;
            var kelas = document.getElementById("kelas").value;
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (nama.length == 0)
            {
                //alert("Nama lengkap harus diisi");
                swal("Pesan", "Nama lengkap harus diisi!", "error");
                document.getElementById("nama").focus();                        return false;
            }

            if (sekolah.length == 0)
            {
                //alert("Asal sekolah harus diisi");
                swal("Pesan", "Asal sekolah harus diisi!", "error");
                document.getElementById("sekolah").focus();                        return false;
            }

            if (nomor.length == 0)
            {
                //alert("Nomor Handphone (WA) harus diisi");
                swal("Pesan", "Nomor Handphone (WA) harus diisi!", "error");
                document.getElementById("nomor").focus();
                return false;
            }

            if (email.length == 0)
            {
                //alert("Email harus diisi");
                swal("Pesan", "Email harus diisi!", "error");
                document.getElementById("email").focus();                        return false;
            }

            if (kelas.length == 0)
            {
                //alert("Kelas harus diisi");
                swal("Pesan", "Kelas harus diisi!", "error");
                document.getElementById("kelas").focus();                        return false;
            }

            if (isNaN(nomor)) {
                swal("Pesan", "Nomor handphone (WA) harus berisi angka!", "error");
                document.getElementById("nomor").focus();
                return false;
            }

            if (nomor.length < 10) {
                swal("Pesan", "Nomor handphone terlalu pendek!", "error");
                document.getElementById("nomor").focus();
                return false;
            }

            if (!emailPattern.test(email)) {
                swal("Pesan", "Format email tidak valid!", "error");
                document.getElementById("email").focus();
                return false;
            }
            //defaultnya return true

            // Semua validasi lolos
            swal("Berhasil!", "Selamat Anda telah terdaftar!", "success");
            return false; // agar tidak reload halaman
        }
    </script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="gambar/logobias.jpeg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Program</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Updates</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Join Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-heading text-uppercase">SEKOLAH BIAS SEMARANG</div>
                <div class="masthead-subheading">Sekolah Islam Berwawasan Internasional</div>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"></b>Selamat Datang</h2>
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <p style="text-black text-size-adjust 20px margin-left: 70px; margin-right:70px;">Sekolah BIAS berdiri tahun 1994 yang bernaung di bawah Yayasan Bina Anak Sholeh. BIAS merupakan penyelenggara pendidikan terpadu dan berjenjang mulai dari Batita Center, Play Group, TK, SD, Kelas Tumbuh Kembang (KTK) serta SMP-SMA Fullday School maupun Boarding School. Untuk yang di Semarang sendiri, sekolah BIAS terdiri dari jenjang Batita Center, Play Group, TK dan SD.
                          <br><br>
                          Dengan Pengalaman Lebih dari 20 tahun Sebagai salah satu pelopor Jaringan Sekolah Islam Berwawasan Internasional Yang Mengedepankan penanaman Tauhid dan Akhlak dalam mendidik putra putri Ayah Bunda.</p>
                      </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Jenjang Pendidikan</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="gambar/batitacenter.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Batita Center</div>
                                <div class="portfolio-caption-subheading text-muted">Daycare BIAS</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="gambar/playgroup.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Playgroup</div>
                                <div class="portfolio-caption-subheading text-muted">Bermain & Belajar</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="gambar/tamankanak.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Taman Kanak Kanak</div>
                                <div class="portfolio-caption-subheading text-muted">Generasi Emas Pertumbuhan</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="gambar/sekolahdasar.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Sekolah Dasar</div>
                                <div class="portfolio-caption-subheading text-muted">Pondasi Karakter & Akhlaq</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="gambar/tamankelinci.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Taman Kelinci</div>
                                <div class="portfolio-caption-subheading text-muted">Sekolah Akhir Pekan</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="gambar/sekolahsenior.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Sekolah Senior</div>
                                <div class="portfolio-caption-subheading text-muted">Untuk 55 tahun keatas</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">BIAS Semarang Updates</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="gambar/sec4no1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>PKL untuk playgroup, </h4>
                                <h4 class="subheading">why not?</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Alhamdulillah pada tanggal 7 Oktober 2023, Play Group BIAS sudah melaksanakan PKL ke Taman Kyai Langgeng.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="gambar/sec4no2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Pendidikan dini kebangsaan</h4>
                                <h4 class="subheading">dan nasionalisme</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Berjiwa nasionalisme dan patriotisme merupakan hal fundamental dalam beragama, berbangsa dan benegara.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="gambar/sec4no3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Bijak menyikapi</h4>
                                <h4 class="subheading">isu corona</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Berawal dari Wuhan, Tiongkok, virus yang dinamai covid-19 benar-benar menyita perhatia dunia.</p></div>
                        </div>
                    </li>
                </ul>
            </div>
          </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Let's Join Us!</h2>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="frmDaftar"
                    onsubmit="return validasi();">
                    Nama Lengkap
                    <input type="text" class="form-control"
                        id="nama" name="nama"
                        placeholder="Nama Lengkap">
                    <br>
                    Asal Sekolah
                    <input type="text" class="form-control"
                        id="sekolah" name="sekolah"
                        placeholder="Asal Sekolah">
                    <br>
                    Nomor Whatsapp
                    <input type="text" class="form-control"
                        id="nomor" name="nomor"
                        placeholder="Contoh: 628192883777738 (Diawali dengan Angka 62)">
                    <br>
                    Email
                    <input type="text" class="form-control"
                        id="email" name="email"
                        placeholder="Email">
                    <br>
                    Program
                    <select class="form-control" id="kelas"
                        name="kelas">
                        <option value>-- Pilih Program--</option>
                        <option value="daycare">Batita Center</option>
                        <option value="Playgroup">Playgroup</option>
                        <option value="tk">taman Kanak-Kanak</option>
                        <option value="sd">Sekolah Dasar</option>
                        <option value="kelinci">Taman Kelas</option>
                        <option value="seniorschool">Sekolah Senior</option>
                    </select>
                    <br>
                    <input type="submit" class="btn btn-success" value="Daftar" />
                </form>
            </div>
        </section>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="gambar/batitacenter.jpg" alt="..." />
                                    <p>Batita Center BIAS Semarang  menyelenggarakan proses pembelajaran
                                      dengan mengikuti metode pendidikan Rasulullah SAW sebagai teladan terbaik.
                                      Pendidikan sesuai dengan usianya </p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="gambar/playgroup.jpg" alt="..." />
                                    <p>Playgroup BIAS Semarang menyelenggarakan proses pembelajaran
                                      dengan mengikuti metode pendidikan Rasulullah SAW sebagai teladan terbaik.
                                      Pendidikan sesuai dengan usianya.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="gambar/tamankanak.jpg" alt="..." />
                                    <p>Pendidikan anak usia dini diperuntukkan anak usia 4 s/d 6 Tahun. Berpartner dengan orang tua untuk membimbing anak usia dini. Sekolah yang nyaman, asri, bersih dan higienis dengan menerapkan pendidikan islami, berlandaskan aqidah yang lurus</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="gambar/sekolahdasar.jpg" alt="..." />
                                    <p>Jenjang pendidikan awal  pertama masa sekolah anak –anak dimulai usia 6 tahun. Sekolah yang nyaman, asri, bersih dan higienis dengan menerapkan pendidikan islami, berlandaskan aqidah yang lurus</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="gambar/tamankelinci.jpg" alt="..." />
                                    <p>Sekolah akhir pekan untuk anak anak</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="gambar/sekolahsenior.jpg" alt="..." />
                                    <p>“Orang cerdas adalah orang yang rendah diri dan beramal untuk kehidupan setelah kematian, dan orang lemah adalah orang yang mengikutkan dirinya pada hawa nafsunya dan berangan-angan atas Allah”
                                      (HR. al-Tirmidzi, Ibnu Majah dan lainnya).</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
