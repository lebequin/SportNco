<?php

if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message']))
{
  $nom=$_POST['nom'];
  $mail=$_POST['email'];
  $tel=$_POST['tel'];
  $mess=$_POST['message'];
  $err=0;
  if (empty($nom)){
    echo("veuillez remplir le nom");
    $err=1;
  }
  if (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
    echo("Veuillez mettre un mail sous la forme exemple@test.com");
    $err=1;
  }
  if (!empty($tel)){
    if (!is_numeric($tel) || strlen($tel) != 10){
      echo("Veuillez saisir un numéro de 10 chiffres");
      $err=1;
    }
  }
  if (empty($mess)){
    echo("veuillez remplir le message");
    $err=1;
  }
  if ($err == 0){
    echo("nom : ".$nom);
    echo'<br/>';
    echo("mail: ".$mail);
    echo'<br/>';
    echo("tel : ".$tel);
    echo'<br/>';
    echo("message : ".$mess);
    echo'<br/>';
  }
} else {
  echo('Merci de renseigner tous les champs obligatoire correctement');
}

?>
