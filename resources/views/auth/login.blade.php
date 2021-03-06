<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Masuk Puwan</title>


    <link rel="stylesheet" href="css/normalize.css">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon2.ico" />
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/login.css">




  </head>

  <body>

    <div class="logmod">
    <div class="logo">
      <img src="images/puwan.png" width="300" height="70">
    </div>
  <div class="logmod__wrapper">

    <div class="logmod__container">
      <ul class="logmod__tabs">
        <li data-tabtar="lgm-2"><a href="#">Masuk</a></li>
        <li data-tabtar="lgm-1"><a href="#">Daftar</a></li>
      </ul>
      <div class="logmod__tab-wrapper">
      <div class="logmod__tab lgm-1">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Masukkan data pribadimu <strong>untuk membuat akun</strong></span>
        </div>
        <div class="logmod__form">
          <form accept-charset="utf-8" action="/dasbor" class="simform">
          <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="name">Nama lengkap*</label>
                <input name="email" class="string optional" maxlength="255" id="full-name" placeholder="Nama Lengkap" type="text" size="50" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="email">Email*</label>
                <input name="email" class="string optional" maxlength="255" id="user-email" placeholder="Email" type="email" size="50" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input string optional">
                <label class="string optional" for="password">Password *</label>
                <input name="password" class="string optional" maxlength="255" id="user-pw" placeholder="Password" type="password" size="50" />
              </div>
              <div class="input string optional">
                <label class="string optional" for="password_confirm">Ulangi password *</label>
                <input name="password_confirm" class="string optional" maxlength="255" id="user-pw-repeat" placeholder="Repeat password" type="password" size="50" />
              </div>
            </div>
            <div class="simform__actions">
              <input class="submit" name="commit" type="submit" value="Create Account" />
              <span class="simform__actions-sidetext">Dengan membuat akun di website kami berarti Anda telah menyetujui <a class="special" href="#" target="_blank" role="link">Terms & Privacy</a></span>
            </div>
          </form>
        </div>
        <div class="logmod__alter">
          <div class="logmod__alter-container">
            <a href="#" class="connect facebook">
              <div class="connect__icon">
                <i class="fa fa-facebook"></i>
              </div>
              <div class="connect__context">
                <span>Buat akun menggunakan <strong>Facebook</strong></span>
              </div>
            </a>

            <a href="#" class="connect googleplus">
              <div class="connect__icon">
                <i class="fa fa-google-plus"></i>
              </div>
              <div class="connect__context">
                <span>Buat akun menggunakan <strong>Google+</strong></span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="logmod__tab lgm-2">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Masukkan Email dan password <strong>untuk masuk</strong></span>
        </div>
        <div class="logmod__form">
          <form accept-charset="utf-8" action="/dasbor" class="simform">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="email">Email*</label>
                <input name="email" class="string optional" maxlength="255" id="user-email" placeholder="Email" type="email" size="50" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-pw">Password *</label>
                <input name="password" class="string optional" maxlength="255" id="user-pw" placeholder="Password" type="password" size="50" />
                						<span class="hide-password">Lihat</span>
              </div>
            </div>
            <div class="simform__actions">
              {{-- <input class="submit" name="commit" type="submit" value="Masuk" /> --}}
              <a href="/dasbor" class="button">Masuk</a>
              <span class="simform__actions-sidetext"><a class="special" role="link" href="#">Lupa password?<br>Klik di sini</a></span>
            </div>
          </form>
        </div>
        <div class="logmod__alter">
          <div class="logmod__alter-container">
            <a href="#" class="connect facebook">
              <div class="connect__icon">
                <i class="fa fa-facebook"></i>
              </div>
              <div class="connect__context">
                <span>Masuk menggunakan <strong>Facebook</strong></span>
              </div>
            </a>
            <a href="#" class="connect googleplus">
              <div class="connect__icon">
                <i class="fa fa-google-plus"></i>
              </div>
              <div class="connect__context">
                <span>Masuk menggunakan <strong>Google+</strong></span>
              </div>
            </a>
          </div>
        </div>
          </div>
      </div>
    </div>
  </div>
</div>
    <script src='js/jquery.min.js'></script>

        <script src="js/login.js"></script>




  </body>
</html>
