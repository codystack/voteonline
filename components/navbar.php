<div class="navbar-container bg-primary-3">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary-3" data-sticky="top">
        <div class="container">
          <a class="navbar-brand fade-page" href="\">
            <img src="https://i.imgur.com/eOj70Vz.png" alt="VoteOnline Logo" Style="width: 200px">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <img class="icon navbar-toggler-open" src="assets/img/icons/interface/menu.svg" alt="menu interface icon" data-inject-svg />
            <img class="icon navbar-toggler-close" src="assets/img/icons/interface/cross.svg" alt="cross interface icon" data-inject-svg />
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <div class="py-2 py-lg-0">
              <ul class="navbar-nav">
                <li class="nav-item <?php if($page=='features'){echo 'active';}?>">
                  <a href="features" class="nav-link">Features</a>
                </li>
                <li class="nav-item">
                  <a href="#" onClick="tidioChatApi.open();" class="nav-link">Support</a>
                </li>
                <li class="nav-item <?php if($page=='faq'){echo 'active';}?>">
                  <a href="faq" class="nav-link">FAQ's</a>
                </li>
                <li class="nav-item <?php if($page=='demo'){echo 'active';}?>">
                  <a href="demo"  class="nav-link"><img class="icon bg-light" src="assets/img/icons/theme/general/visible.svg" alt="decoration" data-inject-svg />View Demo</a>
                </li>
              </ul>
            </div><a href="get-started" class="btn btn-primary ml-lg-3">Get Started</a>

          </div>
        </div>
      </nav>
    </div>