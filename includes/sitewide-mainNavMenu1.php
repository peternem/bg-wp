<?php 
$file = basename($_SERVER['PHP_SELF']);
$info = pathinfo($file);
$file_name =  basename($file,'.'.$info['extension']);

/**** BEGIN - Main Nav Menu current page/Active Link Script ****/
switch ($file_name) {
	case($file_name=='index'):
		?>
	<div class="mainNavMenu1">
		<ul class="rollover1">
			<li id="home"><a href="index.php" class="link_btn active" title="Home"><span class="hover">Home</span></a></li>
			<li id="about-us"><a href="about-us.php" class="link_btn" title="About Us"><span class="hover">About Us</span></a></li>
			<li id="our-people"><a href="attorneys.php" class="link_btn" title="Our People"><span class="hover">Attorneys</span></a></li>
			<li id="practice-areas"><a href="practice-areas.php" class="link_btn" title="Practice Areas"><span class="hover">Practice Areas</span></a></li>
			<li id="contact"><a href="contact.php" class="link_btn" title="Contact"><span class="hover">Contact</span></a></li>
		</ul>
	</div>
	<?php
	include 'sitewide-officeLocations.php';
	break;
	case($file_name=='about-us'):
	?>
    <div class="mainNavMenu1">
		<ul class="rollover1">
			<li id="home"><a href="index.php" class="link_btn" title="Home"><span class="hover">Home</span></a></li>
			<li id="about-us"><a href="about-us.php" class="link_btn active" title="About Us"><span class="hover">About Us</span></a></li>
			<li id="our-people"><a href="attorneys.php" class="link_btn" title="Attorneys"><span class="hover">Attorneys</span></a></li>
			<li id="practice-areas"><a href="practice-areas.php" class="link_btn" title="Practice Areas"><span class="hover">Practice Areas</span></a></li>
			<li id="contact"><a href="contact.php" class="link_btn" title="Contact"><span class="hover">Contact</span></a></li>
		</ul>
	</div>
<?php
	include 'sitewide-officeLocations.php';
	break;
	case(($file_name=='attorneys') || ($navFlag == "lawyer")):
	?>
    <div class="mainNavMenu1">
        <ul class="rollover1">
        <li id="home"><a href="index.php" class="link_btn" title="Home"><span class="hover">Home</span></a></li>
          <li id="about-us"><a href="about-us.php" class="link_btn" title="About Us"><span class="hover">About Us</span></a></li>
			<li id="our-people"><a href="attorneys.php" class="link_btn active" title="Attorneys"><span class="hover">Attorneys</span></a></li>
          <li id="practice-areas"><a href="practice-areas.php" class="link_btn" title="Practice Areas"><span class="hover">Practice Areas</span></a></li>
          <li id="contact"><a href="contact.php" class="link_btn" title="link_btn"><span class="hover">Contact</span></a></li>
        </ul>
     </div>
<?php
	include 'sitewide-officeLocations.php';
	break;
	case($navFlag == 'practice-type'):
	?>
	<div class="mainNavMenu1">
		<ul class="rollover1">
			<li id="home"><a href="index.php" class="link_btn" title="Home"><span class="hover">Home</span></a></li>
			<li id="about-us"><a href="about-us.php" class="link_btn" title="About Us"><span class="hover">About Us</span></a></li>
			<li id="our-people"><a href="attorneys.php" class="link_btn" title="Attorneys"><span class="hover">Attorneys</span></a></li>
			<li id="practice-areas"><a href="practice-areas.php" class="link_btn active" title="Practice Areas"><span class="hover">Practice Areas</span></a></li>
			<li id="contact"><a href="contact.php" class="link_btn" title="Contact"><span class="hover">Contact</span></a></li>
		</ul>
	</div>
<?php
	include 'sitewide-officeLocations.php';
	break;
	case($file_name=='practice-areas'):
	?>
	<div class="mainNavMenu1">
		<ul class="rollover1">
			<li id="home"><a href="index.php" class="link_btn" title="Home"><span class="hover">Home</span></a></li>
			<li id="about-us"><a href="about-us.php" class="link_btn" title="About Us"><span class="hover">About Us</span></a></li>
			<li id="our-people"><a href="attorneys.php" class="link_btn" title="Attorneys"><span class="hover">Attorneys</span></a></li>
			<li id="practice-areas"><a href="practice-areas.php" class="link_btn active" title="Practice Areas"><span class="hover">Practice Areas</span></a></li>
			<li id="contact"><a href="contact.php" class="link_btn" title="Contact"><span class="hover">Contact</span></a></li>
		</ul>
	</div>
        <?php
	include 'sitewide-officeLocations.php';
	break;
	case($file_name=='contact'):
	?>
	<div class="mainNavMenu1">
		<ul class="rollover1">
			<li id="home"><a href="index.php" class="link_btn" title="Home"><span class="hover">Home</span></a></li>
			<li id="about-us"><a href="about-us.php" class="link_btn" title="About Us"><span class="hover">About Us</span></a></li>
			<li id="our-people"><a href="attorneys.php" class="link_btn" title="Attorneys"><span class="hover">Attorneys</span></a></li>
			<li id="practice-areas"><a href="practice-areas.php" class="link_btn" title="Practice Areas"><span class="hover">Practice Areas</span></a></li>
			<li id="contact"><a href="contact.php" class="link_btn active" title="Contact"><span class="hover">Contact</span></a></li>
		</ul>
	</div>
        <?php
        //include 'sitewide-officeLocations.php';
	break;
	default:
	?>
    <div class="mainNavMenu1">
		<ul class="rollover1">
			<li id="home"><a href="index.php" class="link_btn" title="Home"><span class="hover">Home</span></a></li>
			<li id="about-us"><a href="about-us.php" class="link_btn" title="About Us"><span class="hover">About Us</span></a></li>
			<li id="our-people"><a href="attorneys.php" class="link_btn" title="Attorneys"><span class="hover">Attorneys</span></a></li>
			<li id="practice-areas"><a href="practice-areas.php" class="link_btn" title="Practice Areas"><span class="hover">Practice Areas</span></a></li>
			<li id="contact"><a href="contact.php" class="link_btn" title="Contact"><span class="hover">Contact</span></a></li>
		</ul>
	</div>
        <?php	
        include 'sitewide-officeLocations.php';
}
?>
