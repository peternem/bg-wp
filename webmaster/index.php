<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>BGWP - Webmaster Tools</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<div id="wrapper">
  <h1>BGWP WebMaster Tools</h1>
 

	<article id="mainImage">
		<hgroup id="dlr_tools_panel" class="indexTitle_dlr">
			<h1>BGWP Webmaster Tools</h1>
			<p>This section of the website has been developed to help support BGWP website.</p>
		</hgroup>
	<article id="mainContent">


<?php if (($_SERVER['PHP_AUTH_USER']== $username) && ($_SERVER['PHP_AUTH_PW']== $password)) { ?>
	
	    <section class="aboutbox1">
	      <h3>BGWP Webmaster Tools Login Error!</h3>
	      <h4>You have reached this page without submitting the correct login and password to access. Click the login button below to try again.</h4>
	      <p> <a href="web_master_tools_login.php" class="button" style="margin:10px 0px 0px 0px;">Login</a> </p>
	    </section>
    
<?php } else { ?>
	
	    <section class="aboutbox1">
	 	<h3>Webmaster Tools - Links</h3>
	      <h4>Click the links below to access a variety of Mode Distributing dealer specific pages.</h4>
	        <ul style="margin-bottom:100px">
	          <!-- <li><a href="web_master_tools_prom_data.php">Upload Promotion PDF Documents</a></li> -->
	          <li><a href="web_master_tools_spec_data.php">Upload Resume and Article PDF Documents</a></li>
	        </ul>
	      </ul>
	    </section>
<?php } ?>
  </article>
</div>
</body>
</html>
