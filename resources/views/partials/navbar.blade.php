<style>
    .navbar-nav .nav-link {
        margin-right: 15px; /* Atur jarak antara item menu */
    }

    .icon-bars {
        color: #fff; /* Warna ikon */
        font-size: 24px; /* Ukuran ikon */
    }
</style>

<!-- Di dalam body Anda -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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




 
