<?php
$conn = mysqli_connect("localhost","root","2433262","test");
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM user WHERE email ='{$email}'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$passwordResult = $password === $row['password'];
if ($passwordResult === true) {
    session_start();
    $_SESSION['userId'] = $row['id'];    
?>
    <script>
        location.href = "index.php";
    </script>
<?php
} else {
?>
    <script>
        alert("로그인 실패!");
        location.href = "login.php";
    </script>
<?php
}
?>