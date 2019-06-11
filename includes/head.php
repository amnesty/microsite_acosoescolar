	<meta charset="UTF-8">
	<title><?php echo $page_title; ?></title>
	<meta name="description" content="<?php echo $description; ?>">
	<link rel="canonical" href="<?php echo $page_url; ?>" />
	<link rel="image_src" href="<?php echo $img_fb_url; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="robots" content="index, follow">
	<link rel="shortcut icon" type="text/css" href="<?php echo URL_SITE; ?>favicon.ico">
	<link rel="icon" type="image/x-icon" href="<?php echo URL_SITE; ?>favicon.ico" />
    <meta name="pinterest-rich-pin" content="false" />
    <meta name="pinterest" content="nopin" />
    <!--Open Graph-->
    <meta property="og:url" content="<?php echo $page_url; ?>" />
<?php if ($share_fb) { ?>
	<meta property="og:title" content="<?php echo $share_fb; ?>" />
	<meta property="og:description" content="<?php echo $share_fb; ?>" />
<?php } else { ?>
	<meta property="og:title" content="<?php echo $description; ?>" />
	<meta property="og:description" content="<?php echo $description; ?>" />
<?php } ?>
	<meta property="og:image" content="<?php echo $img_fb_url; ?>" />
    <meta property="og:image:width" content="968" />
    <meta property="og:image:height" content="506" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:site_name" content="<?php echo $site_name; ?>" />
    <!--Twitter Cardas-->
    <meta name="twitter:url" content="<?php echo $page_url; ?>" />
    <meta name="twitter:title" content="<?php echo $page_title; ?>" />
    <meta name="twitter:description" content="<?php echo $description; ?>" />
    <meta name="twitter:image" content="<?php echo $img_tw_url; ?>" />
    <meta name="twitter:image:width" content="1024" />
    <meta name="twitter:image:height" content="512" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@amnistiaespana">
    <meta name="twitter:creator" content="@amnistiaespana">
    <meta name="twitter:image:alt" content="<?php echo $site_name; ?>" />
    <!-- CSS-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i|Teko:300,400,500,600,700&display=swap" rel="stylesheet">
	<link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.5/css/lightgallery.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo URL_SITE; ?>css/cli-style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL_SITE; ?>css/style.css">
	<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

	<!-- Scritps-->
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo URL_SITE; ?>js/cookielawinfo.js"></script>
	<script type="text/javascript" src="<?php echo URL_SITE; ?>js/lightgallery-all.min.js"></script>
	<script type="text/javascript" src="<?php echo URL_SITE; ?>js/init.js"></script>
	<script type="text/javascript" src="<?php echo URL_SITE; ?>js/firma_form.js"></script>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5JHK4F4');</script>
	<!-- End Google Tag Manager -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129198217-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-129198217-1', { 'optimize_id': 'GTM-WM7GM4Z'});
	</script>
	<script type="text/javascript">
<?php
		if($isMobile) {
?>
	    	var isMobile = 1;
<?php
		}else {
?>
	        var isMobile = 0;
<?php
		}
?>
	</script>
