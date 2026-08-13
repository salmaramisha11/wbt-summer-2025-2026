<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Online Job Application System</title>
</head>
<body>
    <h2>Online Job Application Form</h2>

    <form action="process.php" method="POST" enctype="multipart/form-data">

        <label>Applicant ID:</label><br>
        <input type="text" name="aid"><br><br>

        <label>Full Name:</label><br>
        <input type="text" name="fname"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br><br>

        <label>Phone Number:</label><br>
        <input type="tel" name="phone"><br><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br><br>

        <label>Gender:</label><br>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female<br><br>
        
         <label>Job Position:</label><br>
        <select name="jposition">
            <option value="">Select Job Position.</option>
            <option value="Software Developer">Software Developer</option>
            <option value="Web Developer">Web Developer</option>
            <option value="Database Administrator">Database Administrator</option>
            <option value="Network Engineer">Network Engineer</option>
        </select><br><br>

        <label>Educational Qualification:</label><br>
        <input type="text" name="qualification"><br><br>

        <label>Address:</label><br>
        <textarea name="address"></textarea><br><br>

        <label>Upload CV (PDF, DOC, DOCX - Max 2MB):</label><br>
        <input type="file" name="cv"><br><br>

        <input type="submit" name="submit" value="Submit">

    </form>
</body>
</html>
