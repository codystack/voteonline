<!DOCTYPE html>
<html lang=en>
<head><meta charset=utf-8>
<meta name=viewport content="width=device-width,initial-scale=1,shrink-to-fit=no">
<meta name=description content="Quick Website UI Kit is an innovative HTML template solution which combines beautiful design and flawless functionality.">
<meta name=author content=Webpixels>
<title>Vote Online&trade; :: Nigeria's First Online Voting Platform</title>
<style>@keyframes hidePreloader{
    0%{width: 100%;
    height: 100%
    }
    100%{
        width: 0;
        height: 0
        }
    }
    body>div.preloader{
        position: fixed;
        background: #fff;
        width: 100%;
        height: 100%;
        z-index: 1071;
        opacity: 0; 
        transition: opacity .5s ease;
        overflow: hidden;
        pointer-events: none;
        display: flex;
        align-items: center;
        justify-content: center
        }
        body:not(.loaded)>div.preloader{
            opacity: 1
        }
        body:not(.loaded){
            overflow: hidden
        }
        body.loaded>div.preloader{
             animation: hidePreloader .5s linear .5s forwards
        }
</style>

<script>
window.addEventListener("load",function(){setTimeout(function(){
    document.querySelector("body").classList.add("loaded")},300)
    })
</script>

