<?php
/**
 * Template Name: Startseite Template
 * Author: wolfie_sch
 * Date: 01/27/2018
*/
?>
<?php get_header(); ?>
<div class="section-1" uk-grid>
  <div class="uk-width-1-2@m section-1-text">
    <div class="welcome-text">
      <h1 class="uk-margin-remove-vertical">Anna Schukina</h1>
      <h1 class="uk-margin-remove-vertical">Translations</h1>
      <h2>professional. transaltion. service</h2>
      <div class="languages" uk-grid>
        <div class="uk-with-1-2">
          <h3>languages</h3>
          <p>english - russian <br>
             polish - russian <br>
             bulgarian - russian <br>
             german - russian
          </p>
        </div>
        <div class="uk-with-1-2 benefits">
          <h3>your benefits</h3>
          <p>high-quality translation <br>
             quick and timely support from me <br>
             strict confidentiality of your information <br>
             getting the translation within the deadline you specify <br>
             discounts and benefits for my long-term clients
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="uk-width-1-2@m">
    <div class="image-section" style="background: url(<?php bloginfo('template_directory'); ?>/images/section-1.jpg); ">
    </div>
  </div>
</div>

<div class="section-2" id="about" uk-grid>
  <div class="uk-width-1-2@l uk-width-1-3@m">
    <?php $about_image = get_field('about_image'); ?>
      <div class="image-section" style="background: url(<?php echo $about_image['url']; ?>">
    </div>
  </div>
  <div class="uk-width-1-2@m">
    <div class="about-content">
      <h1><?php the_field('about_headline'); ?></h1>
      <?php the_field('about_content'); ?>
    </div>
  </div>
</div>

<div class="section-3" id="service" uk-grid>
  <!-- <div class="uk-width-1-2@m">
    <h1><?php the_field('service_headline') ?></h1>
  </div>
  <div class="uk-width-1-2@m">
      <?php $service_image = get_field('service_image'); ?>
      <div class="image-section" style="background: url(<?php echo $service_image['url']; ?>"></div>
  </div> -->

  <!-- <div class="uk-container"> -->
    <!-- <div uk-grid> -->
      <div class="uk-width-1-3@l uk-width-1-2@s service-box">
        <span uk-icon="icon: file; ratio: 4"></span>
        <h2 class="uk-margin-remove-top">legal translation</h2>
        <?php the_field('service_translation'); ?>
      </div>
      <div class="uk-width-1-3@l uk-width-1-2@s service-box">
        <span uk-icon="icon: desktop; ratio: 4"></span>
        <h2 class="uk-margin-remove-top">website localization</h2>
        <?php the_field('service_website'); ?>
      </div>
      <div class="uk-width-1-3@l uk-width-1-2@s service-box proof-mobile">
        <span uk-icon="icon: pencil; ratio: 4"></span>
        <h2 class="uk-margin-remove-top">proofreading</h2>
        <?php the_field('service_proofing'); ?>
      </div>
    <!-- </div> -->
  <!-- </div> -->
</div>

<div class="section-4" id="contact" uk-grid>
    <div class="uk-width-1-2@l uk-width-1-1@s">
      <div class="form">
        <h1>contact</h1>
        <!-- <div class="uk-margin">
          <input class="uk-input uk-form-width-medium" type="text" placeholder="name">
        </div>
        <div class="uk-margin">
          <input class="uk-input uk-form-width-medium" type="text" placeholder="email">
        </div>
        <div class="uk-margin">
          <input class="uk-input uk-form-width-medium" type="text" placeholder="subject">
        </div>
        <div class="uk-margin">
          <textarea class="uk-textarea uk-form-width-medium" rows="5" placeholder="your message"></textarea>
        </div>
        <button class="uk-button uk-button-default">send</button> -->
        <?php echo do_shortcode('[contact-form-7 id="39" title="Custom contact form" html_class="uk-form-horizontal uk-margin-large"]'); ?>
    </div>
  </div>
  <div class="uk-width-1-2@m">
    <div class="image-section" style="background: url(<?php bloginfo('template_directory'); ?>/images/contact.jpg); "></div>
  </div>
</div>



<?php get_footer(); ?>
