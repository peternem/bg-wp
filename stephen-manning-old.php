<?php

// Lawyer flag for main nav menu

$navFlag = 'lawyer';
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

        <title>Bean Gentry Wheeler &amp; Peternell PLLC - Stephen Manning</title>

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
            <div class="left-panel lawyers">
                <?php
				include 'includes/sitewide-mainNavMenu1.php';
                ?>
            </div>
            <div class="mid-panel profile sm">
                <img src="assets/img/bgwp_logo_new.gif" alt="Bean | Gentry | Wheeler | Peternell PLLC" class="bgwpLogo" title="Bean | Gentry | Wheeler | Peternell PLLC" />
                <?php
				include 'includes/sitewide-attorneys-subnav-menu.php';
                ?>
                <article>
                    <section>
                        <header>
                            <h1>Stephen Manning</h1>
                            <h2 class="attorneyAtLaw">Attorney at Law</h2>
                            <div class="phoneEmail">
                                <a href="mailto:smanning@bgwp.net">smanning@bgwp.net</a>
                            </div>
                        </header>
                    </section>
                    <section>
                        <h4 class="practiceType">Business, Employment, Real Estate, Health Care, and Administrative law.</h4>
                        <p>Stephen Manning’s current practice emphasizes litigation and client advice in the areas of business, employment, real estate, health care, and administrative law.  As a small business owner himself, Stephen knows the value of obtaining timely practical advice so that his clients can have the timely answers they need.  In litigation matters, he has achieved good results for clients in trials, mediations, arbitrations, and administrative hearings.  Whatever your case may involve, Stephen’s focus is on providing you effective representation that produces positive results for you. </p>
                        <div class="moreInfoLink">
                            <a href="pdf/stephen_manning_072713.pdf" target="_blank">More Information  &raquo;</a>
                        </div>
                    </section>
                </article>
            </div>
            <div class="right-panel sm"></div>
        </div>
    </body>
</html>