<?php
$pageTitle = $pageTitle ?? 'AquaWorld';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="color.css">
</head>
<body class="bg-surface-primary text-text-primary antialiased">
<header class="sticky top-0 z-50 border-b border-theme bg-white/95 backdrop-blur">
  <div class="container mx-auto flex flex-wrap items-center p-5">
    <a href="index.php" class="flex items-center font-bold text-2xl text-primary">AquaWorld</a>
    <nav class="ml-auto flex flex-wrap items-center gap-6 text-sm font-medium">
      <a class="hover:text-primary" href="index.php">Home</a>
      <a class="hover:text-primary" href="about.php">About</a>
      <a class="hover:text-primary" href="services.php">Services</a>
      <a class="hover:text-primary" href="contact.php">Contact</a>
      <a href="contact.php" class="rounded-lg bg-primary px-5 py-2.5 text-white bg-primary-hover">Get Started</a>
    </nav>
  </div>
</header>
<main>
