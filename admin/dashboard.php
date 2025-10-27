<?php
require_once '../includes/config.php';
requireLogin();
?><!doctype html><html lang="it"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Dashboard Admin</title><link rel="stylesheet" href="/assets/css/styles.css"></head><body><section class="container" style="padding:30px 0">
<h1>Dashboard Admin</h1>
<nav class="main-nav"><a href="/admin/new-post.php" class="btn btn-primary">Nuovo Articolo</a> <a href="/admin/posts.php" class="btn">Gestisci Articoli</a> <a href="/admin/logout.php" class="btn">Logout</a></nav>
</section></body></html>