<link rel=icon href="https://i.imgur.com/kVguEsz.png" type=image/png>
<link rel=stylesheet href="./assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css">
<link rel=stylesheet href="./assets/libs/@fortawesome/fontawesome-free/css/all.min.css">
<link rel=stylesheet href="./assets/css/quick-website.css" id=stylesheet>
</head>
<body>
    <div class=preloader>
        <div class="spinner-border text-primary" role=status>
            <span class=sr-only>Loading...</span>
        </div>
    </div>
    <div class="modal fade" tabindex=-1 role=dialog id=modal-cookies data-backdrop=false aria-labelledby=modal-cookies aria-hidden=true>
        <div class="modal-dialog modal-dialog-aside left-4 right-4 bottom-4">
            <div class="modal-content bg-dark-dark">
                <div class=modal-body>
                    <p class="text-sm text-white mb-3">We use cookies so that our themes work for you. By using our website, you agree to our use of cookies.</p>
                    <a href="../utility/terms.html" class="btn btn-sm btn-white" target=_blank>Learn more</a> 
                    <button type=button class="btn btn-sm btn-primary mr-2" data-dismiss=modal>OK</button>
                </div>
            </div>
        </div>
    </div>

 <header class="" id=header-main>
        <nav class="navbar navbar-main navbar-expand-lg navbar-light" id=navbar-main>
            <div class=container>
                <a class=navbar-brand href="\">
                <img alt="Image placeholder" src="https://i.imgur.com/FcIx9F7.png" id=navbar-logo> 
                </a>
                <button class=navbar-toggler type=button data-toggle=collapse data-target=#navbar-main-collapse aria-controls=navbar-main-collapse aria-expanded=false aria-label="Toggle navigation">
                    <span class=navbar-toggler-icon></span>
                </button>
                <div class="collapse navbar-collapse navbar-collapse-overlay" id=navbar-main-collapse>
                    <div class=position-relative>
                        <button class=navbar-toggler type=button data-toggle=collapse data-target=#navbar-main-collapse aria-controls=navbar-main-collapse aria-expanded=false aria-label="Toggle navigation">
                            <i data-feather=x></i>
                        </button>
                    </div>
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item nav-item-spaced d-none d-lg-block">
                            <a class=nav-link href="./overview.html">Overview</a>
                        </li>
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate" data-toggle=hover>
                            <a class=nav-link data-toggle=dropdown href="saas.html#" aria-haspopup=true aria-expanded=false>Landings</a>
                            <div class="dropdown-menu dropdown-menu-xl p-0">
                                <div class="row no-gutters">
                                    <div class="col-12 col-lg-6 order-lg-2">
                                        <div class="dropdown-body dropdown-body-right bg-dropdown-secondary h-100">
                                            <h6 class=dropdown-header>Organization</h6>
                                            <div class="list-group list-group-flush">
                                                <div class="list-group-item bg-transparent border-0 px-0 py-2">
                                                    <div class="media d-flex">
                                                        <span class=h6><i data-feather=layout></i></span>
                                                        <div class="media-body ml-2">
                                                            <a href="agency.html" class="d-block heading h6 mb-0">Agency</a> 
                                                            <small class="text-sm text-muted mb-0">Quick's most important features</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item bg-transparent border-0 px-0 py-2">
                                                    <div class="media d-flex">
                                                        <span class=h6><i data-feather=globe></i></span>
                                                        <div class="media-body ml-2">
                                                            <a href="business.html" class="d-block h6 mb-0">Business</a> 
                                                            <small class="text-sm text-muted mb-0">Quick's most important features</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item bg-transparent border-0 px-0 py-2">
                                                    <div class="media d-flex">
                                                        <span class=h6><i data-feather=camera></i></span>
                                                        <div class="media-body ml-2">
                                                            <a href="studio.html" class="d-block h6 mb-0">Studio</a> 
                                                            <small class="text-sm text-muted mb-0">Quick's most important features</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="dropdown-header mt-4">Products &amp; Services</h6>
                                            <div class="list-group list-group-flush">
                                                <div class="list-group-item bg-transparent border-0 px-0 py-2">
                                                    <div class="media d-flex">
                                                        <span class=h6><i data-feather=code></i></span>
                                                        <div class="media-body ml-2">
                                                            <a href="development.html" class="d-block h6 mb-0">Development</a> 
                                                            <small class="text-sm text-muted mb-0">Quick's most important features</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item bg-transparent border-0 px-0 py-2">
                                                    <div class="media d-flex">
                                                        <span class=h6><i data-feather=bar-chart></i></span>
                                                        <div class="media-body ml-2">
                                                            <a href="marketing.html" class="d-block h6 mb-0">Marketing</a> 
                                                            <small class="text-sm text-muted mb-0">Quick's most important features</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item bg-transparent border-0 px-0 py-2">
                                                    <div class="media d-flex">
                                                        <span class=h6><i data-feather=map></i></span>
                                                        <div class="media-body ml-2">
                                                            <a href="desktop-app.html" class="d-block h6 mb-0">Desktop App</a> 
                                                            <small class="text-sm text-muted mb-0">Quick's most important features</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item bg-transparent border-0 px-0 py-2">
                                                    <div class="media d-flex">
                                                        <span class=h6><i data-feather=credit-card></i></span>
                                                        <div class="media-body ml-2">
                                                            <a href="saas.html" class="d-block h6 mb-0">Saas App</a> 
                                                            <small class="text-sm text-muted mb-0">Quick's most important features</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 order-lg-1 mt-4 mt-lg-0">
                                        <div class=dropdown-body>
                                            <h6 class=dropdown-header>Get started</h6>
                                            <div class="list-group list-group-flush">
                                                <div class="list-group-item border-0">
                                                    <div class="media d-flex">
                                                        <figure style=width:40px>
                                                        <img alt="Image placeholder" src="./assets/img/svg/icons/Code_2.svg" class=img-fluid style=height:40px>
                                                        </figure>
                                                        <div class="media-body ml-3">
                                                            <a href="./overview.html#landing" class="d-block h6 mb-0">Landing Pages</a> 
                                                            <small class="text-sm text-muted mb-0">A starting point for any scenario.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item border-0">
                                                    <div class="media d-flex">
                                                        <figure style=width:40px>
                                                        <img alt="Image placeholder" src="./assets/img/svg/icons/Like_UI.svg" class=img-fluid style=height:40px>
                                                        </figure>
                                                        <div class="media-body ml-3">
                                                            <a href="./overview.html#secondary" class="d-block h6 mb-0">Secondary Pages</a> <small class="text-sm text-muted mb-0">A starting point for any scenario.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item border-0">
                                                    <div class="media d-flex align-items-center">
                                                        <figure style=width:40px>
                                                        <img alt="Image placeholder" src="./assets/img/svg/icons/Online_Store_2.svg" class=img-fluid style=width:40px>
                                                        </figure>
                                                        <div class="media-body ml-3">
                                                            <a href="./overview.html#account" class="d-block h6 mb-0">Account Pages</a> 
                                                            <small class="text-sm text-muted mb-0">Account management made easy.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item border-0">
                                                    <div class="media d-flex align-items-center">
                                                        <figure style=width:40px>
                                                        <img alt="Image placeholder" src="./assets/img/svg/icons/Apps.svg" class=img-fluid style=width:40px>
                                                        </figure>
                                                        <div class="media-body ml-3">
                                                            <a href="./overview.html#boards" class="d-block h6 mb-0">Board Pages</a> 
                                                            <small class="text-sm text-muted mb-0">Get your dashboard nice and easy.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="dropdown-header mt-4">Developers</h6>
                                                <div class="list-group-item border-0">
                                                    <div class="media d-flex align-items-center">
                                                        <figure style=width:40px>
                                                        <img alt="Image placeholder" src="./assets/img/svg/icons/DOC_File.svg" class=img-fluid style=width:40px>
                                                        </figure>
                                                        <div class="media-body ml-3">
                                                            <a href="./docs/index.html" class="d-block h6 mb-0">Documentation</a> 
                                                            <small class="text-sm text-muted mb-0">A good place to start from</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item border-0">
                                                    <div class="media d-flex align-items-center">
                                                        <figure style=width:40px>
                                                        <img alt="Image placeholder" src="./assets/img/svg/icons/Package_Opened.svg" class=img-fluid style=width:40px>
                                                        </figure>
                                                        <div class="media-body ml-3">
                                                            <a href="./docs/components/alerts.html" class="d-block h6 mb-0">Components</a> <small class="text-sm text-muted mb-0">A good place to start from</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate" data-toggle=hover>
                            <a class=nav-link href="saas.html#" role=button data-toggle=dropdown aria-haspopup=true aria-expanded=false>Pages</a>
                            <div class="dropdown-menu dropdown-menu-md p-0">
                                <ul class="list-group list-group-flush px-lg-4">
                                    <li class="dropdown dropdown-animate dropdown-submenu" data-toggle=hover>
                                        <a href="saas.html#" class="list-group-item list-group-item-action dropdown-toggle" role=button data-toggle=dropdown aria-haspopup=true aria-expanded=false>
                                            <div class=d-flex>
                                                <figure style=width:20px>
                                                <img alt="Image placeholder" src="./assets/img/svg/icons/Code.svg" class="svg-inject img-fluid" style=height:20px>
                                                </figure>
                                                <div class=ml-3>
                                                    <h6 class="heading mb-0">Landing</h6>
                                                    <p class=mb-0>Examples for any scenario.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <ul class=dropdown-menu>
                                            <li><a class=dropdown-item href="agency.html">Agency</a></li>
                                            <li><a class=dropdown-item href="business.html">Business</a></li>
                                            <li><a class=dropdown-item href="desktop-app.html">Desktop App</a></li>
                                            <li><a class=dropdown-item href="development.html">Development</a></li>
                                            <li><a class=dropdown-item href="marketing.html">Marketing</a></li>
                                            <li><a class=dropdown-item href="money-app.html">Money App</a></li>
                                            <li><a class=dropdown-item href="presentation.html">Presentation</a></li>
                                            <li><a class=dropdown-item href="saas.html">Saas</a></li>
                                            <li><a class=dropdown-item href="studio.html">Studio</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-animate dropdown-submenu" data-toggle=hover>
                                        <a href="saas.html#" class="list-group-item list-group-item-action dropdown-toggle" role=button data-toggle=dropdown aria-haspopup=true aria-expanded=false>
                                            <div class=d-flex>
                                                <figure style=width:20px>
                                                <img alt="Image placeholder" src="./assets/img/svg/icons/Code.svg" class="svg-inject img-fluid" style=height:20px>
                                                </figure>
                                                <div class=ml-3>
                                                    <h6 class="heading mb-0">Secondary</h6>
                                                    <p class=mb-0>Examples for any scenario.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <ul class=dropdown-menu>
                                            <li><a class=dropdown-item href="../secondary/about.html">About</a></li>
                                            <li><a class=dropdown-item href="../secondary/services.html">Services</a></li>
                                            <li><a class=dropdown-item href="../secondary/pricing.html">Pricing</a></li>
                                            <li><a class=dropdown-item href="../secondary/pricing-alternative.html">Pricing Alternative</a></li>
                                            <li><a class=dropdown-item href="../secondary/careers.html">Careers</a></li>
                                            <li><a class=dropdown-item href="../secondary/careers-single.html">Careers Single</a></li>
                                            <li><a class=dropdown-item href="../secondary/case-study.html">Case Study</a></li>
                                            <li><a class=dropdown-item href="../secondary/contact.html">Contact</a></li>
                                            <li><a class=dropdown-item href="../secondary/support.html">Support</a></li>
                                            <li><a class=dropdown-item href="../secondary/support-topic.html">Support Topic</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-animate dropdown-submenu" data-toggle=hover>
                                        <a href="saas.html#" class="list-group-item list-group-item-action dropdown-toggle" role=button data-toggle=dropdown aria-haspopup=true aria-expanded=false>
                                            <div class=d-flex>
                                                <figure style=width:20px><img alt="Image placeholder" src="./assets/img/svg/icons/Code.svg" class="svg-inject img-fluid" style=height:20px></figure>
                                                <div class=ml-3>
                                                    <h6 class="heading mb-0">Blog</h6>
                                                    <p class=mb-0>Examples for any scenario.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <ul class=dropdown-menu>
                                            <li><a class=dropdown-item href="../blog/blog-grid.html">Blog Grid</a></li>
                                            <li><a class=dropdown-item href="../blog/blog-masonry.html">Blog Masonry</a></li>
                                            <li><a class=dropdown-item href="../blog/blog-article.html">Blog Article</a></li>
                                            <li><a class=dropdown-item href="../blog/blog-article-modern.html">Blog Article Modern</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-animate dropdown-submenu" data-toggle=hover>
                                        <a href="saas.html#" class="list-group-item list-group-item-action dropdown-toggle" role=button data-toggle=dropdown aria-haspopup=true aria-expanded=false>
                                            <div class=d-flex>
                                                <figure style=width:20px>
                                                <img alt="Image placeholder" src="./assets/img/svg/icons/Cog_Wheels.svg" class="svg-inject img-fluid" style=height:20px></figure>
                                                <div class=ml-3>
                                                    <h6 class="heading mb-0">Utility</h6>
                                                    <p class=mb-0>Error pages and everything else.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <ul class=dropdown-menu>
                                            <li><a class=dropdown-item href="../utility/coming-soon.html">Coming Soon</a></li>
                                            <li><a class=dropdown-item href="../utility/error-side-cover.html">Error Side Cover</a></li>
                                            <li><a class=dropdown-item href="../utility/error-illustration.html">Error Illustration</a></li>
                                            <li><a class=dropdown-item href="../utility/faq.html">Faq</a></li>
                                            <li><a class=dropdown-item href="../utility/terms.html">Terms</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate" data-toggle=hover>
                            <a class=nav-link href="saas.html#" role=button data-toggle=dropdown aria-haspopup=true aria-expanded=false>App</a>
                            <div class="dropdown-menu dropdown-menu-md p-0">
                                <ul class="list-group list-group-flush px-lg-4">
                                    <li class="dropdown dropdown-animate dropdown-submenu" data-toggle=hover>
                                        <a href="saas.html#" class="list-group-item list-group-item-action dropdown-toggle" role=button data-toggle=dropdown aria-haspopup=true aria-expanded=false>
                                            <div class="media d-flex">
                                                <figure style=width:20px>
                                                <img alt="Image placeholder" src="./assets/img/svg/icons/Secure_Files.svg" class="svg-inject img-fluid" style=height:20px>
                                                </figure>
                                                <div class="media-body ml-2">
                                                    <h6 class="heading mb-0">Authentication</h6>
                                                    <p class=mb-0>Examples for any scenario.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <div class=dropdown-menu>
                                            <a class=dropdown-item href="../authentication/login-basic.html">Login Basic </a>
                                            <a class=dropdown-item href="../authentication/login-side-cover.html">Login Side Cover </a>
                                            <a class=dropdown-item href="../authentication/login-overlay.html">Login Overlay</a>
                                            <div class=dropdown-divider></div>
                                            <a class=dropdown-item href="../authentication/register-basic.html">Register Basic </a>
                                            <a class=dropdown-item href="../authentication/register-side-cover.html">Register Side Cover </a>
                                            <a class=dropdown-item href="../authentication/register-overlay.html">Register Overlay</a>
                                            <div class=dropdown-divider></div>
                                            <a class=dropdown-item href="../authentication/recover-basic.html">Recover Basic </a>
                                            <a class=dropdown-item href="../authentication/recover-side-cover.html">Recover Side Cover </a>
                                            <a class=dropdown-item href="../authentication/recover-overlay.html">Recover Overlay</a>
                                        </div>
                                    </li>
                                    <li class="dropdown dropdown-animate dropdown-submenu" data-toggle=hover>
                                        <a href="saas.html#" class="list-group-item list-group-item-action dropdown-toggle" role=button data-toggle=dropdown aria-haspopup=true aria-expanded=false>
                                            <div class="media d-flex">
                                                <figure style=width:20px>
                                                <img alt="Image placeholder" src="./assets/img/svg/icons/Task.svg" class="svg-inject img-fluid" style=height:20px>
                                                </figure>
                                                <div class="media-body ml-2">
                                                    <h6 class="heading mb-0">Account</h6>
                                                    <p class=mb-0>Account management made cool.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <div class=dropdown-menu>
                                            <a class=dropdown-item href="../account/profile.html">Profile </a>
                                            <a class=dropdown-item href="../account/settings.html">Settings </a>
                                            <a class=dropdown-item href="../account/billing.html">Billing </a>
                                            <a class=dropdown-item href="../account/cards.html">Cards </a>
                                            <a class=dropdown-item href="../account/security.html">Security </a>
                                            <a class=dropdown-item href="../account/users.html">Users </a>
                                            <a class=dropdown-item href="../account/notifications.html">Notifications</a>
                                        </div>
                                    </li>
                                    <li class="dropdown dropdown-animate dropdown-submenu" data-toggle=hover>
                                        <a href="saas.html#" class="list-group-item list-group-item-action dropdown-toggle" role=button data-toggle=dropdown aria-haspopup=true aria-expanded=false>
                                            <div class="media d-flex">
                                                <figure style=width:20px>
                                                <img alt="Image placeholder" src="./assets/img/svg/icons/Task.svg" class="svg-inject img-fluid" style=height:20px>
                                                </figure>
                                                <div class="media-body ml-2">
                                                    <h6 class="heading mb-0">Boards</h6>
                                                    <p class=mb-0>Account management made cool.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <div class=dropdown-menu>
                                            <a class=dropdown-item href="../boards/overview.html">Overview </a>
                                            <a class=dropdown-item href="../boards/projects.html">Projects </a>
                                            <a class=dropdown-item href="../boards/tasks.html">Tasks </a>
                                            <a class=dropdown-item href="../boards/integrations.html">Integrations</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-none d-lg-block py-3 bg-transparent">
                                            <div class=row>
                                                <div class=col-sm-6>
                                                    <a href="../boards/overview.html" class=dropdown-item>Dashboard</a> 
                                                    <a href="../boards/projects.html" class=dropdown-item>Projects</a> 
                                                    <a href="../boards/tasks.html" class=dropdown-item>Tasks</a> 
                                                    <a href="../boards/integrations.html" class=dropdown-item>Integrations</a>
                                                </div>
                                                <div class=col-sm-6>
                                                    <a href="../account/settings.html" class=dropdown-item>Settings</a> 
                                                    <a href="../account/billing.html" class=dropdown-item>Billing</a> 
                                                    <a href="../account/cards.html" class=dropdown-item>Cards</a> 
                                                    <a href="../account/users.html" class=dropdown-item>Users</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item nav-item-spaced dropdown dropdown-animate" data-toggle=hover>
                            <a class=nav-link href="saas.html#" role=button data-toggle=dropdown aria-haspopup=true aria-expanded=false>Docs</a>
                            <div class="dropdown-menu dropdown-menu-md p-0">
                                <div class="list-group list-group-flush px-lg-4">
                                    <a href="./docs/index.html" class="list-group-item list-group-item-action" role=button>
                                    <div class=d-flex>
                                        <span class=h6><i data-feather=book></i></span>
                                        <div class=ml-3>
                                            <h6 class="heading mb-0">Documentation</h6>
                                            <small class=text-sm>Quick setup and build tools</small>
                                        </div>
                                    </div>
                                </a>
                                <div class=py-3>
                                    <div class=row>
                                        <div class=col-sm-6>
                                            <a href="./docs/getting-started/quick-start.html" class=dropdown-item>Quick Start</a> 
                                            <a href="./docs/getting-started/build-tools.html" class=dropdown-item>Build Tools</a> 
                                            <a href="./docs/getting-started/customization.html" class=dropdown-item>Customization</a> 
                                            <a href="./docs/getting-started/file-structure.html" class=dropdown-item>File Structure</a> 
                                            <a href="./docs/components/alerts.html" class=dropdown-item>Components</a>
                                        </div>
                                        <div class=col-sm-6>
                                            <a href="./docs/styleguide/icons.html" class=dropdown-item>Icons</a> 
                                            <a href="./docs/styleguide/svg-icons.html" class=dropdown-item>SVG Icons</a> 
                                            <a href="./docs/styleguide/illustrations.html" class=dropdown-item>Illustrations</a> 
                                            <a href="./docs/plugins/animate.html" class=dropdown-item>Plugins</a>
                                        </div>
                                    </div>
                                </div>
                                <a href="./docs/components/alerts.html" class="list-group-item list-group-item-action" role=button>
                                <div class=d-flex>
                                    <span class=h6><i data-feather=code></i></span>
                                    <div class=ml-3>
                                        <h6 class="heading mb-0">Components</h6>
                                        <small class=text-sm>Component examples and more</small>
                                    </div>
                                </div>
                            </a>
                            <a href="./docs/changelog.html" class="list-group-item list-group-item-action" role=button>
                            <div class=d-flex>
                                <span class=h6><i data-feather=file-text></i></span>
                                <div class=ml-3>
                                    <h6 class="heading mb-0">Changelog</h6>
                                    <small class=text-sm>Component examples and more</small>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav align-items-lg-center d-none d-lg-flex ml-lg-auto">
                <li class=nav-item>
                    <a class=nav-link href="../authentication/login-basic.html">Sign in</a></li>
                    <li class=nav-item><a href="https://themes.getbootstrap.com/product/quick-website-ui-kit-2/" class="btn btn-sm btn-primary btn-icon ml-3" target=_blank>
                    <span class=btn-inner--icon><i data-feather=shopping-bag></i></span> 
                    <span class=btn-inner--text>Buy now</span>
                    </a>
                </li>
            </ul>
            <div class="d-lg-none px-4 text-center">
                <a href="https://themes.getbootstrap.com/product/quick-website-ui-kit-2/" class="btn btn-block btn-sm btn-primary" target=_blank>Purchase now</a>
            </div>
        </div>
    </div>
