<!DOCTYPE html>
<html lang="en-us">
<head>
  <?php 
  $title = 'Reservation';
  include 'modules/head.php'; ?> 
</head>
<body>

  <header>
    <?php include 'modules/header.php'; ?> 
  </header>

  <nav>    
  <?php 
      $page = 'reservation';
      include 'modules/nav.php'; ?>       
  </nav>
    
  <main>
      <div class="maininfo">
    <h2>Thank you <?php echo $_POST["name"] ?> for your time!</h2>
    <p>Your reservation was submited to our database, and soon we will analise it and give you a feedback through your e-mail <strong><?php echo $_POST["email"] ?></strong>.</p>
      </div>
  </main>
    
  <footer>
      <?php include 'modules/footer.php'; ?> 
  </footer>

  <script src="scripts/hamburger.js"></script> 
</body></html>