<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://teachin.id/swiper-master/dist/css/swiper.min.css">

  <!-- Demo styles -->
  <style>
    html, body {
      position: relative;
      height: 100%;
    }
    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      height: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
  </style>
</head>
<body>
  <!-- Swiper -->
  <div class="mb-5 swiper-container">
   
    <div class="swiper-wrapper">
      <div class="swiper-slide">  <a href="https://gurudigital.id/"><img src="https://teachin.id/content/themes/default/images/gurudigital.png" style="max-width: 160px;"></a></div>
      <div class="swiper-slide"><a href="https://www.edunews.id/redaksi"><img src="https://teachin.id/content/themes/default/images/edunewslogo.png" style="max-width: 160px;"></a></div>
      <div class="swiper-slide"> <a href="https://krya.id/"><img src="https://teachin.id/content/themes/default/images/krya-logo.png" style="max-width: 160px;"></a></div>
      <div class="swiper-slide"><a href="https://www.suarajabarsatu.com/"><img src="https://teachin.id/content/themes/default/images/sjs.jpg" style="max-width: 160px;"></a></div>
      <div class="swiper-slide"><a href="https://www.eduportal.co.id/"><img src="https://teachin.id/content/themes/default/images/eduportal-01.png" style="max-width: 160px;"></a></div>
 
    </div>
    <!-- Add Pagination -->

  </div>

  <!-- Swiper JS -->
  <script src="../swiper-master/dist/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 5,
      spaceBetween: 50,
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        1024: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        320: {
          slidesPerView: 1,
          spaceBetween: 10,
        }
      }
    });
  </script>
</body>
</html>