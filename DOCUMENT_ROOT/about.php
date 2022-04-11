<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="container-fluid">
<div class="col-12">
    <header class="d-flex justify-content-center">
        <h1>Page</h1>
    </header>
    <section class="d-flex justify-content-center">
        <a href="home.php" class="btn btn-outline-dark text-dark m-1">Home</a>
        <a href="about.php" class="btn btn-outline-dark text-dark m-1">about</a>
    </section>
    <article class="mt-3 float-left col-6">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur viverra ornare lorem non rutrum. Vestibulum
        molestie sed nisl vitae rhoncus. Maecenas interdum justo ac nisl elementum, sit amet rhoncus mi faucibus. Nulla
        convallis egestas auctor. Quisque vehicula at ligula ac euismod. Praesent turpis nibh, convallis a nibh eu,
        luctus aliquam diam. Suspendisse pretium enim leo. Vivamus vitae nulla eu diam tincidunt tempus. Fusce vel lacus
        sapien. Morbi facilisis congue neque, ut porttitor purus elementum at. Ut dignissim eget justo ut tempus.
        Vestibulum rhoncus ex non condimentum venenatis. Donec at dui dictum, congue neque eu, porttitor mauris.
        Suspendisse pulvinar lectus at turpis faucibus, in venenatis lorem feugiat.
    </article>
    <article class="mt-3 float-right col-6">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur viverra ornare lorem non rutrum. Vestibulum
        molestie sed nisl vitae rhoncus. Maecenas interdum justo ac nisl elementum, sit amet rhoncus mi faucibus. Nulla
        convallis egestas auctor. Quisque vehicula at ligula ac euismod. Praesent turpis nibh, convallis a nibh eu,
        luctus aliquam diam. Suspendisse pretium enim leo. Vivamus vitae nulla eu diam tincidunt tempus. Fusce vel lacus
        sapien. Morbi facilisis congue neque, ut porttitor purus elementum at. Ut dignissim eget justo ut tempus.
        Vestibulum rhoncus ex non condimentum venenatis. Donec at dui dictum, congue neque eu, porttitor mauris.
        Suspendisse pulvinar lectus at turpis faucibus, in venenatis lorem feugiat.
    </article>
</div>
<footer class="bg-dark text-light">
    &copy<?php
        echo date('Y'), '<br>';
    ?> By Marcel Zagórski
</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>