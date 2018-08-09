<?php
/**
 * Template Name: Startseite Template
 * Author: wolfie_sch
 * Date: 07/24/2018
*/
?>
<?php get_header(); ?>
<div class="flex flex-wrap">
  <div class="w-1/2 bg-brown h-screen relative first-section">
    <div class="absolute ml-8 mb-8 pin-b">
      <h1 class="text-white text-7xl tracking-tight">Anna Schukina</h1>
      <h1 class="text-white text-7xl tracking-tight">Translations</h1>
      <h2 class="text-grey-darker font-normal">professional. transaltion. service</h2>
      <div class="flex flex-wrap">
        <div class="w-1/3">
          <h3 class="text-white font-normal text-2xl">languages</h3>
          <p class="text-grey-dark">english - russian <br>
             polish - russian <br>
             bulgarian - russian <br>
             german - russian
          </p>
        </div>
        <div class="w-2/3">
          <h3 class="text-white font-normal text-2xl">your benefits</h3>
          <p class="text-grey-dark">high-quality translation <br>
             quick and timely support from me <br>
             strict confidentiality of your information <br>
             getting the translation within the deadline you specify <br>
             discounts and benefits for my long-term clients
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="w-1/2 h-screen">
    <h2>pic</h2>
  </div>

  <div class="w-1/2 h-screen">
    <h2>pic</h2>
  </div>
  <div class="w-1/2 bg-violet h-screen">
    <h1><?php the_field('about_headline'); ?></h1>
    <?php the_field('about_content'); ?>
  </div>

  <div class="w-full bg-turquoise h-screen">
    <div class="flex flex-wrap">
      <div class="w-1/3">
        <h2 class="">legal translation</h2>
        <?php the_field('service_translation'); ?>
      </div>
      <div class="w-1/3">
        <h2 class="">website localization</h2>
        <?php the_field('service_website'); ?>
      </div>
      <div class="w-1/3">
        <h2 class="">proofreading</h2>
        <?php the_field('service_proofing'); ?>
      </div>
    </div>
  </div>

  <div class="w-1/2 bg-brown h-screen">
    <h1>contact</h1>
  </div>
  <div class="w-1/2 h-screen">
    <h2>pic</h2>
  </div>

</div>

<?php get_footer(); ?>
