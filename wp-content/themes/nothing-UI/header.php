<!DOCTYPE html>
<html lang="de">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Anna</title>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700" rel="stylesheet">

      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/uikit.min.css" />

      <script src="<?php bloginfo('template_directory'); ?>/js/uikit.min.js"></script>
      <script src="<?php bloginfo('template_directory'); ?>/js/uikit-icons.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/styles.min.css">
</head>
<body>
  <div class="header" id="top" uk-sticky>
    <div class="uk-container uk-container-center">
        <nav class="uk-navbar-container uk-margin" uk-navbar="mode: hover">

            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="#" uk-scroll>Home</a></li>
                    <li class="uk-active"><a href="#about" uk-scroll>About</a></li>
                    <li class="uk-active"><a href="#service" uk-scroll>Service</a></li>
                    <li class="uk-active"><a href="#contact" uk-scroll>Contact</a></li>
                </ul>
            </div>
        </nav>
      </div>

      <div class="uk-offcanvas-content">
        <div class="mobile-header">
          <span uk-navbar-toggle-icon uk-toggle="target: #my-id"></span>
        </div>
          <a href="#my-id" uk-toggle></a>

          <div id="my-id" uk-offcanvas>
              <div class="uk-offcanvas-bar">
                  <button class="uk-offcanvas-close" type="button" uk-close></button>
                  <ul class="ik-navbar-nav">
                    <li class="uk-active"><a href="#" uk-scroll>Home</a></li>
                    <li class="uk-active"><a href="#about" uk-scroll>About</a></li>
                    <li class="uk-active"><a href="#service" uk-scroll>Service</a></li>
                    <li class="uk-active"><a href="#contact" uk-scroll>Contact</a></li>
                  </ul>
              </div>
          </div>
      </div>
    </div>
