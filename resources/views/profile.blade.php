@extends('layout')

@section ('title','Profile')

@section ('deskripsi','adalah tempat dimana saya menampilkan data diri saya mulai dari Tanggal Lahir, Alamat, No Telfon, Riwayat Pendidikan, dan masih banyak lagi.')

@section ('aktif')
    <li><a href="http://127.0.0.1:8000/home">Home</a></li>
    <li><a href="http://127.0.0.1:8000/profile" class="active">Profile</a></li>
@endsection

<!-- Isi 1 -->
@section('judul','About Me')

@section('sub_judul','Waldan')

@section ('isi')
    <table class="table1">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>Moh. Iqbal Waldan</td>
        </tr>
        <tr>
            <td>Tempat/Tanggal Lahir</td>
            <td>:</td>
            <td>Bangkalan/05 Oktober 2001</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>Jl. Letnan Singosastro 4/33B Bangkalan</td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td>Bermain Komputer</td>
        </tr>
    </table>
@endsection

@section ('img')
    <img src="img/profil.jpg" alt="Image" class="img-circle img-thumbnail">
@endsection

<!-- Isi 2 -->
@section('judul_2','Riwayat Penddikan')

@section ('img_2')
    <img src="img/logo2.png" alt="Logo" class="tm-site-logo">
@endsection

@section ('img_2-1')
    <img src="img/SD.jpg" alt="Popular" class="tm-popular-item-img">
@endsection

@section ('isi_2-1')
    <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">S</span>D</h3><hr class="tm-popular-item-hr">
    <p>Saya Bersekolah DI SD Negeri Demangan 1 Bangkalan</p>                    
@endsection

@section ('img_2-2')
    <img src="img/SMP.jpg" alt="Popular" class="tm-popular-item-img">
@endsection

@section ('isi_2-2')
    <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">S</span>MP</h3><hr class="tm-popular-item-hr">
    <p>Saya Bersekolah DI SMP Negeri 1 Bangkalan</p>     
@endsection

@section ('img_2-3')
    <img src="img/SMA.jpg" alt="Popular" class="tm-popular-item-img">
@endsection

@section ('isi_2-3')
    <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">S</span>MA</h3><hr class="tm-popular-item-hr">
    <p>Saya Bersekolah DI SMA Negeri 1 Bangkalan</p>
@endsection

<!-- Isi 3 -->
@section('judul_3','SD')

@section ('img_3')
    <img src="img/logo2.png" alt="Logo" class="tm-site-logo">
@endsection

@section ('img_3-1')
    <img src="img/SD.jpg" alt="Menu board" class="tm-daily-menu-img">      
@endsection

@section ('isi_3')
<p>Saya bersekolah di SD Negeri Demangan 1 Bangkalan pada umur 7 tahun atau tepatnya pada tahun 2008 dan lulus pada tahun 2014.</p>
@endsection

<!-- Isi 4 -->
@section('judul_4','SMP')

@section ('img_4')
    <img src="img/logo2.png" alt="Logo" class="tm-site-logo">
@endsection

@section ('img_4-1')
    <img src="img/SMP.jpg" alt="Menu board" class="tm-daily-menu-img">
@endsection

@section ('isi_4')
<p>Saya bersekolah di SMP Negeri 1 Bangkalan pada umur 13 tahun atau tepatnya pada tahun 2014 dan lulus pada tahun 2017.</p>
@endsection

<!-- Isi 5 -->
@section('judul_5','SMA')

@section ('img_5')
    <img src="img/logo2.png" alt="Logo" class="tm-site-logo">
@endsection

@section ('img_5-1')
    <img src="img/SMA.jpg" alt="Menu board" class="tm-daily-menu-img">
@endsection

@section ('isi_5')
<p>Saya bersekolah di SMP Negeri 1 Bangkalan pada umur 16 tahun atau tepatnya pada tahun 2017 dan lulus pada tahun 2020.</p>
@endsection
