<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <!-- ini css -->

    <title>Dashboard|Panjang</title>
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
      footer{
        background-color: #1e87f0;
      }
    </style>
  </head>
  <body >
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

    <!-- gauge -->
    <section id="gauge" style="background-color: rgb(27, 112, 223)">
      <div class="container">
        <div class="row ">
          <div class="col">
            <h2 style="color :#fff">Dashboard Panjang</h2>
          </div>
        </div>
        <div class="row mb-4">
          <div class="col-sm">
            <div class="card">
              <div class="card-body text-center">
                <h6 class="card-title text-left">Irradiation</h6>
                <h3 class="card-text">0</h3>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="card">
              <div class="card-body text-center">
                <h6 class="card-title text-left">CO2</h6>
                <h3 class="card-text">0</h3>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="card">
              <div class="card-body text-center">
                <h6 class="card-title text-left">Temperature</h6>
                <h3 class="card-text">0</h3>
              </div>
            </div>
          </div>
          </div>
        <div class="row mb-4">
          <div class="col-sm">
            <div class="card">
              <div class="card-body text-center">
                <h6 class="card-title text-left">Humidity</h6>
                <h3 class="card-text">0</h3>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="card">
              <div class="card-body text-center">
                <h6 class="card-title text-left">Water Temperature</h6>
                <h3 class="card-text">0</h3>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="card" >
              <div class="card-body text-center">
                <h6 class="card-title text-left">Wind Speed</h6>
                <h3 class="card-text">0</h3>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir GAUGE -->

    <!-- bagian table -->
    <section id="table">
      
      <div class="container">
        <div class="row">
          <div class="col">
            <h2>Table</h2>
          </div>
        </div>
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Time</th>
              <th scope="col">Temperature</th>
              <th scope="col">Humidity</th>
              <th scope="col">CO2</th>
              <th scope="col">Water Temperature</th>
              <th scope="col">Wind Speed</th>
              <th scope="col">Irradiation</th>
              <th scope="col">Rainfall</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>

            <tr>
              <th scope="row">4</th>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
          </tbody>
        </table>
      </div>
  
    </section>
    <!-- akhir table -->

    <!--Grafik-->
    <section>
      <div class="container">
        <div class="row">
          <div class="col">
            <h2>GRAPH</h2>
          </div>
        </div>
        <div class="row mb-4">
          <div class="col-sm">
            <iframe src="http://194.59.165.32:3000/d-solo/bf378b4b-7877-4c4b-b9f5-21a1d3e341d4/dashboard-petengoran?orgId=1&refresh=1m&theme=light&panelId=20" width="450" height="200" frameborder="0"></iframe>
          </div>
          <div class="col-sm">
            <iframe src="http://194.59.165.32:3000/d-solo/bf378b4b-7877-4c4b-b9f5-21a1d3e341d4/dashboard-petengoran?orgId=1&refresh=1m&theme=light&panelId=1" width="450" height="200" frameborder="0"></iframe>
      
          </div>
        </div>
        <div class="row mb-4">
          <div class="col-sm">
            <iframe src="http://194.59.165.32:3000/d-solo/bf378b4b-7877-4c4b-b9f5-21a1d3e341d4/dashboard-petengoran?orgId=1&refresh=1m&theme=light&panelId=1" width="450" height="200" frameborder="0"></iframe>
            
          </div>
          <div class="col">
            <iframe src="http://194.59.165.32:3000/d-solo/bf378b4b-7877-4c4b-b9f5-21a1d3e341d4/dashboard-petengoran?orgId=1&refresh=1m&theme=light&panelId=1" width="450" height="200" frameborder="0"></iframe>
          </div>
        </div>
        <div class="row mb-4">
          <div class="col-sm">
            <iframe src="http://194.59.165.32:3000/d-solo/bf378b4b-7877-4c4b-b9f5-21a1d3e341d4/dashboard-petengoran?orgId=1&refresh=1m&theme=light&panelId=1" width="450" height="200" frameborder="0"></iframe>
            
          </div>
          <div class="col">
            <iframe src="http://194.59.165.32:3000/d-solo/bf378b4b-7877-4c4b-b9f5-21a1d3e341d4/dashboard-petengoran?orgId=1&refresh=1m&theme=light&panelId=1" width="450" height="200" frameborder="0"></iframe>
          </div>
        </div>
        <div class="row mb-4">
          <div class="col-sm">
            <iframe src="http://194.59.165.32:3000/d-solo/bf378b4b-7877-4c4b-b9f5-21a1d3e341d4/dashboard-petengoran?orgId=1&refresh=1m&theme=light&panelId=1" width="450" height="200" frameborder="0"></iframe>
            
          </div>
          <div class="col">
            <iframe src="http://194.59.165.32:3000/d-solo/bf378b4b-7877-4c4b-b9f5-21a1d3e341d4/dashboard-petengoran?orgId=1&refresh=1m&theme=light&panelId=1" width="450" height="200" frameborder="0"></iframe>
          </div>
        </div>
      </div>
    </section>
    <!--Akhir Grafik-->

    <!-- akhir -->


    <!-- awal footer -->
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microclimate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
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

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <img src="https://i.ibb.co/vxMC7MS/Salinan-dari-Logo-MBKM-Petengoran-1-1-removebg-preview-1.png"
                    alt="Logo" />
                <div class="footer-column">
                    <h5 class="text-uppercase mb-3 font-weight-bold text-warning">Microclimate</h5>
                    <p>Implementasi Stasiun Klimatologi Mikro Berbasis IoT dan Fotogrametri Drone Untuk Konservasi Hutan Mangrove Petengoran: Model Pembelajaran Case Methods BKP-MBKM.</p>
                </div>
                <div class="footer-column text-center">
                    <h5 class="text-uppercase mb-3 font-weight-bold text-warning">Categories</h5>
                    <p>Laravel</p>
                    <p>PHP</p>
                    <p>CSS</p>
                </div>
                <div class="footer-column pl-4">
                    <h5 class="text-uppercase mb-3 font-weight-bold text-warning">Contact</h5>
                    <p><i class="fas fa-home mr-2"></i>Indonesia, Bandar Lampung</p>
                    <p><i class="fas fa-envelope mr-2"></i>Microclimate@gmail.com</p>
                    <p><i class="fas fa-phone mr-2"></i>+62 822-3265-8261</p>
                </div>
            </div>
            <hr class="mb-2">
            <div class="row align-items-center">
                <div class="col-md-3 col-lg-8 text-md-left text-right mb-2 d-flex justify-content-end align-items-center">
                    <p class="mr-2 mb-0">Created by Microclimate Team &copy; 2023. All rights reserved.</p>
                    <a class="social-icon" href="https://www.instagram.com/mbkm_petengoran/">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>

   
    <!-- akhir dari akhir -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  </body>
</html>
