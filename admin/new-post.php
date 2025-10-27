<?php
require_once '../includes/config.php';
requireLogin();
$error=''; $ok='';
if($_SERVER['REQUEST_METHOD']==='POST'){
  if(!validateCSRFToken($_POST['csrf']??'')){$error='Sessione scaduta';}
  else{
    $title=trim($_POST['title']??'');
    $slug=strtolower(preg_replace('/[^a-z0-9-]+/','-',trim($_POST['slug'] ?: $title)));
    $category=trim($_POST['category']??'General');
    $image=trim($_POST['image']??'');
    $excerpt=trim($_POST['excerpt']??'');
    $content=$_POST['content'] ?? '';// HTML incollato
    $status=in_array($_POST['status'] ?? 'draft',['draft','published'])?$_POST['status']:'draft';
    try{
      $stmt=$pdo->prepare("INSERT INTO posts (title,slug,category,image,excerpt,content,status,created_at) VALUES (?,?,?,?,?,?,?,NOW())");
      $stmt->execute([$title,$slug,$category,$image,$excerpt,$content,$status]);
      $ok='Articolo salvato';
    }catch(Exception $e){$error='Errore salvataggio';}
  }
}
?><!doctype html><html lang="it"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Nuovo Articolo</title><link rel="stylesheet" href="/assets/css/styles.css"></head><body><section class="container" style="padding:30px 0;max-width:900px">
<h1>Nuovo Articolo</h1>
<?php if($ok): ?><div style="color:#6f6"><?php echo $ok; ?></div><?php endif; ?>
<?php if($error): ?><div style="color:#f66"><?php echo $error; ?></div><?php endif; ?>
<form method="post">
<label>Titolo</label><input type="text" name="title" required>
<label>Slug (URL)</label><input type="text" name="slug" placeholder="auto-dal-titolo">
<label>Categoria</label><input type="text" name="category" value="General">
<label>Immagine (URL)</label><input type="url" name="image" placeholder="https://...">
<label>Excerpt (breve abstract)</label><textarea name="excerpt" rows="4"></textarea>
<label>Contenuto HTML (incolla qui)</label><textarea name="content" rows="16" placeholder="<h2>Titolo</h2><p>Testo...</p>"></textarea>
<label>Status</label><select name="status"><option value="draft">Bozza</option><option value="published">Pubblicato</option></select>
<input type="hidden" name="csrf" value="<?php echo generateCSRFToken(); ?>">
<button class="btn btn-primary" type="submit">Pubblica</button>
</form>
</section></body></html>