<?php
/* Template Name: About Page */
 get_header(); ?>

<!-- About -->

<div class="mid">
    <img class="responsive " src="<?php echo get_template_directory_uri();?>/img/redeyevan.jpg" style= "height: 30vh"alt="">
    <div class="background-overlay"></div>
    <div class="hero text-center">
      <h2 class="text-light display-4 font-weight-bold">About</h2>
    </div>
</div>

<section class="about py-1">
  <div class="row align-items-center container my-1 mx-auto">
    <div class="text col-lg-6 col-md-6 col-12 w-50 pt-1 pb-1">
      <h3>New Jersey Plumbing Service</h3>
      <h2>Over 20 Years of Experience </h2>
      <p>Hi, My name is Marcus Schulter and I have been in the plumbing trade for over 20 years. I reside in Hunterdon County with my wife and twins. I have a passion for helping others and working together to meet my clients needs. </p>
      <p>Click the button below to check out the services we offer!</p>
      <a href="/services">Services</a>

    </div>
    <div class="img col-lg-6 col-md-6 col-12 w-50 pt-1 pb-1">
      <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/plumbervector.svg" alt="">
      
    </div>
  </div>
</section>

<?php get_footer(); ?>