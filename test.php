<?php 
session_start(); 
include("db.php");
?>
<?php
      $username = trim($_POST['username']);
      $password = trim($_POST['password']);
      $query = "select * from `accounts` where `username`=:username and `password`=:password";
      $stmt = $db->prepare($query);
      $stmt->bindParam('username', $username, PDO::PARAM_STR);
      $stmt->bindValue('password', $password1, PDO::PARAM_STR);
      $stmt->execute();
      $count = $stmt->rowCount();
      $row   = $stmt->fetch(PDO::FETCH_ASSOC);
      if($count == 1 && !empty($row)) {
        /******************** Your code ***********************/
        $_SESSION['sess_user_id']   = $row['id'];
        $_SESSION['sess_username'] = $row['username'];
        $_SESSION['sess_name'] = $row['name'];
        echo "dash.php";
      } else {
        echo "invalid";
      }
   

?>