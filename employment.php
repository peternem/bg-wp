<?php
// flag for main nav menu
$navFlag = 'practice-type';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="description" content="Bean Gentry Wheeler & Peternell, PLLC - Advisors to Northwest businesses, professionals and property owners since 1968."/>
        <meta name="keywords" content="Washington Law, Washington Lawyers, Washington Attorneys, Northwest Law, Northwest Lawyers, Northwest attorneys, business law, property law, Olympia"/>
        <meta name="author" content="Bean Gentry Wheeler & Peternell, PLLC"/>

        <!-- Note there is no responsive meta tag here -->

        <link rel="shortcut icon" href="assets/ico/favicon.png">

        <title>Bean Gentry Wheeler &amp; Peternell PLLC - Employment</title>

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
                        <h1>Employment</h1>
                        <p>BGWP provides vigorous advocacy and experienced counsel in all facets of employment law. </p>
                        <h3>Employment Matters</h3>
                        <ul>
							<li>Compliance with governmental regulations </li>
							<li>Drug testing </li>
							<li>Employee policy manuals </li>
							<li>Employment agreements </li>
							<li>General legal advice </li>
							<li>Hiring and firing </li>
							<li>Negotiating settlements of claims </li>
							<li>Negotiating severance arrangements </li>
							<li>Non-compete covenants</li>
							<li>Non-solicitation covenants</li>
							<li>Wrongful discharge and discrimination</li>
                        </ul>
                    </section>
                    <p>Want to learn more.  Check out our Employment Law Blog.</p>
                    <div class="btn-group">
						<a class="btn btn-primary btn-sm" href="http://www.soundemploymentlaw.com/" target="_blank">
						Employment Law Blog 
						</a>
						</div>
                </article>
            </div>
        </div>
    </body>
</html>
