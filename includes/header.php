<?php
/**
 * Gemeinsamer Seitenkopf (Head + Navigation).
 *
 * Vor dem require optional setzbar:
 *   $pageTitle       string  <title> und Social-Title
 *   $pageDescription string  Meta-Description
 *   $navPrefix       string  Prefix für die Anker-Links der Navigation.
 *                            '' auf der Startseite (#why),
 *                            'index.php' auf Unterseiten (index.php#why).
 */
$pageTitle       = $pageTitle       ?? 'Crumbler – Cookie Consent für deine Website. Pixelgenau geregelt.';
$pageDescription = $pageDescription ?? 'Crumbler macht deine Website rechtssicher – DSGVO- und DSG-konform. Automatisches Cookie-Scanning, intelligentes Blocking und ein Cookie-Banner im 8-Bit-Style oder in deinem Design.';
$navPrefix       = $navPrefix       ?? '';
$e = static fn (string $s): string => htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $e($pageTitle) ?></title>
    <meta name="description" content="<?= $e($pageDescription) ?>">

    <!-- Open Graph / Social (Site-Branding, seitenübergreifend) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Crumbler – Cookie Consent, pixelgenau geregelt">
    <meta property="og:description" content="Rechtssicheres Cookie-Management: automatisches Scanning, intelligentes Blocking und ein Banner, das zu deiner Marke passt.">
    <meta property="og:image" content="assets/logo.svg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Crumbler – Cookie Consent, pixelgenau geregelt">
    <meta name="twitter:description" content="Rechtssicheres Cookie-Management im Pixel-Look.">

    <link rel="icon" type="image/svg+xml" href="assets/logo.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/variant-oi.css">
</head>
<body>
    <!-- Scanline + grain overlay -->
    <div class="crt-overlay" aria-hidden="true"></div>

    <!-- Navigation -->
    <header id="header">
        <div class="container header-inner">
            <a href="<?= $e($navPrefix) ?>#top" class="logo-link" aria-label="Crumbler Startseite">
                <img src="assets/logo.svg" alt="" class="logo-img">
                <span class="logo-word">CRUMBLER</span>
            </a>
            <button class="mobile-menu-toggle" aria-label="Menü öffnen" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>
            <nav id="main-nav">
                <ul>
                    <li><a href="<?= $e($navPrefix) ?>#why">Warum?</a></li>
                    <li><a href="<?= $e($navPrefix) ?>#features">Features</a></li>
                    <li><a href="<?= $e($navPrefix) ?>#howitworks">So geht's</a></li>
                    <li><a href="<?= $e($navPrefix) ?>#pricing">Preis</a></li>
                    <li><a href="https://cmp.compresso.ch/register" class="btn btn-small btn-primary">Registrieren</a></li>
                    <li><a href="<?= $e($navPrefix) ?>#contact" class="btn btn-small">Kontakt</a></li>
                </ul>
            </nav>
        </div>
    </header>
