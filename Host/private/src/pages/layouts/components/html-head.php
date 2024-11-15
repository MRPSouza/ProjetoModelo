<?php

include_once('html-header/php/all-pages.php');
include_once('html-header/php/current-page.php');
include_once('html-header/php/security_headers.php');

# Início do arquivo html
echo '<!DOCTYPE html><html lang="pt-br"><head>'.

# all-pages
'<meta charset="UTF-8">'.
'<meta http-equiv="content-type" content="text/html; charset=UTF-8">'.
'<meta name="viewport" content="width=device-width, initial-scale=1" />'.
'<meta name="revisit-after" content="'.$revisit_after.'">'.
'<meta name="author" content="'.$author.'">'.
'<link href="'.$cdn_links['bootstrap_css'].'" rel="stylesheet" onerror="this.onerror=null"; this.href="../source/vendor/bootstrap/bootstrap.min.css" />'.
'<script defer src="'.$cdn_links['popper_js'].'?v=1.0"></script>'.
'<script defer src="'.$cdn_links['bootstrap_js'].'?v=1.0"></script>'.
'<link rel="stylesheet" href="'.$cdn_links['font_awesome'].'">'.
'<link rel="stylesheet" href="css/normalize.css" />'.

# current-page (estas tags serão atualizadas dinamicamente)
'<meta name="robots" content="" id="meta-robots">'.
'<meta name="googlebot" content="" id="meta-googlebot">'.
'<meta name="googlebot-news" content="" id="meta-googlebot-news">'.
'<meta name="keywords" content="" id="meta-keywords">'.
'<meta name="title" content="" id="meta-title">'.
'<title id="page-title"></title>'.
'<meta name="description" content="" id="meta-description">'.
'<link rel="canonical" href="" id="canonical-link">'.
'<link rel="stylesheet" href="" id="page-css">'.

# Facebook, WhatsApp 
'<meta property="og:locale" content="pt_BR"/>'.
'<meta property="og:title" content="" id="og-title">'.
'<meta property="og:description" content="" id="og-description">'.
'<meta property="og:url" content="" id="og-url">'.
'<meta property="og:image" content="" id="og-image">'.
'<meta property="og:image:width" content="1512"/>'.
'<meta property="og:image:height" content="982"/>'.
'<meta property="og:image:type" content="image/png"/>'.
'<meta property="og:type" content="website" />'.
'<meta property="fb:admins" content="'.$facebook_page.'"/>'.
'<meta property="og:site_name" content="" id="og-site-name">'.
'<meta property="article:publisher" content="http://facebook.com/'.$facebook_page.'"/>'.
'<meta property="article:modified_time" content="2024-07-04T17:14:21+00:00"/>'.

# X (Twitter)
'<meta name="twitter:title" content="" id="twitter-title">'.
'<meta name="twitter:description" content="" id="twitter-description">'.
'<meta name="twitter:image" content="" id="twitter-image">'.
'<meta name="twitter:url" content="" id="twitter-url">'.
'<meta name="twitter:card" content="summary_large_image"/>'.

# Apple
'<meta name="apple-mobile-web-app-title" content="" id="apple-title">'.
'<link rel="apple-touch-startup-image" href="" id="apple-image">'.
'</head><body>';
?>