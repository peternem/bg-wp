<?php
// flag for main nav menu
$navFlag = 'practice-type';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Bean Gentry Wheeler & Peternell, PLLC - Advisors to Northwest businesses, professionals and property owners since 1968."/>
        <meta name="keywords" content="Washington Law, Washington Lawyers, Washington Attorneys, Northwest Law, Northwest Lawyers, Northwest attorneys, business law, property law, Olympia"/>
        <meta name="author" content="Bean Gentry Wheeler & Peternell, PLLC"/>

        <!-- Note there is no responsive meta tag here -->

        <link rel="shortcut icon" href="assets/ico/favicon.png">

        <title>Bean Gentry Wheeler &amp; Peternell PLLC - Personal Injury and Wrongful Death</title>

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
                        <h1>Personal Injury and Wrongful Death</h1>
                        <p>We help families recover from the many impacts of the injury or death of a family member.</p>
                        <h3>Personal Injury</h3>
                        <ul>
                            <li>Representing people injured in:
                                <ul>
                                    <li>Auto accidents </li>
                                    <li>On-the-job accidents </li>
                                    <li>Motorcycle accidents </li>
                                    <li>Bicycle accidents </li>
                                    <li>Scuba diving accidents </li>
                                    <li>Construction accidents </li>
                                </ul></li>
                        </ul>
                        <h3>Wrongful Death</h3>
                        <ul>
                            <li>Representing families of those who die in:
                                <ul>
                                    <li>Auto accidents </li>
                                    <li>On-the-job accidents </li>
                                    <li>Motorcycle accidents </li>
                                    <li>Bicycle accidents </li>
                                    <li>Scuba diving accidents </li>
                                    <li>Construction accidents </li>
                                </ul></li>
                        </ul>
                    </section>
                </article>
            </div>
        </div>
    </body>
</html>
