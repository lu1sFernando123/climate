@extends('layouts.main')


@section('container')

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
      <td><a href="/halaman" class="btn btn-primary">Tampilkan Halaman Saya</a></td>
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
      <td><a href="/halaman" class="btn btn-primary">Tampilkan Halaman Saya</a></td>
    </tr>
  </tbody>
</table>


@endsection 
