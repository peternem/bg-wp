<?php

// Lawyer flag for main nav menu

$navFlag = 'lawyer';
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
        <meta name="description" content="Bean, Gentry, Wheeler &amp; Peternell, PLLC - Advisors to Northwest businesses, professionals and property owners since 1968."/>
        <meta name="keywords" content="Washington Law, Washington Lawyers, Washington Attorneys, Northwest Law, Northwest Lawyers, Northwest attorneys, business law, property law, Olympia"/>
        <meta name="author" content="Bean, Gentry, Wheeler &amp; Peternell, PLLC"/>

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

        <?php
		include 'includes/sitewide-javascript-files.php';
        ?>

        <?php
		include_once ("includes/googleAnalytics.php");
        ?>
    </head>

    <body>
        <div id="wrapper">
            <div class="left-panel lawyers">
                <?php
				include 'includes/sitewide-mainNavMenu1.php';
                ?>
            </div>
            <div class="mid-panel profile sjb">
                <img src="assets/img/bgwp_logo_new.gif" alt="Bean | Gentry | Wheeler | Peternell PLLC" class="bgwpLogo" title="Bean | Gentry | Wheeler | Peternell PLLC" />
                <?php
				include 'includes/sitewide-attorneys-subnav-menu.php';
                ?>
                <article>
                    <section>
                        <header>
                            <h1><?php echo $stringUrl; ?></h1>
                            <h2 class="attorneyAtLaw">Attorney at Law</h2>
                            <div class="phoneEmail">
                                <a href="mailto:olyatty@bgwp.net">olyatty@bgwp.net</a>
                            </div>
                        </header>
                    </section>
                    <section>
                        <h4 class="practiceType">Business, Healthcare &amp; Employment Law
                        <br>
                        Mediation &amp; Arbitration</h4>
                        <p>In his more than 45 years as a Washington attorney, Stephen Bean has seen and done it all.  Since 2000, he has been named a “Washington Super Lawyer” five times by Washington Law & Politics magazine, a state-wide honor, and in 2008 he was named Lawyer of the Year by the Thurston County Bar Association.  He has been called “one of the state’s best” by Seattle Magazine.</p>
						<div class="moreInfoLink">
							<!-- Button trigger modal -->
							<div class="btn-group">
								<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
									Resume &raquo;
								</button>
								<!-- <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
									Articles &raquo;
								</button> -->
							</div>
						</div>
                    </section>
                </article>
            </div>
            <div class="right-panel sjb"></div>
        </div>
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title" id="myModalLabel"><?php echo $stringUrl; ?> Articles and Resume</h4>
					</div>
					<div class="modal-body">
						<!-- <h3>Articles:</h3> -->
						<ul class="installDocs">
							<?php
							$dirName = "stephen-j-bean";
							$dir = "./assets/docs/$dirName/article";
							if (is_dir($dir)) {
							    if ($dh = opendir($dir)) {
								    while (($file = readdir($dh)) !== false) {
								        if ($file != "." && $file != ".." && $file != ".htaccess") {
								            $name = basename($file, '.pdf'); // Removes file extension  
											?>
											<li class="boxListItem">
												<a href="<?php echo $dir."/".$file; ?>" target="_blank">
													<img class="box" alt='pdf' src="assets/docs/<?php echo $dirName ?>/thumbnail/<?php echo $name ?>.jpg"/>
													<a href="<?php echo $dir."/".$file; ?>" target="_blank"><?php echo $file ?></a>
												</a>
											</li>
													
											<?php
								        }
								    }
							    	closedir($dh);
							    }
							}
							?>
						</ul>
						<h3>Resume:</h3>
						<ul class="installDocs">
							<?php
							$dirName = "stephen-j-bean";
							$dir = "./assets/docs/$dirName/resume";
							if (is_dir($dir)) {
							    if ($dh = opendir($dir)) {
								    while (($file = readdir($dh)) !== false) {
								        if ($file != "." && $file != ".." && $file != ".htaccess") {
								            $name = basename($file, '.pdf'); // Removes file extension  
											?>
											<li class="boxListItem">
												<a href="<?php echo $dir."/".$file; ?>" target="_blank">
													<img class="box" alt='pdf' src="assets/docs/<?php echo $dirName ?>/thumbnail/<?php echo $name ?>.jpg"/>
													<a href="<?php echo $dir."/".$file; ?>" target="_blank"><?php echo $file ?></a>
												</a>
											</li>
													
											<?php
								        }
								    }
							    	closedir($dh);
							    }
							}
							?>
						</ul>
					</div>
					<!-- <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Close
						</button>
					</div> -->
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
    </body>
</html>