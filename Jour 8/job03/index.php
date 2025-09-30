<DOCTYPE html>
    <form action="" method="POST">
        <input type= "text" name="prenom"></input>
        <input type= "submit" value= "Envoyer" name= "submit"></input>
        <input type= "submit" value= "reset" name= "reset"></input>

    </form>
    <?php
    session_start();
    if(isset($_POST['reset'])){
    $_SESSION['prenom'] = [];
    }
  // var_dump($prenom);

   if(isset($_POST['prenom']) && !empty($_POST['prenom'])){
    $_SESSION['prenom'][]= $_POST['prenom'] ?? '';

 // var_dump($_SESSION);
   }
 // var_dump($_SESSION['prenom']);
   ?>
   <ul>
    <?php if(isset($_SESSION['prenom'])) :?>
    <?php foreach($_SESSION['prenom'] as $value) :?>
        <li><?= $value ?></li>
        <?php endforeach ?>
        <?php endif ?>
   </ul>
   <?php
  

  
