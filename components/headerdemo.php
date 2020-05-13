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
<link rel=stylesheet href="./assets/css/style.css" id=stylesheet>
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
                    <li class=nav-item><a href="https://demo.voteonline.com.ng" class="btn btn-sm btn-primary btn-icon ml-3" target=_blank>
                    <span class=btn-inner--icon><i data-feather=eye></i></span> 
                    <span class=btn-inner--text>See Demo</span>
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