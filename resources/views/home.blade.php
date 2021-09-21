@extends('layout')

@section ('title','Home')

@section ('deskripsi','adalah tempat dimana saya menampilkan artikel yang menurut saya menarik dan berkaitan dengan apa yang saya sukai.')

@section ('aktif')
    <li><a href="http://127.0.0.1:8000/home" class="active">Home</a></li>
    <li><a href="http://127.0.0.1:8000/profile">Profile</a></li>
@endsection

<!-- Isi 1 -->
@section('judul','Pengertian')

@section('sub_judul','Kopi')

@section ('isi')
    <span class="gold-text">kopi</span> adalah minuman hasil seduhan biji kopi yang telah disangrai dan dihaluskan menjadi bubuk. Kopi merupakan salah satu komoditas di dunia yang dibudidayakan lebih dari 50 negara. Dua spesies pohon kopi yang dikenal secara umum yaitu Kopi Robusta (Coffea canephora) dan Kopi Arabika (Coffea arabica).
@endsection

@section ('img')
    <img src="img/1.jpg" alt="Image" class="img-circle img-thumbnail">
@endsection

<!-- Isi 2 -->
@section('judul_2','Biji Kopi Terkenal')

@section ('img_2')
    <img src="img/logo.png" alt="Logo" class="tm-site-logo">
@endsection

@section ('img_2-1')
    <img src="img/arabika.jpg" alt="Popular" class="tm-popular-item-img">
@endsection

@section ('isi_2-1')
    <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">a</span>rabika</h3><hr class="tm-popular-item-hr">
    <p>Kopi arabika merupakan kopi tradisional dengan cita rasa terbaik. Sebagian besar kopi dibuat dengan menggunakan biji kopi jenis ini.</p>                    
@endsection

@section ('img_2-2')
    <img src="img/robusta.jpg" alt="Popular" class="tm-popular-item-img">
@endsection

@section ('isi_2-2')
    <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">r</span>obusta</h3><hr class="tm-popular-item-hr">
    <p>Kopi Robusta pertama kali ditemukan di Kongo pada tahun 1898. Kopi robusta dapat dikatakan sebagai kopi kelas 2.</p>     
@endsection

@section ('img_2-3')
    <img src="img/luak.jpg" alt="Popular" class="tm-popular-item-img">
@endsection

@section ('isi_2-3')
    <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">l</span>uak</h3><hr class="tm-popular-item-hr">
    <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. sed ipsum.</p>
@endsection

<!-- Isi 3 -->
@section('judul_3','Biji Kopi Arabika')

@section ('img_3')
    <img src="img/logo.png" alt="Logo" class="tm-site-logo">
@endsection

@section ('img_3-1')
    <img src="img/arabika.jpg" alt="Menu board" class="tm-daily-menu-img">      
@endsection

@section ('isi_3')
    <p>Kopi arabika merupakan tipe kopi tradisional dengan cita rasa terbaik. Sebagian besar kopi yang ada dibuat dengan menggunakan biji kopi jenis ini. Kopi ini berasal dari Etiopia dan sekarang telah dibudidayakan di berbagai belahan dunia, mulai dari Amerika Latin, Afrika Tengah, Afrika Timur, India, dan Indonesia. Secara umum, kopi ini tumbuh di negara-negara beriklim tropis atau subtropis. Kopi arabika tumbuh pada ketinggian 600–2000 m di atas permukaan laut. Tanaman ini dapat tumbuh hingga 3 meter bila kondisi lingkungannya baik. Suhu tumbuh optimalnya adalah 18-26oC. Biji kopi yang dihasilkan berukuran cukup kecil dan berwarna hijau hingga merah gelap.</p>
@endsection

<!-- Isi 4 -->
@section('judul_4','Biji Kopi Robusta')

@section ('img_4')
    <img src="img/logo.png" alt="Logo" class="tm-site-logo">
@endsection

@section ('img_4-1')
    <img src="img/robusta.jpg" alt="Menu board" class="tm-daily-menu-img">
@endsection

@section ('isi_4')
    <p>Kopi robusta pertama kali ditemukan di Kongo pada tahun 1898. Kopi robusta dapat dikatakan sebagai kopi kelas 2, karena rasanya yang lebih pahit, sedikit asam, dan mengandung kafeina dalam kadar yang jauh lebih banyak. Selain itu, cakupan daerah tumbuh kopi robusta lebih luas daripada kopi arabika yang harus ditumbuhkan pada ketinggian tertentu. Kopi robusta dapat ditumbuhkan dengan ketinggian 800 m di atas permukaan laut. Selain itu, kopi jenis ini lebih resisten terhadap serangan hama dan penyakit. Hal ini menjadikan kopi robusta lebih murah. Kopi robusta banyak ditumbuhkan di Afrika Barat, Afrika Tengah, Asia Tenggara, dan Amerika Selatan.</p>
@endsection

<!-- Isi 5 -->
@section('judul_5','Biji Kopi Luak')

@section ('img_5')
    <img src="img/logo.png" alt="Logo" class="tm-site-logo">
@endsection

@section ('img_5-1')
    <img src="img/luak.jpg" alt="Menu board" class="tm-daily-menu-img">
@endsection

@section ('isi_5')
    <p>Jenis kopi yang lain merupakan turunan atau subvarietas dari kopi arabika dan robusta. Biasanya disetiap daerah penghasil kopi memiliki keunikannya masing-masing dan menjadikannya sebagai suatu subvarietas. Salah satu jenis kopi lain yang terkenal adalah kopi luwak asli Indonesia. Kopi luak merupakan kopi dengan harga jual tertinggi di dunia. Proses terbentuknya dan rasanya yang sangat unik menjadi alasan utama tingginya harga jual kopi jenis ini. Pada dasarnya, kopi ini merupakan kopi jenis arabika. Biji kopi ini kemudian dimakan oleh luwak atau sejenis musang. Akan tetapi, tidak semua bagian biji kopi ini dapat dicerna oleh hewan ini. Bagian dalam biji ini kemudian akan keluar bersama kotorannya. Karena telah bertahan lama di dalam saluran pencernaan luak, biji kopi ini telah mengalami fermentasi singkat oleh bakteri alami di dalam perutnya yang memberikan cita rasa tambahan yang unik.</p>
@endsection
