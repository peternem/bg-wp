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
        <meta name="description" content="Bean Gentry Wheeler & Peternell, PLLC - Advisors to Northwest businesses, professionals and property owners since 1968."/>
        <meta name="keywords" content="Washington Law, Washington Lawyers, Washington Attorneys, Northwest Law, Northwest Lawyers, Northwest attorneys, business law, property law, Olympia"/>
        <meta name="author" content="Bean Gentry Wheeler & Peternell, PLLC"/>

 <!-- Note there is no responsive meta tag here -->

        <link rel="shortcut icon" href="assets/ico/favicon.png">

        <title>Bean Gentry Wheeler &amp; Peternell PLLC - <?php echo $stringUrl; ?> </title>

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
            <div class="mid-panel profile rdw">
                <img src="assets/img/bgwp_logo_new.gif" alt="Bean | Gentry | Wheeler | Peternell PLLC" class="bgwpLogo" title="Bean | Gentry | Wheeler | Peternell PLLC" />
                <?php
				include 'includes/sitewide-attorneys-subnav-menu.php';
                ?>
                <article>
                    <section>
                        <header>
                            <h1>Ryan D. White</h1>
                            <h2 class="attorneyAtLaw">Attorney at Law</h2>
                            <div class="phoneEmail">
                                <a href="mailto:rwhite@bgwp.net">rwhite@bgwp.net</a>
                            </div>
                        </header>
                    </section>
                    <section>
                        <p>Ryan White has built his practice to provide comprehensive support for clients in the real estate industry. His experience includes structuring complex acquisitions and sales, due diligence, condominium formation, development, subdivisions, entitlements and permitting, financing, workouts, leasing, advising homeowners’ associations, easements, covenants, boundary issues and land use appeals.  He especially enjoys working with those who share his passion for the ways development can positively impact communities.</p>
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
            <div id="rightPanel" class="right-panel rdw">
                <!-- begin super lawyers badge -->
                <div id="super_lawyers_badge" style="margin:0; padding:0; line-height:1; font-size:1em; font:100 0.8em/1em 'Arial',sans-serif; position:absolute; bottom:10px; right:10px; outline:none; border: none;">
                    <div id="sl_badge_container_small" style="height:90px; width:120px; background-image:url('http://i.superlawyers.com/shared/badge/Lawyer/Basic/Small_white-gray.png'); text-align:center; outline:none; border: none;">
                        <table width="120px" border="0" cellpadding="0" cellspacing="0" frame="void" rules="none" summary="" dir="ltr" style="margin: 0; padding:0; line-height: 1; font-size: 100%; outline:none; border: none;">
                            <tr align="center" char="" charoff="" valign="bottom" style="width:120px; height:65px; vertical-align:bottom; margin: 0; padding:0; outline:none; border: none;">
                                <td align="center" colspan="1" rowspan="1" valign="bottom" style="margin: 0; padding:0; outline:none; border: none;"><a href="http://www.superlawyers.com/redir?r=http://www.superlawyers.com/washington/lawyer/Ryan-D-White/10347681-10c4-46b0-8efe-19b24a4a12ae.html&amp;c=basic_small_white-gray_badge&amp;i=10347681-10c4-46b0-8efe-19b24a4a12ae" title="View the profile of Washington Real Estate Attorney Ryan D. White" style="height:65px; width:120px; display:block; text-decoration:none; margin:0; padding:0; outline:none; border: none;"></a></td>
                            </tr>
                            <tr align="center" char="" charoff="" valign="bottom" style="height:23px; width:120px; margin: 0; padding:0; outline:none; border: none;">
                                <td style="height:19px; vertical-align:bottom; margVisit the official website of Super Lawyersin: 0; padding:0; outline:none; border: none;" valign="bottom" align="center" colspan="1" rowspan="1"><a href="http://www.superlawyers.com/redir?r=http://www.superlawyers.com&amp;c=basic_small_white-gray_badge&amp;i=home_page" alt="Visit the official website of Super Lawyers" title="Visit the official website of Super Lawyers" style="height:23px; width:120px; display:block; text-decoration:none; margin:0; padding:0; outline:none; border: none;"></a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div style="display:none;"><img src="http://www.superlawyers.com/services/badge/beacon/10347681-10c4-46b0-8efe-19b24a4a12ae/l/7.gif" width="1" height="1" border="0" />
                </div>
                <!-- end super lawyers badge -->
            </div>
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
							$dirName = "ryan-d-white";
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
							$dirName = "ryan-d-white";
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