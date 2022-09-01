<!doctype html>
<html class="grey lighten-3 uk-height-1-1">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=(isset($this->description))?$this->description : DESCRIPTION; ?>">
    <meta name="author" content="<?=(isset($this->meta_author))?$this->meta_author : META_AUTHOR ; ?>">
    <title>
        <?=(isset($this->title))?$this->title :NAME; ?>
    </title>

    <link rel="apple-touch-icon" sizes="57x57" href="<?= URL; ?>public/ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= URL; ?>public/ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= URL; ?>public/ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= URL; ?>public/ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= URL; ?>public/ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= URL; ?>public/ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= URL; ?>public/ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= URL; ?>public/ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= URL; ?>public/ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?= URL; ?>public/ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= URL; ?>public/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= URL; ?>public/ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= URL; ?>public/ico/favicon-16x16.png">
    <link rel="manifest" href="<?= URL; ?>public/ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= URL; ?>public/ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?=(isset($this->title))?$this->title :NAME; ?>" />
    <meta property="og:description" content="<?=(isset($this->description))?$this->description : DESCRIPTION; ?>" />
    <meta property="og:url" content="https://<?= $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:site_name" content="<?= NAME ?>" />
    <meta property="article:section" content="Game Development, Indie game Company" />
    <meta property="og:image" content="<?= (isset($this->meta_image))?$this->meta_image : "" ?>" />
    <meta property="og:image:secure_url" content="<?= (isset($this->meta_image))?$this->meta_image : "" ?>" />


    <meta property="twitter:card" content="summary" />
    <meta property="twitter:site" content="@18bitsgaming" />
    <meta property="twitter:title" content="<?=(isset($this->title))?$this->title :NAME; ?>" />
    <meta property="twitter:description" content="<?=(isset($this->description))?$this->description : DESCRIPTION; ?>" />
    <meta property="twitter:url" content="https://<?= $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" />
    <meta property="twitter:domain" content="Game Development, Indie game Company   " />

	<!-- CSS FILES -->
	<link rel="stylesheet" type="text/css" href="<?= URL; ?>public/css/uikit.min.css">
	<link rel="stylesheet" type="text/css" href="<?= URL; ?>public/css/color.css">


    <link rel="stylesheet" href="<?= URL; ?>public/fontawesome/css/all.min.css"/>
	<link rel="stylesheet" href="<?= URL; ?>public/css/default.css"/>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <script>window.twttr = (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
        t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);

        t._e = [];
        t.ready = function(f) {
            t._e.push(f);
        };

        return t;
    }(document, "script", "twitter-wjs"));</script>
    <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>

</head>
<body class="uk-height-1-1">
    <?php session::init(); ?>

    <?php
        $active = "";
        if (!empty($this->activePage)) {
            $active = $this->activePage;
        }
     ?>
    <!--HEADER-->
    <header id="header" class="white" uk-sticky="show-on-up: true">
        <div class="uk-container">
            <nav id="navbar" data-uk-navbar="mode: click;">
                <div class="uk-navbar-left uk-visible@m">
                    <ul class="uk-navbar-nav">
                        <li class="<?= ($active == "index") ? "uk-active" : "" ?>">
                            <a href="<?= URL; ?>" title="Home">HOME</a>
                        </li>
                        <li class="<?= ($active == "games") ? "uk-active" : "" ?>">
                            <a href="<?= URL; ?>games" title="Games">GAMES</a>
                        </li>
                        <li class="<?= ($active == "") ? "uk-active" : "" ?>">
                            <a href="<?= URL; ?>news" title="News">NEWS</a>
                        </li>
                        <li class="<?= ($active == "gallery") ? "uk-active" : "" ?>">
                            <a href="<?= URL; ?>gallery" title="Gallery">GALLERY</a>
                        </li>
                        <li class="<?= ($active == "videos") ? "uk-active" : "" ?>">
                            <a href="<?= URL; ?>gallery/videos" title="Videos">VIDEOS</a>
                        </li>
                        <!--
                            <li>
                                <a href="<?= URL; ?>store" title="Store">STORE</a>
                            </li>
                        -->
                    </ul>
                </div>
                <div class="uk-navbar-center">
                    <a class="uk-navbar-item uk-logo" href="<?= URL; ?>" title="Logo">
                        <img src="<?= URL; ?>public/img/logo-small.png" alt="Logo" width="80">
                    </a>
                </div>
                <div class="uk-navbar-right">
                    <div class="uk-navbar-item">
                        <a href="https://www.facebook.com/18bitsgaming" target="_blank" class="uk-visible@s" style="margin-right: 4px" href="#" data-uk-icon="facebook"></a>
                        <a href="https://twitter.com/18bitsgaming" target="_blank" class="uk-visible@s" style="margin-right: 4px" href="#" data-uk-icon="twitter"></a>
                        <a href="https://www.instagram.com/18bitsgaming" target="_blank" class="uk-visible@s" style="margin-right: 4px" href="#" data-uk-icon="instagram"></a>
                        <a class="uk-navbar-toggle uk-hidden@m" data-uk-toggle data-uk-navbar-toggle-icon href="#offcanvas-nav"></a>
                    </div>

                </div>
            </nav>
        </div>
    </header>
    <!--/HEADER-->
    <!-- HERO -->

        <?php $this->render('alert'); ?>