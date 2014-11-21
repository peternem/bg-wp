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

        <title>Bean Gentry Wheeler &amp; Peternell PLLC - Administrative Law</title>

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
                ?>              </div>
            <div class="right-panel practice-type">
                <article>
                    <section>
                        <h1>Administrative Law</h1>
                        <p>BGWP offers experienced counsel in administrative and regulatory actions brought by state agencies, boards and commissions.</p>
                        <ul>
                            <li>Administrative Procedure Act proceedings</li>
                            <li>City Complaints or Actions</li>
                            <li>Complaints, actions or investigations brought by State agencies, boards or commissions</li>
                            <li>Defense in actions / complaints / investigations brought by Department of Health
                                <ul>
                                    <li>Licensing</li>
                                    <li>Disciplinary Proceedings</li>
                                    <li>Medical Quality Assurance Commission Proceedings</li>
                                    <li>Nursing Care Quality Assurance Commission Proceedings</li>
                                    <li>Regulatory Proceedings of Medical Professionals</li>
                                </ul></li>
                            <li>Defense in actions / complaints / investigations brought by Health Care Authority
                                <ul>
                                    <li>Audits</li>
                                    <li>Overpayments</li>
                                </ul></li>
                            <li>Defense in actions / complaints / investigations brought by Department of Licensing</li>
                            <li>Defense in actions / complaints / investigations brought by Department of Social and Health Services
                                <ul>
                                    <li>Adult protective services
                                        <ul>
                                            <li>Findings by APS alleging abuse, neglect, financial exploitation of a vulnerable adult</li>
                                        </ul></li>
                                    <li>Resident Client Protection Program
                                        <ul>
                                            <li>Actions by DSHS alleging abuse, neglect, or financial exploitation of a vulnerable adult by a medical professional</li>
                                        </ul></li>
                                    <li>Developmental disabilities administration</li>
                                </ul></li>
                            <li>Department of Natural Resources Actions</li>
                            <li>Department of Revenue Proceedings</li>
                            <li>Department of Transportation Sign Enforcement Proceedings</li>
                            <li>Employment Security Department Proceedings</li>
                            <li>Executive Ethics Board Complaints / Investigations</li>
                        </ul>
                    </section>
                </article>
            </div>
        </div>
    </body>
</html>
