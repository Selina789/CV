<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8>
    <meta name="viewport" content="width=device-width, inital-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="hover.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Mukta:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@500&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;600;800&display=swap" rel="stylesheet">
  </head>

  <body>
  <nav>
      <label class="logo"> Curriculum Vitae Selina </label>

      <ul>
        <li>
          <a href="" class="homebtn"> Home </a>
        </li>
        <li>
          <a href="" class="profilebtn"> Profile </a>
        </li>
        <li>
          <a href="" class="aboutbtn"> About</a>
        </li>

        @if (Route::has('login'))

            @auth

            <li>
            <a href="{{ url('/dashboard') }}" class="btn btn-success">{{ Auth::user()->name }}</a>
            </li>

            @else


        <li>
          <a href="{{ route('register') }}" class="btn btn-success"> Register </a>
        </li>
        <li>
          <a href="{{ route('login') }}" class="btn btn-primary"> Login </a>
        </li>

        @endauth

        @endif

      </ul>
  </nav>
  <div>
    <div class="extracredit">
    <p style="display: inline-block;
    padding-left: 10px;
    padding-top: 5px;
    font-weight: 600;">
    CV Design Credit : </p>
    <a class="clickme" href="https://www.canva.com/design/DAFdgr5O8G8/fKkatMsLtCyhCAsitwwYcw/edit?locale=id-ID&ui=eyJBIjp7IkUiOnsiQSI6dHJ1ZX19fQ"> Click Me!</a>
    </div>
      <div class="div_title">
          <div class="myname"> SELINA </div>
          <img src="sky.jpg" class="skyjpg">
          <p class="div_cs"> COLLEGE STUDENT </p>
        </div>
        
        <div class="div_left_right">
          <div class="left_right_block">
            <div class="div_left_block">
              <div class="first_left_block">
                <img class="phonepng" src="phone.png">
                <p class="contact"> CONTACT </p>
                <p class="number"> Number: </p>
                <p class="number1"> 0823-9286-3925 </p>
                <p class="email"> Email: </p>
                <p class="email1"> selinalim7890@gmail.com </p> 
              </div>
              <div class="second_left_block">
                <div class="sbscontain">
                <img class="pencilpng" src="pencil.png">
                <div class="skills"> SKILLS </div>
                </div>
                <p class="content"> - Creativity </p>
                <p class="content"> - English </p>
                <p class="content"> - Microsoft Skills </p>
              </div>
              <div class="third_left_block"> 
                <img class="starpng" src="star.png"> 
                <p class="hobbies"> HOBBIES </p>
                <p class="content"> - Reading </p>
                <p class="content"> - Watch Shows </p> 
                <p class="content"> - Play Games </p>  
              </div>
            </div>

            <div class="div_right_block">
              <div class="right_block">
                <p class="judulkanan"> PENDIDIKAN </p>
                <p class="kategori"> FORMAL</p>
                <div>
                  <div class="kolom">
                  <div class="pendidikan_year"> 2010 - 2016 </div>
                  <div class="institute_name"> SD Eka Edukasi Cahaya Selatpanjang </div>
                  </div>

                  <div class="kolom">
                  <div class="pendidikan_year"> 2016 - 2019 </div>
                  <div class="institute_name"> SMP Patria Dharma Selatpanjang </div>
                  </div>

                  <div class="kolom">
                  <div class="pendidikan_year"> 2019 - 2022 </div>
                  <div class="institute_name"> SMK Patria Dharma Selatpanjang <br> <span class="akuntansi"> (Accounting Major) </span> </div>
                  </div>

                  <div class="kolom">
                  <div class="pendidikan_year"> 2022~ </div>
                  <div class="institute_name"> Universitas Internasional Batam <br> <span class="akuntansi"> (Information System Major)</span> </div>
                </div>

                <P class="kategori"> NONFORMAL </P>
                <div class="kolom_nonformal">
                  <div class="pendidikan_year"> 2016 - 2019 </div>
                  <div class="institute_nonformal"> Kursus Bahasa Inggris di <span class="nonformal"> Eka Edukasi Cahaya </span> Selatpanjang </div>
                </div>

                <p class="judulkanan1"> PENGALAMAN MAGANG</p>
                <div class="grid_block">
                  <div class="magang_year"> 2020 </div>
                  <div class="institute_nonformal"> Magang di <span class="magangtext"> Bank Rakyat Indonesia </span> Cabang Selatpanjang selama 6 (enam) bulan. </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>
  </body>
</html>