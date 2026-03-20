<?php
if (!isset($title)) {
    $title = "Default";
}
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prax website</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="/styles.css">
</head>
<body>

<div class="navDiv">
    <nav class="navbar navbar-expand-lg navbar-dark bg-teal">
        <a class="navbar-brand navMain" href="/index.php">Nadpis1</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto" id="nav2">
                <li class="nav-item">
                    <a class="nav-link" href="/index.php"><i class="fas fa-home"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/data.php">Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/projects.php">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contacts.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<header class="text-white">
    <div class="header-container text-center py-5">
        <h1><?= $title ?></h1>
    </div>
</header>

<main class="container mt-0">