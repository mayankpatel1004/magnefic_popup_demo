<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="js/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="css/magnific-popup.css"> 
</head>
<body>

<a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto">Open YouTube video</a><br>
<a class="popup-vimeo" href="https://vimeo.com/45830194">Open Vimeo video</a><br>
<a class="popup-gmaps" href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom">Open Google Map</a>

<script>
$(document).ready(function() {
	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});
});
</script>

<style>
/**
 * Simple fade transition,
 */
.mfp-fade.mfp-bg {
	opacity: 0;
	-webkit-transition: all 0.15s ease-out; 
	-moz-transition: all 0.15s ease-out; 
	transition: all 0.15s ease-out;
}
.mfp-fade.mfp-bg.mfp-ready {
	opacity: 0.8;
}
.mfp-fade.mfp-bg.mfp-removing {
	opacity: 0;
}

.mfp-fade.mfp-wrap .mfp-content {
	opacity: 0;
	-webkit-transition: all 0.15s ease-out; 
	-moz-transition: all 0.15s ease-out; 
	transition: all 0.15s ease-out;
}
.mfp-fade.mfp-wrap.mfp-ready .mfp-content {
	opacity: 1;
}
.mfp-fade.mfp-wrap.mfp-removing .mfp-content {
	opacity: 0;
}
</style>

</body>
</html>