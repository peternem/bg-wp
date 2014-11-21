<?php
// flag for main nav menu
$navFlag = '';
?>
<?php
function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

$urlString = substr(curPageName(), 0, -4);
$stringUrl = ucwords(str_replace("-", " ",$urlString));
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <?php include 'includes/meta-seo-tags.php'; ?>

        <!-- Note there is no responsive meta tag here -->

        <link rel="shortcut icon" href="assets/ico/favicon.png">

        <title><?php echo $stringUrl; ?> - Bean Gentry Wheeler &amp; Peternell PLLC - </title>

		<!-- Bootstrap core CSS -->

		<link href="core/css/bootstrap-3.0.3.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="core/css/non-responsive.css" rel="stylesheet">
		<link href="assets/css/bgwp-style-121813.css" rel="stylesheet" type="text/css" />

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->

        <?php
			include 'includes/sitewide-javascript-files.php';
		 ?>

        <?php
			include_once ("includes/googleAnalytics.php");
		 ?>
    </head>

    <body>
        <div id="wrapper">
            <div id="leftPanel" class="left-panel practice-area">
                <?php
				include 'includes/sitewide-mainNavMenu1.php';
                ?>
            </div>
            <div class="mid-panel practice-area">
                <article>
                    <section>
                        <img src="assets/img/bgwp_logo_new.gif" alt="Bean | Gentry | Wheeler | Peternell PLLC" class="bgwpLogo" title="Bean | Gentry | Wheeler | Peternell PLLC" />
                        <header>
                            <h1><?php echo $stringUrl; ?></h1>
                            <h2>BGWP's core practice areas include business, construction, estate planning, environmental, health care, litigation and real estate law types.</h2>
                        </header>
                    </section>
                </article>
            </div>
            <div id="rightPanel" class="right-panel practice-area">
           <?php
				include 'includes/sitewide-practice-type-nav-menu.php';
           ?>
           <p style="padding-top:10px; clear:both;">Click the link below to download a printed version of all the areas BGWP practices.</p>
           <p><a href="pdf/BGWP_Practice_Areas_101213.pdf" title="Download" class="btn btn-default btn-sm" target="_blank">Download</a></p>
            </div>
        </div>
    </body>
</html>
