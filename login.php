<?php 
  //session_start();
  if(isset($_SESSION['unique_id'])){
    //header("location: ./index.php?page=users");
  }
?>

<?php include_once "headerM.php"; ?>

<div class="card card-outline card-primary">
  <div class="body">
    <section class="form login">
      <header>Messagerie</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Adresse Mail</label>
          <input type="text" name="email" placeholder="Entrez votre mail" required>
        </div>
        <div class="field input">
          <label>Mot de passe</label>
          <input type="password" name="password" placeholder="Entrez votre mot de passe" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Valider">
        </div>
      </form>
      <div class="link">Pas encore inscrit ? <a href="./index.php?page=indexM">Inscrivez-vous maintenant</a></div>
    </section>
  </div>
</div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

