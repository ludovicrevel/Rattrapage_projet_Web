<?php 
  //session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: ./index.php?page=login");
  }
?>
<?php include_once "headerM.php"; ?>
<div class="card card-outline card-primary">
<div class="body">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Se déconnecter</a>
      </header>
      <div class="search">
        <span class="text">Sélectionnez un utilisateur pour parler</span>
        <input type="text" placeholder="Entrez le nom à rechercher...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>
</div>
<script src="javascript/users.js"></script>
