@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Microclimate|Home</title>
  <style>
        /* Reset margin dan padding pada elemen body */
        body {
            margin: 0;
            padding: 0;
        }

        /* CSS untuk elemen section */
        section {
            background-color: grey;
            width: 100%; /* Membuat elemen section memenuhi lebar halaman */
        }

        /* CSS tambahan untuk tampilan */
        p {
            margin: 0; /* Menghilangkan margin pada elemen p */
            padding: 10px; /* Memberikan padding agar konten terlihat */
        }
    </style>


</head>


<body>
<div style="margin-bottom: 60px;"></div>
<table class="table">
  <thead>
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
<!--jarak!-->
<div style="margin-bottom: 300px;"></div>
<!--jarak!-->

<section style="background-color: grey; margin: 0%; padding:0%;">
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
    <div style="margin-bottom: 300px;"></div>

@endsection 

</body>
</html>
