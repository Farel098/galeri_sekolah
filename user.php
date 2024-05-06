<!-- Panggil file koneksi, karena kita membutuhkan nya -->
<?php
  include "koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SMK 1 TRIPLE J</title>
        <link rel="icon" type="image/x-icon" href="dist/assets/img/logo.jpg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="dist/css/styles.css" rel="stylesheet" />
        <!-- file pustaka CSS penggeser licin --> 
        <link rel = "stylesheet"  type = "text/css"  href = "slick/slick.css" /> 
        <link  rel = "stylesheet"  type = "text/css " href = "slick/slick-theme.css" />
        <!-- file pustaka JS penggeser licin --> 
        <tipe script  = "teks/javascript" src = "slick/slick.min.js" > </script >
        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-black fixed-top" id="mainNav">
            <div class="container-fluid">
    <a class="navbar-brand" href="#"><h3><p class="fw-semibold">
      <img src="dist/assets/img/logo.jpg"  width="60" height="60" class="d-inline-block align-text-top">
       SMK 1 TRIPLE J Terakreditasi A</p>
       </h3>
    </a>
  </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="#signup">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead d-flex align-item-center">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">SMK 1 TRIPLE J</h1>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">ABOUT US</h2>
                        <p class="text-white-50">
                        SMKS 1 TRIPLE J adalah salah satu satuan pendidikan dengan jenjang SMK di Karang Asem Barat, Kec. Citeureup, Kab. Bogor, Jawa Barat. Dalam menjalankan kegiatannya, SMKS 1 TRIPLE J berada di bawah naungan Kementerian Pendidikan dan Kebudayaan. SMK 1 TRIPLE J "JUJUR,JEMBATAN,JAYA".
                        </p>
                        <h3 class="text-white-70">LETS SCROLL MORE</h3>
                    </div>
                </div>
                <img class="img-fluid" src="<?php ?>" alt="..." />
            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-6 col-lg-5"><img class="img-fluid mb-3 mb-lg-0" src="dist/assets/img/smk11.jpg" alt="..." /></div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="featured-text text-center text-lg-left">

                            <h4>AGENDA SEKOLAH</h4>
                            <p class="text-black-50 mb-0">    <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col"><h6>Nomor</h6></th>
            <th scope="col"><h5>Nama Agenda</h5></th>
            <th scope="col"><h5>Kegiatan</h5></th>
            <th scope="col"><h5>Tanggal Upload</h5></th>
          </tr>
        </thead>
        <?php
              // variable no digunakan untuk meng-increments field no pada table. Karena nanti kita akan melooping data hasil query select kita. 
              $no = 1;
              // Simpan query kita kedalam variable agar lebih rapi, dan bisa reusable.
              // Arti dari query di bawah adalah pilih semua data dari table tb_siswa.
              $query = "SELECT * FROM posts";
              // Eksekusi Query
              // Simpan hasil eksekusi query kita ke dalam variable. Di sini variable nya saya kasih nama result.
              if(mysqli_query($conn, $query)) 
              // Done. Waktunya Looping
          ?>
           <tbody>
          <?php
            while ($data = mysqli_fetch_assoc($result)) {
                // Lakukan sesuatu dengan $data    
              echo "
                <tr>
                  <th scope='row'>". $no++ ."</th>
                  <td>". $data["judul"] ."</td>
                  <td>". $data["isi"] ."</td>
                  <td>". $data["create_at"] ."</td>
                  </td>
                </tr>  
              ";
            }
          ?>
        </tbody>  
      </table></p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                           
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="dist/assets/img/logo.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-dark text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">              
                              
                              <?php
                            $query = "SELECT * FROM kategori";
                            $result = mysqli_query($link, $query);
                             ?>    
                               <?php

                                 // Array untuk menyimpan baris-baris hasil kueri
                                 $rows = array();

                                 // Mengambil setiap baris hasil kueri dan menyimpannya dalam array $rows
                                 while ($row = mysqli_fetch_assoc($result)) {
                                    $rows[] = $row;
                                
                              }

                                 // Sekarang Anda dapat menggunakan foreach pada array $rows untuk melakukan sesuatu dengan setiap baris hasil kueri
                                 foreach ($rows as $data) {
                                 // Lakukan sesuatu dengan $data, misalnya menampilkannya dalam HTML
                                 echo "<h4 class='text-white'>" . $data["judul"] . "</h4>";
                                 echo "<p class='text-white'>" . $data["isi"] . "</p>";
                              }
                             ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="dist/assets/img/j.png" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left"> 
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">ADDRES</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"> Jalan Landbaw No.1 , Karang Asem Barat, Kec.Citeureup Kab.Bogor
                                    <br>
                                    <br>
                                    Kode Pos : 16810
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-address-book text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">CONTACT</h4>
                                <hr class="my-4 mx-auto" />
                                <i class="fa-solid fa-phone"></i> &nbsp;<a href=“tel:08757384”>(021)08757384</a>
                                <br>
                                <br>
                                <i class="fa-solid fa-envelope"></i> &nbsp;<a href=“mailto:smk1tj@gmail.com”>smk1tj@gmail.com</a>
                                <br>
                                <br>
                                <i class="website:"></i> &nbsp;<a href=“https://smk1tj.ch.id”>https://smk1tj.ch.id</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-location-dot text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">MAPS</h4>
                                <hr class="my-4 mx-auto" />
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.287964129711!2d106.86433137570901!3d-6.48516996340744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c15f22b23331%3A0x152d0f1eb6ef7c6c!2sSMKS%201%20Triple%20J!5e0!3m2!1sid!2sid!4v1714010624751!5m2!1sid!2sid" width="250" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5"></div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
      
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js" ></script>
    </body>
</html>