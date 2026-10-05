<?php
if (!isset($pageTitle)) $pageTitle = "AquaWorld Aquarium";
$current = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?= htmlspecialchars($pageTitle) ?> | AquaWorld Aquarium</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header class="site-header">
  <a class="brand" href="index.php"><span class="brand-mark">◉</span>AquaWorld</a>
  <nav>
    <a class="<?= $current==='index.php'?'active':'' ?>" href="index.php">Home</a>
    <a class="<?= $current==='animals.php'?'active':'' ?>" href="animals.php">Animals</a>
    <a class="<?= $current==='exhibits.php'?'active':'' ?>" href="exhibits.php">Exhibits</a>
    <a class="<?= $current==='visit.php'?'active':'' ?>" href="visit.php">Visit</a>
    <a class="<?= $current==='conservation.php'?'active':'' ?>" href="conservation.php">Conservation</a>
    <a class="nav-ticket" href="tickets.php">Tickets</a>
  </nav>
</header>
<main>