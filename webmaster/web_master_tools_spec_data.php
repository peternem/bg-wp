<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>BGWP Webmaster Tools</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<div id="wrapper">
  <article id="mainImage">
    <hgroup id="dlr_tools_panel" class="indexTitle_dlr">
      <h1>BGWP Webmaster Tools</h1>
      <p>This section of the website has been developed to help support BGWP website. All of the files on this page are downloadable.</p>
    </hgroup>
   </article>
  <article id="mainContent">
    <?php
if (($_SERVER['PHP_AUTH_USER']== $username) && ($_SERVER['PHP_AUTH_PW']== $password)){ ?>
    <section class="aboutbox1">
      <h3>BGWP Webmaster Tools Login Error!</h3>
      <h4>You have reached this page without submitting the correct login and password to access! Click the login button below to try again.</h4>
      <p> <a href="web_master_tools_login.php" class="button" style="margin:10px 0px 0px 0px;">Login</a> </p>
    </section>
    <?php } else { ?>
    <section class="aboutbox1">
      <h3>Specifications Page - PDF Uploader and Jpeg Thumbnail Creater </h3>
      <h4>Select a PDF Doc and Upload.  A Jpeg thumbnail image will be auto created. The image and pdf will be located on the Promotions or Specification pages.</h4>
      		<form method="post" action="" enctype="multipart/form-data">
		   <!-- <p>Step 1: Select a Category to upload to.</p>
		    <p><select name="categoryDirList">
			  <option value="0">Select</option>
			  <option value="specData">Specifications</option>
			</select> </p> -->
		   <p>Step 1: Select a Brand Directory to upload to.</p>
		   <p><select name="brandDirList">
			  <option value="0">Select</option>
			  <option value="ann-c-harrie">Ann C Harrie</option>
			  <option value="brent-dille">Brent Dille</option>
			   <option value="fred-gentry">Fred Gentry</option>
			  <option value="cheryl-l-duryea">Cheryl L Duryea</option>
			  <option value="gerry-alexander">Gerry Alexander</option>
			  <option value="hannah-steinweg-mcdonald">Hannah Steinweg McDonald</option>
			  <option value="john-a-kesler">John A kesler</option>
			  <option value="mark-peternell">Mark Peternell</option>
			  <option value="mark-l-wheeler">Mark Wheeler</option>
			  <option value="m-john-way">M. John Way</option>
			  <option value="ryan-d-white">Ryan D White</option>
			  <option value="stephen-j-bean">Stephen J Bean</option>
			  <option value="stephen-manning">Stephen Manning</option>
			  <option value="james-randall">James Randall</option>
			</select> </p>
		   <p>Step 2: Select a Document type</p>
		   <p><select name="docTypeList">
			  <option value="0">Select</option>
			  <option value="article">article</option>
			  <option value="resume">resume</option>
			</select> </p>
			
			<p>Step 3: Select a PDF document to upload.</p>
		   <p><input type="file" name="pdf"/></p>
		   <p>Step 4: Submit.</p>
		  
		    <p> <input type="hidden" name="process" value="1" />
		    	<input type="submit" name="submit" value="Upload" /></p>
		</form>
        <?php

		if ($_POST['process'] == 1) {

			$categoryDirList = $_POST["categoryDirList"];
			$docTypeList = $_POST["docTypeList"];
			$brandDirList = $_POST["brandDirList"];

			$pdfDirectory = "../assets/docs/".$brandDirList."/".$docTypeList."/";
			//$pdfDirectory = $categoryDirList."/".$docTypeList."/".$brandDirList."/".$uploadDir;
			$thumbDirectory = "../assets/docs/".$brandDirList."/thumbnail/";

			// $pdfDirectory = "pdf/";
			// $thumbDirectory = "pdfimage/";

			if ($_POST['categoryDirList'] == '0' && $_POST['docTypeList'] == '0' && $_POST['brandDirList'] == '0') {
				echo "<p class='error'>Please complete Step 1, 2, 3 and 4.</p>";
			
			} else if ($_POST['categoryDirList'] == '0') {
				echo "<p class='error'>Please complete Step 1, 2, 3 and 4.</p>";
			
			
			} else if ($_POST['docTypeList'] == '0') {
				echo "<p class='error'>Please complete Step 1, 2, 3 and 4.</p>";
			
			
			} else if ($_POST['brandDirList'] == '0') {
				echo "<p class='error'>Please complete Step 1, 2, 3 and 4.</p>";
			
			} else {
				//echo "<p class='error'>PDF Doc Location: ".$pdfDirectory."</p>";
				//echo "<p class='error'>PDF Thumb Img Location: ".$thumbDirectory."</p>";
				// //get the name of the file
				$filename = basename($_FILES['pdf']['name'], ".pdf");

				//remove all characters from the file name other than letters, numbers, hyphens and underscores
				$filename = preg_replace("/[^A-Za-z0-9_-]/", "", $filename) . ".pdf";

				//name the thumbnail image the same as the pdf file
				$thumb = basename($filename, ".pdf");

				if (move_uploaded_file($_FILES['pdf']['tmp_name'], $pdfDirectory . $filename)) {

					//the path to the PDF file
					$pdfWithPath = $pdfDirectory . $filename;

					//add the desired extension to the thumbnail
					$thumb = $thumb . ".jpg";

					//execute imageMagick's 'convert', setting the color space to RGB and size to 200px wide
					exec("convert \"{$pdfWithPath}[0]\" -colorspace RGB -geometry 200 $thumbDirectory$thumb");

					//show the image

					echo "<p><a href=\"$pdfWithPath\"><img src=\"" . $thumbDirectory . "$thumb\" class=\"pdfImgUpload\"/></a></p>";
					echo "<p>Category Directory: " . $categoryDirList . "</p>";
					echo "<p>Parent Directory Upload Directory: " . $pdfDirectory . "</p>";
					echo "<p>PDF Upload Directory: " . $pdfDirectory . "</p>";
					echo "<p>File Name: " . $filename . "</p>";
					echo "<p>PDF uploaded successfully!</p>";
				}
			}
		}
	?>
	<h3 style="margin:50px 0px 0px 0px;">Webmaster Navigation Menu</h3>
	<ul style="margin:15px 0px 20px 20px;">
          <li><a href="web_master_tools.php">Webmaster Tools Homepage</a></li>
          <!-- <li><a href="web_master_tools_promo_data.php">Upload Promo PDF Documents</a></li> -->
        </ul>
    </section>
    <?php } ?>
  </article>
</div>
</body>
</html>
