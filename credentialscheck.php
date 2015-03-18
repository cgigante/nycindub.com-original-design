<?php
if ($_POST['username'] == "admin" && $_POST['password'] == "nycindublogin") {
	header('Location: admin_interface.php');
} else {
	header('Location: login.php');
}
?>

<?php
echo $_POST['username'];
echo $_POST['password'];
?>