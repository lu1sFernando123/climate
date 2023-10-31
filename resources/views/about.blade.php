<!DOCTYPE html> <html lang="en"> <head>
<meta charset="UTF-8" /> <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <title>About</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
<link rel="stylesheet" href="/css/unpkg.com_swiper@8.1.6_swiper-bundle.min.css" /> <style>
.navbar-nav .nav-link {
margin-right: 15px; /* Atur jarak antara item menu */
}

.icon-bars {
color: #fff; /* Warna ikon */
font-size: 24px; /* Ukuran ikon */
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
width: 100px; /* Sesuaikan ukuran gambar sesuai kebutuhan */
float: left;
margin-right: 20px;
}
</style>

</head>

<body>

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


      <!-- Ikon "bars" di sini -->
      <i class="fas fa-bars icon-bars"></i>
      </div>
      </div>
      </nav>
      <div style="margin-bottom: 120px;"></div>

      <div class="header-text">
        <h2>Selamat datang di Microclimate</h2>
        <div class="container">
          <div class="row">
            <p>
              Kami adalah tim yang berdedikasi untuk memberikan informasi penting tentang kondisi iklim di beberapa
              lokasi. Dengan teknologi terbaru dan sensor canggih, kami mengukur suhu, kelembaban, CO2, dan banyak lagi
              faktor penting lainnya.


              Tim kami terdiri dari para ahli di bidang ilmu teknologi dan pertukangan, yang berkomitmen untuk menjaga
              kualitas data dan memberikan informasi yang akurat kepada Anda.


              Terima kasih telah memilih Dashboard Microclimate sebagai sumber informasi Anda. Kami berharap Anda
              menikmati pengalaman menjelajahi data kami dan merasakan manfaatnya untuk berbagai kebutuhan Anda.
            </p>
          </div>
        </div>
      </div>

      <div class="slide-container swiper">
        <div class="slide-content">
          <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="{{ asset('images/rizkan.jpg') }}" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Rizkan ganteng</h2>

                <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde perferendis eaque
                  dolores officiis placeat delectus quaerat nihil quia neque iusto!</p>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="{{ asset('images/rizkan.jpg') }}" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Rizkan ganteng</h2>

                <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde perferendis eaque
                  dolores officiis placeat delectus quaerat nihil quia neque iusto!</p>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="{{ asset('images/rizkan.jpg') }}" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Rizkan ganteng</h2>

                <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde perferendis eaque
                  dolores officiis placeat delectus quaerat nihil quia neque iusto!</p>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="{{ asset('images/rizkan.jpg') }}" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Rizkan ganteng</h2>

                <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde perferendis eaque
                  dolores officiis placeat delectus quaerat nihil quia neque iusto!</p>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="{{ asset('images/rizkan.jpg') }}" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Rizkan ganteng</h2>

                <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde perferendis eaque
                  dolores officiis placeat delectus quaerat nihil quia neque iusto!</p>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                  <img src="{{ asset('images/rizkan.jpg') }}" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Rizkan ganteng</h2>

                <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde perferendis eaque
                  dolores officiis placeat delectus quaerat nihil quia neque iusto!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
      </div>

      <div style="margin-bottom: 250px;"></div>

      <footer class="footer" style="background-color: #1e87f0; color: white;">
      <div class="container">
        <div class="footer-content">
          <img src="https://i.ibb.co/vxMC7MS/Salinan-dari-Logo-MBKM-Petengoran-1-1-removebg-preview-1.png" alt="Logo" />
          <div class="footer-column">
            <h5 class="text-uppercase mb-3 font-weight-bold text-light">Microclimate</h5>
            <p class="text-light">Implementasi Stasiun Klimatologi Mikro Berbasis IoT dan Fotogrametri Drone Untuk
              Konservasi Hutan Mangrove Petengoran: Model Pembelajaran Case Methods BKP-MBKM.</p>
          </div>
          <div class="footer-column text-center">
            <h5 class="text-uppercase mb-3 font-weight-bold text-light">Stasiun</h5>
            <p><a class="text-light" href="/petengoran">Petengoran</a></p>
            <p><a class="text-light" href="/panjang">Panjang</a></p>
            
          </div>
          <div class="footer-column pl-6">
            <div class="footer-column pl-6">
              <h5 class="text-uppercase mb-8 font-weight-bold text-light">Contact</h5>
              <div class="flex-container">
                <a class="social-icon" href="https://maps.app.goo.gl/kFirx7fAoZ3yLmSb9/"target="_blank">
                 <ion-icon name="location-outline" style="color: white;"></ion-icon>
                </a>
                <p class="text-light mb-0 ml-2">Lab Telekomunikasi, Teknik Elektro</p>
              </div>
              <div class="flex-container">
                <a class="social-icon" href="mailto:microclimate@gmail.com"target="_blank">
                <ion-icon name="mail-outline" style="color: white;"></ion-icon>
                </a>
                <p class="text-light mb-0 ml-2">microclimate@gmail.com</p>
              </div>
              <div class="flex-container">
                <a class="social-icon" href="https://wa.me/6282232658261/"target="_blank">
                  <ion-icon name="call-outline" style="color: white;">></ion-icon>
                </a>
                <p class="text-light mb-0 ml-2">+62 822-3265-8261</p>
              </div>
              <div class="flex-container">
                <a class="social-icon" href="https://www.instagram.com/mbkm_petengoran/"target="_blank">
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
    </body>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="/https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="{{asset('/js/unpkg.com_swiper@8.1.6_swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('js/about.js') }}"></script>

  </html>