<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="content-language" content="pt" />
<meta name="rating" content="General" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />
<meta name="author" content="" />
<meta name="language" content="pt-br" />
<meta name="title" content="" />
<!--<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />-->

<title></title>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/style-page.css" media="screen" />
<link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css" media="screen" />

<!-- JQUERY -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>

<!-- BOOTSTRAP -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
	//jQuery.noConflict();

	$(document).ready(function(){
		$('.place-textarea textarea').keypress(function(event) {
			$(this).siblings('.placeholder').hide();
		});

		$('.place-textarea textarea').blur(function(event) {
			if($(this).val() == ''){
				$(this).siblings('.placeholder').show();
			}
		});

		if($('.place-textarea textarea').val() != ''){
			$('.place-textarea textarea').siblings('.placeholder').hide();
		}
	});
</script>

</head>