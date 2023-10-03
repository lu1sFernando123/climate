@extends('layouts.main')
  

@section('container')
<title>Transparent Icon Background</title>
    <style>
        /* Tambahkan gaya bayangan ke kartu */
        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Gaya untuk latar belakang ikon */
        .card-body-icon {
            
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 50px;
            opacity: 0.4;
            z-index: 0;

        }

        /* Gaya untuk ikon */
        .card-body-icon i {
            color: dark;
        }
    </style>

<div class="container">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card" style="background-color: #FF0000;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa-solid fa-car-battery"></i>
                    </div>
                    <h5 class="card-title"><span style="color: dark;">Irradiation</span></h5>
                    <div class="display-5"><span style="font-weight: bold; color: dark;">0 V</span></div>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card" style="background-color: #0000FF;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa-solid fa-temperature-half"></i>
                    </div>
                    <h5 class="card-title"><span style="color: dark;">CO2</span></h5>
                    <div class="display-5"><span style="font-weight: bold; color: dark;">37.5 C</span></div>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card" style="background-color: #00FF00;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa-solid fa-water"></i>
                    </div>
                    <h5 class="card-title"><span style="color: dark;">Temperature</span></h5>
                    <div class="display-5"><span style="font-weight: bold; color: dark;">110.05 cm</span></div>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card" style="background-color: #00FF00;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa-solid fa-water"></i>
                    </div>
                    <h5 class="card-title"><span style="color: dark;">Humidity</span></h5>
                    <div class="display-5"><span style="font-weight: bold; color: dark;">109.07 cm</span></div>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card" style="background-color: #00FF00;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa-solid fa-water"></i>
                    </div>
                    <h5 class="card-title"><span style="color: dark;">Water Temperature</span></h5>
                    <div class="display-5"><span style="font-weight: bold; color: dark;">110 cm</span></div>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card" style="background-color: #00FF00;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa-solid fa-water"></i>
                    </div>
                    <h5 class="card-title"><span style="color: dark;">Wind Speed</span></h5>
                    <div class="display-5"><span style="font-weight: bold; color: dark;">SAFE</span></div>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection 
