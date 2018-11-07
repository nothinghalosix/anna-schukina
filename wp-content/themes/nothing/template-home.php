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
    <div class="lg:w-1/2 md:w-full sm:w-full bg-brown h-screen relative">
      <div class="absolute lg:ml-8 md:ml-8 mb-8 pin-b sm:ml-4">
        <h1 class="text-white lg:text-7xl md:text-7xl sm:text-6xl tracking-tight split" style="font-stretch: semi-condensed; font-stretch: 50%;">Anna Schukina</h1>
        <h1 class="text-white lg:text-7xl md:text-7xl sm:text-6xl tracking-tight sm:mt-6">Translations</h1>
        <h2 class="text-grey-dark font-normal mb-4">professional. transaltion. service</h2>
        <div class="flex flex-wrap">
          <div class="lg:w-1/3 md:pr-8 sm:w-full">
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
    <?php
      $start_image = get_field('start_image');
    ?>
    <div class="lg:w-1/2 sm:w-full h-screen first-section-img sm:hidden" style="background-image: url(<?php echo $start_image; ?>)" title="&copy; <?php the_field('image_copyright_start'); ?>">
    </div>

    <!-- ####### -->
    <?php
      $about_image = get_field('about_image');
    ?>
    <div id="about" class="lg:w-1/2 sm:w-full h-screen about" style="background-image: url(<?php echo $about_image; ?>)">
    </div>
    <div class="flex lg:w-1/2 bg-violet lg:h-screen items-center sm:w-full sm:py-8">
      <div class="flex-1">
        <div class="mx-8 md:my-8">
          <h1 class="text-white lg:text-7xl md:text-7xl md:pt-8 md:mb-4 sm:text-6xl tracking-tight sm:mb-6"><?php the_field('about_headline'); ?></h1>
          <?php
            $about_content = get_field('about_content');
            echo '<div class="text-white text-lg md:pb-8">';
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
    <div id="service" class="flex w-full bg-turquoise lg:h-screen items-center">
      <div class="flex-1">
        <div class="flex flex-wrap items-center">
          <div class="lg:w-1/3 md:w-full md:mt-8 md:px-8 text-center lg:p-14 lg:-mt-3 sm:w-full sm:mx-4 sm:mb-8 sm:pt-8">
            <i class="fal fa-file-alt fa-6x mb-2 text-white"></i>
            <h2 class="text-4xl font-normal text-white mb-4">legal translation</h2>
            <?php
              echo '<div class="text-white text-lg">';
              echo $service_translations;
              echo '</div>';
            ?>
          </div>
          <div class="lg:w-1/3 lg:p-14 md:w-full md:mt-8 md:px-8 sm:w-full sm:mx-4 sm:mb-8 text-center">
            <i class="fal fa-tv fa-6x mb-2 text-white"></i>
            <h2 class="text-4xl font-normal text-white mb-4">website localization</h2>
            <?php
              echo '<div class="text-white text-lg">';
              echo $service_website;
              echo '</div>';
            ?>
          </div>
          <div class="lg:w-1/3 lg:p-14 lg:-mt-10 md:w-full md:mt-8 md:px-8 md:mb-8 sm:w-full sm:mx-4 sm:mb-8 text-center">
            <i class="fal fa-pen fa-6x mb-2 text-white"></i>
            <h2 class="text-4xl font-normal text-white mb-4">proofreading</h2>
            <?php
              echo '<div class="text-white text-lg">';
              echo $service_proofing;
              echo '</div>';
            ?>
          </div>
        </div>
      </div>
    </div>
    <!-- ######## -->
    <div id="contact" class="flex lg:w-1/2 md:w-full sm:w-full bg-violet h-screen items-center">
      <div class="flex-1">
        <div class="mx-8">
          <h1 class="text-white lg:text-7xl md:text-7xl sm:text-6xl tracking-tight mb-4">contact</h1>
          <p class="mb-2 text-white text-lg">Anna Schukina <br>
          <i class="fal fa-phone"></i> +43 676 405 99 08 <br>
          <i class="fal fa-envelope"></i> <a class="text-white hover:underline" href="mailto:office@anna-schukina.com">office@anna-schukina.com</a></p>

          <p class="text-white text-lg mb-6">Stumpergasse 48/27<br>
          1060 Vienna<br>
          Austria </p>

          <h3 class="text-white font-normal">Get your sample translation free of charge! <br>
          Simply contact me and get a FREE sample translation of up to 300 words!</h3>
        </div>
      </div>
    </div>

    <?php
      $contact_image = get_field('contact_image');
    ?>
    <div class="lg:w-1/2 sm:w-full h-screen contact sm:hidden" style="background-image: url(<?php echo $contact_image; ?>)" title="&copy; <?php the_field('image_copyright_contact'); ?>">
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
