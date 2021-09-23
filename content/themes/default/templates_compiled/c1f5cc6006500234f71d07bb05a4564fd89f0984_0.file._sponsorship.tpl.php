<?php
/* Smarty version 3.1.36, created on 2021-05-05 07:28:56
  from '/home/u6574599/public_html/content/themes/default/templates/_sponsorship.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_609249386eede9_04056391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1f5cc6006500234f71d07bb05a4564fd89f0984' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/_sponsorship.tpl',
      1 => 1615360728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609249386eede9_04056391 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
      <div class="swiper-slide"><a href="https://id.canon/"><img src="https://teachin.id/content/themes/default/images/Canon_logo_vector.png" style="max-width: 160px;"></a></div>
      <div class="swiper-slide"><a href="https://www.epson.co.id/"><img src="https://teachin.id/content/themes/default/images/epson-logo-1-1.png" style="max-width: 130px;"></a></div>
 
    </div>
    <!-- Add Pagination -->

  </div>

  <!-- Swiper JS -->
  <?php echo '<script'; ?>
 src="https://teachin.id/swiper-master/dist/js/swiper.min.js"><?php echo '</script'; ?>
>

  <!-- Initialize Swiper -->
  <?php echo '<script'; ?>
>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 6,
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
  <?php echo '</script'; ?>
>
</body>
</html><?php }
}
