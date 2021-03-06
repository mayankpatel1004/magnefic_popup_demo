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

<!-- link that opens popup -->
<a class="popup-with-form" href="#test-form">Open form</a>

<!-- form itself -->
<form id="test-form" class="white-popup-block mfp-hide">
	<h1>Form</h1>
	<fieldset style="border:0;">
		<p>Lightbox has an option to automatically focus on the first input. It's strongly recommended to use <code>inline</code> popup type for lightboxes with form instead of <code>ajax</code> (to keep entered data if the user accidentally refreshed the page).</p>
		<ol>
			<li>
				<label for="name">Name</label>
				<input id="name" name="name" placeholder="Name" required="" type="text">
			</li>
			<li>
				<label for="email">Email</label>
				<input id="email" name="email" placeholder="example@domain.com" required="" type="email">
			</li>
			<li>
				<label for="phone">Phone</label>
				<input id="phone" name="phone" placeholder="Eg. +447500000000" required="" type="tel">
			</li>
			<li>
				<label for="textarea">Textarea</label><br>
				<textarea id="textarea">Try to resize me to see how popup CSS-based resizing works.</textarea>
			</li>
		</ol>
	</fieldset>
</form>

<script type="text/javascript">
$(document).ready(function() {
	$('.popup-with-form').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#name',

		// When elemened is focused, some mobile browsers in some cases zoom in
		// It looks not nice, so we disable it:
		callbacks: {
			beforeOpen: function() {
				if($(window).width() < 700) {
					this.st.focus = false;
				} else {
					this.st.focus = '#name';
				}
			}
		}
	});
});
</script>
</body>
</html>