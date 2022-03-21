<?php
/* Template Name: Services Page */
 get_header(); ?>

  <!-- Services -->
  <div class="mid services-mid">
    <img class="responsive" style= "height: 30vh" src="<?php echo get_template_directory_uri();?>/img/redeyevan.jpg" alt="">
    <div class="background-overlay"></div>
    <div class="hero text-center">
      <h1 class="text-light display-4 font-weight-bold">Services</h1>
     
    </div>
  </div>
  
  
  <!-- Services -->
<section class="services p-5">
  <div class="container">
    <div class="services-info text-center">
    <p class="text-center pt-2 mb-5"><a class="red-text" href="+908-291-7722">Call now</a> for immediate service. Installation, repair, or maintenance — <a class="red-text" href="/about">RedEeye Plumbing</a> will take care of all your plumbing needs. 
    
    <br>We also offer Hydronic Heating Repairs and Service.</p>
</div>

    <h2 class="text-center pt-2 mb-5">Specializing In</h2>
    <div class="row justify-content-center">
      <div class="col-md-4 mb-4">
        <div class="card text-center">
          <div class="card-body">
            <img class= "img-fluid" src="<?php echo get_template_directory_uri();?>/img/toilet.jpg" alt="">
            <h5 class="font-weight-normal my-4 py-2"><a href="#">Toilets</a></h5>
            <p class="mb-4">Servicing all your tiolet needs. Toilets that don’t flush properly, leaking toilets,running toilets and toilet replacements.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card text-center">
          <div class="card-body">
            <img class= "img-fluid" src="<?php echo get_template_directory_uri();?>/img/sumppump.jpg" alt="">
            <h5 class="font-weight-normal my-4 py-2"><a class="dark-grey-text" href="#">Sump Pumps</a></h5>
            <p class="mb-4">RedEye offers sump pump repair or installation as well as maintenance repairs to help keep your home safe and flood free.</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-4 mb-4">
        <div class="card text-center">
          <div class="card-body">
            <img class= "img-fluid" src="<?php echo get_template_directory_uri();?>/img/waterheater.jpg" alt="">
            <h5 class="font-weight-normal my-4 py-2"><a class="dark-grey-text" href="#">Water Heaters</a></h5>
            <p class="mb-4">Replacements and repairs. Whether you need plumbing services for an electric, gas, or tankless water heater, we can help.</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-4 mb-4">
        <div class="card text-center">
          <div class="card-body">
            <img class= "img-fluid" src="<?php echo get_template_directory_uri();?>/img/watersoftener.jpg" alt="">
            <h5 class="font-weight-normal my-4 py-2"><a class="dark-grey-text" href="#">Water Softeners</a></h5>
            <p class="mb-4">Water Softener Repair, Installation, Replacement and  Maintenance</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card text-center">
          <div class="card-body">
            <img class= "img-fluid" src="<?php echo get_template_directory_uri();?>/img/pipes.jpg" alt="">
            <h5 class="font-weight-normal my-4 py-2"><a class="dark-grey-text" href="#">Leaks</a></h5>
            <p class="mb-4">Have a Leak? RedEye can handle all your plumbing leaks. Give us a call today!</p>
          </div>
      </div>
    </div>
  </div>
</section>

<section class="services-contact-us ">
    <div class="service-area">
  <div class="container">
    <div class="d-flex p-5"> 
      <div class="d-flex flex-column">
        <h2>Contact RedEye Plumbing to Schedule for Service!</h2>    
        <p>We know that a plumbing emergency can arise without warning at any time of the day or night. RedEye Plumbing provides 24-hour emergency plumbing service and repair. Call RedEeye to request an emergency service or to schedule.</p>
        
         <a class=" mr-auto services-button" href="tel:908-291-7722"><i class="fas fa-phone mr-3"></i>Call Now!</a>
      
    </div>
    
      <div class="text-center">
        <img class= "img-fluid mr-5 " src="<?php echo get_template_directory_uri();?>/img/redeyenj.svg" style="width: 270px;" alt="">
      </div>
    </div>
  </div>
</div>
    
    </section>

<?php get_footer(); ?>