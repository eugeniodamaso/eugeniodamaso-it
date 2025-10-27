<?php
require_once __DIR__.'/../includes/config.php';
require_once __DIR__.'/../includes/functions.php';
$slug = basename($_GET['slug'] ?? '');
$stmt=$pdo->prepare("SELECT * FROM posts WHERE slug=? AND status='published' LIMIT 1");
$stmt->execute([$slug]); $post=$stmt->fetch();
if(!$post){ header('Location: /blog'); exit; }
$page_title=htmlspecialchars($post['title']).' - Blog';
$page_description=truncateText($post['excerpt'] ?: $post['content'], 160);
$canonical_url=SITE_URL.'/blog/'.$post['slug'];
include __DIR__.'/../includes/header.php';
?>
<section class="container" style="padding:40px 0">
  <article>
    <h1><?php echo htmlspecialchars($post['title']); ?></h1>
    <div class="post-meta"><?php echo formatDate($post['created_at']); ?> • <?php echo $post['category']; ?></div>
    <div class="post-content"><?php echo $post['content']; // HTML incollato dall'admin ?></div>
  </article>
</section>
<?php include __DIR__.'/../includes/footer.php'; ?>