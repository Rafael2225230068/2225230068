@extends('layout.web')
@section('Content')

            <!--Content Element-->
            <link type="text/css" href="{{ asset('css/Layout.css') }}" rel="stylesheet">
   <div id="front-content-full">
      <div class="front-content-full-left">
         <h4 style="border-bottom: 1px solid #fff;">Selamat Datang</h4>
         <p class="title">
            Selamat Datang di Portal Pendidikan Matematika. Portal Matematika adalah sistem yang
            memungkinkan para civitas akademika Matematika untuk mengetahui informasi terkait yang berhubungan dengan Program Studi Matematika melalui Internet. Selamat menggunakan fasilitas ini.
      </p>
      </div> <!-- end of front-content-full-left -->
   </div> <!-- end of front-content-full -->

   <div id="gsSeparatorContent">
      <div class="gsSeparatorContentLeft">
         <hr>
      </div>
      <div class="gsSeparatorContentCenter"></div>
      <div class="gsSeparatorContentRight">
         <hr>
      </div>
   </div>

         <p class="Fkip">
            PENDIDIKAN MATEMATIKA FKIP UNTIRTA
         </p>

         <div id="gsSeparatorContent">
            <div class="gsSeparatorContentLeft">
               <hr>
            </div>
            <div class="gsSeparatorContentCenter"></div>
            <div class="gsSeparatorContentRight">
               <hr>
            </div>
         </div>

   <div id="front-content-half" class="tabel">
      <div class="front-content-half-left container">
         <h2 class="gsSubFrontContentLeft"><i class="fa fa-list-alt"></i> Pengumuman</h2>
         <h3>
            <div class="boxCat">
               <a href=" ">Kategori : Kegiatan Mahasiswa</a>
            </div>
            <ul> <li><a href="/PenjemputanMahasiswa">Penjemputan Mahasiswa Baru 2023 <br> <small> 19 Agustus 2023</small></a>
                  </li></ul>
         <ul> <li><a href="/SIGMA2023"> SIGMA 2023 <br/><small>2 s.d 3 September 2023 </small></a>
            </li> </ul>
        <ul> <li><a href="/LKMM2023">LKMM 2023 <br/> <small> 22 s.d 24 September 2023</small></a>
            </li></ul>
        <ul> <li> <a href="/TEMATIK2023 ">TEMATIK 2023<br/> <small>   26 Maret 2023</small></a>
        </li></ul>
         </h3>
      </div> <!-- end of front-content-half-left -->

   </div> <!-- end of front-content-half -->
   
     

@endsection