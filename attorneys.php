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

        <title><?php echo $stringUrl; ?> - Bean, Gentry, Wheeler &amp; Peternell, PLLC</title>

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
            <div class="left-panel attorneys">
                <?php
				include 'includes/sitewide-mainNavMenu1.php';
                ?>
            </div>
            <div class="mid-panel attorneys">
                <article>
                    <section>
                        <img src="assets/img/bgwp_logo_new.gif" alt="Bean | Gentry | Wheeler | Peternell PLLC" class="bgwpLogo" title="Bean | Gentry | Wheeler | Peternell PLLC" />
                        <header>
                            <h1><?php echo $stringUrl; ?></h1>
                            <h2>BGWP attorneys specialize in a variety of different law types, such as Business, Real Estate, Health Care, Insurance and Property. </h2>
                        </header>
                        <p>Our attorneys understand the entrepreneurial spirit and go beyond a mere study of the law in order to understand the industries and markets in which our clients are involved. Whether in friendly contract or real estate negotiations, high-stakes litigation, solving environmental legal issues, helping local business owners understand business law, we are committed to moving your case forward, providing efficient legal solutions and getting high-quality results.</p>
                    </section>
                    <section>
                        <?php //include 'includes/sitewide-attorneys-page-menu.php'; ?>
                    </section>
                </article>
            </div>
            <div id="rightPanel" class="right-panel attorneys">

            	<div class="attorneyList">
            		<header>
		            	<h2>BGWP Member, Associate and Of Counsel Attorneys</h2>
		        	</header>
            		<?php include 'includes/sitewide-attorneys-page-menu.php'; ?>
            	</div>
            </div>
        </div>
    </body>
</html>
