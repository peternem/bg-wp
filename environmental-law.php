<?php
// flag for main nav menu
$navFlag = 'practice-type';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="description" content="Bean, Gentry, Wheeler &amp; Peternell, PLLC - Advisors to Northwest businesses, professionals and property owners since 1968."/>
        <meta name="keywords" content="Washington Law, Washington Lawyers, Washington Attorneys, Northwest Law, Northwest Lawyers, Northwest attorneys, business law, property law, Olympia"/>
        <meta name="author" content="Bean, Gentry, Wheeler &amp; Peternell, PLLC"/>

        <!-- Note there is no responsive meta tag here -->

        <link rel="shortcut icon" href="assets/ico/favicon.png">

        <title>Bean, Gentry, Wheeler &amp; Peternell, PLLC - Environmental Law</title>

        <!-- Bootstrap core CSS -->

        <link href="core/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="core/css/non-responsive.css" rel="stylesheet">
        <link href="assets/css/bgwp-style-101513.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
 		<?php include 'includes/sitewide-javascript-files.php'; ?>

		<?php include_once("includes/googleAnalytics.php"); ?>
    </head>

    <body>
        <div id="wrapper">
            <div id="leftPanel" class="left-panel practice-types">
                <?php
				include 'includes/sitewide-mainNavMenu1.php';
                ?>
            </div>
            <div id="" class="mid-panel practice-types">
				<?php
				include 'includes/sitewide-practice-type-nav-menu.php';
                ?>  
            </div>
            <div class="right-panel practice-type">
                <article>
                    <section>
                        <h1>Environmental Law</h1>
                        <p>BGWP successfully helps clients from businesses to individuals navigate the rapidly changing world of environmental law.</p>

                        <ul>
							<li>Contribution actions </li>
							<li>Indemnity agreements</li>
							<li>Insurance claims</li>
							<li>MTCA </li>
							<li>Voluntary clean up programs</li>
                        </ul>
                    </section>
                </article>
            </div>
        </div>
    </body>
</html>
