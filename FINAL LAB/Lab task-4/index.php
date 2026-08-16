<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>

<body>

<h2>Student Registration Form</h2>

<form method="POST" action="register.php">

    <label> Student Name: </label>
    <input type="text" name="student_name">
    <br><br>

    <label> Student ID: </label>
    <input type="text" name="student_id">
    <br><br>

     <label> Email: </label>
    <input type="text" name="email">
    <br><br>

     <label> Department: </label>
    <select name="department">
        <option value="">Select Department</option>
        <option value="CSE">CSE</option>
        <option value="EEE">EEE</option>
        <option value="BBA">BBA</option>
    </select>

    <br><br>

     <label> Password: </label>
    <input type="password" name="password">
    <br><br>

    <label> Confirm Password: </label>
    <input type="password" name="confirm_password">
    <br><br>

    <input type="submit" name="submit" value="Register">

</form>

<br>

<form method="POST" action="delete_cookie.php">

    <input type="submit" value="Clear Cookie">

</form>

</body>
</html>