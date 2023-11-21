<!DOCTYPE html> <html lang="en"> <head> <!-- Required meta tags --> <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" /> <link
  rel="stylesheet" href="{{ asset('css/home.css') }}"> <link rel="stylesheet"
  href="/css/unpkg.com_swiper@8.1.6_swiper-bundle.min.css" />

<!-- ini css -->
<style>
  .navbar-nav .nav-link {
    margin-right: 15px;
    /* Atur jarak antara item menu */
  }

  .icon-bars {
    color: #fff;
    /* Warna ikon */
    font-size: 24px;
    /* Ukuran ikon */
  }

  .gauge {
    padding-top: 5rem;
    padding-bottom: 0%;
    padding-left: 0%;
    padding-right: 0%;
    background-color: #1e87f0;
  }

  section {
    padding-top: 5rem;
    padding-bottom: 5rem;
  }


  .footer {
    background-color: #343a40;
    color: white;
    padding: 20px 0;
  }

  .footer-content {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
  }

  .footer-column {
    flex: 1;
    margin-bottom: 10px;
    margin-right: 10px;
  }

  .footer-column h5 {
    margin-bottom: 10px;
    font-size: 18px;
  }

  .footer-column p {
    margin-bottom: 8px;
    font-size: 14px;
  }

  .social-icons i {
    font-size: 18px;
    margin-right: 8px;
  }

  .social-icon {
    font-size: 18px;
    color: white;
    margin-left: 8px;
  }

  .footer .social-icon {
    margin-right: 8px;
  }

  .footer img {
    width: 100px;
    /* Sesuaikan ukuran gambar sesuai kebutuhan */
    float: left;
    margin-right: 20px;
  }

</style>

<title>HOME</title>

</head>

<body id="home">
  <!-- bagian navbar -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hamburger Menu</title>
  <link rel="stylesheet" href="./home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>
    <header>
      <nav>
        <ul class='nav-bar'>
          <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#">Microclimate</a>
              <input type='checkbox' id='check' />
              <span class="menu">
                <li class="nav-item">
                  <a class="nav-link {{($title === " home")? 'active' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{($title === " about")? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{($title === " kontak")? 'active' : '' }}" href="/kontak">Contact</a>
                </li>
                <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
              </span>
              <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
        </ul>
      </nav>

      <!-- akhir navbar -->
      <div style="margin-top: 20px;"></div>
      <!-- bagian table -->
      <section id="table" style="background-color: rgb(27, 112, 223)">
        <div class="container" style="overflow-x: auto;">
          <div class="row">
            <div class="col">
              <h2 style="color: #fff">Device List</h2>
            </div>
          </div>
          <table class="table" style="background-color: #fff;">
            <!-- Tabel Header -->
            <thead class="thead-light">
  <tr>
    <th scope="col" >ID</th>
    <th scope="col" >Name</th>
    <th scope="col" >Sensor</th>
    <th scope="col" >Location</th>
    <th scope="col" >Country</th>
    <th scope="col" >Action</th>
  </tr>
</thead>
<tbody>
  <!-- Your table body content goes here -->
