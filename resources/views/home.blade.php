@extends('layout')

@section ('title','Home')

@section ('deskripsi','adalah tempat dimana saya menampilkan artikel yang menurut saya menarik dan berkaitan dengan apa yang saya sukai.')

@section ('aktif')
    <li><a href="http://127.0.0.1:8000/home" class="active">Home</a></li>
    <li><a href="http://127.0.0.1:8000/profile">Profile</a></li>
@endsection

@section ('isi')
    <section class="tm-section row">
        <div class="col-lg-9 col-md-9 col-sm-8">
            <h2 class="tm-section-header gold-text tm-handwriting-font">Pengertian</h2>
            <h2>Kopi</h2>
            <p class="tm-welcome-description"><span class="gold-text">kopi</span>adalah minuman hasil seduhan biji kopi yang telah disangrai dan dihaluskan menjadi bubuk. Kopi merupakan salah satu komoditas di dunia yang dibudidayakan lebih dari 50 negara. Dua spesies pohon kopi yang dikenal secara umum yaitu Kopi Robusta (Coffea canephora) dan Kopi Arabika (Coffea arabica).</p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
            <div class="inline-block shadow-img">
            <img src="img/1.jpg" alt="Image" class="img-circle img-thumbnail">  
            </div>              
        </div>            
    </section>
    
    <section class="tm-section tm-section-margin-bottom-0 row">
        <div class="col-lg-12 tm-section-header-container">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="img/logo.png" alt="Logo" class="tm-site-logo"> Biji Kopi Terkenal</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
        </div>
        <div class="col-lg-12 tm-popular-items-container">
            <div class="tm-popular-item">
                <img src="img/arabika.jpg" alt="Popular" class="tm-popular-item-img">
                <div class="tm-popular-item-description">
                    <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">a</span>rabika</h3><hr class="tm-popular-item-hr">
                    <p>Kopi arabika merupakan kopi tradisional dengan cita rasa terbaik. Sebagian besar kopi dibuat dengan menggunakan biji kopi jenis ini.</p>
                    <div class="order-now-container">
                        <a href="#arabika" class="order-now-link tm-handwriting-font">More Info</a>
                    </div>
                </div>              
            </div>
            <div class="tm-popular-item">
                <img src="img/robusta.jpg" alt="Popular" class="tm-popular-item-img">
                <div class="tm-popular-item-description">
                    <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">r</span>obusta</h3><hr class="tm-popular-item-hr">
                    <p>Kopi Robusta pertama kali ditemukan di Kongo pada tahun 1898. Kopi robusta dapat dikatakan sebagai kopi kelas 2.</p>
                    <div class="order-now-container">
                        <a href="#robusta" class="order-now-link tm-handwriting-font">More Info</a>
                    </div>
                </div>              
            </div>
            <div class="tm-popular-item">
                <img src="img/luak.jpg" alt="Popular" class="tm-popular-item-img">
                <div class="tm-popular-item-description">
                    <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">l</span>uak</h3><hr class="tm-popular-item-hr">
                    <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. sed ipsum.</p>
                    <div class="order-now-container">
                        <a href="#luak" class="order-now-link tm-handwriting-font">More Info</a>
                    </div>
                </div>              
            </div>
        </div>          
    </section>
    
    <section class="tm-section">
        <div class="row" id="arabika">
            <div class="col-lg-12 tm-section-header-container">
                <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="img/logo.png" alt="Logo" class="tm-site-logo"> Biji Kopi Arabika</h2> 
                <div class="tm-hr-container"><hr class="tm-hr"></div> 
            </div>  
        </div>          
        <div class="row">
            <div class="tm-daily-menu-container margin-top-60">
                <div class="col-lg-4 col-md-4">
                    <img src="img/arabika.jpg" alt="Menu board" class="tm-daily-menu-img">      
                </div>            
                <div class="col-lg-8 col-md-8">
                    <p>Kopi arabika merupakan tipe kopi tradisional dengan cita rasa terbaik. Sebagian besar kopi yang ada dibuat dengan menggunakan biji kopi jenis ini. Kopi ini berasal dari Etiopia dan sekarang telah dibudidayakan di berbagai belahan dunia, mulai dari Amerika Latin, Afrika Tengah, Afrika Timur, India, dan Indonesia. Secara umum, kopi ini tumbuh di negara-negara beriklim tropis atau subtropis. Kopi arabika tumbuh pada ketinggian 600–2000 m di atas permukaan laut. Tanaman ini dapat tumbuh hingga 3 meter bila kondisi lingkungannya baik. Suhu tumbuh optimalnya adalah 18-26oC. Biji kopi yang dihasilkan berukuran cukup kecil dan berwarna hijau hingga merah gelap.</p>
                </div>
            </div>
        </div>          
    </section>

    <section class="tm-section">
        <div class="row" id="robusta">
            <div class="col-lg-12 tm-section-header-container">
                <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="img/logo.png" alt="Logo" class="tm-site-logo"> Biji Kopi Robusta</h2> 
                <div class="tm-hr-container"><hr class="tm-hr"></div> 
            </div>  
        </div>          
        <div class="row">
            <div class="tm-daily-menu-container margin-top-60">
                <div class="col-lg-4 col-md-4">
                    <img src="img/robusta.jpg" alt="Menu board" class="tm-daily-menu-img">      
                </div>            
                <div class="col-lg-8 col-md-8">
                    <p>Kopi robusta pertama kali ditemukan di Kongo pada tahun 1898. Kopi robusta dapat dikatakan sebagai kopi kelas 2, karena rasanya yang lebih pahit, sedikit asam, dan mengandung kafeina dalam kadar yang jauh lebih banyak. Selain itu, cakupan daerah tumbuh kopi robusta lebih luas daripada kopi arabika yang harus ditumbuhkan pada ketinggian tertentu. Kopi robusta dapat ditumbuhkan dengan ketinggian 800 m di atas permukaan laut. Selain itu, kopi jenis ini lebih resisten terhadap serangan hama dan penyakit. Hal ini menjadikan kopi robusta lebih murah. Kopi robusta banyak ditumbuhkan di Afrika Barat, Afrika Tengah, Asia Tenggara, dan Amerika Selatan.</p>
                </div>
            </div>
        </div>          
    </section>

    <section class="tm-section">
        <div class="row" id="luak">
            <div class="col-lg-12 tm-section-header-container">
                <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="img/logo.png" alt="Logo" class="tm-site-logo"> Biji Kopi Luak</h2> 
                <div class="tm-hr-container"><hr class="tm-hr"></div> 
            </div>  
        </div>          
        <div class="row">
            <div class="tm-daily-menu-container margin-top-60">
                <div class="col-lg-4 col-md-4">
                    <img src="img/luak.jpg" alt="Menu board" class="tm-daily-menu-img">      
                </div>            
                <div class="col-lg-8 col-md-8">
                    <p>Jenis kopi yang lain merupakan turunan atau subvarietas dari kopi arabika dan robusta. Biasanya disetiap daerah penghasil kopi memiliki keunikannya masing-masing dan menjadikannya sebagai suatu subvarietas. Salah satu jenis kopi lain yang terkenal adalah kopi luwak asli Indonesia. Kopi luak merupakan kopi dengan harga jual tertinggi di dunia. Proses terbentuknya dan rasanya yang sangat unik menjadi alasan utama tingginya harga jual kopi jenis ini. Pada dasarnya, kopi ini merupakan kopi jenis arabika. Biji kopi ini kemudian dimakan oleh luwak atau sejenis musang. Akan tetapi, tidak semua bagian biji kopi ini dapat dicerna oleh hewan ini. Bagian dalam biji ini kemudian akan keluar bersama kotorannya. Karena telah bertahan lama di dalam saluran pencernaan luak, biji kopi ini telah mengalami fermentasi singkat oleh bakteri alami di dalam perutnya yang memberikan cita rasa tambahan yang unik.</p>
                </div>
            </div>
        </div>          
    </section>
@endsection


