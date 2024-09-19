<?php
//intialize $nav and $sidemenu if they are not initialize
if (!isset($nav)) {
    $nav = 0;
}
if (!isset($title)) {
    $title = "Header";
}
date_default_timezone_set('Asia/Calcutta');
error_reporting(E_ALL);
ini_set("display_errors", 1);
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
function file_path_prefix($base_dir, $file_path)
{
    // Ensure both base_dir and file_path do not have trailing slashes
    $base_dir = rtrim($base_dir, '/');
    $file_path = rtrim($file_path, '/');
    // Remove the base directory from the file path
    $relative_path = str_replace($base_dir, '', $file_path);
    // If the relative path is empty, the file is in the base directory
    if (empty($relative_path)) {
        return './';
    }
    // Count how many directories deep the file path is from the base directory
    $depth = substr_count($relative_path, '/');
    // Assume paths ending with a file extension are files
    if (preg_match('/\.\w+$/', $file_path)) {
        // Reduce the depth by 1 for files, since they are not directories
        $depth -= 1;
    }
    // Generate the correct number of "../" based on the depth
    $prefix = str_repeat('../', $depth);
    return $prefix;
}
$base_dir = '/developer-portfolio';
$file_path = $_SERVER['REQUEST_URI'];
$prefix = file_path_prefix($base_dir, $file_path);
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
    <link rel="shortcut icon" href="<?php echo $prefix; ?>assets/image/pandit.png">
    <meta name="title" content="<?php echo $title; ?>" />
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
    <meta property="og:url" content="https://ptprashanttripathi.github.io/developer-portfolio">
    <meta property="og:image" content="<?php echo $prefix; ?>assets/image/pandit.png">
    <meta property="og:site_name" content="Prashanttriapthi.ga" />
    <meta property="og:description" content="It is personal website of me (Pt. Prashant Triapthi) for showing my skills and works an to build my online presence.I am a student of 2nd year Student of B.tech (CSE) at St. Aloysius Institute Of Technology, Jabalpur (Madhya Pradesh), India.  ">
    <meta property="profile:gender" content="male">
    <meta property="profile:username" content="Pt.PrashantTripathi">
    <meta property="profile:first_name" content="Prashant">
    <meta property="profile:last_name" content="Tripathi">
    <meta property="fb:app_id" content="100007681655983">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:creator" content="@PtPrashant09">
    <meta name="twitter:site" content="http://ptprashanttripathi.github.io/developer-portfolio">
    <meta name="twitter:title" content="<?php echo $title; ?>">
    <meta name="twitter:description" content="It is personal website of me (Pt. Prashant Triapthi) for showing my skills and works an to build my online presence.I am a student of 2nd year Student of B.tech (CSE) at St. Aloysius Institute Of Technology, Jabalpur (Madhya Pradesh), India.  ">
    <meta name="twitter:image" content="<?php echo $prefix; ?>assets/image/pandit.png">
    <meta name="twitter:image:alt" content="P.A.N.D.I.T.">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.2/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="https://raw.githubusercontent.com/PtPrashantTripathi/developer-portfolio/03ca868e8e195b90a676ad04807a29eefb363115/css/bootstrap-material-design.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/1.5.54/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo $prefix; ?>assets/css/main.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
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

        function gtag() {
            dataLayer.push(arguments);
        }
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
                                <a class="navbar-brand" href="<?php echo $prefix; ?>">Pt. Prashant Triapthi</a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li <?php if ($nav == 1) {
                                            echo 'class="active"';
                                        } ?>><a href="<?php echo $prefix; ?>"><i class="mdi mdi-home"></i>&nbsp;Home<span class="sr-only">(current)</span></a></li>
                                    <li <?php if ($nav == 2) {
                                            echo 'class="active"';
                                        } ?>><a href="<?php echo $prefix; ?>aboutme"><i class="mdi mdi-account-circle"></i>&nbsp;About me</a></li>
                                    <li class="dropdown <?php if ($nav == 3) {
                                                            echo 'active';
                                                        } ?>">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-laptop-mac"></i>&nbsp;Portfolio<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo $prefix; ?>portfolio">Significant Projects</a></li>
                                            <li><a href="<?php echo $prefix; ?>portfolio/#technical">Technical Skills</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown <?php if ($nav == 4) {
                                                            echo 'active';
                                                        } ?>">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-school"></i>&nbsp;Career<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo $prefix; ?>career/academic">Academic Career</a></li>
                                            <li><a href="<?php echo $prefix; ?>career/professional">Professional Career</a></li>
                                        </ul>
                                    </li>
                                    <li <?php if ($nav == 5) {
                                            echo 'class="active"';
                                        } ?>><a href="<?php echo $prefix; ?>achievements"><i class="mdi mdi-certificate"></i>&nbsp;Achievements</a></li>
                                    <li <?php if ($nav == 6) {
                                            echo 'class="active"';
                                        } ?>><a href="<?php echo $prefix; ?>contact"><i class="mdi mdi-contact-mail"></i>&nbsp;Contact</a></li>
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