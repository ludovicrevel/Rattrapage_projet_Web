<?php 
  //session_start();
  if(isset($_SESSION['unique_id'])){
    //header("location: ./index.php?page=users");
  }
?>

<?php include_once "headerM.php"; ?>

<div class="card card-outline card-primary">
  <div class="body">
    <section class="form signup">
      <header>Messagerie</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Prénom</label>
            <input type="text" name="fname" placeholder="Prénom" required>
          </div>
          <div class="field input">
            <label>Nom</label>
            <input type="text" name="lname" placeholder="Nom" required>
          </div>
        </div>
        <div class="field input">
          <label>Adresse Mail</label>
          <input type="text" name="email" placeholder="Entrez votre mail" required>
        </div>
        <div class="field input">
          <label>Mot de passe</label>
          <input type="password" name="password" placeholder="Mot de passe" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Choisissez une image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Valider">
        </div>
      </form>
      <div class="link">Déjà inscrit? <a href="./index.php?page=login">Connectez-vous maintenant</a></div>
    </section>
  </div>
</div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>
