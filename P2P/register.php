<?php
include('config.php');
$name = $_POST['name'];
$email = $_POST['email'];
$passwrd = $_POST['pass'];
$repasswrd = $_POST['repass'];
// $date = date("Y.m.d");
// $_SESSION['storeDate'] = $ddate;
$number = $_POST['contact'];
$qry = mysqli_query($con, "SELECT * FROM user WHERE email='$email' ");
$qry1 = mysqli_num_rows($qry);
$file = 'count.txt';
//get the number from the file
$uniq = file_get_contents($file);
//add +1
$uid = $uniq + 1;
// add that new value to text file again for next use
file_put_contents($file, $uid);
if ($qry1 == 0 and $passwrd == $repasswrd) {
    $sql = mysqli_query($con, "INSERT INTO user (name, email, password, contact, uid) VALUES ('$name', '$email', '$passwrd', '$number' ,'$uid') ") or die(mysqli_error($con));
    $sql1 = mysqli_query($con, "INSERT INTO wallet (useruid, balance) VALUES ('$uid','0') ") or die(mysqli_error($con));
    $qry = mysqli_query($con, "SELECT * FROM user WHERE email='$email' and password='$passwrd' ") or die(mysqli_error($con));
    session_start();
    $row = mysqli_fetch_array($qry);
    $_SESSION['log'] = $row;
    $keys = "user";
    $_SESSION['log1'] = $keys;
    header("location:index.php");
} else {
?>
    <script>
        alert("Email Already Registered.")
        window.location.href = "SignUp.php";
    </script>
<?php
}
?>
