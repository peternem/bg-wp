<?php
// flag for main nav menu
$navFlag = 'practice-type';
?>
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
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="description" content="Bean, Gentry, Wheeler &amp; Peternell, PLLC - Advisors to Northwest businesses, professionals and property owners since 1968."/>
        <meta name="keywords" content="Washington Law, Washington Lawyers, Washington Attorneys, Northwest Law, Northwest Lawyers, Northwest attorneys, business law, property law, Olympia"/>
        <meta name="author" content="Bean Gentry Wheeler & Peternell, PLLC"/>

        <!-- Note there is no responsive meta tag here -->

        <link rel="shortcut icon" href="assets/ico/favicon.png">

        <title>Bean, Gentry, Wheeler &amp; Peternell, PLLC - <?php echo $stringUrl; ?> </title>

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
                        <h1>Municipal Law</h1>
                        <p>BGWP successfully helps individuals create estate plans that allow the estate to be administered in the most tax efficient and cost effective manner as possible.</p>
                        <ul>
							<li>Land use decisions</li>
							<li>Growth management</li>
							<li>Municipal financing</li>
							<li>Personnel matters</li>
							<li>Public records and open meetings</li>
							<li>Shoreline management</li>
							<li>Local improvement districts</li>
							<li>Civil service</li>
                        </ul>
                    </section>
                </article>
            </div>
        </div>
    </body>
</html>
