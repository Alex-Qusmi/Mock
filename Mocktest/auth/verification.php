<?php
$conn = mysqli_connect("localhost", "root", "", "lab_portal");
$username = $_POST['username'];
$password = $_POST['password'];
$password1 = $_POST['password1'];
if($password != $password1){
    header("Location: Signup.php?error=Password not matched");
    exit();
}   
$sql = "insert into login_info(Username, Password) values ('$username', '$password')";
if(mysqli_query($conn, $sql)){
    echo "Signup Successfully";
    
}
?>