</tbody>
              <!-- Baris Tabel -->
              <tr>
                <th scope="row">1</th>
                <td>Microclimate Petengoran Stations 1</td>
                <td>Sensor</td>
                <td>Mangrove Petengoran, Gebang</td>
                <td>Indonesia</td>
                <td><a href="/petengoran">Dashboard</a></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Microclimate Petengoran Stations 2</td>
                <td>Sensor</td>
                <td>Mangrove Petengoran, Gebang</td>
                <td>Indonesia</td>
                <td><a href="/panjang">Dashboard</a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div style="margin-bottom: 20px;"></div>
      </section>

      <!-- akhir table -->

      <div style="margin-bottom: 250px;"></div>

      <!--card-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
      <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>

      <link rel="stylesheet" href="home.css">

      <title>Bootstrap 5 Carousel Slider</title>
      </head>
      
        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>

          <div class="carousel-inner">
            <div class="carousel-item active c-item">
              <img src="https://images.unsplash.com/photo-1631591559681-1ba2b1a9f481?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="d-block w-100 c-img" alt="Slide 1">
              <div class="carousel-caption top-0 mt-4">
                <p class="mt-5 fs-3 text-uppercase">Station Climatology</p>
                <h1 class="display-1 fw-bolder text-capitalize">Petengoran</h1>  
              </div>
            </div>
            <div class="carousel-item c-item">
              <img src="https://images.unsplash.com/photo-1567565829419-a224af315b16?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="d-block w-100 c-img" alt="Slide 2">
              <div class="carousel-caption top-0 mt-4">
                <p class="text-uppercase fs-3 mt-5">Station Climatology</p>
                <p class="display-1 fw-bolder text-capitalize">Petengoran</p>
              </div>
            </div>
            <div class="carousel-item c-item">
              <img src="https://images.unsplash.com/photo-1556768555-ee22fbdc8a61?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="d-block w-100 c-img" alt="Slide 3">
              <div class="carousel-caption top-0 mt-4">
                <p class="text-uppercase fs-3 mt-5">Station Climatology</p>
                <p class="display-1 fw-bolder text-capitalize">Petengoran</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div style="margin-bottom: 250px;"></div>
        </section>
        <!-- akhir -->

        <!--awal footer-->
        <footer class="footer" style="background-color: #1e87f0; color: white;">
          <div class="container">
            <div class="footer-content">
              <img src="https://i.ibb.co/vxMC7MS/Salinan-dari-Logo-MBKM-Petengoran-1-1-removebg-preview-1.png"
                alt="Logo" />
              <div class="footer-column">
                <h5 class="text-uppercase mb-3 font-weight-bold text-light">Microclimate</h5>
                <p class="text-light">Implementasi Stasiun Klimatologi Mikro Berbasis IoT dan Fotogrametri Drone Untuk
                  Konservasi Hutan Mangrove Petengoran: Model Pembelajaran Case Methods BKP-MBKM.</p>
              </div>
              <div class="footer-column text-center">
                <h5 class="text-uppercase mb-3 font-weight-bold text-light">Stations</h5>
                <p><a class="text-light" href="/petengoran">Petengoran 1</a></p>
                <p><a class="text-light" href="/panjang">Petengoran 2</a></p>

              </div>
              <div class="footer-column pl-6">
                <div class="footer-column pl-6">
                  <h5 class="text-uppercase mb-8 font-weight-bold text-light">Contact</h5>
                  <div class="flex-container">
                    <a class="social-icon" href="https://maps.app.goo.gl/kFirx7fAoZ3yLmSb9/" target="_blank">
                      <ion-icon name="location-outline" style="color: white;"></ion-icon>
                    </a>
                    <p class="text-light mb-0 ml-2">Lab Telekomunikasi, Teknik Elektro</p>
                  </div>
                  <div class="flex-container">
                    <a class="social-icon" href="mailto:microclimate@gmail.com" target="_blank">
                      <ion-icon name="mail-outline" style="color: white;"></ion-icon>
                    </a>
                    <p class="text-light mb-0 ml-2">microclimate@gmail.com</p>
                  </div>
                  <div class="flex-container">
                    <a class="social-icon" href="https://wa.me/6282232658261/" target="_blank">
                      <ion-icon name="call-outline" style="color: white;">></ion-icon>
                    </a>
                    <p class="text-light mb-0 ml-2">+62 822-3265-8261</p>
                  </div>
                  <div class="flex-container">
                    <a class="social-icon" href="https://www.instagram.com/mbkm_petengoran/" target="_blank">
                      <ion-icon name="logo-instagram" style="color: white;"></ion-icon>
                    </a>
                    <p class="text-light mb-0 ml-2">mbkm_petengoran</p>
                  </div>

                </div>
              </div>
            </div>
            <div class="footer-column text-center">
              <hr class="mb-2" style="background-color: white;">
              <div class="row align-items-center">
                <div
                  class="col-md-3 col-lg-8 text-md-left text-center mb-2 d-flex justify-content-md-end align-items-center">
                  <p class="text-light mr-2 mb-0">Created by Microclimate Team &copy; 2023. All rights reserved.</p>
                </div>
              </div>
            </div>
          </div>
          </div>
        </footer>


        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <!-- akhir dari akhir -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
          crossorigin="anonymous"></script>
        <script src="{{ asset('js/home.js') }}"></script>
  </body>

  </html>