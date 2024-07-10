

<?php

if(isset($_POST['submit'])){
  //check email
  if(empty($_POST['email'])){
    echo 'excuse me email required';
  }else{
   $email = $_POST['email'];
   //validate type valid email
   if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 'email must be valid ';
   }else{
     //post view input
    echo htmlspecialchars($_POST['email']);
   }
  }

  //check username
  if(empty($_POST['username'])){
    echo 'excuse me Username is require';
  }else{
    $username = $_POST['username'];
    if(!preg_match('/^[a-zA-Z\s]+s/', $username)){
      echo 'username must be letters and space';
    }else{
      echo htmlspecialchars($_POST['username']);
    }
  }

  //check name 
  if(empty($_POST['name'])){
    echo 'excuse me Name is required';
  }else{
    echo htmlspecialchars($_POST['name']);
  }

} //end checking

?>
<!-- Basic Form php post -->
<form action="" method="POST">
  <input type="text" name="email" >
  <input type="text" name="username">
  <input type="text" name="name" >
  <input type="submit" value="submit" name="submit">
</form>