</nav>
</header>
    
<div id=omnisearch class=omnisearch>
    <div class=container><div class=omnisearch-container>
        <form class=omnisearch-form><div class=form-group>
            <div class="input-group input-group-merge input-group-flush">
                <div class=input-group-prepend>
                    <span class=input-group-text>
                        <i data-feather=search></i>
                    </span>
                </div>
                <input type=text class=form-control placeholder="Type and hit enter ...">
            </div>
        </div>
    </form>
    <div class=omnisearch-suggestions>
        <h6 class=heading>Search Suggestions</h6>
        <div class=row>
            <div class=col-sm-12>
                <ul class="list-unstyled mb-0">
                    <li><a class=list-link href="saas.html#"><i data-feather=clock></i> <span>macbook pro</span> in Laptops</a></li>
                    <li><a class=list-link href="saas.html#"><i data-feather=clock></i> <span>iphone 8</span> in Smartphones</a></li>
                    <li><a class=list-link href="saas.html#"><i data-feather=clock></i> <span>macbook pro</span> in Laptops</a></li>
                    <li><a class=list-link href="saas.html#"><i data-feather=clock></i> <span>beats pro solo 3</span> in Headphones</a></li>
                    <li><a class=list-link href="saas.html#"><i data-feather=clock></i> <span>smasung galaxy 10</span> in Phones</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<section class="section-half-rounded pt-6 pb-0 pt-lg-6 pb-lg-5">
    <div class="jumbotron section-inner right-0 rounded-top-left bg-gradient-primary overflow-hidden col-xl-11"></div>
    <div class="container pt-lg-7 pb-lg-5 position-relative zindex-100">
        <div class="row align-items-center justify-content-center justify-content-lg-start">
            <div class="col-md-8 col-lg-5 mb-5 mb-lg-0">
                <h1 class="h1 text-center text-lg-left text-white mb-4">Start your business with <strong>Quick</strong>.</h1>
                <p class="lead text-center text-lg-left text-white opacity-8">Build a beautiful, modern website with flexible Bootstrap components built from scratch.</p>
                <form class=mt-5>
                    <div class="input-group input-group-lg mb-3">
                    <input type=text class=form-control placeholder="Enter your email" aria-label="Example text with button addon" aria-describedby=button-addon1>
                    <div class=input-group-append>
                        <button class="btn btn-warning" type=button id=button-addon1>Get started</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="position-lg-absolute bottom-lg-4 bottom-xl-0 right-lg-n10 mb-n5 mb-lg-0 mb-xl-n7 col-lg-10 col-xl-10 zindex-100">
            <div class="frame frame-laptop zindex-100 ml-lg-6">
                <img alt="Image placeholder" src="./assets/img/svg/devices/macbook.svg" class=img-fluid>
                <div class=frame-inner>
                    <img alt="Image placeholder" src="./assets/img/theme/light/screen-2-1000x800.jpg" class=img-fluid>
                </div>
            </div>
            <div class="w-25 position-absolute top-n5 left-8 left-xl-9">
                <img alt="Image placeholder" src="./assets/img/svg/shapes/dots-square.svg" class="svg-inject img-fluid">
            </div>
            <div class="w-25 position-absolute bottom-8 right-n7">
                <img alt="Image placeholder" src="./assets/img/svg/shapes/dots-square.svg" class="svg-inject img-fluid">
            </div>
        </div>
    </div>
