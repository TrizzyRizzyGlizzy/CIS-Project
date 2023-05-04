<?php
/*include("connection.php");
if($_SERVER['REQUEST_METHOD'] == "POST") {
//check if post from forms was used
//read database
$email = $_POST['email'];
$password = $_POST['password'];
//check email is correct
$query = "select * from users where User_Email = '$email' limit 1";
$result = mysqli_query($con, $query);
//if email correct, check password
if($result) {
if($result && mysqli_num_rows($result) > 0) {
$user_data = mysqli_fetch_assoc($result);
if($user_data['User_Password'] === $password) {
$_SESSION['user_id'] = $user_data['user_id'];
header("Location: index.php");
die;
}
}
}
echo "Invalid email or password!";
}*/
    header("location: login.html");
?>