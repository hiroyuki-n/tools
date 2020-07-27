<?php
$site_URL = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

<title><?php echo $title ?></title>
<meta name="description" content="<?php echo $description ?>">

<meta property="og:title" content="<?php echo $title ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo $site_URL ?>">
<meta property="og:image" content="<?php echo $site_URL . "img/ogp/ogp.png"; ?>">
<meta property="og:site_name" content="<?php echo $title ?>">
<meta property="og:description" content="<?php echo $description ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $title ?>">
<meta name="twitter:description" content="<?php echo $description ?>">
<meta name="twitter:image" content="<?php echo $site_URL . "img/ogp/ogp.png"; ?>">
<meta name="twitter:url" content="<?php echo $site_URL ?>">

<link rel="stylesheet" href="/css/common.css">
<link rel="stylesheet" href="css/style.css">
<script src="/js/jquery-3.5.1.min.js"></script>
<script src="/js/style.js"></script>