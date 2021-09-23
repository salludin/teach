<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-03 10:37:09
  from '/home/u6574599/public_html/content/themes/default/templates/_why_join.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f27e8d5265c61_48838255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a263277976ff337353ead1b485eba17d7f1dee24' => 
    array (
      0 => '/home/u6574599/public_html/content/themes/default/templates/_why_join.tpl',
      1 => 1596451024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_sponsorship.tpl' => 1,
  ),
),false)) {
function content_5f27e8d5265c61_48838255 (Smarty_Internal_Template $_smarty_tpl) {
?><br><br><br><br><br><br>
<div class="site-section index-intro" id="programs-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center"  data-aos="fade-up" data-aos-delay="">
              
            <h2 class="" style="color: #172d5c;">Lowongan Pekerjaan</h2>
            <p>Lowongan kerja spesifik di dunia Pendidikan yang langsung menghubungkan pada institusi pendidikan</p>
          </div>
        </div>
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/home/undraw_youtube_tutorial.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200" style="text-align: right;">
            <h2 class="text-black mb-4" style="color: #172d5c;">Blog, artikel, dan media sosial</h2>
            <p class="mb-4">Social Life & Koneksi khusus dengan para pendidik & Konsultan Pendidikan di seluruh Indonesia.</p>

            

           

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/home/undraw_teacher.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200"style="text-align: left;">
            <h2 class="text-black mb-4" style="color: #172d5c;">Training</h2>
            <p class="mb-4">Training Pendidikan dengan beragam materi dari seluruh organisasi pendidikan di Indonesia.</p>

           

            

          </div>
        </div>
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center"  data-aos="fade-up" data-aos-delay="">
              
            <h2 class="" style="color: #172d5c;">Sponsorship</h2>
          </div>
        </div>
 <?php $_smarty_tpl->_subTemplateRender('file:_sponsorship.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>     

      </div>
    </div><?php }
}