</div>
</section>

<section class="section-half-rounded pb-5 pb-lg-7">
    <div class="jumbotron section-inner left-0 rounded-bottom-right bg-section-secondary overflow-hidden col-xl-11"></div>
    <div class="container text-center text-lg-left pt-5">
        <div class="row row-grid mx-lg-n5">
            <div class="col-md-4 mb-5 mb-lg-0 px-lg-5">
                <div class=pb-5>
                    <div class="icon bg-white text-primary rounded-circle icon-lg icon-shape shadow">
                        <i data-feather=droplet></i>
                    </div>
                </div>
                <h5 class=font-weight-bold>Modular</h5>
                <p class="mt-2 mb-0 lh-190">Build mobile-first projects on the web with the world's most popular front-end component library.</p>
            </div>
            <div class="col-md-4 mb-5 mb-lg-0 px-lg-5">
                <div class=pb-5><div class="icon bg-white text-primary rounded-circle icon-lg icon-shape shadow">
                    <i data-feather=smartphone></i>
                </div>
            </div>
            <h5 class=font-weight-bold>Responsive</h5>
            <p class="mt-2 mb-0 lh-190">Build mobile-first projects on the web with the world's most popular front-end component library.</p>
        </div>
        <div class="col-md-4 mb-5 mb-lg-0 px-lg-5">
            <div class=pb-5>
                <div class="icon bg-white text-primary rounded-circle icon-lg icon-shape shadow"><i data-feather=external-link></i></div>
            </div>
            <h5 class=font-weight-bold>Scalable</h5>
            <p class="mt-2 mb-0 lh-190">Build mobile-first projects on the web with the world's most popular front-end component library.</p></div>
        </div>
    </div>
