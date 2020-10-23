<?php
$page = 'faq';
include ('./components/header.php');
include ('./components/navbar.php');
?>


    <section class="bg-primary-alt">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-9">
            <h3 class="h2">Frequently Asked Questions</h3>
            <div class="my-4">
              <div class="card mb-2 card-sm card-body hover-shadow-sm" data-aos="fade-up" data-aos-delay="NaN">
                <div data-target="#panel-1" class="accordion-panel-title" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
                  <span class="h6 mb-0">Can I change plans later on?</span>
                  <img class="icon" src="assets/img/icons/interface/plus.svg" alt="plus interface icon" data-inject-svg />
                </div>
                <div class="collapse" id="panel-1">
                  <div class="pt-3">
                    <p class="mb-0">
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                    </p>
                  </div>
                </div>
              </div>
              <div class="card mb-2 card-sm card-body hover-shadow-sm" data-aos="fade-up" data-aos-delay="NaN">
                <div data-target="#panel-2" class="accordion-panel-title" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-2">
                  <span class="h6 mb-0">What is the difference between Pro and Ultimate?</span>
                  <img class="icon" src="assets/img/icons/interface/plus.svg" alt="plus interface icon" data-inject-svg />
                </div>
                <div class="collapse" id="panel-2">
                  <div class="pt-3">
                    <p class="mb-0">
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                    </p>
                  </div>
                </div>
              </div>
              <div class="card mb-2 card-sm card-body hover-shadow-sm" data-aos="fade-up" data-aos-delay="NaN">
                <div data-target="#panel-3" class="accordion-panel-title" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-3">
                  <span class="h6 mb-0">Can I try before I buy?</span>
                  <img class="icon" src="assets/img/icons/interface/plus.svg" alt="plus interface icon" data-inject-svg />
                </div>
                <div class="collapse" id="panel-3">
                  <div class="pt-3">
                    <p class="mb-0">
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                    </p>
                  </div>
                </div>
              </div>
              <div class="card mb-2 card-sm card-body hover-shadow-sm" data-aos="fade-up" data-aos-delay="NaN">
                <div data-target="#panel-4" class="accordion-panel-title" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-4">
                  <span class="h6 mb-0">Do you offer bulk discounts?</span>
                  <img class="icon" src="assets/img/icons/interface/plus.svg" alt="plus interface icon" data-inject-svg />
                </div>
                <div class="collapse" id="panel-4">
                  <div class="pt-3">
                    <p class="mb-0">
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                    </p>
                  </div>
                </div>
              </div>
              <div class="card mb-2 card-sm card-body hover-shadow-sm" data-aos="fade-up" data-aos-delay="NaN">
                <div data-target="#panel-5" class="accordion-panel-title" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-5">
                  <span class="h6 mb-0">Is this a subscription service?</span>
                  <img class="icon" src="assets/img/icons/interface/plus.svg" alt="plus interface icon" data-inject-svg />
                </div>
                <div class="collapse" id="panel-5">
                  <div class="pt-3">
                    <p class="mb-0">
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <span>Still have questions? <a href="#" onClick="tidioChatApi.open();">Get in touch</a>
            </span>
          </div>
        </div>
      </div>
    </section>

<?php include ('./components/footer.php'); ?>