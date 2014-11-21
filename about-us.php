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

        <title><?php echo $stringUrl; ?> - Bean Gentry Wheeler &amp; Peternell PLLC</title>

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
        
         <?php include 'includes/sitewide-javascript-files.php'; ?>

		<?php include_once("includes/googleAnalytics.php"); ?>
 		
    </head>

    <body>
        <div id="wrapper">
            <div class="left-panel about">
                <?php
				include 'includes/sitewide-mainNavMenu1.php';
				?>
            </div>
            <div class="mid-panel about">
                <article>
                    <section>
                        <img src="assets/img/bgwp_logo_new.gif" alt="Bean | Gentry | Wheeler | Peternell PLLC" class="bgwpLogo" title="Bean | Gentry | Wheeler | Peternell PLLC" />
                        <header>
                            <h1><?php echo $stringUrl; ?></h1>
                            <h2>The law firm of Bean Gentry Wheeler and Peternell, PLLC and its attorneys have been serving the Pacific Northwest including Olympia and Seattle Washington and Bend, Oregon for over 40 years. </h2>
                        </header>
                    </section>
                </article>
            </div>
            <div class="right-panel about">
                <p>BGWP and its attorneys serve businesses, professionals, health-care providers, property owners, lenders and other members of the community, providing practical solutions with an approachable attitude.  Although we have grown to be one of the largest law firms in Olympia, we take pride in providing personalized service, which means promptly responding to our clients’ needs.  Your telephone calls and e-mails will always be timely answered.</p>
                <!-- <p>Our attorneys understand the entrepreneurial spirit and go beyond a mere study of the law in order to understand the industries and markets in which our clients are involved.  Whether in friendly negotiations or high-stakes litigation, we are committed to moving your case forward, providing efficient solutions and getting high-quality results.</p> -->
                <p>To learn more about our attorneys, law practice areas and community involvement, please click the links below:</p>
                <p><a href="practice-areas.php" title="Law Practice Areas" class="btn btn-default btn-sm">Practice Areas</a></p>
                <p><a href="attorneys.php" title="Attorney Profiles" class="btn btn-default btn-sm">Attorney Profiles</a></p>
            </div>
        </div>
    </body>
</html>
