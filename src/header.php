<?php
//intialize $nav and $sidemenu if they are not initialize
if (!isset($nav)) {
    $nav = 0;
}

date_default_timezone_set('Asia/Calcutta');
error_reporting(E_ALL);
ini_set("display_errors", 1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$meta = '
<meta name="title" content="' . $title . '" />
<meta name="description" content="It is personal website of me (Pt. Prashant Triapthi) for showing my skills and works an to build my online presence.I am a student of 2nd year Student of B.tech (CSE) at St. Aloysius Institute Of Technology, Jabalpur (Madhya Pradesh), India.  " />
<meta name="keywords" content="Pt. Prashant Tripathi , Prashant Triapthi ,Pandit, Prashant Tripathi , St. Aloysius institute of technology , web developer, software engineer, Astrology, Personal website" />
<meta name="author" content="Pt. Prashant Tripathi" />
<meta name="language" content="English">
<meta name="copyright" content="Pt. Prashant Tripathi © 2018 " />
<meta name="robots" content="index, follow">
<meta name="google-site-verification" content="RzfVQ24T1ZaOu5Q2YA0IUUIQg-j03dntm3f7NkZWfTE" />
<meta name="msvalidate.01" content="D71AA9AB7969C5FE475E2314EE4344E7" />
<meta http-equiv="imagetoolbar" content="yes">

<meta property="og:type" content="profile">
<meta property="og:title" content="Pt. Prashant Tripathi">
<meta property="og:url" content="http://www.Prashanttripathi.ga' . $url . '">
<meta property="og:image" content="/image/ptprashanttripathi.jpg">
<meta property="og:site_name" content="Prashanttriapthi.ga" />
<meta property="og:description" content="It is personal website of me (Pt. Prashant Triapthi) for showing my skills and works an to build my online presence.I am a student of 2nd year Student of B.tech (CSE) at St. Aloysius Institute Of Technology, Jabalpur (Madhya Pradesh), India.  ">
<meta property="profile:gender" content="male">
<meta property="profile:username" content="Pt.PrashantTripathi">
<meta property="profile:first_name" content="Prashant">
<meta property="profile:last_name" content="Tripathi">
<meta property="fb:app_id" content="100007681655983">

<meta name="twitter:card" content="summary">
<meta name="twitter:creator" content="@PtPrashant09">
<meta name="twitter:site" content="http://prashanttripathi.ga">
<meta name="twitter:title" content="' . $title . '">
<meta name="twitter:description" content="It is personal website of me (Pt. Prashant Triapthi) for showing my skills and works an to build my online presence.I am a student of 2nd year Student of B.tech (CSE) at St. Aloysius Institute Of Technology, Jabalpur (Madhya Pradesh), India.  ">
<meta name="twitter:image" content="/image/ptprashanttripathi.jpg">
<meta name="twitter:image:alt" content="P.A.N.D.I.T.">

';

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?php echo $title ?>
        </title>
        <link rel="shortcut icon" href="/image/pandit.png">
        <?php echo $meta; ?>
            <link href="/css/jquery.mCustomScrollbar.css" rel="stylesheet">
            <link href="/css/bootstrap.min.css" rel="stylesheet">
            <link href="/css/bootstrap-theme.min.css" rel="stylesheet">
            <link href="/css/bootstrap-material-design.min.css" rel="stylesheet">
            <link href="/css/main.css" rel="stylesheet">
            <script src="/js/jquery.min.js"></script>
            <link href="/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script type="application/ld+json">
                {
                  "@context": "http://schema.org/",
                  "@type": "Person",
                  "name": "Pt. Prashant Tripathi",
                  "jobTitle": "Web Devloper",
                  "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "Jabalpur",
                    "addressRegion": "MP, India"
                  }
                }
            </script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113286359-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-113286359-1');
</script>
    </head>

    <body>
        <div class="container-fluid">
        <header>
        
            <!--navbar start-->
            <div class="row">
                <div class="col-xs-12">
                    <nav class="navbar navbar-fixed-top navbar-danger " role="navigation">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="\">Pt. Prashant Triapthi</a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li <?php if ($nav == 1) {
                                        echo 'class="active"';
                                        }?> ><a href="/"><i class="mdi mdi-home"></i>&nbsp;Home<span class="sr-only">(current)</span></a></li>
                                    <li <?php if ($nav == 2) {
                                        echo 'class="active"';
                                        }?> ><a href="/aboutme/"><i class="mdi mdi-account-circle"></i>&nbsp;About me</a></li>
                                    <li class="dropdown <?php if ($nav == 3) {
                                        echo 'active';
                                                        }?>">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-laptop-mac"></i>&nbsp;Portfolio<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="/portfolio/">Significant Projects</a></li>
                                            <li><a href="/portfolio/#technical">Technical Skills</a></li>

                                        </ul>
                                    </li>

                                    <li class="dropdown <?php if ($nav == 4) {
                                        echo 'active';
                                                        }?>">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-school"></i>&nbsp;Career<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="/career/academic">Academic Career</a></li>
                                            <!--li><a href="/career/professional">Professional Career</a></li-->

                                        </ul>
                                    </li>
                                    <li <?php if ($nav == 5) {
                                        echo 'class="active"';
                                        }?> ><a href="/achievements/"><i class="mdi mdi-certificate"></i>&nbsp;Achievements</a></li>
                                    <li <?php if ($nav == 6) {
                                        echo 'class="active"';
                                        }?> ><a href="/contact/"><i class="mdi mdi-contact-mail"></i>&nbsp;Contact</a></li>

                                </ul>

                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                </div>
            </div>

        </header>
        
        </div>
