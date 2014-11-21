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

        <title>Bean Gentry Wheeler &amp; Peternell PLLC - Health Care</title>

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
                        <h1>Health Care</h1>
                        <p>Our firm represents dozens of local and regional health-care providers. We have exceptional experience in navigating the dynamic legal world of the health-care industry.</p>
                        <h3>Acquisition of Other Practices</h3>
                        <h3>Ambulatory Surgical Centers </h3>
                        <h3>Anti-Rebate Statute</h3>
                        <h3>HIPAA Compliance</h3>
                        <h3>Medicare/Medicaid Audits</h3>
                        <h3>Medical Records Disclosure</h3>
                        <h3>PLLC Organization</h3>
                        <ul>
                            <li>Buy-ins and buy-outs </li>
                            <li>Employee disputes</li>
                            <li>Employment agreements </li>
                            <li>Formation </li>
                            <li>General business services </li>
                            <li>Operating agreements </li>
                            <li>Practice disputes</li>
                        </ul>
                        <h3>Physician Ancillary Services</h3>
						<h3>Physician-Hospital Relationships</h3>
						<h3>Physician Joint Ventures</h3>
						<h3>Practice Breakups and Physician Departures</h3>
						<h3>Reimbursement of Physician Services</h3>
						<h3>Sale of Medical Practice to Hospitals</h3>
						<h3>Stark Law Anti Kickback and Regulatory Compliance</h3>
						<ul>
							<li>Self-referral concerns </li>
							<li>Compensation structuring</li>
						</ul>
						<h3>State Licensure Laws and Corporate Practice of Medicine</h3>
                    </section>
                </article>
            </div>
        </div>
    </body>
</html>
