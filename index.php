<?php
    /*
     * Setting up properties
     */
    error_reporting(0);
    ini_set('display_errors', 0);
    
    define('URL_PUBLIC_FOLDER', '');
    define('URL_PROTOCOL', 'http://');
    define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
    define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
    define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);
    define('TEXT', URL . DIRECTORY_SEPARATOR . 'text' . DIRECTORY_SEPARATOR);
    
    define('ASSETS', URL . '/assets/src/');
    
    define('TITLE' , TEXT . 'title.txt');
    define('HEAD_TEXT' , TEXT . 'head_text.txt');
    define('HEAD_TEXT_SUB' , TEXT . 'head_text_sub.txt');
    define('HISTORY' , TEXT . 'history.txt');
    define('MISSION' , TEXT . 'mission.txt');
    define('VISION' , TEXT . 'vision.txt');
    define('EMAIL' , TEXT . 'email.txt');
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Technovative | Be part of the Difference</title>
        <link rel="alternate" type="application/rss+xml" title="Technovative Inc. &raquo; Feed" href="http://localhost/technovative-inc/blog/feed/" />
        <link rel="alternate" type="application/rss+xml" title="Technovative Inc. &raquo; Comments Feed" href="http://localhost/technovative-inc/blog/comments/feed/" />
        <link rel='stylesheet' href='<?php echo ASSETS . 'reset.css'; ?>' type='text/css' media='all' />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo URL . 'blog/xmlrpc.php?rsd'; ?>" />
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo URL . 'blog/wp-includes/wlwmanifest.xml'; ?>" />
        <meta name="generator" content="WordPress 4.2.2" />
        
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="<?php echo ASSETS . 'css/bootstrap.min.css'; ?>" type="text/css">
        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo ASSETS . 'font-awesome/css/font-awesome.min.css'; ?>" type="text/css">
        <!-- Plugin CSS -->
        <link rel="stylesheet" href="<?php echo ASSETS . 'css/animate.min.css'; ?>" type="text/css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php echo ASSETS . 'css/creative.css'; ?>" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body id="page-top">

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top" id="logo">
                        <img src="<?php echo URL; ?>/assets/img/logo.png" id="logo_image" />
                        <?php echo file_get_contents(TITLE); ?>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="#products">Products</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#services">Services</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">About Us</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact Us</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="<?php echo URL . '/blog' ?>" target="_blank">Blog</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <header>
            <div class="header-content">
                <div class="header-content-inner">
                    <h1><?php echo file_get_contents(HEAD_TEXT); ?></h1>
                    <hr>
                    <p>Here's what can we do for you by pressing this button..</p>
                    <a href="#products" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
                </div>
            </div>
        </header>
        
        <section class="bg-primary" id="products">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">We've got what you need!</h2>
                        <hr class="light">
                        <p class="text-faded"><?php echo file_get_contents(HEAD_TEXT_SUB) ?></p>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        <section class="no-padding">
            <div class="container-fluid">
                <div class="row no-gutter">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box">
                            <img src="<?php echo ASSETS; ?>img/portfolio/1.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box">
                            <img src="<?php echo ASSETS; ?>img/portfolio/2.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box">
                            <img src="<?php echo ASSETS; ?>img/portfolio/3.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box">
                            <img src="<?php echo ASSETS; ?>img/portfolio/4.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box">
                            <img src="<?php echo ASSETS; ?>img/portfolio/5.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box">
                            <img src="<?php echo ASSETS; ?>img/portfolio/6.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        -->
        
        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">At Your Service</h2>
                        <hr class="primary">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-thumbs-up wow bounceIn text-primary" data-wow-delay=".1s"></i>
                            <h3>We Ready at anytime</h3>
                            <p class="text-muted">We can do everything just to make sure it's fair and square.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                            <h3>Up to Date</h3>
                            <p class="text-muted">We sell latest products as fresh.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                            <h3>Made with Love</h3>
                            <p class="text-muted">We made with a big heart just for you!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">About Us</h2>
                        <hr class="primary">
                        <p>Where, What, When and How we start?</p>
                        <div class="col-md-4">
                            <h4>History</h4>
                            <p><?php echo file_get_contents(HISTORY); ?></p>
                        </div>
                        <div class="col-md-4">
                            <h4>Mission</h4>
                            <p><?php echo file_get_contents(MISSION); ?></p>
                        </div>
                        <div class="col-md-4">
                            <h4>Vision</h4>
                            <p><?php echo file_get_contents(VISION); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-offset-3 text-center">
                        <p>Got interested about us? You may read more by clicking this button..</p>
                        <a href="<?php echo URL . '/blog/about-us' ?>" target="_blank" class="btn btn-primary btn-xl page-scroll">More About Us</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-primary">
            <a id="contact"></a>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">Let's Get's Started!</h2>
                        <p>Ready to start with us?</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <i class="fa fa-car fa-3x wow bounceIn"></i>
                        <p>888 Kasipagan St., Brgy. Barangka Drive, Madaluyong City, Metro Manila, Philippines</p>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <i class="fa fa-phone fa-3x wow bounceIn"></i>
                        <p>Give us your call at: 09369772103/09057773129</p>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                        <p>You can send us your thoughts at <a href="mailto:<?php echo file_get_contents(EMAIL); ?>"><?php echo file_get_contents(EMAIL); ?></a></p>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <i class="fa fa-globe fa-3x wow bounceIn"></i>
                        <p>Also, Check out our <a href="<?php echo URL; ?>/blog">blog</a> for more details about us.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- jQuery -->
        <script src="<?php echo ASSETS . ''; ?>js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo ASSETS . ''; ?>js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="<?php echo ASSETS . ''; ?>js/jquery.easing.min.js"></script>
        <script src="<?php echo ASSETS . ''; ?>js/jquery.fittext.js"></script>
        <script src="<?php echo ASSETS . ''; ?>js/wow.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo ASSETS . ''; ?>js/creative.js"></script>

    </body>
    
</html>
