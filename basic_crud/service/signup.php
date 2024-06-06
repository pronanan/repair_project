<?php



if($_SERVER['REQUEST_METHOD'] === 'POST'){

   require_once "connect.php";
  
$user_id = "";
$user_name = $_POST["name"];
$user_lname = $_POST["lname"];
$user_email = $_POST["email"];
$username = $_POST["user"];
$password = $_POST["pswd"];
$user_tel= $_POST["tel"];
$user_status = $_POST["status"];
$create = date(DATE_RFC822);
$update = date(DATE_RFC822);

    $sql = 'INSERT INTO users (user_id, user_name, user_lname, user_email, username, password, user_tel, user_status, created_at, updated_at)VALUES(?,?,?,?,?,?,?,?,?,?)';
    $stmt= $conn->prepare($sql);
    $stmt->execute([$user_id,$user_name,$user_lname,$user_email,$username,$password, $user_tel, $user_status, $create ,$update]);
 if($stmt){
    echo"success";
 }else{

 }

}