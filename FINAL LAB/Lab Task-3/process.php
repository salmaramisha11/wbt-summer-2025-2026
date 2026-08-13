<?php
 
$errors = [];
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $aid = trim($_POST["aid"]);
    $fname = trim($_POST["fname"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $password = trim($_POST["password"]);
    $gender = $_POST["gender"] ?? "";
    $jposition = trim($_POST["jposition"]);
    $qualification = trim($_POST["qualification"]);
    $address = trim($_POST["address"]);
 
    if (empty($aid)) {
        $errors[] = "Applicant ID is required.";
    }
 
    if (empty($fname)) {
        $errors[] = "Name is required.";
    }
 
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }
 
    if (empty($phone)) {
        $errors[] = "Phone number is required.";
    } elseif (!preg_match('/^[0-9]{11}$/', $phone)) {
        $errors[] = "Phone number must contain 11 digits.";
    }
 
    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    }
 
    if (empty($gender)) {
        $errors[] = "Please select your gender.";
    }
 
    if (empty($jposition)) {
        $errors[] = "Please select a job position.";
    }
 
    if (empty($qualification)) {
        $errors[] = "Qualification is required.";
    }
 
    if (empty($address)) {
        $errors[] = "Address is required.";
    }
 
    if (!isset($_FILES["cv"]) || $_FILES["cv"]["error"] != 0) {
 
        $errors[] = "Please upload your CV.";
 
    } else {
 
        $file_name = $_FILES["cv"]["name"];
        $file_size = $_FILES["cv"]["size"];
        $file_tmp = $_FILES["cv"]["tmp_name"];
 
        $allowed_extensions = [
            "pdf",
            "doc",
            "docx"
        ];
 
        $file_extension = strtolower(
            pathinfo($file_name, PATHINFO_EXTENSION)
        );
 
        if (!in_array($file_extension, $allowed_extensions)) {
            $errors[] = "Only PDF, DOC, and DOCX files are allowed.";
        }
 
        if ($file_size > 2 * 1024 * 1024) {
            $errors[] = "File size must not exceed 2 MB.";
        }
    }
 
    if (count($errors) == 0) {
 
        $upload_folder = "uploads/";
 
        if (!is_dir($upload_folder)) {
            mkdir($upload_folder, 0777, true);
        }
 
        $new_file_name = time() . "_" . basename($file_name);
 
        $file_path = $upload_folder . $new_file_name;
 
        if (move_uploaded_file($file_tmp, $file_path)) {
 
            header(
                "Location: result.php?applicant_id=" .
                urlencode($aid) .
                "&full_name=" .
                urlencode($fname) .
                "&email=" .
                urlencode($email) .
                "&phone=" .
                urlencode($phone) .
                "&gender=" .
                urlencode($gender) .
                "&job_position=" .
                urlencode($jposition) .
                "&qualification=" .
                urlencode($qualification) .
                "&address=" .
                urlencode($address) .
                "&cv=" .
                urlencode($new_file_name)
            );
 
            exit();
 
        } else {
 
            $errors[] = "Failed to upload the CV.";
        }
    }
}
 
?>
 
<!DOCTYPE html>
<html>
 
<head>
    <title>Application Result</title>
</head>
 
<body>
 
    <h2>Application Result</h2>
 
    <?php
 
    if (count($errors) > 0) {
 
        echo "<h3>Application Failed</h3>";
 
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
 
        echo '<a href="index.php">Go Back</a>';
 
    } else {
 
        echo "<p>Application successful.</p>";
    }
 
    ?>
 
</body>
 
</html>