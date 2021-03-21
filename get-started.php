<?php
session_start();
$_SESSION['message'] = '';
include ('./components/header.php');
include ('./config/db.php');

if (isset($_POST['getstarted_btn'])) {

    $firstName      = $conn->real_escape_string($_POST['firstName']);
    $lastName       = $conn->real_escape_string($_POST['lastName']);
    $phoneNum       = $conn->real_escape_string($_POST['phoneNum']);
    $email          = $conn->real_escape_string($_POST['email']);
    $company        = $conn->real_escape_string($_POST['company']);
    $event          = $conn->real_escape_string($_POST['event']);
    $comment        = $conn->real_escape_string($_POST['comment']);

        $sql = "INSERT INTO getstarted (firstName, lastName, phoneNum, email, company, event, comment)"
            . "VALUES ('$firstName', '$lastName', '$phoneNum', '$email', '$company', '$event', '$comment')";
            mysqli_query($conn, $sql);
            $_SESSION['email'] = $email;
            header("Location: getsuccess");
            exit();   
}
?>

    <section class="min-vh-100 py-5">
      <div class="container">
        <div class="row justify-content-center mb-md-6">
          <div class="col-auto">
            <a href="\">
              <img src="https://i.imgur.com/FcIx9F7.png" alt="VoteOnline Logo" Style="width: 250px">
            </a>
          </div>
        </div>
        <div class="row justify-content-center pt-3">
          <div class="col-lg-5 col-md-6">
            <div class="text-center mb-4">
              <h1 class="mb-2">Get Started</h1>
              <span>Enjoy Freedom to Create the Contest You Want.</span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <form class="wizard" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
              <ul class="d-flex step-circles justify-content-center mb-5">
                <li><a class="nav-link btn" href="#step-1">1</a>
                </li>
                <li><a class="nav-link btn" href="#step-2">2</a>
                </li>
                <li><a class="nav-link btn" href="#step-3">3</a>
                </li>
              </ul>
              <div>
                <div id="step-1" class="active">
                  <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="firstName" required placeholder="First Name">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="lastName" required placeholder="Last Name">
                      </div>
                      <div class="form-group">
                        <input type="tel" class="form-control" name="phoneNum" required placeholder="Phone Number">
                        <small class="text-muted">We will never share your name with others.</small>
                      </div>
                      <button class="btn btn-primary sw-btn-next btn-block">Next</button>
                    </div>
                  </div>
                </div>
                <div id="step-2" class="">
                  <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-6">
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" required placeholder="Email Address">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="company" placeholder="Company Name(optional)">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="event" placeholder="Event Name(optional)">
                      </div>
                      <button class="btn btn-primary sw-btn-next btn-block">Next</button>
                    </div>
                  </div>
                </div>
                <div id="step-3" class="">
                  <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-6">
                      <div class="form-group">
                        <textarea class="form-control" name="comment" placeholder="Drop comments if you have any." rows="5" required></textarea>
                      </div>
                      <hr>
                      <div>
                        <div class="custom-control custom-checkbox mb-3">
                          <input type="checkbox" class="custom-control-input" id="custom-checkbox-example-1" required>
                          <label class="custom-control-label" for="custom-checkbox-example-1">By signing up, you agree to our <a href="terms">Terms of Use</a> and <a href="privacy">Privacy Policy</a></label>
                        </div>
                      </div>
                      <hr>
                      <button class="btn btn-primary btn-block" type="submit" name="getstarted_btn">Get Started</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

<!-- Required vendor scripts (Do not remove) -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <!-- Tidio Chat -->
    <script src="//code.tidio.co/w21wepezusnmn1y15ukvzdhohe9xiten.js" async></script>
    <script type="text/javascript">
      tidioChatApi.display(true);
    </script>


    <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
    <script type="text/javascript" src="assets/js/aos.js"></script>
    <!-- Clipboard (copies content from browser into OS clipboard) -->
    <script type="text/javascript" src="assets/js/clipboard.js"></script>
    <!-- Fancybox (handles image and video lightbox and galleries) -->
    <script type="text/javascript" src="assets/js/jquery.fancybox.min.js"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="assets/js/flatpickr.min.js"></script>
    <!-- Flickity (handles touch enabled carousels and sliders) -->
    <script type="text/javascript" src="assets/js/flickity.pkgd.min.js"></script>
    <!-- Ion rangeSlider (flexible and pretty range slider elements) -->
    <script type="text/javascript" src="assets/js/ion.rangeSlider.min.js"></script>
    <!-- Isotope (masonry layouts and filtering) -->
    <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
    <!-- jarallax (parallax effect and video backgrounds) -->
    <script type="text/javascript" src="assets/js/jarallax.min.js"></script>
    <script type="text/javascript" src="assets/js/jarallax-video.min.js"></script>
    <script type="text/javascript" src="assets/js/jarallax-element.min.js"></script>
    <!-- jQuery Countdown (displays countdown text to a specified date) -->
    <script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
    <!-- jQuery smartWizard facilitates steppable wizard content -->
    <script type="text/javascript" src="assets/js/jquery.smartWizard.min.js"></script>
    <!-- Plyr (unified player for Video, Audio, Vimeo and Youtube) -->
    <script type="text/javascript" src="assets/js/plyr.polyfilled.min.js"></script>
    <!-- Prism (displays formatted code boxes) -->
    <script type="text/javascript" src="assets/js/prism.js"></script>
    <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
    <script type="text/javascript" src="assets/js/scrollMonitor.js"></script>
    <!-- Smooth scroll (animation to links in-page)-->
    <script type="text/javascript" src="assets/js/smooth-scroll.polyfills.min.js"></script>
    <!-- SVGInjector (replaces img tags with SVG code to allow easy inclusion of SVGs with the benefit of inheriting colors and styles)-->
    <script type="text/javascript" src="assets/js/svg-injector.umd.production.js"></script>
    <!-- TwitterFetcher (displays a feed of tweets from a specified account)-->
    <script type="text/javascript" src="assets/js/twitterFetcher_min.js"></script>
    <!-- Typed text (animated typing effect)-->
    <script type="text/javascript" src="assets/js/typed.min.js"></script>
    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/theme.js"></script>

    <script type="text/javascript">
      jQuery("form:not([action])").on('submit', function(){return true;});
    </script>

  </body>


</html>