</section>

<section class="slice pb-9">
    <div class=container>
        <div class=section-process-step>
            <div class="row row-grid justify-content-between align-items-center">
                <div class="col-lg-5 order-lg-2">
                    <h5 class=h3>Need a quick admin panel for your website?</h5>
                    <p class="lead my-4">With Quick you get components and examples, including tons of variables that will help you customize this theme with ease.</p>
                    <ul class="list-unstyled mb-0">
                        <li class=py-2>
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                        <i class="fas fa-file-invoice">
                                        </i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Perfect for modern startups</span>
                                </div>
                            </div>
                        </li>
                        <li class=py-2>
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                        <i class="fas fa-store-alt"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Ready to be customized</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="card mb-0 mr-lg-5">
                        <div class="card-body p-2">
                            <img alt="Image placeholder" src="./assets/img/theme/light/screen-1-1000x800.jpg" class="img-fluid shadow rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=section-process-step>
            <div class="row row-grid justify-content-between align-items-center">
                <div class=col-lg-5>
                    <h5 class=h3>A modern project management dashboard</h5>
                    <p class="lead my-4">With Quick you get components and examples, including tons of variables that will help you customize this theme with ease.</p>
                    <ul class="list-unstyled mb-0">
                        <li class=py-2>
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                        <i class="fas fa-file-invoice"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Perfect for modern startups</span>
                                </div>
                            </div>
                        </li>
                        <li class=py-2>
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                        <i class="fas fa-store-alt"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Ready to be customized</span>
                                </div>
                            </div>
                        </li>
                        <li class=py-2>
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                        <i class="fas fa-store-alt"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Designed for every devices</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class=col-lg-6>
                    <div class="card mb-0 ml-lg-5">
                        <div class="card-body p-2">
                            <img alt="Image placeholder" src="./assets/img/theme/light/screen-2-1000x800.jpg" class="img-fluid shadow rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slice py-md-0 bg-section-secondary">
    <div class="container position-relative zindex-100">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-5">
                <div class="position-relative mt-n6 mb-md-n8">
                    <div class=frame-iphone>
                        <img alt="Image placeholder" src="./assets/img/svg/devices/phone.svg" class=img-fluid>
                        <div class=frame-inner>
                            <img alt="Image placeholder" src="./assets/img/theme/light/screen-phone-1.jpg" class=img-fluid>
                        </div>
                    </div>
                </div>
            </div>
            <div class=col-md-6>
                <h5 class="h1 mb-2 font-weight-bolder">Start using Quick</h5>
                <p class="lead my-4">You get components and examples, including tons of variables that will help you customize this theme with ease.</p>
                <div class=mt-5>
                    <a href="saas.html#" class="btn btn-app-store mr-0 mr-lg-3 mx-2 my-2">
                        <img alt="Image placeholder" src="./assets/img/icons/brands/apple.svg" class="svg-inject fill-white"> 
                        <span class=btn-inner--text>Download on the</span> 
                        <span class=btn-inner--brand>App Store</span> 
                    </a>
                    <a href="saas.html#" class="btn btn-app-store my-2 mx-2">
                        <img alt="Image placeholder" src="./assets/img/icons/brands/google-play.svg" class="svg-inject fill-white"> 
                        <span class=btn-inner--text>Download on the</span> 
                        <span class=btn-inner--brand>Play Store</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slice slice-lg pt-md-9">
    <div class="container py-lg-5">
        <div class="row align-items-center">
            <div class=col-lg-5>
                <span class="badge badge-warning badge-pill">Cool stats</span>
                <h5 class="h5 lh-180 mt-4 mb-5">Quick is a premium HTML theme that includes adaptable layouts for various industries and free monthly updates.</h5>
                <div class=row>
                    <div class=col-sm-4>
                        <div class="card bg-dark shadow-lg rounded-lg border-0">
                            <div class=p-4>
                                <h3 class="mb-0 text-white">
                                    <span class=counter data-from=0 data-to=10 data-speed=1000 data-refresh-interval=4></span> 
                                    <span class=counter-extra>k</span>
                                </h3>
                                <p class="text-sm text-white mb-0">Customers</p>
                            </div>
                        </div>
                    </div>
                    <div class=col-sm-4>
                        <div class="card bg-dark shadow-lg rounded-lg border-0">
                            <div class=p-4>
                                <h3 class="mb-0 text-white">
                                    <span class=counter data-from=0 data-to=53 data-speed=2000 data-refresh-interval=4></span> 
                                    <span class=counter-extra>k</span>
                                </h3>
                                <p class="text-sm text-white mb-0">Downloads</p>
                            </div>
                        </div>
                    </div>
                    <div class=col-sm-4>
                        <div class="card bg-dark shadow-lg rounded-lg border-0">
                            <div class=p-4>
                                <h3 class="mb-0 text-white">
                                    <span class=counter data-from=0 data-to=98 data-speed=3000 data-refresh-interval=4></span> 
                                    <span class=counter-extra>%</span>
                                </h3>
                                <p class="text-sm text-white mb-0">Satisfied</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ml-lg-auto">
                <div class="card border-0 shadow-lg zindex-100">
                    <figure>
                        <img alt="Image placeholder" src="./assets/img/theme/light/img-5-1000x800.jpg" class=card-img>
                    </figure>
                    <div class="card-img-overlay d-flex">
                        <div class=text-center>
                            <a href="https://www.youtube.com/watch?v=zodT9bCdIiI" class="btn btn-xs btn-white btn-icon" data-fancybox="">
                            <span class=btn-inner--text>Play video</span> 
                            <span class=btn-inner--icon><i data-feather=play></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=slice>
    <div class=container>
        <div class="jumbotron rounded-diagonal-right bg-primary border-0 rounded-lg py-5">
            <div class="card-body px-5">
                <div class="row align-items-center">
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <h4 class=text-white>Infinite solutions with only one template.</h4>
                        <p class=text-white>Quick has all the right tools in order to make your website building process a breeze and automatize your time-consuming tasks in your development workflow.</p>
                    </div>
                    <div class="col-12 col-lg-4 text-lg-right">
                        <a href="saas.html#" class="btn btn-white btn-icon">
                            <span class=btn-inner--text>Learn more</span> 
                            <span class=btn-inner--icon><i data-feather=arrow-right></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slice slice-lg">
    <div class=container>
        <div class="row mb-5 mb-lg-10 justify-content-center text-center">
            <div class=col-lg-8>
                <div class=pb-4>
                    <div class="icon bg-danger text-white rounded-circle icon-lg icon-shape shadow">
                        <i data-feather=heart></i>
                    </div>
                </div>
                <h3 class=mt-4>Our products are loved by <span class=text-warning>users</span> worldwide</h3>
            </div>
        </div>
        <div class=row>
            <div class="col-lg-4 col-sm-6">
                <div class="card hover-shadow-lg hover-translate-y-n3">
                    <div class="card-body text-center py-5 h-100">
                        <div class="mb-4 w-50 mx-auto">
                            <img alt="Image placeholder" src="./assets/img/clients/svg/amazon.svg" class=img-fluid>
                        </div>
                        <p class="px-2 mb-4">They build modern looking websites easily using Quick.</p>
                        <a href="saas.html#" class="link link-underline-dark">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card hover-shadow-lg hover-translate-y-n3 mt-lg-n7">
                    <div class="card-body py-5 text-center h-100">
                        <div class="mb-4 w-50 mx-auto">
                            <img alt="Image placeholder" src="./assets/img/clients/svg/airbnb.svg" class=img-fluid>
                        </div>
                        <span class="static-rating d-block">
                            <i data-feather=star class="star voted"></i> 
                            <i data-feather=star class="star voted"></i> 
                            <i data-feather=star class="star voted"></i> 
                            <i data-feather=star class="star voted"></i> 
                            <i data-feather=star class=star></i>
                        </span>
                        <h5 class="mt-4 mb-1">4.95 out of 5 stars</h5>
                        <p class="text-muted text-sm mb-0">from 23 reviews</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card px-2 hover-shadow-lg hover-translate-y-n3">
                    <div class="card-body py-5 h-100">
                        <div class="d-flex align-items-center justify-content-center">
                            <div>
                                <img alt="Image placeholder" src="./assets/img/theme/light/person-1.jpg" class="avatar rounded-circle">
                            </div>
                            <div class=pl-3>
                                <h5 class="h6 mb-0">Heather Wright</h5>
                                <small class="d-block text-muted">Google</small>
                            </div>
                        </div>
                        <div class=text-center>
                            <p class="mt-4 lh-180">Amazing template! All-in-one, clean code, beautiful design and really not hard to work with.</p>
                            <span class="static-rating d-block">
                                <i data-feather=star class="star voted"></i> 
                                <i data-feather=star class="star voted"></i>
                                <i data-feather=star class="star voted"></i> 
                                <i data-feather=star class="star voted"></i> 
                                <i data-feather=star class=star></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card hover-shadow-lg hover-translate-y-n3">
                    <div class="card-body text-center py-5 h-100">
                        <div class="mb-4 w-50 mx-auto">
                            <img src="./assets/img/clients/svg/paypal.svg" alt="Image placeholder" class=img-fluid>
                        </div>
                        <p class="px-2 mb-4">They build modern looking websites easily using Quick.</p>
                        <a href="saas.html#" class="link link-underline-dark">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card hover-shadow-lg hover-translate-y-n3 mt-lg-n7">
                    <div class="card-body text-center py-5 h-100">
                        <div class="mb-4 w-50 mx-auto">
                            <img src="./assets/img/clients/svg/slack.svg" alt="Image placeholder" class=img-fluid>
                        </div>
                        <p class="px-2 mb-4">They build modern looking websites easily using Quick.</p>
                        <a href="saas.html#" class="link link-underline-dark">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card hover-shadow-lg hover-translate-y-n3">
                    <div class="card-body py-5 text-center h-100">
                        <div class="mb-4 w-50 mx-auto">
                            <img src="./assets/img/clients/svg/spotify.svg" alt="Image placeholder" class=img-fluid>
                        </div>
                        <span class="static-rating d-block">
                            <i data-feather=star class="star voted"></i> 
                            <i data-feather=star class="star voted"></i> 
                            <i data-feather=star class="star voted"></i> 
                            <i data-feather=star class="star voted"></i> 
                            <i data-feather=star class=star></i>
                        </span>
                        <h5 class="mt-4 mb-1">4.95 out of 5 stars</h5>
                        <p class="text-muted text-sm mb-0">from 23 reviews</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
    <footer class=position-relative id=footer-main>
        <div class="footer pt-lg-7 footer-dark bg-dark">
            <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
                <svg width=2560px height=100px xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink preserveAspectRatio=none x=0px y=0px viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100" xml:space=preserve class="">
                <polygon points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container pt-4">
                <div class="row justify-content-center">
                    <div class=col-lg-12>
                        <div class="row align-items-center">
                            <div class=col-lg-7>
                                <h3 class="text-secondary mb-2">Brilliant solutions for your ideas</h3>
                                <p class="lead mb-0 text-white opacity-8">Build modern looking websites fast and easy using Quick.</p>
                            </div>
                            <div class="col-lg-5 text-lg-right mt-4 mt-lg-0">
                                <a href="./docs/index.html" class="btn btn-white btn-icon my-2" target=_blank>
                                <span class=btn-inner--icon><i data-feather=book class=text-primary></i> </span>
                                <span class=btn-inner--text>Documentation</span> </a><a href="https://themes.getbootstrap.com/product/quick-website-ui-kit-2/" class="btn btn-primary my-2 ml-0 ml-sm-3" target=_blank>Purchase now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="divider divider-fade divider-dark my-5">
                <div class=row>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <a href="./index.html">
                        <img alt="Image placeholder" src="./assets/img/brand/light.svg" id=footer-logo>
                        </a>
                        <p class="mt-4 text-sm opacity-8 pr-lg-4">Webpixels attempts to bring the best development experience to designers and developers by offering the tools needed for having a quick and solid start in most web projects.</p>
                            <ul class="nav mt-4">
                                <li class=nav-item>
                                    <a class="nav-link pl-0" href="https://dribbble.com/webpixels" target=_blank>
                                    <i class="fab fa-dribbble"></i>
                                    </a>
                                </li>
                                <li class=nav-item>
                                    <a class=nav-link href="https://github.com/webpixels" target=_blank>
                                    <i class="fab fa-github"></i>
                                    </a>
                                </li>
                                <li class=nav-item>
                                    <a class=nav-link href="https://www.instagram.com/webpixelsofficial" target=_blank>
                                    <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class=nav-item>
                                    <a class=nav-link href="https://www.facebook.com/webpixels" target=_blank>
                                    <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
                        <h6 class="heading mb-3">Account</h6>
                            <ul class=list-unstyled>
                                <li>
                                    <a href="saas.html#">Profile</a>
                                </li>
                                <li>
                                    <a href="saas.html#">Settings</a>
                                </li>
                                <li>
                                    <a href="saas.html#">Billing</a>
                                </li>
                                <li>
                                    <a href="saas.html#">Notifications</a>
                                </li>
                            </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                        <h6 class="heading mb-3">About</h6>
                            <ul class=list-unstyled>
                                <li>
                                    <a href="saas.html#">Services</a>
                                </li>
                                <li>
                                    <a href="saas.html#">Pricing</a>
                                </li>
                                <li>
                                    <a href="saas.html#">Contact</a>
                                </li>
                                <li>
                                    <a href="saas.html#">Careers</a>
                                </li>
                            </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                        <h6 class="heading mb-3">Company</h6>
                            <ul class=list-unstyled>
                                <li>
                                    <a href="saas.html#">Community</a>
                                </li>
                                <li>
                                    <a href="saas.html#">Help center</a>
                                </li>
                                <li>
                                    <a href="saas.html#">Support</a>
                                </li>
                            </ul>
                    </div>
                </div>
                <hr class="divider divider-fade divider-dark my-4">
                <div class="row align-items-center justify-content-md-between pb-4">
                    <div class=col-md-6>
                        <div class="copyright text-sm font-weight-bold text-center text-md-left">&copy; 2020 <a href="https://webpixels.io" class=font-weight-bold target=_blank>Webpixels</a>. All rights reserved
                        </div>
                    </div>
                    <div class=col-md-6>
                        <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                            <li class=nav-item>
                                <a class=nav-link href="saas.html#">Terms</a>
                            </li>
                            <li class=nav-item>
                                <a class=nav-link href="saas.html#">Privacy</a>
                            </li>
                            <li class=nav-item>
                                <a class=nav-link href="saas.html#">Cookies</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade fixed-right" id=modal-products tabindex=-1 role=dialog aria-hidden=true>
        <div class="modal-dialog modal-vertical" role=document>
            <div class=modal-content>
                <div class="modal-header py-3 align-items-center">
                    <div class=modal-title>
                        <h6 class=mb-0>You might like these</h6>
                    </div>
                    <button type=button class=close data-dismiss=modal aria-label=Close>
                        <span aria-hidden=true>&times;</span>
                    </button>
                </div>
                <div class=modal-body>
                    <p class="text-sm mb-4">Looking for other designs? Check out the other themes we created. Easy to switch, play and develop new websites.</p>
                    <div class="card card-overlay hover-shadow-lg">
                        <div class=h-100>
                            <img src="https://webpixels.s3.eu-central-1.amazonaws.com/public/themes/purpose-website-ui-kit.png" class=card-img-top alt="Purpose Website UI Kit">
                        </div>
                        <div class="card-img-overlay d-flex flex-column align-items-center p-0">
                            <div class="overlay-actions w-100 card-footer mt-auto">
                                <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" class="h6 mb-0 stretched-link" target=_blank>Purpose Website UI Kit</a>
                            </div>
                        </div>
                    </div>
                    <div class="card card-overlay hover-shadow-lg">
                        <div class=h-100>
                            <img src="https://webpixels.s3.eu-central-1.amazonaws.com/public/themes/purpose-application-ui-kit.png" class=card-img-top alt="Purpose Application UI Kit">
                        </div>
                        <div class="card-img-overlay d-flex flex-column align-items-center p-0">
                            <div class="overlay-actions w-100 card-footer mt-auto">
                                <a href="https://themes.getbootstrap.com/product/purpose-application-ui-kit/" class="h6 mb-0 stretched-link" target=_blank>Purpose Application UI Kit</a>
                            </div>
                        </div>
                    </div>
                    <div class="card card-placeholder align-items-center flex-column justify-content-center border-dashed" style=height:250px>
                    <div class="col text-center">
                        <div class=pt-5>
                            <i data-feather=smile class=text-primary style=width:50px;height:50px></i> 
                            <span class="h5 d-block mt-3">What's next?</span>
                        </div>
                        <p class="text-sm px-4 mt-2 mb-0">We are already working on a new product, so stay tuned.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=customizer>
    <button type=button id=btnSwitchMode data-mode=dark class="btn btn-primary btn-sm btn-icon-only rounded-circle hover-scale-110 shadow-lg">
        <i class="fas fa-moon"></i>
    </button> 
    <a href="saas.html#modal-products" data-toggle=modal class="btn btn-sm btn-white btn-icon-only rounded-circle hover-scale-110 shadow">
        <span class=btn-inner--icon>
            <i class="fas fa-images"></i>
        </span>
    </a>
