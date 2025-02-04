<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Irsyad & Fanny</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="icon" type="image/png" href="img/favicon.ico">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&family=Beau+Rivage&family=Carattere&display=swap" rel="stylesheet" />

    {{-- aos animation --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <!-- slick slider -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  </head>
  <body>
    <!-- surat -->
    <div id="invitation-wedding" class="full position-relative mobile-screen" style="overflow: hidden">
      <div class="gradient-banner-surat"></div>
      <img src="img/black-3.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%; object-position: center" alt="" />
      <div class="container surat-title-1" style="z-index: 2">
        <h1 class="abhaya-bold f16" data-aos="zoom-in" data-aos-duration="1000">THE WEDDING OF</h1>
        <h1 class="carattere f48" data-aos="zoom-in" data-aos-duration="1000">Irsyad & Fanny</h1>
      </div>
      <div class="container surat-title-2" style="z-index: 2">
        <h1 data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="-300" class="abhaya-regular f16" style="line-height: 0.6">Kepada Yth.</h1>
        <h1 data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="-300" id="greeting" class="abhaya-bold mb-5 f24">‎</h1>
        <button data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="-300" onClick="enableScroll()" class="btn-undangan">BUKA UNDANGAN</button>
      </div>
    </div>

    <!--  -->

    <audio id="audioPlayer" autoplay>
      <source src="img/Chrisye-Untukku.mp3" type="audio/mp3" />
      Your browser does not support the audio element.
    </audio>

    <div class="position-fixed" style="bottom: 20px; right: 20px; z-index: 999">
      <div class="mb-2">
        <a href="#wedding">
          <svg class="icon-fixed" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z" />
          </svg>
        </a>
      </div>
      <div>
        <a id="audioToggleBtn" class="playing" href="javascript:void(0);">
          <svg class="icon-fixed" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-disc-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-6 0a2 2 0 1 0-4 0 2 2 0 0 0 4 0M4 8a4 4 0 0 1 4-4 .5.5 0 0 0 0-1 5 5 0 0 0-5 5 .5.5 0 0 0 1 0m9 0a.5.5 0 1 0-1 0 4 4 0 0 1-4 4 .5.5 0 0 0 0 1 5 5 0 0 0 5-5" />
          </svg>
        </a>
      </div>
    </div>

    <!-- hero -->
    <div id="wedding" class="hero position-relative mobile-screen">
      <div class="gradient-banner"></div>
      <div class="hero-slider bg-black mobile-screen">
        <div style="width: 100vw; height: 100vh; overflow: hidden">
          <img src="img/black-1.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%; object-position: center" alt="" />
        </div>
        <div style="width: 100vw; height: 100vh; overflow: hidden">
          <img src="img/black-2.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%; object-position: center" alt="" />
        </div>
        <div style="width: 100vw; height: 100vh; overflow: hidden">
          <img src="img/black-3.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%; object-position: center" alt="" />
        </div>
      </div>
      <div class="container title-hero">
        <div class="text-center">
          <h1 class="beau" style="line-height: 0.75">The Wedding of</h1>
          <h1 class="abhaya-bold f48" style="margin-bottom: 20px">Irsyad & Fanny</h1>
          <div class="countdown">
            <ul class="mx-auto">
              <li><span class="fs-1" id="hari"></span><br /><span class="">Hari</span></li>
              <li><span class="fs-1" id="jam"></span><br /><span class="">Jam</span></li>
              <li><span class="fs-1" id="menit"></span><br /><span class="">Menit</span></li>
              <li><span class="fs-1" id="detik"></span><br /><span class="">Detik</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--  -->

    <!-- getting married -->
    <div id="save-the-date" class="bg-black pt-5 mobile-screen">
      <div class="container pt-5 mt-4 text-center text-white">
        <div data-aos="zoom-in" data-aos-duration="1000">
          <h1 class="abhaya-extrabold f40" style="line-height: 0.2">We Are</h1>
          <h1 class="beau f42">Getting Married</h1>
        </div>
        <div data-aos="zoom-in" data-aos-duration="1000" class="divider-love">
          <div class="divider"></div>
          <div class="mx-2 f30">&#x2661;</div>
          <div class="divider"></div>
        </div>
        <div data-aos="fade-up" data-aos-duration="1000" class="desc px-4 py-4">
          <h3 class="f16 abhaya-regular mb-5">
            Siang dan malam berganti begitu cepat, diantara saat saat mendebarkan yang belum pernah kami rasakan sebelum nya. kami nantikan kehadiran para keluarga dan sahabat, untuk menjadi saksi ikrar janji suci kami di hari yang bahagia.
          </h3>
          <a href="#save-the-date" onclick="saveToGoogleCalendar()" class="btn-date abhaya-extrabold text-uppercase d-flex align-items-center justify-content-center">
            <img src="img/calendar.svg" style="width: 1rem" class="me-1" alt="" />
            <span style="margin-top: 2.5px">SAVE THE DATE</span>
          </a>
        </div>
        <div data-aos="fade" data-aos-duration="1000" class="slider-swiper px-4 pt-5">
          <div class="img-swiper" style="width: 72px; height: 72px; border-radius: 50%; overflow: hidden !important; margin: 0 2px">
            <img src="img/slider/1.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%; object-position: center" alt="" />
          </div>
          <div class="img-swiper" style="width: 72px; height: 72px; border-radius: 50%; overflow: hidden !important; margin: 0 2px">
            <img src="img/slider/2.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%; object-position: center" alt="" />
          </div>
          <div class="img-swiper" style="width: 72px; height: 72px; border-radius: 50%; overflow: hidden !important; margin: 0 2px">
            <img src="img/slider/3.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%; object-position: center" alt="" />
          </div>
          <div class="img-swiper" style="width: 72px; height: 72px; border-radius: 50%; overflow: hidden !important; margin: 0 2px">
            <img src="img/slider/4.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%; object-position: center" alt="" />
          </div>
          <div class="img-swiper" style="width: 72px; height: 72px; border-radius: 50%; overflow: hidden !important; margin: 0 2px">
            <img src="img/slider/5.webp" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%; object-position: center" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!--  -->

    <!-- bride groom -->
    <div id="bride-groom" class="bg-black mobile-screen" style="padding-top: 70px; margin-top: -1px; padding-bottom: 70px; margin-bottom: -1px; overflow: hidden">
      <div data-aos="zoom-in" data-aos-duration="1000" class="container d-flex justify-content-center align-items-center">
        <img src="img/PNG-Instagram-Filter-1024x217.png" class="img-fluid" style="width: 170px" alt="" />
      </div>
      <div class="container text-white text-center">
        <div data-aos="zoom-in" data-aos-duration="1000" class="desc px-4 py-4">
          <h1 class="beau f42">Bride & Groom</h1>
          <h3 class="f16 abhaya-regular mt-4 mb-5">Maha Suci Allah Subhanahu wa Ta'ala yang telah menciptakan makhluk-Nya berpasang-pasangan. Ya Allah, perkenankanlah dan Ridhoilah Pernikahan Kami.</h3>
        </div>
        <div class="">
          <div data-aos="fade-right" data-aos-duration="1000" class="container d-flex justify-content-center align-items-center">
            <img src="img/fanny.png" class="img-fluid" style="width: 170px" alt="" />
          </div>
          <div data-aos="zoom-in" data-aos-duration="1000" class="text-center text-white mt-3">
            <h2 class="abhaya-bold">Geizka Fanny Azzahra</h2>
            <div class="abhaya-bold">Putri dari</div>
            <div class="abhaya-bold">
              Alm. Bapak Muhamad Sahid dan <br />
              Ibu Sri Margiyati
            </div>
            <a href="https://www.instagram.com/geizka.fanny" target="_blank" class="btn-ig abhaya-bold mt-3">
              <img src="img/instagram.svg" style="width: 1rem" class="me-1" alt="" />
              <span>@geizka.fanny</span>
            </a>
          </div>
          <div data-aos="fade" data-aos-duration="1000" class="divider-love">
            <div class="divider"></div>
            <div class="mx-3 f46 carattere">&</div>
            <div class="divider"></div>
          </div>
          <div data-aos="fade-left" data-aos-duration="1000" class="container d-flex justify-content-center align-items-center pt-4">
            <img src="img/irsyad.png" class="img-fluid" style="width: 170px" alt="" />
          </div>
          <div data-aos="zoom-in" data-aos-duration="1000" class="text-center text-white mt-3">
            <h2 class="abhaya-bold">Irsyad Bagas Dwi Setiawan S.Kom</h2>
            <div class="abhaya-bold">Putra dari</div>
            <div class="abhaya-bold">
              Bapak Slamet Supadi dan <br />
              Ibu Upik Susilowati
            </div>
            <a href="https://www.instagram.com/irsyad.bgs" target="_blank" class="btn-ig abhaya-bold mt-3">
              <img src="img/instagram.svg" style="width: 1rem" class="me-1" alt="" />
              <span>@irsyad.bgs</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!--  -->

    <!-- qs -->
    <div id="qs" class="py-5 bg-qs mobile-screen">
      <div class="overlay-qs"></div>
      <div class="container overlay-qs-content">
        <img data-aos="zoom-in" data-aos-duration="1000" src="img/icon-wedding.png" class="img-fluid mb-4" style="width: 50px" alt="" />
        <div data-aos="zoom-in" data-aos-duration="1000" class="desc px-4 py-4">
          <h3 class="f16 abhaya-regular mb-4">
            "Dan di antara tanda-tanda kekuasaan-Nya diciptakan-Nya untukmu pasangan hidup dari jenismu sendiri supaya kamu dapat ketenangan hati dan dijadikannya kasih sayang di antara kamu. Sesungguhnya yang demikian menjadi tanda-tanda
            kebesaran-Nya bagi orang-orang yang berpikir."
          </h3>
          <h3 class="abhaya-bold f22">- Q.S. Ar-Rum : 21 -</h3>
        </div>
      </div>
    </div>
    <!--  -->

    <!-- date -->
    <div id="date" class="bg-date mobile-screen">
      <div class="overlay-date"></div>
      <div class="container overlay-date-content py-5 px-4" style="overflow-x: hidden">
        <div data-aos="zoom-in" data-aos-duration="1000" class="mt-2 mb-5">
          <h1 class="abhaya-extrabold f40" style="line-height: 0.2">Save</h1>
          <h1 class="beau f42">The Date</h1>
        </div>
        <div data-aos="fade-left" data-aos-duration="1000" class="px-3 bg-date-1">
          <div class="overlay-date-1"></div>
          <div class="overlay-date-1-content">
            <h1 class="beau f46 mb-4">Unduh Mantu</h1>
            <h3 class="abhaya-bold f16">Minggu, 23 February 2025</h3>
            <h3 class="abhaya-bold f16">Pukul : 10.00 WIB</h3>
            <img src="img/location.png" class="img-fluid text-center mt-2 mb-3" style="width: 50px" alt="" />
            <h3 class="abhaya-bold f16">
              Lokasi: <br />
              Selera Jawa Sunda <br />
              Jl. Pakel No.4, RT.4/RW.12, Klodran Indah, Banyuanyar, Kec. Banjarsari, Kota Surakarta
            </h3>
            <a href="https://maps.app.goo.gl/SfLmEmvxftrGgfUu5" target="_blank" class="btn-ig abhaya-bold mt-3">
              <img src="img/loc.svg" style="width: 1rem" class="me-1" alt="" />
              <span>Lihat Lokasi</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!--  -->

    <!-- love story -->
    <div id="love-story" class="mobile-screen" style="background-color: rgb(210, 210, 210)">
      <div class="container px-4 py-5 text-black" style="overflow-x: hidden">
        <div data-aos="zoom-in" data-aos-duration="1000" class="pt-2 pb-5 text-center">
          <h1 class="abhaya-bold f40" style="line-height: 0.2">Our Love</h1>
          <h1 class="beau f42">Story</h1>
        </div>
        <div class="row justify-content-center align-items-center">
          <div data-aos="fade-right" data-aos-duration="1000" class="col-5">
            <img src="img/stori-1.png" class="img-fluid" alt="" />
          </div>
          <div data-aos="fade-left" data-aos-duration="1000" class="col-7">
            <h1 class="abhaya-extrabold" style="line-height: 1">Awal <br />Bertemu</h1>
            <h3 class="f16 abhaya-regular" style="font-style: italic">"Awal mula kami bertemu adalah dalam salah satu Sekolah Menengah Kejuruan yang ada di Solo sebagai siswa satu kelas."</h3>
          </div>
        </div>
        <div class="my-5 row justify-content-center align-items-center">
          <div data-aos="fade-right" data-aos-duration="1000" class="col-7 text-end">
            <h1 class="abhaya-extrabold" style="line-height: 1">Komitmen</h1>
            <h3 class="f16 abhaya-regular" style="font-style: italic">"Setelah berkomunikasi beberapa bulan dan menemukan kecocokan akhirnya kami memutuskan untuk menjalin sebuah komitmen."</h3>
          </div>
          <div data-aos="fade-left" data-aos-duration="1000" class="col-5">
            <img src="img/stori-2.png" class="img-fluid" alt="" />
          </div>
        </div>
        <div class="row justify-content-center align-items-center">
          <div data-aos="fade-right" data-aos-duration="1000" class="col-5">
            <img src="img/stori-3.png" class="img-fluid" alt="" />
          </div>
          <div data-aos="fade-left" data-aos-duration="1000" class="col-7">
            <h1 class="abhaya-extrabold" style="line-height: 1">Menikah</h1>
            <h3 class="f16 abhaya-regular" style="font-style: italic">"Setelah menjalin hubungan beberapa tahun, akhirnya kami memantabkan hati untuk membawa hubungan ini ke jenjang yang lebih serius untuk hidup dan menua bersama."</h3>
          </div>
        </div>
      </div>
    </div>

    <!-- gallery -->
    <div id="gallery" class="mobile-screen bg-white">
      <div class="container px-4 py-5 text-black">
        <div data-aos="zoom-in" data-aos-duration="1000" class="pt-2 pb-5 text-center">
          <h1 class="abhaya-extrabold f40" style="line-height: 0.2">PreWedding</h1>
          <h1 class="beau f42">Gallery</h1>
        </div>
        <div class="gallery">
          <div data-aos="fade-up" data-aos-duration="1000" class="gallery-item">
            <figure>
              <img src="img/gallery/galeri-10.webp" alt="galery" />
            </figure>
          </div>
          <div data-aos="fade-up" data-aos-duration="1000" class="gallery-item">
            <figure>
              <img src="img/gallery/galeri-11.webp" alt="galery" />
            </figure>
          </div>
          <div data-aos="fade-up" data-aos-duration="1000" class="gallery-item">
            <figure>
              <img src="img/gallery/galeri-4.webp" alt="galery" />
            </figure>
          </div>
          <div data-aos="fade-up" data-aos-duration="1000" class="gallery-item">
            <figure>
              <img src="img/gallery/galeri-13.webp" alt="galery" />
            </figure>
          </div>
          <div data-aos="fade-up" data-aos-duration="1000" class="gallery-item">
            <figure>
              <img src="img/gallery/galeri-8.webp" alt="galery" />
            </figure>
          </div>
          <div data-aos="fade-up" data-aos-duration="1000" class="gallery-item">
            <figure>
              <img src="img/gallery/galeri-1.webp" alt="galery" />
            </figure>
          </div>
          <div data-aos="fade-up" data-aos-duration="1000" class="gallery-item">
            <figure>
              <img src="img/gallery/galeri-5.webp" alt="galery" />
            </figure>
          </div>
          <div data-aos="fade-up" data-aos-duration="1000" class="gallery-item">
            <figure>
              <img src="img/gallery/galeri-12.webp" alt="galery" />
            </figure>
          </div>
          <div data-aos="fade-up" data-aos-duration="1000" class="gallery-item">
            <figure>
              <img src="img/gallery/galeri-6.webp" alt="galery" />
            </figure>
          </div>
          <div data-aos="fade-up" data-aos-duration="1000" class="gallery-item">
            <figure>
              <img src="img/gallery/galeri-2.webp" alt="galery" />
            </figure>
          </div>
          <div data-aos="fade-up" data-aos-duration="1000" class="gallery-item">
            <figure>
              <img src="img/gallery/galeri-3.webp" alt="galery" />
            </figure>
          </div>
          <div data-aos="fade-up" data-aos-duration="1000" class="gallery-item">
            <figure>
              <img src="img/gallery/galeri-7.webp" alt="galery" />
            </figure>
          </div>
          <div data-aos="fade-up" data-aos-duration="1000" class="gallery-item">
            <figure>
              <img src="img/gallery/galeri-9.webp" alt="galery" />
            </figure>
          </div>
          <div data-aos="fade-up" data-aos-duration="1000" class="gallery-item">
            <figure>
              <img src="img/gallery/galeri-14.webp" alt="galery" />
            </figure>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="1000" class="abhaya-regular text-black text-center f16 pt-5" style="line-height: 1.1; font-style: italic">
          “I love you. I am who I am because of you. You are every reason, every hope, and every dream I've ever had, and no matter what happens to us in the future, everyday we are together is the greatest day of my life. I will always be
          yours. ”
        </div>
        <div data-aos="fade" data-aos-duration="1000" class="divider-love">
          <div class="divider bg-black"></div>
          <div class="mx-2 f30">&#x2661;</div>
          <div class="divider bg-black"></div>
        </div>
      </div>
    </div>

    <!-- wedding wishes -->
    <div id="wishes" class="mobile-screen">
      <div class="bg-ucapan" style="overflow: hidden">
        <div class="overlay-ucapan"></div>
        <div class="container px-4 py-5 text-black overlay-ucapan-content">
          <div data-aos="zoom-in" data-aos-duration="1000" class="pt-2 text-center">
              <h1 class="abhaya-extrabold f40" style="line-height: 0.2">Wedding</h1>
              <h1 class="beau f42">Wishes</h1>
          </div>
          <div  data-aos="zoom-in" data-aos-duration="1000" class="abhaya-regular text-black text-center f16 pt-4" style="line-height: 1.1; font-style: italic">
              Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila Bapak/ Ibu/ Saudara/ i berkenan hadir, untuk memberikan do'a restu kepada kedua mempelai.
          </div>
      
          <div  data-aos="zoom-in" data-aos-duration="1000" class="ucapan p-4 my-5 text-start position-relative">
              <div class="blur"></div>
              <div class="container" style="z-index: 2; position: relative">
                  <!-- Form -->
                  <form class="pe-3" id="ucapan-form" action="https://wedding-irsyad-fanny.vercel.app/ucapan" method="POST">
                      @csrf
                      <div class="mb-2">
                          <input class="px-2 py-1 abhaya-regular" style="all: unset; width: 100%; border-radius: 10px; background-color: #fff; color: black; font-family: 'Abhaya Libre', serif; font-weight: 400; font-style: normal" type="text" name="nama" id="nama" placeholder="Nama" value="{{ old('nama') }}" required />
                      </div>
                      <div class="mb-2">
                          <textarea class="px-2 py-1 abhaya-regular" style="all: unset; width: 100%; border-radius: 10px; background-color: #fff; color: black; font-family: 'Abhaya Libre', serif; font-weight: 400; font-style: normal" name="ucapan" id="ucapan" placeholder="Ucapan" required>{{ old('ucapan') }}</textarea>
                      </div>
                      <div class="mb-3">
                          <select class="px-2 py-1 abhaya-regular" style="border: none; width: 100%; border-radius: 10px; background-color: #fff; color: black; font-family: 'Abhaya Libre', serif; font-weight: 400; font-style: normal" name="hadir" id="hadir" required>
                              <option value="" disabled selected hidden>Konfirmasi Kehadiran</option>
                              <option value="1">Hadir</option>
                              <option value="0">Tidak Hadir</option>
                          </select>
                      </div>
                      <button type="submit" id="submit-button" style="all: unset; text-decoration: none; background: #ffd700; padding: 8px 20px; text-decoration: none; border-radius: 10px; color: black; width: fit-content; font-family: 'Abhaya Libre', serif; font-weight: 600; font-style: normal; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                          Kirim Ucapan
                          <span id="loading-spinner" class="ms-1" style="display:none;">
                              <div class="spinner-border text-dark" style="width: 20px; height: 20px; margin-right: 3px; margin-bottom: -4px;" role="status">
                                  <span class="visually-hidden">Loading...</span>
                              </div>  
                          </span> 
                      </button>
                  </form>
      
                  <!-- Optional: Display message after submission -->
                  <div id="response-popup" class="response-popup">
                      <div id="response-message"></div>
                  </div>
              </div>
          </div>
      
          {{-- total hadir tidak hadir --}}
          <div class="row justify-content-center mb-4">
              <div data-aos="fade-right" data-aos-duration="1000" class="col-5 abhaya-extrabold">
                  <div class="" style="background: green; padding: 5px; color: white; border-radius: 10px">
                      <div id="hadir-count" class="">{{ $ucapan->where('hadir', 1)->count() }}</div>
                      <div class="">Hadir</div>
                  </div>
              </div>
              <div data-aos="fade-left" data-aos-duration="1000" class="col-5 abhaya-extrabold">
                  <div class="" style="background: red; padding: 5px; color: white; border-radius: 10px">
                      <div id="tidak-hadir-count" class="">{{ $ucapan->where('hadir', 0)->count() }}</div>
                      <div class="">Tidak Hadir</div>
                  </div>
              </div>
          </div>
      
          <!-- Ucapan Count (Dynamic Count) -->
          <div  data-aos="fade-up" data-aos-duration="1000" class="ucapan-count mt-3 text-center">
              <strong><span id="ucapan-count">{{ $ucapan->count() }}</span> Ucapan</strong>
          </div>
          <!-- Displaying UCAPAN data -->
          @php
              $totalItems = $ucapan->count(); // Total number of ucapan
              $visibleItems = 3; // Number of items initially visible
          @endphp
      
          <div  data-aos="fade-up" data-aos-duration="1000" class="data-ucapan p-4 text-start" style="background: white; border-radius: 30px">
              <div id="ucapan-list">
                  @foreach ($ucapan as $index => $item)
                  <div class="ucapan-item" style="{{ $index >= $visibleItems ? 'display:none;' : '' }}">
                      <div class="flex" style="display: flex; align-items: center">
                          <img src="/img/flower.png" class="img-fluid" alt="" style="max-width: 40px; margin-right: 20px" />
                          <div>
                              <div class="abhaya-extrabold">{{ $item->nama }}</div>
                              <p class="f12" style="margin-bottom: -3px">{{ \Carbon\Carbon::parse($item->created_at)->format('d M y') }}</p>
                              <p class="abhaya-regular">{{ $item->ucapan }}</p>
                          </div>
                      </div>
                      <hr />
                  </div>
                  @endforeach
              </div>
      
              @if ($totalItems > 3)
              <div id="showMore" class="text-center mt-3 abhaya-extrabold cursor-pointer">
                  <div class="f16" style="margin-bottom: -5px">Show More</div>
                  <img src="/img/arrow.gif" style="rotate: 270deg; width: 20px" alt="" />
              </div>
              @endif
          </div>
      </div>

          </div>
        </div>
      </div>
      <div class="bg-black position-relative">
        <div class="container px-4 pt-4" style="padding-bottom: 140px; margin-bottom: -2px">
          <div data-aos="fade-up" data-aos-duration="1000" class="abhaya-regular text-white text-center f16 pt-4" style="line-height: 1.1; font-style: italic">
            "Semoga Allah memberkahimu dan memberkahi apa yang menjadi tanggung jawabmu, serta menyatukan kalian berdua dalam kebaikan."
          </div>
          <div data-aos="fade-up" data-aos-duration="1000" class="abhaya-bold text-white text-center f16 pt-4 px-5" style="line-height: 1.1; font-style: italic">(HR. Ahmad, at-Tirmidzi, an-Nasa'i, Abu Dawud, dan Ibnu Majah)</div>
        </div>
        <img src="img/mask.png" style="width: 100%; position: absolute; bottom: 0" />
      </div>
    </div>
    <!--  -->

    <!-- wedding gift -->
    <div id="gift" class="bg-gift mobile-screen">
      <div class="overlay-gift"></div>
      <div class="container px-4 py-5 text-black overlay-gift-content">
        <div data-aos="zoom-in" data-aos-duration="1000" class="pt-2 text-center">
          <h1 class="abhaya-extrabold f40" style="line-height: 0.2">Wedding</h1>
          <h1 class="beau f42">Gift</h1>
        </div>
        <div data-aos="fade-up" data-aos-duration="1000" class="abhaya-regular text-black text-center f16 pt-4 mb-5" style="line-height: 1.1; font-style: italic">
          Do'a restu keluarga, sahabat, serta rekan-rekan semua di pernikahan kami sudah sangat cukup sebagai hadiah, tetapi jika memberi merupakan tanda kasih, kami dengan senang hati menerimanya dan tentunya semakin melengkapi kebahagiaan
          kami.
        </div>
        <div data-aos="zoom-in" data-aos-duration="1000" class="bank text-center p-5">
          <div class="blur"></div>
          <div class="position-relative" style="z-index: 2">
            <img src="img/bca.png" class="img-fluid text-center mb-2" style="width: 100px" alt="" />
            <div class="dvdr my-4" style="width: 100%; height: 1.5px; background: #000"></div>
            <h3 class="abhaya-extrabold f20">
              <span class="f18">atas nama</span> <br />
              Irsyad Bagas Dwi Setiawan
            </h3>
            <h3 id="myText" class="abhaya-extrabold mt-3 mb-4" style="text-decoration: none">0780316756</h3>
            <button onclick="copyText()" class="btn-copy abhaya-bold mt-3">
              <img src="img/copy.svg" style="width: 1rem" class="me-2" alt="" />
              <span class="mt-1 abhaya-bold">Salin</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div id="popup" class="popup">Berhasil menyalin nomor</div>
    <!--  -->

    <!-- footer -->
    <div id="footer" class="bg-footer mobile-screen">
      <div class="overlay-footer"></div>
      <div class="container text-center py-5 overlay-footer-content">
        <div data-aos="fade" data-aos-duration="1000" class="mt-4">
          <img src="img/footer-img.png" class="img-fluid" style="width: 100px" alt="" />
        </div>
        <div data-aos="fade-up" data-aos-duration="1000" class="text-center text-white px-4" style="margin-top: 100px">
          <h3 class="f12 abhaya-bold">KAMI YANG BERBAHAGIA</h3>
          <h1 class="carattere f46">Irsyad & Fanny</h1>
          <h3 class="f16 abhaya-bold">Atas kehadiran dan doa restunya kami ucapkan terima kasih</h3>
        </div>
        <div data-aos="zoom-in" data-aos-duration="1000" class="divider-love">
          <div class="divider"></div>
          <div class="mx-2 f30 text-white">&#x2661;</div>
          <div class="divider"></div>
        </div>
        <img data-aos="zoom-in" data-aos-duration="1000" src="img/flower.png" class="img-fluid mt-5" style="width: 60px" alt="" />
        <div class="mt-4">
          <p class="abhaya-bold text-white" style="line-height: 1.1">
            Design by love: <br />
            Isaddd
          </p>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Slick JS -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
      AOS.init();
      // slider hero
      $(document).ready(function () {
        $(".hero-slider").slick({
          //dots: true,
          autoplay: true,
          autoplaySpeed: 3000,
          infinite: true,
          slidesToShow: 1,
          arrows: false,
          fade: true,
          cssEase: "linear",
        });
      });

      //slider swiper
      $(document).ready(function () {
        $(".slider-swiper").slick({
          //dots: true,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          slidesToShow: 4,
          arrows: false,
        });
      });

      //music
      // Get references to the audio player and toggle button
      const audioPlayer = document.getElementById("audioPlayer");
      const audioToggleBtn = document.getElementById("audioToggleBtn");
      const disc = document.getElementById("disc");

      // Initial state of the audio: autoplay on load
      audioPlayer.play();

      // Toggle the audio play/pause when the button is clicked
      audioToggleBtn.addEventListener("click", function () {
        if (audioPlayer.paused) {
          // If the audio is paused, play it
          audioPlayer.play();
          // Optionally, you can change the icon or state of the button
          audioToggleBtn.classList.remove("paused"); // Remove paused class
          audioToggleBtn.classList.add("playing"); // Add playing class
        } else {
          // If the audio is playing, pause it
          audioPlayer.pause();
          // Optionally, change the icon or state of the button to indicate paused state
          audioToggleBtn.classList.remove("playing"); // Remove playing class
          audioToggleBtn.classList.add("paused"); // Add paused class
        }
      });

      //   countdown
      // Set the date we're counting down to
      var countdownDate = new Date("Feb 23, 2025 10:00:00").getTime();

      // Update the countdown every 1 second
      var x = setInterval(function () {
        // Get the current date and time
        var now = new Date().getTime();

        // Find the time remaining
        var distance = countdownDate - now;

        // Calculate days, hours, minutes, and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result
        document.getElementById("hari").innerHTML = days;
        document.getElementById("jam").innerHTML = hours;
        document.getElementById("menit").innerHTML = minutes;
        document.getElementById("detik").innerHTML = seconds;

        // If the countdown ends, display a message
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("countdown").innerHTML = "EXPIRED";
        }
      }, 1000);

      //  nama tamu undangan
      // Function to get URL parameters
      function getURLParameter(name) {
        var urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(name);
      }
      var guestName = getURLParameter("name");
      if (guestName) {
        var greetingElement = document.getElementById("greeting");
        if (greetingElement) {
          greetingElement.textContent = `${guestName}`;
        }
      }

      window.onload = function () {
        window.scrollTo(0, 0);
        window.location.hash = "invitation-wedding";
        disableScroll();
      };

      // Fungsi disableScroll untuk menonaktifkan scroll (contoh)
      function disableScroll() {
        // Menonaktifkan scroll dengan mengubah gaya overflow
        document.body.style.overflow = "hidden";
        document.documentElement.style.overflow = "hidden";
      }

      // Enable scrolling and hide the overlay with slide-up effect
      function enableScroll() {
        document.body.style.overflow = "";
        document.documentElement.style.overflow = "";

        const rootElement = document.documentElement || document.body;
        rootElement.style.scrollBehavior = "smooth"; // Optionally re-enable smooth scrolling

        const fullScreenOverlay = document.getElementById("invitation-wedding");
        if (fullScreenOverlay) {
          fullScreenOverlay.classList.add("slide-up"); // Trigger the slide-up animation

          setTimeout(function () {
            fullScreenOverlay.style.display = "none"; // Set display to none after the animation completes
          }, 500); // Duration matches the CSS transition duration
        }

        history.replaceState(null, null, window.location.pathname + window.location.search);

        // Start audio playback after the overlay animation is complete
        const audioPlayer = document.getElementById("audioPlayer");
        if (audioPlayer) {
          audioPlayer.play(); // Start playing audio after overlay hides
        }
      }

      document.addEventListener("DOMContentLoaded", function () {
        document.documentElement.scrollTop = 0;
        document.body.scrollTop = 0;
      });

      if (window.location.hash) {
        history.pushState("", document.title, window.location.pathname + window.location.search);
      }

      //save the date
      function saveToGoogleCalendar() {
        // Google Calendar URL format for adding events
        const eventTitle = "Wedding of Irsyad and Fanny";
        const eventDetails = "Wedding of Irsyad and Fanny";
        const eventLocation = "Niekmat Rasa";
        const eventStartDate = "2025-02-23T10:00:00"; // YYYY-MM-DDTHH:MM:SS
        const eventEndDate = "2025-02-23T12:00:00";

        const googleCalendarURL = `https://www.google.com/calendar/render?action=TEMPLATE&text=${encodeURIComponent(eventTitle)}&details=${encodeURIComponent(eventDetails)}&location=${encodeURIComponent(
          eventLocation
        )}&dates=${eventStartDate}/${eventEndDate}`;

        // Redirect the user to the Google Calendar event page
        window.open(googleCalendarURL, "_blank");
      }

      function copyText() {
        /* Get the text from the <p> element */
        var copyText = document.getElementById("myText").innerText;

        /* Create a temporary text area to copy the text */
        var textArea = document.createElement("textarea");
        textArea.value = copyText;
        document.body.appendChild(textArea);
        textArea.select(); // Select the text
        textArea.setSelectionRange(0, 99999); // For mobile devices

        /* Copy the text to the clipboard */
        document.execCommand("copy");

        /* Remove the temporary text area */
        document.body.removeChild(textArea);

        /* Show the custom popup */
        var popup = document.getElementById("popup");
        popup.style.display = "block"; // Show the popup

        /* Hide the popup after 2 seconds */
        setTimeout(function () {
          popup.style.display = "none"; // Hide the popup
        }, 2000);
      }
    </script>
    <script>
      $(document).ready(function () {
          // Handle form submission via AJAX
          $("#ucapan-form").on("submit", function (e) {
              e.preventDefault(); // Prevent the default form submission
  
              // Show the loading spinner
              $("#loading-spinner").show();
              $("#submit-button").prop("disabled", true); // Disable the button to prevent double submission
  
              var formData = $(this).serialize(); // Serialize form data
  
              $.ajax({
                  url: $(this).attr("action"), // Use the form action URL
                  type: "POST", // Form submission method
                  data: formData, // The serialized form data
                  success: function (response) {
                      // On success, display the response (ucapan added)
                      $("#response-message").html("<p>Terima kasih atas ucapannya!</p>");
                      $("#response-popup").fadeIn(500); // Fade in the popup
  
                      // Optionally clear the form
                      $("#ucapan-form")[0].reset();
  
                      // Add the new ucapan to the top of the list
                      var newUcapanHtml = `
                          <div class="ucapan-item">
                              <div class="flex" style="display: flex; align-items: center;">
                                  <img src="/img/flower.png" class="img-fluid" alt="" style="max-width: 40px; margin-right: 20px;">
                                  <div>
                                      <div class="abhaya-extrabold">${response.nama}</div>
                                      <p class="f12" style="margin-bottom: -3px">${response.date}</p>
                                      <p class="abhaya-regular">${response.ucapan}</p>
                                  </div>
                              </div>
                              <hr>
                          </div>
                      `;
                      $("#ucapan-list").prepend(newUcapanHtml); // Prepend new ucapan to the list
  
                      // Update the count of ucapan, hadir, and tidak hadir
                      $("#ucapan-count").text(response.total_ucapan);
                      $("#hadir-count").text(response.hadir_count);
                      $("#tidak-hadir-count").text(response.tidak_hadir_count);
  
                      // Hide the popup after 2 seconds
                      setTimeout(function () {
                          $("#response-popup").fadeOut(500);
                      }, 2000);
  
                      // Hide loading spinner and enable the button
                      $("#loading-spinner").hide();
                      $("#submit-button").prop("disabled", false);
                  },
                  error: function (xhr, status, error) {
                      // Handle errors
                      $("#response-message").html("<p>Terjadi kesalahan, coba lagi.</p>");
                      $("#loading-spinner").hide();
                      $("#submit-button").prop("disabled", false);
                  },
              });
          });
  
          $("#showMore").on("click", function () {
              // Tampilkan lebih banyak ucapan
              $(".ucapan-item").each(function (index) {
                  if (index >= 3) {
                      $(this).fadeIn(500); // Tampilkan item tersembunyi dengan fade effect
                  }
              });
  
              // Sembunyikan tombol "Show More" setelah semua item ditampilkan
              $("#showMore").hide();
          });
      });
  </script>
    <script>
      // JavaScript untuk membatasi akses pada perangkat desktop
      if (window.innerWidth > 768) {
        document.body.innerHTML = '<div style="width: 100vw; height: 100vh; display:flex; align-items: center; justify-content:center;"><p class="text-center">Halaman ini hanya dapat diakses menggunakan perangkat mobile.</p></div>';
      }
    </script>
  </body>
</html>
