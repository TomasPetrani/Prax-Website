<?php if (!isset($title)) $title = "Default"; ?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/styles.css">
</head>
<body>

<div class="navDiv">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand navMain" href="/index.php">AI-FINPAT Research Project</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/data.php">Data</a></li>
                <li class="nav-item"><a class="nav-link" href="/projects.php">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="/contacts.php">Contact</a></li>
            </ul>
        </div>
    </nav>
</div>

<div class="page-header">
    <div class="header-inner">
        <h1><?= htmlspecialchars($title) ?></h1>
    </div>
</div>