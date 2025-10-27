<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
$page_title='Blog - '.SITE_NAME; $canonical_url=SITE_URL.'/blog';
include 'includes/header.php';
$posts=getLatestBlogPosts(12);
?>
<section class="container" style="padding:40px 0">
  <h1>Blog</h1>
  <p>Articoli tecnici e analisi strategiche. Incolla i contenuti in HTML dall'admin.</p>
  <div class="blog-grid">
  <?php foreach($posts as $post): ?>
    <article class="blog-card">
      <div class="blog-image"><img src="<?php echo $post['image'] ?: '/assets/images/default-blog.jpg'; ?>" alt=""></div>
      <div class="blog-content">
        <h3><a href="/blog/<?php echo $post['slug']; ?>"><?php echo htmlspecialchars($post['title']); ?></a></h3>
        <p><?php echo truncateText($post['excerpt'] ?: $post['content']); ?></p>
      </div>
    </article>
  <?php endforeach; if(!$posts): ?>
    <p class="no-posts">Ancora nessun articolo pubblicato.</p>
  <?php endif; ?>
  </div>
</section>
<?php include 'includes/footer.php'; ?>