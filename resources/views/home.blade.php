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
        footer{
          background-color: #1e87f0;
        }
      </style>

    <title>Dashboard|Petengoran</title>
    
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
                      <a class="nav-link {{($title === "panjang")? 'active' : ''}}" href="/panjang">Panjang</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{($title === "petengoran")? 'active' : ''}}" href="/petengoran">Petengoran</a>
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
    <footer class="background-color text-warning text-center pb-3">
      <p>Created by <a href="https://www.instagram.com/rijkhan_/" class="text-warning fw-bold">Rizkan Harin</a></p>
    </footer>
    <!-- akhir dari akhir -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  </body>
</html>
