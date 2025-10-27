<?php
require_once 'includes/config.php';
if($_SERVER['REQUEST_METHOD']!=='POST' || !validateCSRFToken($_POST['csrf']??'')){
  header('Location: /prenota-consulenza'); exit; }
$type = sanitizeInput($_POST['type']??'');
$notes = sanitizeInput($_POST['notes']??'');
$email = sanitizeInput($_POST['email']??'');
$slots = [sanitizeInput($_POST['slot1']??''),sanitizeInput($_POST['slot2']??''),sanitizeInput($_POST['slot3']??'')];
try{
  $stmt=$pdo->prepare("INSERT INTO bookings (type,notes,email,slot1,slot2,slot3,created_at) VALUES (?,?,?,?,?,?,NOW())");
  $stmt->execute([$type,$notes,$email,$slots[0],$slots[1],$slots[2]]);
}catch(Exception $e){/* log */}
mail(SITE_EMAIL,'Nuova richiesta consulenza',"Tipo: $type\nEmail: $email\nNote: $notes\nSlot: ".implode(' | ',$slots),"From: noreply@".parse_url(SITE_URL,PHP_URL_HOST));
header('Location: /grazie');
