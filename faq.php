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
                  <span class="h6 mb-0">Can I have the voting platform on my own domain?</span>
                  <img class="icon" src="assets/img/icons/interface/plus.svg" alt="plus interface icon" data-inject-svg />
                </div>
                <div class="collapse" id="panel-1">
                  <div class="pt-3">
                    <p class="mb-0">
                      Yes you can have the voting platform activated on your own domain depending on the <a href="features">subscription</a> you're on.
                    </p>
                  </div>
                </div>
              </div>
              <div class="card mb-2 card-sm card-body hover-shadow-sm" data-aos="fade-up" data-aos-delay="NaN">
                <div data-target="#panel-2" class="accordion-panel-title" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-2">
                  <span class="h6 mb-0">How many payment options does it have?</span>
                  <img class="icon" src="assets/img/icons/interface/plus.svg" alt="plus interface icon" data-inject-svg />
                </div>
                <div class="collapse" id="panel-2">
                  <div class="pt-3">
                    <p class="mb-0">
                      The voting platform has 3 payment method, <a href="https://paystack.com/" target="_blank">Paystack,</a> <a href="https://flutterwave.com/" target="_blank">Flutterwave</a> and Bank Transfer. This payment gateways have multiple payment options ranging from USSD, Card Payment, Bank Payment etc.
                    </p>
                  </div>
                </div>
              </div>
              <div class="card mb-2 card-sm card-body hover-shadow-sm" data-aos="fade-up" data-aos-delay="NaN">
                <div data-target="#panel-3" class="accordion-panel-title" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-3">
                  <span class="h6 mb-0">Must i have a registered company?</span>
                  <img class="icon" src="assets/img/icons/interface/plus.svg" alt="plus interface icon" data-inject-svg />
                </div>
                <div class="collapse" id="panel-3">
                  <div class="pt-3">
                    <p class="mb-0">
                      No, you can use the voting platform once you're running a legitimate business, you will be required to provide a means of identification and the payments will go through Vote Online and a remittance will be done every 24hrs except on weekends and public holidays.
                    </p>
                  </div>
                </div>
              </div>
              <div class="card mb-2 card-sm card-body hover-shadow-sm" data-aos="fade-up" data-aos-delay="NaN">
                <div data-target="#panel-4" class="accordion-panel-title" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-4">
                  <span class="h6 mb-0">Can people vote without paying?</span>
                  <img class="icon" src="assets/img/icons/interface/plus.svg" alt="plus interface icon" data-inject-svg />
                </div>
                <div class="collapse" id="panel-4">
                  <div class="pt-3">
                    <p class="mb-0">
                      Yes, you can switch to free mode or payment mode on the website.
                    </p>
                  </div>
                </div>
              </div>
              <div class="card mb-2 card-sm card-body hover-shadow-sm" data-aos="fade-up" data-aos-delay="NaN">
                <div data-target="#panel-5" class="accordion-panel-title" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-5">
                  <span class="h6 mb-0">Can people in diaspora vote?</span>
                  <img class="icon" src="assets/img/icons/interface/plus.svg" alt="plus interface icon" data-inject-svg />
                </div>
                <div class="collapse" id="panel-5">
                  <div class="pt-3">
                    <p class="mb-0">
                      Yes, our online payment gateways can receive payments fom international visitors.
                    </p>
                  </div>
                </div>
              </div>
              <div class="card mb-2 card-sm card-body hover-shadow-sm" data-aos="fade-up" data-aos-delay="NaN">
                <div data-target="#panel-6" class="accordion-panel-title" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-6">
                  <span class="h6 mb-0">Does the vote reflect immediately?</span>
                  <img class="icon" src="assets/img/icons/interface/plus.svg" alt="plus interface icon" data-inject-svg />
                </div>
                <div class="collapse" id="panel-6">
                  <div class="pt-3">
                    <p class="mb-0">
                      Yes, except it was done via bank transfer, then it will appear once the admin verifies the payment.
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