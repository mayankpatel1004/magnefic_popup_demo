<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="js/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="css/magnific-popup.css"> 
<script type="text/javascript">
$(document).ready(function() {

	$('.simple-ajax-popup-align-top').magnificPopup({
		type:'ajax',
		alignTop:true,
		overflowY:'scroll' //as we know that popup content is tall we set scroll overflow by default to avoid jump
	});

	$('.simple-ajax-popup').magnificPopup({
		type: 'ajax'
	});
});
</script>
</head>
<body>
<a class="simple-ajax-popup-align-top" href="ajaxresponse.php">Load content via ajax</a><br>
<a class="simple-ajax-popup" href="ajaxresponse2.php">Load another content via ajax</a>
</body>
</html>


