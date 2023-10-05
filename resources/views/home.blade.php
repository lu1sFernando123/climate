<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <!-- ini css -->
    <style>
        .navbar-nav .nav-link {
            margin-right: 15px; /* Atur jarak antara item menu */
        }
  
        .icon-bars {
            color: #fff; /* Warna ikon */
            font-size: 24px; /* Ukuran ikon */
        }
        
        .gauge{
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
            width: 100px; /* Sesuaikan ukuran gambar sesuai kebutuhan */
            float: left;
            margin-right: 20px;
        }
      </style>

    <title>HOME</title>
    
  </head>
  <body id="home">
    <!-- bagian navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Microclimate</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link {{($title === "home")? 'active' : ''}}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{($title === "about")? 'active' : ''}}" href="/about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{($title === "kontak")? 'active' : ''}}" href="/kontak">Contact</a>
                </li>
              </ul>
              <!-- Ikon "bars" di sini -->
              <i class="fas fa-bars icon-bars"></i>
          </div>
        </div>
      </nav>

    <!-- akhir navbar -->
    <div style="margin-top: 20px;"></div>
    <!-- bagian table -->
    <section id="table" style="background-color: rgb(27, 112, 223)">
      <div class="container">
        <div class="row">
          <div class="col">
            <h2 style="color :#fff">Device List</h2>
          </div>
        </div>
        <table class="table" style="background-color: #fff;">
          <thead class="thead-light">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Sensor</th>
              <th scope="col">Location</th>
              <th scope="col">Country</th>
              <th scope="col">Last Value</th>
              <th scope="col">Last Date</th>
              <th scope="col">Elapsed Time</th>
              <th scope="col">Sensor Time to Server</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Microclimate Petengoran</td>
              <td>Sensor</td>
              <td>Mangrove Petengoran, Gebang</td>   
              <td>Indonesia</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>  
              <td><a href="/petengoran">Dashboard</a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Microclimate Panjang</td>
              <td>Sensor</td>
              <td>Canti, Lampung Selatan</td>   
              <td>Indonesia</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>  
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
    <section style="background-color: rgb(255, 255, 255); margin: 0%; padding:0%;">
        <div class="container">
          <div class="row fs-5">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-header text-center">
                  <h2 class="display-6">Climate station Petengoran</h2>
                </div>
                <img src="asets/images/ss.png" class="card-img-top" alt="1" />
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias mollitia veritatis. Error reiciendis totam neque suscipit ullam blanditiis. Vitae?</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-header text-center">
                  <h2 class="display-6">Climate Station</h2>
                </div>
                <img src="asets/images/measure.png" class="card-img-top" alt="2" />
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, dolore.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-header text-center">
                  <h2 class="display-6">Climate Station Panjang</h2>
                </div>
                <img src="asets/images/proteus.png" class="card-img-top" alt="3" />
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!--Akhir card-->

    <div style="margin-bottom: 250px;"></div>
    
    <!-- akhir -->
   
    <!--awal footer-->
    <footer class="footer" style="background-color: #1e87f0; color: white;">
      <div class="container">
          <div class="footer-content">
              <img src="https://i.ibb.co/vxMC7MS/Salinan-dari-Logo-MBKM-Petengoran-1-1-removebg-preview-1.png"
                  alt="Logo" />
              <div class="footer-column">
                  <h5 class="text-uppercase mb-3 font-weight-bold text-light">Microclimate</h5>
                  <p class="text-light">Implementasi Stasiun Klimatologi Mikro Berbasis IoT dan Fotogrametri Drone Untuk Konservasi Hutan Mangrove Petengoran: Model Pembelajaran Case Methods BKP-MBKM.</p>
                </div>
              <div class="footer-column text-center">
                  <h5 class="text-uppercase mb-3 font-weight-bold text-light">Categories</h5>
                  <p class="text-light">Laravel</p>
                  <p class="text-light">PHP</p>
                  <p class="text-light">CSS</p>
                </div>
              <div class="footer-column pl-4">
                  <h5 class="text-uppercase mb-3 font-weight-bold text-light">Contact</h5>
                  <p class="text-light"><i class="fas fa-home mr-2"></i>Indonesia, Bandar Lampung</p>
                  <p class="text-light"><i class="fas fa-envelope mr-2"></i>Microclimate@gmail.com</p>
                  <p class="text-light"><i class="fas fa-phone mr-2"></i>+62 822-3265-8261</p>
                </div>
            </div>
          <hr class="mb-2" style="background-color: white;">
          <div class="row align-items-center">
              <div class="col-md-3 col-lg-8 text-md-left text-right mb-2 d-flex justify-content-end align-items-center">
                  <p class="text-light mr-2 mb-0">Created by Microclimate Team &copy; 2023. All rights reserved.</p>
                  <a class="social-icon" href="https://www.instagram.com/mbkm_petengoran/">
                      <ion-icon name="logo-instagram" style="color: white;"></ion-icon>
                  </a>
              </div>
          </div>
      </div>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  
    <!-- akhir dari akhir -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  </body>
</html>
