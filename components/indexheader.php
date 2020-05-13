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
                            <a class=nav-link href="how-it-works">How it Works</a>
                        </li>
                        <li class="nav-item nav-item-spaced d-none d-lg-block">
                            <a class=nav-link href="./overview.html">Overview</a>
                        </li>
                        <li class="nav-item nav-item-spaced d-none d-lg-block">
                            <a class=nav-link href="pricing">Pricing</a>
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
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav align-items-lg-center d-none d-lg-flex ml-lg-auto">
                <li class=nav-item>
                    <a class=nav-link href="login">Sign in</a></li>
                    <li class=nav-item><a href="overview" class="btn btn-sm btn-primary btn-icon ml-3">
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