</div>
<div class="modal fade fixed-right" id=modal-customizer tabindex=-1 role=dialog aria-hidden=true>
    <div class="modal-dialog modal-vertical" role=document>
        <form class=modal-content id=form-customizer>
            <div class=modal-body>
                <button type=button class=close data-dismiss=modal aria-label=Close data-toggle=tooltip data-placement=left title="Close Customizer">
                    <span aria-hidden=true>&times;</span>
                </button>
                <div class="text-center mx-auto mt-4 mb-5" style=width:80px>
                <img alt="Image placeholder" src="./assets/img/svg/icons/Click.svg" class="svg-inject img-fluid">
                </div>
                <h5 class="text-center mb-2">Customize Quick</h5>
                <p class="text-center mb-4">Customize your preview experience by selecting skin colors and modes.</p>
                <hr class=mb-4>
                <h6 class=mb-1>Skin color</h6>
                <p class="small text-muted mb-3">Set a new theme color palette.</p>
                <div class="btn-group-toggle row mx-0 mb-5" data-toggle=buttons>
                    <label class="btn btn-sm btn-neutral active col mb-2">
                        <input type=radio name=skin value=default checked=checked> Default</label> 
                    <label class="btn btn-sm btn-neutral col-6 mb-2 mr-0">
                        <input type=radio name=skin value=blue> Blue</label>
                </div>
                <h6 class=mb-1>Skin mode</h6>
                <p class="small text-muted mb-3">Set the theme's mode: light or dark.</p>
                <div class="btn-group-toggle row mx-0 mb-4" data-toggle=buttons>
                    <label class="btn btn-sm btn-neutral active flex-fill mb-2 mr-2">
                        <input type=radio name=mode value=light checked=checked> 
                        <i data-feather=sun class=mr-2></i> Light</label> 
                    <label class="btn btn-sm btn-neutral flex-fill mb-2 mr-2">
                        <input type=radio name=mode value=dark> 
                        <i data-feather=moon class=mr-2></i> Dark</label>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type=submit class="btn btn-block btn-primary mt-auto">Preview</button>
            </div>
        </form>
    </div>
</div>

<script src="./assets/libs/jquery/dist/jquery.min.js"></script>
<script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets/libs/svg-injector/dist/svg-injector.min.js"></script>
<script src="./assets/libs/feather-icons/dist/feather.min.js"></script>
<script src="./assets/libs/in-view/dist/in-view.min.js"></script>
<script src="./assets/libs/sticky-kit/dist/sticky-kit.min.js"></script>
<script src="./assets/libs/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="./assets/libs/typed.js/lib/typed.min.js"></script>
<script src="./assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
<script src="./assets/js/quick-website.js"></script>
<script>feather.replace({width:"1em",height:"1em"})</script>
<script>
!function(e,t,a,n,g){
    e[n]=e[n]||[],e[n].push({"gtm.start":(new Date).getTime(),event:"gtm.js"
    });
    var m=t.getElementsByTagName(a)[0],r=t.createElement(a);r.async=!0,r.src="https://www.googletagmanager.com/gtm.js?id=GTM-MF4DZVH",m.parentNode.insertBefore(r,m)}(window,document,"script","dataLayer")
</script>

</body>
</html>