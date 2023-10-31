<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact||Climate</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <style>
      .navbar-nav .nav-link {
        margin-right: 15px; /* Atur jarak antara item menu */
      }

      .icon-bars {
        color: #fff; /* Warna ikon */
        font-size: 24px; /* Ukuran ikon */
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
    <div style="margin-bottom: 100px;"></div>
    <div class="container-box">
      <h1>Connect With Us</h1>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br>Cupiditate dolore commodi officia expedita minima numquam facere quae veniam fugiat nam.</p>
      <div class="contact-box">
        <div class="contact-left">
          <h3>Sent your request</h3>
          <form>
            <div class="input-row">
              <div class="input-group">
                <label>Name</label>
                <input type="text" placeholder="Masukan Nama">
              </div>
                       
              <div class="input-group">
                <label>Phone</label>
                <input type="text" placeholder="Masukan no telepon">
              </div>
            </div>
            <div class="input-row">
              <div class="input-group">
                <label>Email</label>
                <input type="text" placeholder="Masukan Email">
              </div>
            
        
              <div class="input-group">
                <label>Subject</label>
                <input type="text" placeholder="...">
              </div>
            </div>
            <label >message</label>
            <textarea rows="5" placeholder="your message"></textarea>
            <button type="submit">SEND</button>
          </form>
        </div>
        <div class="contact-right">
          <h3>Reach us!</h3>
          <table>
            <tr>
              <td>Email</td>
              <td>climatepetengoran@gmail.com</td>
            </tr>
            <tr>
              <td>Phone</td>
              <td>(+62) 822-3265-8261 </td>
            </tr>
            <tr>
              <td>Address</td>
              <td>J6QV+G2H, Gedong Meneng, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35142</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  </body>
</html>
