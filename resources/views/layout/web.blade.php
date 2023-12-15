
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <title>Uas Alpro 23</title>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   <link href="https://siakad.untirta.ac.id/portal/styles/a-portal-default-loader.css" rel="stylesheet" type="text/css" title="Default" />


   <!-- datepicker ringkas -->
   <link href="https://siakad.untirta.ac.id/portal/js/datepicker-ringkas/pikaday.css" rel="stylesheet" type="text/css" title="Default" />

   <!-- / font-awesome-4.7.0 -->
   <link href="https://siakad.untirta.ac.id/portal//styles/default/css/css-custome/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <!-- / font-awesome-4.7.0 -->

   <!-- / gsMainMenu_top -->
   <link href="https://siakad.untirta.ac.id/portal//styles/default/css/css-custome/gsMainMenu_top.css" rel="stylesheet">
   <!-- / gsMainMenu_top -->

   <!-- / gsAnimate -->
   <link href="https://siakad.untirta.ac.id/portal//styles/default/css/css-custome/gsAnimateCSS/gsAnimate.min.css" rel="stylesheet">
   <!-- / gsAnimate -->
   {{-- CSS sendiri --}}
   <link type="text/css" href="{{ asset('css/Layout.css') }}" rel="stylesheet">
</head>
<body id="common" onLoad=""> 
<div id="page">
      <div id="gsHeaderLogo">
         <div class="gsHeaderInfoApp JudulMTK">
            <label>Pendidikan Matematika</label>
            <span>Fakultas Keguruan dan Ilmu Pendidikan</span> <br>
            <span>Untirta</span>
         </div>
         <ul id="gsNavMainMenu">
            <li>
               <a href="/UserManual" target="_BLANK">USER MANUAL</a>
            </li>
            <li>
                <a href="/">TENTANG</a>
                <ul>
                   <li class="gsAnimateCss"><a href="/VisiJurusan" target="_self">Visi Jurusan</a></li>
                   <li class="gsAnimateCss"><a href="/StrukturJurusan " target="_self">Struktur Jurusan</a></li>
                   <li class="gsAnimateCss"><a href="/AkreditasiJurusan" target="_self">Akreditasi</a></li>
                </ul>
             </li>
            <li>
               <a href="/">AKADEMIK</a>
               <ul>
                  <li class="gsAnimateCss"><a href="/NamaMahasiswa" target="_self">Nama Mahasiswa</a></li>
                  <li class="gsAnimateCss"><a href="/NamaDosen" target="_self">Nama Dosen</a></li>
                  <li class="gsAnimateCss"><a href="/SyaratSeminarProposal" target="_self">Syarat Seminar Proposal</a></li>
                  <li class="gsAnimateCss"><a href="/SyaratSidangSkripsi" target="_self">Syarat Sidang Skripsi</a></li>
               </ul>
            </li>
            <li>
              <a href="/" target="_BLANK">HOME</a>
           </li>
         </ul>
      </div>
      
      <div id="main-content">
        <div id="content">
          
      @include('layout.Pesanerror')
      @yield('Content')
    </div> <!-- end of content -->
  </div> <!-- end of main-content -->
    </div>
    <div id="footer">
      <p style="text-transform: none !important">
         &copy;&nbsp; 2023 Rafael Yehuda Sitorus - 2225230068
      </p>
</div> <!-- end of footer -->

  </body>
  <iframe width=174 height=189 name="gToday:normal:main/lib/calendar/agenda.js" id="gToday:normal:main/lib/calendar/agenda.js" src="https://siakad.untirta.ac.id/portal/main/lib/calendar/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; left:-500px; top:0px;"></iframe>
  
  </html>