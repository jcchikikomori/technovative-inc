<?php
    define('URL_PUBLIC_FOLDER', '');
    define('URL_PROTOCOL', 'http://');
    define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
    define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
    define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">

        <title>Technovative | Be part of the Difference</title>
        <link rel="alternate" type="application/rss+xml" title="Technovative Inc. &raquo; Feed" href="http://localhost/technovative-inc/blog/feed/" />
        <link rel="alternate" type="application/rss+xml" title="Technovative Inc. &raquo; Comments Feed" href="http://localhost/technovative-inc/blog/comments/feed/" />
        
        <link rel='stylesheet' href='<?php echo URL . '/assets/src/reset.css'; ?>' type='text/css' media='all' />
        
        
        <link rel='stylesheet' id='quest-bootstrap-css'  href='<?php echo URL . '/blog/wp-content/themes/quest/assets/plugins/bootstrap/css/bootstrap.min.css?ver=4.2.2'; ?>' type='text/css' media='all' />
        <link rel='stylesheet' id='Quest-style-css'  href='<?php echo URL . '/blog/wp-content/themes/quest/style.css?ver=4.2.2'; ?>' type='text/css' media='all' />
        <link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A300&#038;ver=4.2.2' type='text/css' media='all' />
        <link rel='stylesheet' href='<?php echo URL . '/assets/src/styles.css'; ?>' type='text/css' />
        
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://localhost/technovative-inc/blog/xmlrpc.php?rsd" />
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://localhost/technovative-inc/blog/wp-includes/wlwmanifest.xml" />
        <meta name="generator" content="WordPress 4.2.2" />
    </head>
    
    <body class="home blog logged-in admin-bar no-customize-support">
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

            <header id="masthead" class="main-header" role="banner">
                <div class="container">
                    <div class="row">
                        <div class="site-branding col-md-4">


                            <h1 class="site-title"><a href="http://localhost/technovative-inc/blog/"
                                                      rel="home">Technovative Inc.</a></h1>

                            <span class="site-description">Slogan</span>

                        </div>
                        <!-- .site-branding -->

                        <nav id="site-navigation" class="main-navigation col-md-8" role="navigation">
                            <div class="navbar-toggle" data-toggle="collapse" data-target="#main-menu-collapse">
                                <span class="menu-text">Menu</span>
                                <i class="fa fa-reorder"></i>
                            </div>
                            <div class="navbar-collapse collapse" id="main-menu-collapse">
                                <ul id="menu-main-menu" class="nav navbar-nav"><li id="menu-item-5" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-5"><a href="http://localhost/technovative-inc/blog/">Blog Home</a></li>
                                    <li id="menu-item-6" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6"><a href="http://localhost/technovative-inc/blog/sample-page/">Sample Page</a></li>
                                    <li id="menu-item-7" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7"><a href="http://localhost/technovative-inc">Go back to Company Page</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown" id="menu-item-search">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><form class="search" action="http://localhost/technovative-inc/blog/" method="get">
                                                    <fieldset>
                                                        <div class="text">
                                                            <input name="s" id="s" type="text" placeholder="Search ..."/>
                                                            <button class="fa fa-search">Search</button>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </li>
                                        </ul>
                                    </li></ul>					</div>
                        </nav>
                        <!-- #site-navigation -->
                    </div>
                </div>
            </header>
            <!-- #masthead -->


            <div id="content">

                <div class="quest-row site-content">
                    <div class="container">
                        <div class="row">


                            <div id="primary" class="content-area col-md-12">
                                <main id="main" class="site-main" role="main">

                                    <div id="grid-container" class="clearfix">


                                        <div class="post-grid-wrap">
                                            <article class="post-grid post-1 post type-post status-publish format-standard hentry category-uncategorized" id="post-1">




                                                <h1 class="post-title"><a href="http://localhost/technovative-inc/blog/2015/07/18/hello-world/">Hello world!</a></h1>

                                                <div class="entry-meta">
                                                    <time class="post-date"><i class="fa fa-clock-o"></i>July 18, 2015</time><span class="seperator">/</span><a href="http://localhost/technovative-inc/blog/2015/07/18/hello-world/#comments"><i class="fa fa-comments"></i>&nbsp; 1 Comment</a>			</div><!-- .entry-meta -->

                                            </article>
                                        </div>
                                    </div>

                                </main>
                                <!-- #main -->
                            </div>
                            <!-- #primary -->


                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .container -->
                </div>
                <!-- .quest-row -->
            </div><!-- #content -->



            <footer id="colophon" class="copyright quest-row" role="contentinfo">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 copyright-text">
                            <a href='http://wordpress.org/'>Proudly powered by WordPress</a><span class="sep"> | </span>Theme: quest by <a href="http://pacethemes.com/wordpress-themes/quest/" rel="designer">Pace Themes</a>.			</div>

                        <div class="col-md-6 social-icon-container clearfix">
                            <ul>
                            </ul>
                        </div>

                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
        </div> <!-- end quest-row -->

    </div><!-- #page -->

</body>
    
</html>
