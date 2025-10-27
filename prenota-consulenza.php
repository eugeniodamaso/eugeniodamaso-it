<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

$page_title = 'Prenota Consulenza - '.SITE_NAME;
$canonical_url = SITE_URL.'/prenota-consulenza';
include 'includes/header.php';
?>
<section class="container" style="padding:40px 0">
  <h1>Prenota una Consulenza</h1>
  <p>Seleziona il tipo di consulenza e proponi tre fasce orarie. Riceverai conferma via email.</p>
  <form method="post" action="/prenota-handler.php" class="form-card">
    <label>Tipo di Consulenza</label>
    <select name="type" required>
      <option>Business Intelligence & Advanced Analytics</option>
      <option>Cybersecurity Strategy & Implementation</option>
      <option>AI Framework Development & Integration</option>
      <option>ESG Strategy & Sustainability Consulting</option>
      <option>Project Management & Digital Transformation</option>
      <option>Financial Planning & Control Systems</option>
      <option>Supply Chain Optimization</option>
      <option>Custom Software Development Solutions</option>
      <option>Comprehensive Business Strategy Review</option>
    </select>
    <label>Descrizione Breve</label>
    <textarea name="notes" rows="6" placeholder="Descrivi la tua esigenza in 4-6 righe" required></textarea>
    <label>Email</label>
    <input type="email" name="email" required>
    <label>Proponi 3 fasce orarie (data e ora)</label>
    <input type="text" name="slot1" placeholder="Es. 05/11 ore 15:00" required>
    <input type="text" name="slot2" placeholder="Es. 06/11 ore 10:00" required>
    <input type="text" name="slot3" placeholder="Es. 07/11 ore 11:30" required>
    <input type="hidden" name="csrf" value="<?php echo generateCSRFToken(); ?>">
    <button class="btn btn-primary" type="submit">Invia Richiesta</button>
  </form>
</section>
<?php include 'includes/footer.php'; ?>