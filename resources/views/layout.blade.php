<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <!-- 
  Cafe House Template
  http://www.templatemo.com/tm-466-cafe-house
  -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/templatemo-style.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
   <body>
      <!-- Preloader -->
      <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
      </div>

      <!-- End Preloader -->
      <div class="tm-top-header">
        <div class="container">
          <div class="row">
            <div class="tm-top-header-inner">
              <div class="tm-logo-container">
                <img src="img/logo.png" alt="Logo" class="tm-site-logo">
                <h1 class="tm-site-name tm-handwriting-font">Waldan</h1>
              </div>
              <div class="mobile-menu-icon">
                <i class="fa fa-bars"></i>
              </div>
              <nav class="tm-nav">
                <ul>
                  @yield('aktif')
                </ul>
              </nav>   
            </div>           
          </div>    
        </div>
      </div>

    <section class="tm-welcome-section">
      <div class="container tm-position-relative">
        <div class="tm-lights-container">
          <img src="img/light.png" alt="Light" class="light light-1">
          <img src="img/light.png" alt="Light" class="light light-2">
          <img src="img/light.png" alt="Light" class="light light-3">  
        </div>        
        <div class="row tm-welcome-content">
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Welcome To&nbsp;&nbsp;<img src="img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">Waldan @yield('title')s</h2>
          <p class="gray-text tm-welcome-description"><span class="gold-text">Waldan @yield('title')s</span> @yield('deskripsi')</p>
          <a href="#main" class="tm-more-button tm-more-button-welcome">Details</a>      
        </div>
        <img src="img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">             
      </div>      
    </section>

    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section row">
            <div class="col-lg-9 col-md-9 col-sm-8">
                <h2 class="tm-section-header gold-text tm-handwriting-font">@yield('judul')</h2>
                <h2>@yield('sub_judul')</h2>
                <p class="tm-welcome-description">@yield('isi')</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
                <div class="inline-block shadow-img">
                @yield('img')  
                </div>              
            </div>            
        </section>
        
        <section class="tm-section tm-section-margin-bottom-0 row">
          <div class="col-lg-12 tm-section-header-container">
            <h2 class="tm-section-header gold-text tm-handwriting-font">@yield('img_2') @yield('judul_2')</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>
          <div class="col-lg-12 tm-popular-items-container">
            <div class="tm-popular-item">
              @yield('img_2-1')
              <div class="tm-popular-item-description">
                @yield('isi_2-1')
                <div class="order-now-container">
                <a href="#arabika" class="order-now-link tm-handwriting-font">More Info</a>
              </div>
            </div>              
          </div>
          <div class="tm-popular-item">
            @yield('img_2-2')
            <div class="tm-popular-item-description">
              @yield('isi_2-2')
              <div class="order-now-container">
                <a href="#robusta" class="order-now-link tm-handwriting-font">More Info</a>
              </div>
            </div>              
          </div>
          <div class="tm-popular-item">
            @yield('img_2-3')
            <div class="tm-popular-item-description">
              @yield('isi_2-3')
              <div class="order-now-container">
                <a href="#luak" class="order-now-link tm-handwriting-font">More Info</a>
              </div>
            </div>              
          </div>
        </section>
        
        <section class="tm-section">
            <div class="row" id="arabika">
                <div class="col-lg-12 tm-section-header-container">
                    <h2 class="tm-section-header gold-text tm-handwriting-font">@yield('img_3') @yield('judul_3')</h2> 
                    <div class="tm-hr-container"><hr class="tm-hr"></div> 
                </div>  
            </div>          
            <div class="row">
                <div class="tm-daily-menu-container margin-top-60">
                    <div class="col-lg-4 col-md-4">
                        @yield('img_3-1')
                    </div>            
                    <div class="col-lg-8 col-md-8">
                      @yield('isi_3')
                    </div>
                </div>
            </div>          
        </section>

        <section class="tm-section">
            <div class="row" id="robusta">
                <div class="col-lg-12 tm-section-header-container">
                    <h2 class="tm-section-header gold-text tm-handwriting-font">@yield('img_4') @yield('judul_4')</h2> 
                    <div class="tm-hr-container"><hr class="tm-hr"></div> 
                </div>  
            </div>          
            <div class="row">
                <div class="tm-daily-menu-container margin-top-60">
                    <div class="col-lg-4 col-md-4">
                      @yield('img_4-1')     
                    </div>            
                    <div class="col-lg-8 col-md-8">
                      @yield('isi_4')
                    </div>
                </div>
            </div>          
        </section>

        <section class="tm-section">
            <div class="row" id="luak">
                <div class="col-lg-12 tm-section-header-container">
                    <h2 class="tm-section-header gold-text tm-handwriting-font">@yield('img_5') @yield('judul_5')</h2> 
                    <div class="tm-hr-container"><hr class="tm-hr"></div> 
                </div>  
            </div>          
            <div class="row">
                <div class="tm-daily-menu-container margin-top-60">
                    <div class="col-lg-4 col-md-4">
                      @yield('img_5-1')     
                    </div>            
                    <div class="col-lg-8 col-md-8">
                      @yield('isi_5')
                    </div>
                </div>
            </div>          
        </section>
      </div>
    </div> 

    <footer>
      <div class="tm-black-bg">
        <div class="container">
          <div class="row margin-bottom-60">
            <nav class="col-lg-3 col-md-3 tm-footer-nav tm-footer-div">
              <h3 class="tm-footer-div-title">Main Menu</h3>
              <ul>
                <li><a href="http://127.0.0.1:8000/home">Home</a></li>
                <li><a href="http://127.0.0.1:8000/profile">About Us</a></li>
              </ul>
            </nav>
            <div class="col-lg-4 col-md-4 tm-footer-div">
              <h3 class="tm-footer-div-title">Get Social</h3>
              <p>Untuk menghubugi Saya, dapat melalui Sosial media di bawah ini.</p>
              <div class="tm-social-icons-container">
                <a href="https://www.instagram.com/waldan__/" class="tm-social-icon"><i class="fa fa-instagram"></i></a>
                <a href="mailto:iqbalwaldan0510@gmail.com" class="tm-social-icon"><i class="fa fa-google"></i></a>
                <a href="https://twitter.com/Daanot" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
                <a href="https://web.facebook.com/iqbalwaldan.official/" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
                <a href="https://github.com/iqbalwaldan" class="tm-social-icon"><i class="fa fa-github"></i></a>
              </div>
            </div>
          </div>          
        </div>  
      </div>      
      <div>
        <div class="container">
          <div class="row tm-copyright">
            <p class="col-lg-12 small copyright-text text-center">Copyright &copy; 2021 Moh. Iqbal Waldan</p>
          </div>  
        </div>
      </div>
    </footer> <!-- Footer content--> 

    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    
  </body>
</html>