<?php

// Lawyer flag for main nav menu

$navFlag = 'lawyer';
?>

<?php
function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

$urlString = substr(curPageName(), 0, -4);
echo $str = str_replace("-", " ",$urlString);
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

        <title>Bean Gentry Wheeler &amp; Peternell PLLC - Hannah Steinweg McDonald</title>

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

            <div class="mid-panel profile hsm">
                <img src="assets/img/bgwp_logo_new.gif" alt="Bean | Gentry | Wheeler | Peternell PLLC" class="bgwpLogo" title="Bean | Gentry | Wheeler | Peternell PLLC" />
                <?php
				include 'includes/sitewide-attorneys-subnav-menu.php';
                ?>
                <article>
                    <section>
                        <header>
                            <h1>Hannah Steinweg McDonald</h1>
                            <h2 class="attorneyAtLaw">Attorney at Law</h2>
                            <div class="phoneEmail">
                                <a href="mailto:hmcdonald@bgwp.net">hmcdonald@bgwp.net</a>
                            </div>
                        </header>
                    </section>
                    <section>
                        <h4 class="practiceType">Business, Health Care, Non-Profit, Employment, &amp; Property Law</h4>
                        <p>Hannah McDonald focuses her practice in the areas of business, non-profit, real property, and employment law.
                            With a Masters of Public Administration and five years working in the non-profit sector in Olympia,
                            Hannah has a strong connection to, and understanding of, the Olympia community.  While in law school,
                            Hannah was a law clerk at BGWP, gaining experience in business law, health care law, employment law,
                            and property law.</p>
                        <div class="moreInfoLink">
                            <a href="pdf/hannah_s_mcDonald_092213.pdf" target="_blank">More Information &raquo;</a>
                    </section>
                </article>

            </div>
            <div id="rightPanel" class="right-panel hsm"></div>
        </div>
    </body>
</html>