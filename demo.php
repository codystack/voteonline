<?php
$page = 'demo';
include ('./components/header.php');
include ('./components/navbar.php');
?>

    <section class="bg-primary-alt">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-xl-5 col-lg-6" data-aos="fade-right">
            <div class="row justify-content-center">
              <div class="col-md-8 col-lg mb-4 mb-lg-0">
                <img src="assets/img/decide.svg" alt="Image">
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="h1">Enjoy Total Freedom</h3>
            <p class="lead">Get the best view and functions of both sides, whether as an admin or user.</p>
            <p class="lead">Login as Admin/Site Owner, and take a look at our dashboard or look at the Frontend as a user.</p>
            <div class="row mt-5 o-hidden">
              <div class="col-sm-6" data-aos="fade-left" data-aos-delay="100">
                <a href="https://demo.voteonline.com.ng/admin" target="_blank" class="card card-sm card-body flex-row align-items-center hover-shadow-3d">
                  <img class="" src="assets/img/icons/interface/star.svg" alt="icon" data-inject-svg />
                  <div class="ml-3">
                    <h5 class="mb-0">Backend</h5>
                    <span>Login as Admin</span>
                  </div>
                </a>
              </div>
              <div class="col-sm-6" data-aos="fade-left" data-aos-delay="200">
                <a href="https://demo.voteonline.com.ng" target="_blank" class="card card-sm card-body flex-row align-items-center hover-shadow-3d" style="background: #259dab;">
                  <img class="icon bg-light" src="assets/img/icons/interface/star.svg" alt="icon" data-inject-svg />
                  <div class="ml-3 text-light">
                    <h5 class="mb-0">Frontend</h5>
                    <span>View as User</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include ('./components/footer.php'); ?>