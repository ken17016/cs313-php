<?php
   session_start();
  require('./dbcon.php');
  $db = get_db();
    

  $userName = htmlspecialchars($_POST["userName"]);
  $password = $_POST["password"];
   
  $query = 'SELECT users_id, usersname, userspassword FROM users WHERE usersname = :username';

  $statement = $db->prepare($query);
  $statement->bindvalue(":username", $userName, PDO::PARAM_STR); 
  $statement->execute();

  $user = $statement->fetchALL(PDO::FETCH_ASSOC);

  echo print_r($user);
  echo "<br>";
  echo "input username = $userName :: input password= $password<br>";
  echo "rusername = " . $user[0]['usersname'] . " rpassword = " . $user[0]['userspassword'];
  echo "<br> comparison: " . password_verify($password, $user[0]['userspassword']);

  if(password_verify($password, $user[0]['userspassword'])){
   $_SESSION['user_id']= $user[0]['users_id'];
   $_SESSION['userName']= $user[0]['usersname'];

   echo "<br> Login success";

   //header('Location: ./onlineStore.php');
   die();
  }else{
     echo "<script>alert('Login Fail');</script>";
    // header('Location: ./home.php');
  }
?>
