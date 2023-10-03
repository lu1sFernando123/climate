
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <!-- ini css -->

    <title>Dashboard|Petengoran</title>
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

    <!-- gauge -->
    <section id="gauge" style="background-color: rgb(27, 112, 223)">
      <div class="container">
        <div class="row ">
          <div class="col">
            <h2>Dashboard</h2>
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
    <footer class="background-color text-warning text-center pb-3">
      <p>Created by <a href="https://www.instagram.com/mbkm_petengoran/" class="text-warning fw-bold">Microclimate_petengoran</a></p>
    </footer>
    <!-- akhir dari akhir -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  </body>
</html>
