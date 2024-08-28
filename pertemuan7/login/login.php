<?php 
// cek apakah tombol submit sudah ditekan apa belum
if( isset($_POST["submit"])){
    // cek username dan password
    if ($_POST["ussername"] == "Admin" && $_POST["password"] == "123") {
// jika benar, redirect ke halaman admin
    header("Location: admin.php");
    exit;
    } else{
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<h1>Login Admin</h1>

<?php if(isset($error)) :?>
    <p> ussername or password salah</p>
<?php endif; ?>

<ul>
<form action="" method="post">
    <li>
        <label for='ussername'>ussername :</label>
        <input type='text' name='ussername' id='ussername'>
    </li>
    <li>
        <label for='password'>password :</label>
        <input type='password' name='password' id='password'>
    </li>
    <li>
        <button type="submit" name="submit">Login</button>
    </li>
</ul>
</form>

</body>
</html>