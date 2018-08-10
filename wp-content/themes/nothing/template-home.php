<?php
/**
 * Template Name: Startseite Template
 * Author: wolfie_sch
 * Date: 07/24/2018
*/
?>
<?php get_header(); ?>
<div class="content">
  <div class="flex flex-wrap">
    <div class="lg:w-1/2 sm:w-full bg-brown h-screen relative first-section">
      <div class="absolute lg:ml-8 md:ml-8 mb-8 pin-b sm:ml-4">
        <h1 class="text-white lg:text-7xl md:text-7xl sm:text-6xl tracking-tight">Anna Schukina</h1>
        <h1 class="text-white lg:text-7xl md:text-7xl sm:text-6xl tracking-tight">Translations</h1>
        <h2 class="text-grey-darker font-normal">professional. transaltion. service</h2>
        <div class="flex flex-wrap">
          <div class="lg:w-1/3 sm:w-full">
            <h3 class="text-white font-normal text-2xl">languages</h3>
            <p class="text-grey-dark">english - russian <br>
               polish - russian <br>
               bulgarian - russian <br>
               german - russian
            </p>
          </div>
          <div class="lg:w-2/3 sm:w-full">
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
    <div class="lg:w-1/2 sm:w-full h-screen">
      <img src="http://dev.anna-schukina.com/wp-content/themes/nothing-UI/images/contact.jpg" alt="">
    </div>
    <!-- ####### -->
    <div class="lg:w-1/2 sm:w-full h-screen">
      <img src="http://dev.anna-schukina.com/wp-content/themes/nothing-UI/images/contact.jpg" alt="">
    </div>
    <div class="flex lg:w-1/2 sm:w-full bg-violet h-screen items-center">
      <div class="flex-1">
        <div class="mx-8">
          <h1 class="text-white lg:text-7xl md:text-7xl sm:text-6xl tracking-tight"><?php the_field('about_headline'); ?></h1>
          <?php
            $about_content = get_field('about_content');
            echo '<div class="text-grey-dark text-lg">';
            echo $about_content;
            echo '</div>';
          ?>
        </div>
      </div>
    </div>
    <!-- ######## -->
    <?php
      $service_translations = get_field('service_translation');
      $service_website      = get_field('service_website');
      $service_proofing     = get_field('service_proofing');
    ?>
    <div class="flex w-full bg-turquoise h-screen items-center">
      <div class="flex-1">
        <div class="flex flex-wrap items-center">
          <div class="lg:w-1/3 md:w-1/3 sm:w-full sm:mx-4 sm:mb-8 text-center p-14">
            <h2 class="text-4xl font-normal text-grey-darker mb-4">legal translation</h2>
            <?php
              echo '<div class="text-grey-dark text-lg">';
              echo $service_translations;
              echo '</div>';
            ?>
          </div>
          <div class="lg:w-1/3 md:w-1/3 sm:w-full sm:mx-4 sm:mb-8 text-center p-14">
            <i class="fal fa-tv fa-7x mb-2"></i>
            <h2 class="text-4xl font-normal text-grey-darker mb-4">website localization</h2>
            <?php
              echo '<div class="text-grey-dark text-lg">';
              echo $service_website;
              echo '</div>';
            ?>
          </div>
          <div class="lg:w-1/3 md:w-1/3 sm:w-full sm:mx-4 sm:mb-8 text-center p-14">
            <h2 class="text-4xl font-normal text-grey-darker mb-4">proofreading</h2>
            <?php
              echo '<div class="text-grey-dark text-lg">';
              echo $service_proofing;
              echo '</div>';
            ?>
          </div>
        </div>
      </div>
    </div>
    <!-- ######## -->
    <div class="flex lg:w-1/2 sm:w-full bg-violet h-screen items-center">
      <div class="flex-1">
        <div class="mx-8">
          <h1 class="text-white lg:text-7xl md:text-7xl sm:text-6xl tracking-tight">contact</h1>
        </div>
      </div>
    </div>
    <div class="lg:w-1/2 sm:w-full h-screen contact">
      <!-- <img src="http://dev.anna-schukina.com/wp-content/themes/nothing-UI/images/contact.jpg" alt=""> -->
    </div>
      <!-- <div class="flex lg:w-1/2 sm:w-full bg-brown h-screen">
        <h1>contact</h1>
      </div>
      <div class="flex lg:w-1/2 sm:w-full h-screen">
        <img src="http://dev.anna-schukina.com/wp-content/themes/nothing-UI/images/contact.jpg" alt="">
      </div> -->

  </div>
</div>

<?php get_footer(); ?>
