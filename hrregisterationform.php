<!DOCTYPE html>
<html>
<head>
    <title>HR Login</title>
</head>
<body>
    <p><h1><b><u> EMPLOYEE MANAGEMENT SYSTEM </u></b></h1></p>
    <h2><b><u> HRM LOGIN/SIGN UP </u></b></h2>
    <form method="post" action="hrlogin.php">
        <label>Username:</label>
        <input type="text" name="username" required>
        <br>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <br>
        <input type="submit" name="submit" value="Login">
    </form>

    <h2><b><u> CREATE USER ACCOUNT </u></b></h2>
    <form method="post" action="hr_user_register.php">
        <label>Username:</label>
        <input type="text" name="username" required>
        <br>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <br>
        <input type="submit" value="Register User">
    </form>

</body>
</html>