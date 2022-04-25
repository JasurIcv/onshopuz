<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>E-Commerce - MDBootstrap</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="<?php echo e(asset('assets/css/mdb.min.css')); ?>" rel="stylesheet">
    <style>

    </style>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body class="homepage-v1 hidden-sn white-skin animated">

    <!--Navigation-->
    <header>
        <!-- Sidebar navigation -->

        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg  navbar-light scrolling-navbar white">
            <div class="container">
                <!-- SideNav slide-out button -->

                <a class="navbar-brand font-weight-bold" href="<?php echo e(route('home')); ?>">
                    <strong style="color: rgb(99, 99, 237)">On Shop Uz</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto">

                        <?php $__currentLoopData = \LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="nav-item">
                                <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold"
                                    rel="alternate" hreflang="<?php echo e($localeCode); ?>"
                                    href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                    <?php echo e($localeCode); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="#">
                                <i class="fas fa-envelope blue-text"></i> <?php echo e(__('main.contact')); ?>

                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <?php if(isset(auth()->user()->id)&& auth()->user()->hasRole('user')): ?>
                        <li  class="nav-item">
                            <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="<?php echo e(route('wishlist')); ?>">
                                <img src="<?php echo e(asset('assets/img/yurak.png')); ?>" alt="" width="25px" height="25px" >
                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('wishlist-count-component')->html();
} elseif ($_instance->childHasBeenRendered('E1z2okr')) {
    $componentId = $_instance->getRenderedChildComponentId('E1z2okr');
    $componentTag = $_instance->getRenderedChildComponentTagName('E1z2okr');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('E1z2okr');
} else {
    $response = \Livewire\Livewire::mount('wishlist-count-component');
    $html = $response->html();
    $_instance->logRenderedChild('E1z2okr', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                
                            </a>
                        </li>

                        <li class="nav-item ml-3">
                            <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold"
                                href="<?php echo e(route('cart')); ?>">
                                <i class="fas fa-cart-plus mr-2" aria-hidden="true"
                                    style="color: rgb(62, 136, 239)"></i> <?php echo e(__('main.cart')); ?>

                                    <?php if(isset(auth()->user()->id)&& auth()->user()->hasRole('user')): ?>

                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart-count-component')->html();
} elseif ($_instance->childHasBeenRendered('USivHX0')) {
    $componentId = $_instance->getRenderedChildComponentId('USivHX0');
    $componentTag = $_instance->getRenderedChildComponentTagName('USivHX0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('USivHX0');
} else {
    $response = \Livewire\Livewire::mount('cart-count-component');
    $html = $response->html();
    $_instance->logRenderedChild('USivHX0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                    <?php endif; ?>
                                    
                                </a>
                        </li>
                        <?php endif; ?>
                        <li class="nav-item dropdown ml-3">
                            <a class="nav-link dropdown-toggle waves-effect waves-light dark-grey-text font-weight-bold"
                                id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-user blue-text"></i>
                                <?php echo e(auth()->user() ? auth()->user()->name : 'none'); ?> </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-cyan"
                                aria-labelledby="navbarDropdownMenuLink-4">
                                <?php if(auth()->check()): ?>

                                    <a class="dropdown-item waves-effect waves-light"
                                        href="<?php echo e(route('profile.show')); ?>"><?php echo e(__('main.myaccount')); ?></a>

                                        <?php if(auth()->user()->hasRole('admin') || auth()->user()->hasRole('supplier')): ?>
                                        <a class="dropdown-item waves-effect waves-light"
                                        href="<?php echo e((auth()->user()->hasRole('admin'))? route('index'): route('order')); ?>"><?php echo e((auth()->user()->hasRole('admin'))? __('main.adminpanel'): __('main.supplierpanel')); ?></a>
                                        <?php endif; ?>
                                    <a class="dropdown-item waves-effect waves-light"
                                        href="<?php echo e(route('myorder')); ?>"><?php echo e(__('main.order')); ?></a>

                                    <form action="<?php echo e(route('logout')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <a class="dropdown-item waves-effect waves-light" onclick="event.preventDefault();
                                this.closest('form').submit();"><?php echo e(__('main.logout')); ?></a>
                                    </form>
                                <?php else: ?>
                                    <a class="dropdown-item waves-effect waves-light"
                                        href="<?php echo e(route('login')); ?>"><?php echo e(__('main.login')); ?></a>
                                    <a class="dropdown-item waves-effect waves-light"
                                        href="<?php echo e(route('register')); ?>"><?php echo e(__('main.register')); ?></a>
                                <?php endif; ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /.Navbar -->

    </header>
    <!-- /.Navigation -->

    <!--Intro-->
    <section>

        <!--Carousel Wrapper-->
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                    <div class="view h-100">
                        <img class="d-block h-100 w-lg-100"
                            src="https://mdbootstrap.com/img/Photos/Others/ecommerce4.jpg" alt="First slide">
                        <div class="mask">
                            <!-- Caption -->
                            <div class="full-bg-img flex-center white-text">
                                <ul class="animated fadeIn col-10 list-unstyled">
                                    <li>
                                        <p class="h1 red-text mb-4 mt-5">
                                            <strong><?php echo e(__('main.saleoff30')); ?></strong>
                                        </p>
                                    </li>
                                    <li>
                                        <h5 class="h5-responsive dark-grey-text font-weight-bold mb-5"><?php echo e(__('main.temporainc')); ?></h5>
                                    </li>
                                    <li>
                                        <a target="_blank"
                                            href="https://mdbootstrap.com/docs/jquery/getting-started/download/"
                                            class="btn btn-danger btn-rounded" rel="nofollow"><?php echo e(__('main.seemore')); ?></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.Caption -->
                        </div>
                    </div>
                </div>
                <!--/First slide-->
                <!--Second slide-->
                <div class="carousel-item h-100">
                    <div class="view h-100">
                        <img class="d-block h-100 w-lg-100"
                            src="https://mdbootstrap.com/img/Photos/Others/ecommerce2.jpg" alt="Second slide">
                        <div class="mask">
                            <!-- Caption -->
                            <div class="full-bg-img flex-center white-text">
                                <ul class="animated fadeIn col-10 list-unstyled">
                                    <li>
                                        <p class="h1 dark-grey-text mb-4">
                                            <strong><?php echo e(__('main.nemoen')); ?></strong>
                                        </p>
                                    </li>
                                    <li>
                                        <h5 class="h5-responsive dark-grey-text font-weight-bold mb-5"><?php echo e(__('main.temporainc')); ?></h5>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/"
                                            class="btn btn-primary btn-rounded" rel="nofollow"><?php echo e(__('main.readmore')); ?></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.Caption -->
                        </div>
                    </div>
                </div>
                <!--/Second slide-->
                <!--Third slide-->
                <div class="carousel-item">
                    <div class="view h-100">
                        <img class="d-block h-100 w-lg-100"
                            src="https://mdbootstrap.com/img/Photos/Others/ecommerce3.jpg" alt="Third slide">
                        <div class="mask">
                            <!-- Caption -->
                            <div class="full-bg-img flex-center white-text">
                                <ul class="animated fadeIn col-md-10 text-center text-md-right list-unstyled">
                                    <li>
                                        <p class="h1 blue-text mb-4 mt-5 pr-lg-5">
                                            <strong><?php echo e(__('main.saleoff20')); ?></strong>
                                        </p>
                                    </li>
                                    <li>
                                        <h5 class="h5-responsive dark-grey-text font-weight-bold mb-5 pr-lg-5"><?php echo e(__('main.temporainc')); ?>i</h5>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.Caption -->
                        </div>
                    </div>
                </div>
                <!--/Third slide-->
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"><?php echo e(__('previous')); ?></span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"><?php echo e(__('next')); ?></span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->

        <div class="container-fluid mx-0 px-0">

            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark primary-color mb-5">
                <div class="container">

                    <!-- Navbar brand -->
                    

                    <a class="font-weight-bold white-text mr-4" href="<?php echo e(route('home')); ?>"><?php echo e(__('main.home')); ?></a>
                    <a class="font-weight-bold white-text mr-4"
                        href="<?php echo e(route('shop')); ?>"><?php echo e(__('main.products')); ?></a>
                    <a class="font-weight-bold white-text mr-4"
                        href="<?php echo e(route('contact')); ?>"><?php echo e(__('main.contact')); ?></a>
                    

                    <!-- Collapse button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Collapsible content -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent1">

                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('search-component')->html();
} elseif ($_instance->childHasBeenRendered('s87wpSb')) {
    $componentId = $_instance->getRenderedChildComponentId('s87wpSb');
    $componentTag = $_instance->getRenderedChildComponentTagName('s87wpSb');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('s87wpSb');
} else {
    $response = \Livewire\Livewire::mount('search-component');
    $html = $response->html();
    $_instance->logRenderedChild('s87wpSb', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                    <!-- Collapsible content -->
                </div>
            </nav>
            <!--/.Navbar-->

        </div>

    </section>
    <!--/Intro-->

    <!-- Main Container -->
    <div class="container">
        <!-- Grid row -->
        <?php echo e($slot); ?>

        <!-- /Grid row -->
    </div>
    <!-- /.Main Container -->


    <!--Footer-->
    <footer class="page-footer text-center text-md-left stylish-color-dark pt-0">

        <div style="background-color: #4285f4;">
            <div class="container">
                <!--Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0 white-text"><?php echo e(__('main.getconnected')); ?></h6>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!--Facebook-->
                        <a class="fb-ic ml-0 px-2">
                            <i class="fab fa-facebook-f white-text"> </i>
                        </a>
                        <!--Twitter-->
                        <a class="tw-ic px-2">
                            <i class="fab fa-twitter white-text"> </i>
                        </a>
                        <!--Google +-->
                        <a class="gplus-ic px-2">
                            <i class="fab fa-google-plus-g white-text"> </i>
                        </a>
                        <!--Linkedin-->
                        <a class="li-ic px-2">
                            <i class="fab fa-linkedin-in white-text"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic px-2">
                            <i class="fab fa-instagram white-text"> </i>
                        </a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </div>
        </div>

        <!--Footer Links-->
        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row mt-3">

                <!--First column-->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong><?php echo e(__('main.compname')); ?></strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><?php echo e(__('main.hereyou')); ?></p>
                </div>
                <!--/.First column-->

                <!--Second column-->

                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('footer-component')->html();
} elseif ($_instance->childHasBeenRendered('Y0QZ9pA')) {
    $componentId = $_instance->getRenderedChildComponentId('Y0QZ9pA');
    $componentTag = $_instance->getRenderedChildComponentTagName('Y0QZ9pA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Y0QZ9pA');
} else {
    $response = \Livewire\Livewire::mount('footer-component');
    $html = $response->html();
    $_instance->logRenderedChild('Y0QZ9pA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                <!--/.Second column-->

                <!--Third column-->

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" ">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong><?php echo e(__('main.usefullinks')); ?></strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="<?php echo e((auth()->user())? route('profile.show') : route('login')); ?>"><?php echo e(__('main.youraccount')); ?></a>
                    </p>
                    <p>
                        <a href="#!"><?php echo e(__('main.help')); ?></a>
                    </p>
                </div>
                <!--/.Third column-->

                <!--Fourth column-->
                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong><?php echo e(__('contact')); ?></strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i> New York, NY 10012, US
                    </p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> info@example.com
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 01 234 567 88
                    </p>
                    <p>
                        <i class="fas fa-print mr-3"></i> + 01 234 567 89
                    </p>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!-- Copyright-->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                © 2018 <?php echo e(__('main.copyright')); ?>: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank">
                    MDBootstrap.com </a>
            </div>
        </div>
        <!--/.Copyright -->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="<?php echo e(asset('assets/js/jquery-3.3.1.min.js')); ?>"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo e(asset('assets/js/mdb.min.js')); ?>"></script>

    <script type="text/javascript">
        /* WOW.js init */
        new WOW().init();

        // Tooltips Initialization
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

    <script>
        // Material Select Initialization
        $(document).ready(function() {
            $('.mdb-select').material_select();
        });
    </script>
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();
    </script>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html>
<?php /**PATH D:\OpenServer\domains\onshopuz\resources\views/layouts/base.blade.php ENDPATH**/ ?>