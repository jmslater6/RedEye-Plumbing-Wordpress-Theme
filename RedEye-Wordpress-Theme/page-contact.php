<?php
/* Template Name: Contact Page */
 get_header(); ?>

<div class="mid">
    <img class="responsive " src="<?php echo get_template_directory_uri();?>/img/redeyevan.jpg" style= "height: 30vh"alt="">
    <div class="background-overlay"></div>
    <div class="hero text-center">
      <h2 class="text-light display-4 font-weight-bold">Contact Us</h2>
    </div>
</div>

<div class="service-area">
  <div class="container">
    <div class="d-flex p-5"> 
      <div class="d-flex flex-column">
        <h2>Servicing Hunterdon County and Surrounding Areas</h2>    
        <p>Hunterdon County, Warren County, Somerset County <br>
        Middlesex County, Morris County, Union County</p>
      <img class= "img-fluid mr-5 " src="<?php echo get_template_directory_uri();?>/img/redeyenj.svg" style="width: 270px;" alt="">
    </div>
      <div class="text-center">
        <form class="contact-form pb-5 pl-5 pr-5 pt-4  rounded" style="width: 500px;">
          <div class="form-row">
            <h3 class="text-white text-bold mx-auto">Contact Today to Learn More</h3>
          </div>
          <div class="form-row d-flex justify-content-center text-white">
              <i class="fas fa-phone pr-2"></i><h5 class="pr-3">908-291-7722</h5>
              <i class="fas fa-home pr-2"></i><h5>Glen Gardner, NJ</h5>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationDefault01"></label>
              <input type="text" class="form-control form-control-lg" id="validationDefault01" placeholder="First name" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationDefault02"></label>
              <input type="text" class="form-control form-control-lg" id="validationDefault02" placeholder="Last name" required>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationDefault03"></label>
              <input type="number" class="form-control form-control-lg" id="validationDefault03" placeholder="Phone" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationDefault04"></label>
              <input type="email" class="form-control form-control-lg" id="validationDefault04" placeholder="example@mail.com" required>
            </div>
            </div>
          <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="validationDefault05"></label>
              <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="3" placeholder="Message..."></textarea>
            </div>
          </div>
          <button class="rounded" type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>