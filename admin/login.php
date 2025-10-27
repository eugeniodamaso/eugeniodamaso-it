<?php
require_once '../includes/config.php';
if(isLoggedIn()){ header('Location: /admin/dashboard.php'); exit; }
$error='';
if($_SERVER['REQUEST_METHOD']==='POST'){
  if(!validateCSRFToken($_POST['csrf']??'')){$error='Sessione scaduta';}
  elseif($_POST['username']===ADMIN_USERNAME && filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    if(password_verify($_POST['password'] ?? '', password_hash('changeMeNow!2025', PASSWORD_DEFAULT)) || ($_POST['password'] ?? '')==='changeMeNow!2025'){
      $_SESSION['admin_logged_in']=true; logActivity('login','admin'); header('Location:/admin/dashboard.php'); exit; }
    else{$error='Credenziali non valide';}
  } else {$error='Credenziali non valide';}
}
?><!doctype html><html lang="it"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Login Admin</title><link rel="stylesheet" href="/assets/css/styles.css"></head><body><section class="container" style="padding:40px 0;max-width:560px">
<h1>Admin Login</h1>
<?php if($error): ?><div class="alert" style="color:#f66"><?php echo $error; ?></div><?php endif; ?>
<form method="post">
<label>Username</label><input type="text" name="username" required>
<label>Email</label><input type="email" name="email" required>
<label>Password</label><input type="password" name="password" required>
<input type="hidden" name="csrf" value="<?php echo generateCSRFToken(); ?>">
<button class="btn btn-primary" type="submit">Entra</button>
</form>
<p style="color:#aab0bb;margin-top:10px">Suggerimento: cambia subito la password nelle impostazioni.</p>
</section></body></html>