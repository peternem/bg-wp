// JavaScript Document
// Jquery Main Navigation Rollover button scripts

$(document).ready(function() {
	
	// Preload all rollovers
	$(".socialIcon a img").each(function() {
		// Set the original src
		rollsrc = $(this).attr("src");
		rollON = rollsrc.replace('off', 'on');
		newImg = new Image(); // create new image obj
		$(newImg).attr("src", rollON); // set new obj's src
	});
	
	// Navigation rollovers
	$(".socialIcon a").mouseover(function(){
		imgsrc = $(this).children("img").attr("src");
		
		if (typeof(imgsrc) != 'undefined') {
		imgsrcON = imgsrc.replace('off', 'on');
		$(this).children("img").attr("src", imgsrcON);
		}	
	});
	
	// Handle mouseout
	$(".socialIcon a").mouseout(function(){
		if (typeof(imgsrc) != 'undefined') {
		$(this).children("img").attr("src", imgsrc);
		}
	});	
});



