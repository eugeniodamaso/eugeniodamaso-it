<?php
require_once '../includes/config.php';
requireLogin();
$stmt=$pdo->query("SELECT id,title,slug,status,created_at FROM posts ORDER BY created_at DESC");
$posts=$stmt->fetchAll();
?><!doctype html><html lang="it"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Articoli</title><link rel="stylesheet" href="/assets/css/styles.css"></head><body><section class="container" style="padding:30px 0">
<h1>Articoli</h1>
<table style="width:100%;border-collapse:collapse;border:1px solid #243042">
<tr><th style="text-align:left;padding:8px;border-bottom:1px solid #243042">Titolo</th><th>Slug</th><th>Status</th><th>Data</th></tr>
<?php foreach($posts as $p): ?>
<tr>
<td style="padding:8px;border-bottom:1px solid #243042"><?php echo htmlspecialchars($p['title']); ?></td>
<td style="padding:8px;border-bottom:1px solid #243042"><?php echo $p['slug']; ?></td>
<td style="padding:8px;border-bottom:1px solid #243042"><?php echo $p['status']; ?></td>
<td style="padding:8px;border-bottom:1px solid #243042"><?php echo formatDate($p['created_at']); ?></td>
</tr>
<?php endforeach; ?>
</table>
</section></body></html>