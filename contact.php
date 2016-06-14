<?php
// Lawyer flag for main nav menu
$navFlag = '';
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
        <meta charset="utf-8">
        <?php include 'includes/meta-seo-tags.php'; ?>

        <!-- Note there is no responsive meta tag here -->

        <link rel="shortcut icon" href="assets/ico/favicon.png">

        <title><?php echo $stringUrl; ?> - Bean, Gentry, Wheeler &amp; Peternell, PLLC</title>

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
            <div class="left-panel contact">
                <?php
				include 'includes/sitewide-mainNavMenu1.php';?>
            </div>
            <div class="mid-panel contact">
            	<img src="assets/img/bgwp_logo_new.gif" alt="Bean | Gentry | Wheeler | Peternell PLLC" class="bgwpLogo" title="Bean | Gentry | Wheeler | Peternell PLLC" />
                <article>
                    <section>                   
                        <header>
                            <h1><?php echo $stringUrl; ?></h1>
                            <h2>BGWP has law office locations in Bend, Oregon and Olympia and Seattle, Washington.</h2> 
                        </header>
                     <section>
                     	<p>Feel free to contact us. Our legal areas of expertise include:</p>
                     	<div class="officeInfo">
                     		<ul>
                     		<li>Administrative Law</li>
						    <li>Banking Law</li>
						    <li>Business Law</li>
						    <li>Employment Law</li>
						    <li>Environmental Law</li>
						    <li>Estate Planning</li>
						    <li>Health Care &amp; Insurance Coverage</li>
						    <li>Land Use</li>
						    <li>Litigation</li>
						    <li>Municipal Law</li>
						    <li>Personal Injury And Wrongful Death</li>
						    <li>Real Estate</li>
                     	</ul>
                     	</div>
                     </section>
                        <!-- <div class="officeInfo">
                            <ul>
                                <li><span class="office">Email:</span><a href="mailto:bgwpinfo@bgwp.net">bgwpinfo@bgwp.net</a></li>
                            </ul>
                            <ul>
                                <li><span class="office">Olympia Offices:</span></li>
                                <li>910 Lakeridge Way SW</li>
                                <li>Olympia, Washington 98502</li>
                                <li>Tel: (360)357-2852</li>
                                <li>Fax: (360) 786-6943</li>
                            </ul>
                            <ul>
                                <li><span class="office">Seattle Offices:</span></li>
                                <li>2211 Elliott Avenue, Suite 200 </li>
                                <li>Seattle, Washington  98121</li>
                                <li>Tel: (206)455-2887 </li>
                            </ul>
                            <ul>
                                <li><span class="office">Bend Offices:</span></li>
                                <li>56885 Enterprise Drive, Suite 101-D</li>
                                <li>Sunriver, Oregon 97707</li>
                                <li>Tel: (541)593-0322</li>
                            </ul>
                        </div> -->
                    </section>
                </article>
            </div>
            <div class="right-panel contact">
            	<div class="officeInfo">
                            <ul>
                                <li><span class="office">Email:</span><a href="mailto:bgwpinfo@bgwp.net">bgwpinfo@bgwp.net</a></li>
                            </ul>
                            <ul>
                                <li><span class="office">Olympia Offices:</span></li>
                                <li>910 Lakeridge Way SW</li>
                                <li>Olympia, Washington 98502</li>
                                <li>Tel: 360-357-2852</li>
                                <li>Fax: 360-786-6943</li>
                                <li>Directions: <a href="https://www.google.com/maps/dir/''/910+Lakeridge+Way+SW,+Olympia,+WA+98502/" target="_blank">Map View</a></li>
                            </ul>
                            <ul>
                                <li><span class="office">Seattle Offices:</span></li>
                                <li>2211 Elliott Avenue, Suite 200 </li>
                                <li>Seattle, Washington  98121</li>
                                <li>Tel: 206-455-2887</li>
                                <li>Parking: <a href="/pdf/Parking Information and Rates.pdf" target="_blank">Information and Rates</a></li>
                                <li>Directions: <a href="pdf/BGWP WTC Directions.pdf" target="_blank">Download</a></li>
                            </ul>
                            <ul>
                                <li><span class="office">Bend Offices:</span></li>
                                <li>750 NW Charbonneau Street, Suite 205</li>
                                <li>Bend, OR 97701</li>
                                <li>Tel: 541-593-0322</li>
                                <li>Directions: <a href="https://www.google.com/maps/place/750+NW+Charbonneau+St,+Bend,+OR+97701/@44.057778,-121.358102,18z/" target="_blank">Map View</a></li>
                            </ul>
                        </div></div>
        </div>
    </body>
</html>
