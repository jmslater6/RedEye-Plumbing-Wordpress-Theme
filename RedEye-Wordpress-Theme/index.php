<?php get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>
  <article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>">
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <?php if ( !is_page() ):?>
      <section class="entry-meta">
      <p>Posted on <?php the_date();?> by <?php the_author();?></p>
      </section>
    <?php endif; ?>
    <section class="entry-content">
      <?php the_content(); ?>
    </section>
    <section class="entry-meta"><?php if ( count( get_the_category() ) ) : ?>
      <span class="category-links">
        Posted under: <?php echo get_the_category_list( ', ' ); ?>
      </span>
    <?php endif; ?></section>
  </article>
<?php endwhile; ?>
<!-- Hero -->
<header>
  <div class="mid">
    <img class="responsive" src="<?php echo get_template_directory_uri();?>/img/redeyevan.jpg" alt="">
    <div class="background-overlay"></div>
    <div class="hero text-center">
      <h1 class="text-light display-4 font-weight-bold">RedEye 24-7 Plumbing and Heating Service</h1>
      <h2 class="text-light mx-auto pb-5">Servicing Hunterdon County and Surrounding Areas</h2>
      <a href="tel:908-291-7722">Call Now!</a>
    </div>
  </div>
</header>

<!-- About -->
<section class="about py-1">
  <div class="row align-items-center container my-1 mx-auto">
    <div class="text col-lg-6 col-md-6 col-12 w-50 pt-1 pb-1">
      <h3>New Jersey Plumbing Service</h3>
      <h2>Over 20 Years of Experience</h2>
      <p>Searching for a reliable plumber who can provide you with honest service at a great value?</p>

      <p>Committed to helping you and your family achieve worry-free plumbing. Over 20 years of experience servicing Hunterdon County and surrounding areas.</p>
        
      <p>Whether you need to fix a leaking water line, install a new water heater, or clear out a clog in your drain or sewer line, Red Eye Plumbing is always prepared to provide you with the right solution.</p>
      <a href="/about">Learn More</a>
    </div>
    <div class="img col-lg-6 col-md-6 col-12 w-50 pt-1 pb-1">
      <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/plumbervector.svg" alt="">
    </div>
  </div>
</section>

<!-- Services -->
<section class="services p-5">
  <div class="container">
    <h1 class="font-weight-bold text-center dark-grey-text pb-2">Services</h1>
    <hr class="w-header my-4">
    <div class="services-info text-center">
    <p class="text-center pt-2 mb-5"><a class="red-text" href="+908-291-7722">Call now</a> for immediate service. Installation, repair, or maintenance — <a class="red-text" href="/about">RedEeye Plumbing</a> will take care of all your plumbing needs. 
    
    <br>We also offer Hydronic Heating Repairs and Service.
</p>
</div>

    <h2 class="text-center pt-2 mb-5">Specializing In</h2>
    <div class="row justify-content-center">
      <div class="col-md-6 col-xl-3 mb-4">
        <div class="card text-center">
          <div class="card-body">
            <img class= "img-fluid" src="<?php echo get_template_directory_uri();?>/img/toilet.jpg" alt="">
            <h5 class="font-weight-normal my-4 py-2"><a href="#">Toilets</a></h5>
            <p class="mb-4">Servicing all your tiolet needs. Toilets that don’t flush properly, leaking toilets,running toilets and toilet replacements.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-3 mb-4">
        <div class="card text-center">
          <div class="card-body">
            <img class= "img-fluid" src="<?php echo get_template_directory_uri();?>/img/sumppump.jpg" alt="">
            <h5 class="font-weight-normal my-4 py-2"><a class="dark-grey-text" href="#">Sump Pumps</a></h5>
            <p class="mb-4">RedEye offers sump pump repair or installation as well as maintenance repairs to help keep your home safe and flood free.</p>
          </div>
        </div>
      </div>

     <div class="col-md-6 col-xl-3 mb-4">
        <div class="card text-center">
          <div class="card-body">
            <img class= "img-fluid" src="<?php echo get_template_directory_uri();?>/img/waterheater.jpg" alt="">
            <h5 class="font-weight-normal my-4 py-2"><a class="dark-grey-text" href="#">Water Heaters</a></h5>
            <p class="mb-4">Replacements and repairs. Whether you need plumbing services for an electric, gas, or tankless water heater, we can help.</p>
          </div>
        </div>
      </div>
      
  </div>
 <div class="text-center"> <a class="services-button " href="/services">More Services</a>
 </div>
