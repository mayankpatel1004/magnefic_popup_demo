<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="js/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="css/magnific-popup.css"> 
<script>
$(function () {
	$('.popup-modal').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#username',
		modal: true
	});
	$(document).on('click', '.popup-modal-dismiss', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});
});
</script>
</head>
<body>
<a class="popup-modal" href="#test-modal">Open modal</a>

<div id="test-modal" class="white-popup-block mfp-hide">
	<h1>Modal dialog</h1>
	<p>You won't be able to dismiss this by usual means (escape or
		click button), but you can close it programatically based on
		user choices or actions.</p>
	<p><a class="popup-modal-dismiss" href="#">Dismiss</a></p>
</div>

</body>
</html>