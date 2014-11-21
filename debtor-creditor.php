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

        <title>Bean Gentry Wheeler &amp; Peternell PLLC - Debtor/Creditor</title>

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
                        <h1>Debtor/Creditor</h1>
                        <p>BGWP provides representation and counsel to businesses and individuals across a broad range of debtor and creditor matters.  BGWP represents local and regional banks, lending institutions, private lenders, and individuals and has successfully resolved many cases in state and federal courts as well as bankruptcy courts. BGWP’s services include:</p>
                        <ul>
                            <li>Enforcement of judgments</li>
                            <li>Enforcement of promissory notes</li>
                            <li>Execution on real and personal property</li>
                            <li>Forbearance agreements</li>
                            <li>Garnishments </li>
                            <li>Pre and post judgment attachment</li>
                            <li>Representation of creditors in bankruptcy proceedings</li>
                            <li>Representation of debtors and creditors in receiverships</li>
                            <li>Supplemental proceedings</li>
                            <li>Workouts and debt renegotiation</li>
                        </ul>
                    </section>
                </article>
            </div>
        </div>
    </body>
</html>