</section>

  
<!-- Why Choose Us -->
 <section class="why-choose">
  <div class="container my-5 p-5 z-depth-1">
    <section class="dark-grey-text">
      <h2 class="text-center font-weight-bold mb-4 pb-2">Why Choose Us</h2>
      <p class="text-center lead grey-text mx-auto mb-5">We do what we can to take extra special care of your home while we work. This includes wearing shoe covers and using drop clothes. We work hard to ensure that your home is left clean. Our trucks are fully stocked to be able to take care of many plumbing needs during the initial visit. We answer the phone or respond in a reasonable timeframe. We are honest and will always work with our customers to ensure all needs are met! We love what we do and are happy to service you!</p>
  
    <div class="row">
        <div class="col-md-4">
          <div class="row mb-3">

            <div class="col-2">
              <i class="fas fa-tools fa-2x deep-purple-text"></i>
            </div>
         
            <div class="col-10">
              <h5 class="font-weight-bold mb-3">Family Owned & Operated</h5>
             
            </div>
          </div>
        
          <div class="row mb-3">
            <div class="col-2">
              <i class="fas fa-2x fa-magic deep-purple-text"></i>
            </div>
          
            <div class="col-10">
              <h5 class="font-weight-bold mb-3">24/7 365 Days for Service</h5>
            </div>
          </div>
        
          <div class="row mb-md-0 mb-3">
            <div class="col-2">
         <i class="far fa-2x fa-handshake"></i>
            </div>
          
            <div class="col-10">
              <h5 class="font-weight-bold mb-3">Guaranteed Work With 100% Satisfaction</h5>
            </div>
          </div>
        </div>
      
        <div class="col-md-4 text-center">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/RedEyeLogo.svg"
            alt="Red Eye Logo">
        </div>
     
        <div class="col-md-4">
          <div class="row mb-3">
            <div class="col-2">
              <i class="far fa-2x fa-heart deep-purple-text"></i>
            </div>
        
            <div class="col-10">
              <h5 class="font-weight-bold mb-3">Licensed & Master Plumber</h5>
            </div>
          </div>
        
  
          
          <div class="row mb-3">
            <div class="col-2">
              <i class="fas fa-2x fa-bolt deep-purple-text"></i>
            </div>

            <div class="col-10">
              <h5 class="font-weight-bold mb-3">No Surprises or Hidden Charges</h5>
            </div>
          </div>
      
          <div class="row">
            <div class="col-2">
              <i class="fas fa-2x fa-magic deep-purple-text"></i>
            </div>
         
            <div class="col-10">
              <h5 class="font-weight-bold mb-3">We Value Your Time & Money</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
 </section>

<!----- Testimonials Section ------>

 <section class="testimonials-section text-center dark-grey-text">
  <div class="container">

  <h1 class="font-weight-bold mb-4 pb-2">Testimonials</h1>

  <div class="wrapper-carousel-fix">
  
    <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide carousel-fade" data-ride="carousel"
      data-interval="false">
     
      <div class="carousel-inner" role="listbox">
       
        <div class="carousel-item active">
          <div class="testimonial">
           
            <div class="avatar mx-auto mb-4">
              <img src="<?php echo get_template_directory_uri();?>/img/woman1.jpg" width="300" class="rounded-circle img-fluid"
                alt="First sample avatar image">
            </div>
           
            <p>
              <i class="fas fa-quote-left"></i> Marcus has been our go-to plumber for the past four years and I don’t know what we would do without him! From renovations to clogged drains, Marcus has been there whenever we need him. He makes himself available, especially in times of need. Maintaining the original plumbing of a 1957’s home is difficult to do and we couldn’t do it without him. <i class="fas fa-quote-right"></i>
            </p>
            <h4 class="font-weight-bold">Laura</h4>
            <h6 class="font-weight-bold my-3">Glen Gardner, NJ</h6>
           
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star-half-alt blue-text"> </i>
          </div>
        </div>
       
      
        <div class="carousel-item">
          <div class="testimonial">
            
            <div class="avatar mx-auto mb-4">
              <img src=" <?php echo get_template_directory_uri(); ?>/img/man.jpg" width="300" class="rounded-circle img-fluid"
                alt="Second sample avatar image">
            </div>
            
            <p>
              <i class="fas fa-quote-left"></i> We are very satisfied with the work that Mr. Schulter did for us. We had a kitchen renovation with all the plumbing and a toilet drain problem.
Both jobs were done professionally and without any issues. In addition, Marcus responded to our calls promptly and got to us on time. Try to find that today! <i class="fas fa-quote-right"></i></p>
            <h4 class="font-weight-bold">Jeff</h4>
            <h6 class="font-weight-bold my-3">Glen Gardner, NJ</h6>
            
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
          </div>
        </div>
        
        <div class="carousel-item">
          <div class="testimonial">
           
            <div class="avatar mx-auto mb-4">
              <img src=" <?php echo get_template_directory_uri(); ?>/img/woman2.jpg" width="300" class="rounded-circle img-fluid"
                alt="Third sample avatar image">
            </div>
           
            <p>
              <i class="fas fa-quote-left"></i> I have had the pleasure of using Marcus for my many plumbing needs.  He was very responsive, on time and provided speedy service.  After having experience with other plumbing companies/individuals that fell short with fixing my problem, I found Marcus via social media based on many stellar reviews.  Marcus was very thorough when trying to diagnose the problem that was causing a leak and low water pressure. He was courteous and conscientious as he worked throughout the day.  He cleaned up, was very polite and professional. I will use him again and will continue to recommend Marcus to anyone who wants a skilled licensed professional. <i class="fas fa-quote-right"></i></p>
            <h4 class="font-weight-bold">Joanne</h4>
            <h6 class="font-weight-bold my-3">Glen Gardner, NJ</h6>
            
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
            <i class="fas fa-star blue-text"> </i>
          </div>
        </div>
       
      </div>
      
      <a class="carousel-control-prev controls" href="#carousel-example-1" role="button"
        data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next controls" href="#carousel-example-1" role="button"
        data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      
    </div>
 
  </div>

  </div>
</section>


<?php get_footer(); ?>

</html>