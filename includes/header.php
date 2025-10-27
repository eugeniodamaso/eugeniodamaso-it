<?php
require_once __DIR__.'/../includes/config.php';
?><!DOCTYPE html>
<html lang="it">
<head>
<meta charset="utf-8"/>
<title><?php echo $page_title ?? SITE_NAME.' - '.SITE_TITLE; ?></title>
<meta name="description" content="<?php echo $page_description ?? SITE_DESCRIPTION; ?>"/>
<meta name="keywords" content="<?php echo $page_keywords ?? SITE_KEYWORDS; ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="canonical" href="<?php echo $canonical_url ?? SITE_URL; ?>"/>
<meta property="og:title" content="<?php echo $page_title ?? SITE_NAME.' - '.SITE_TITLE; ?>"/>
<meta property="og:description" content="<?php echo $page_description ?? SITE_DESCRIPTION; ?>"/>
<meta property="og:image" content="<?php echo DEFAULT_OG_IMAGE; ?>"/>
<meta property="og:type" content="website"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:title" content="<?php echo $page_title ?? SITE_NAME.' - '.SITE_TITLE; ?>"/>
<meta name="twitter:description" content="<?php echo $page_description ?? SITE_DESCRIPTION; ?>"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
<link rel="stylesheet" href="/assets/css/styles.css?v=<?php echo time(); ?>"/>
<?php if (GOOGLE_SITE_VERIFICATION): ?>
<meta name="google-site-verification" content="<?php echo GOOGLE_SITE_VERIFICATION; ?>"/>
<?php endif; ?>
<?php if (GOOGLE_ANALYTICS_ID): ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo GOOGLE_ANALYTICS_ID; ?>"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config','<?php echo GOOGLE_ANALYTICS_ID; ?>');
</script>
<?php endif; ?>
</head>
<body>
<header class="site-header">
  <div class="container header-inner">
    <a href="/" class="logo">ED<span>•AI</span></a>
    <nav class="main-nav">
      <a href="/">Home</a>
      <a href="/expertise">Expertise</a>
      <a href="/servizi">Servizi</a>
      <a href="/blog">Blog</a>
      <a href="/prenota-consulenza" class="btn btn-small">Prenota</a>
    </nav>
  </div>
</header>
<main>
