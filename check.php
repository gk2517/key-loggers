<?php 
session_start(); 
include("db.php");
?>
<?php
if(isset($_POST['password']) && $_POST['password'] != '') {
  $password = trim($_POST['password']);
  if( $password != "") {
    try {
      $query = "select * from `user_login` where  `password`=:password";
      $stmt = $db->prepare($query);
     
      $stmt->bindValue('password', $password, PDO::PARAM_STR);
      $stmt->execute();
      $count = $stmt->rowCount();
      $row   = $stmt->fetch(PDO::FETCH_ASSOC);
      if($count == 1 && !empty($row)) {
        /******************** Your code ***********************/
       
       
        $_SESSION['password'] = $row['password'];
      
      } else {
        echo "invalid";
      }
    } catch (PDOException $e) {
      echo "Error : ".$e->getMessage();
    }
  } else {
    echo "field is required!";
  }
} else {
  echo "Something Went Wrong";
}
?>