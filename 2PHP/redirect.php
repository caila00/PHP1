
<!DOCTYPE html>
<html>
<head>
    <title>Submitted Data</title>
    <style>
        body {
            font-family: Arial;
            padding: 20px;
            background: #eee;
        }
        .box {
            background: white;
            padding: 20px;
            width: 400px;
        }
        body {
    background-color: #f5f6fa;
}

.card {
    border-radius: 15px;
}
    </style>
</head>
<body>

<hr>

<h2>Login Page</h2>
<fieldset>
<legend>Login Form</legend>

<form action="redirect.php" method="POST">
<table>
<tr>
<td>Username</td>
<td><input type="text" name="username" required></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" name="password" required></td>
</tr>

<tr>
<td></td>
<td>
<input type="submit" value="Login">
<input type="reset" value="Cancel">
</td>
</tr>
</table>
</form>
</fieldset>

<h2>Forgot Password Page</h2>
<fieldset>

<form action="redirect.php" method="POST">
<table>
<tr>
<td>Email</td>
<td><input type="text" name="email" required></td>
</tr>

<tr>
<td></td>
<td>
<input type="submit" value="Reset">
</td>
</tr>
</table>
</form>
</fieldset>

<?php include("includes/footer.php");?>

<div class="box">
<h2>Submitted Data</h2>

<?php
if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
        echo "<b>" . ucfirst($key) . ":</b> " . $value . "<br>";
    }
} else {
    echo "No data submitted.";
}
?>

<br><br>
<a href="index.php">Go Back</a>

</div>

</body>
</html>
