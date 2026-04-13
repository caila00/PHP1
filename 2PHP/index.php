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

<h1>Home Page</h1>

<h2>Register Page</h2>
<fieldset>
<legend>Register Form</legend>

<form action="redirect.php" method="POST">
<table>
<tr>
<td>First Name</td>
<td><input type="text" name="fname" required></td>
</tr>

<tr>
<td>Last Name</td>
<td><input type="text" name="lname" required></td>
</tr>

<tr>
<td>Age</td>
<td><input type="text" name="age" required></td>
</tr>

<tr>
<td>Gender</td>
<td><input type="text" name="gender" required></td>
</tr>

<tr>
<td>Email</td>
<td><input type="text" name="email" required></td>
</tr>

<tr>
<td>Address</td>
<td><input type="text" name="address" required></td>
</tr>

<tr>
<td>Contact</td>
<td><input type="text" name="contact" required></td>
</tr>

<body>

<tr>
<td></td>
<td>
<input type="submit" value="Submit">
<input type="reset" value="Cancel">
</td>
</tr>
</table>
</form>
</fieldset>



<?phpinclude("includes/header.php");