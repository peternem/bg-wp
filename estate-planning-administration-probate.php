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
                        <h1>Estate Planning &amp; Administration/Probate</h1>
                        <p>BGWP successfully helps individuals create estate plans that allow the estate to be administered in the most tax efficient and cost effective manner as possible.</p>
                        <ul>
							<li>Estate Plans</li>
							<li>Estate plan administration</li>
							<li>Probates</li>
                        </ul>
                        <h2> Estate Planning Questionnaires</h2>
                        <p>Estate Planning can be a complicated process, and your BGWP Estate Planning Attorney will take many things into consideration when determining the documents necessary for you and your family.  Before coming in for your first meeting with one of BGWP’s Estate Planning Attorneys, please take the time to complete an Estate Planning Questionnaire.  This Questionnaire will ask you many questions that will help gather the information necessary for your BGWP Attorney to begin a comprehensive Estate Plan.</p>
                        <!-- Single button -->
						<div class="btn-group">
						  <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">
						    Select a Questionnaire<span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" role="menu">
						    <li><a href="/assets/docs/estate-planning/EP Questionnaire HW revised 3-19-14.pdf" target="_blank">Husband and Wife</a></li>
						    <li><a href="/assets/docs/estate-planning/EP Questionnaire Partners.pdf" target="_blank">Partners</a></li>
						    <li><a href="/assets/docs/estate-planning/EP Questionnaire Single Revised 8-4-14.pdf" target="_blank">Single Person</a></li>
						  </ul>
						</div>
						<h2>Estate Planning &amp; Administration/Probate Articles</h2>
						<p>Interested in learning more about Trust Administration, Estate Plans and Probate?  A number of articles on these topics are provided here:</p>
                    	<div class="btn-group">
						  <button type="button" class="btn btn-sm  btn-primary dropdown-toggle" data-toggle="dropdown">
						    Select an Article<span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" role="menu">
						    <li><a href="/assets/docs/estate-planning/ACTEC_What _It_Means_to_be_a_Trustee.pdf" target="_blank">What it Means to be a Trustee</a></li>
						    <li><a href="/assets/docs/estate-planning/AN OVERVIEW_OF_TRUST_ADMINISTRATION_rev.5.1.14.pdf" target="_blank">An Overview of Trust Administration</a></li>
						  </ul>
						</div>
						<h2>Estate Planning Blog</h2>
						<p>BGWP’s Estate Planning Blog provides information regarding estate planning, trusts and probate.  Click here to access to the BGWP Estate Planning Blog:</p>
						<a href="http://www.olympiaestateplanning.blogspot.com/"  class="btn-primary btn-sm" target="_blank">www.olympiaestateplanning</a>
                    </section>
                </article>
            </div>
        </div>
    </body>
</html>
