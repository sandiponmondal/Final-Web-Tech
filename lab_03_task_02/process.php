<?php

$errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $applicationId = $_POST["applicationId"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $job = $_POST["job"];
    $gender = $_POST["gender"] ?? "";
    $education = $_POST["education"];
    $address = $_POST["address"];


    if (empty($applicationId)) {
        $errors[] = "Appliocation is require";
    }

    if (empty($name)) {
        $errors[] = "Name is require";
    }

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }



    if (empty($phone)) {
        $errors[] = "Phone number is require";
    } elseif (strlen($phone) != 11) {
        $errors[] = "Phone Number must be 11 digits ";
    }

    if (empty($password)) {
        $errors[] = "Password is require";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password must be 6 digits ";
    }

    if (empty($job)) {
        $errors[] = "Job selection is require";
    }

    if (empty($gender)) {
        $errors[] = "Gender selection is require";
    }

    if (empty($education)) {
        $errors[] = "Education Qualification is require";
    }

    if (empty($address)) {
        $errors[] = "Address is require";
    }

    if (!isset($_FILES["cv"]) || $_FILES["cv"]["error"] != 0) {

        $errors[] = "Please upload your CV.";
    } else {

        $file_name = $_FILES["cv"]["name"];
        $file_size = $_FILES["cv"]["size"];
        $file_tmp = $_FILES["cv"]["tmp_name"];
        $file_type = $_FILES["cv"]["type"];

        $file_extension = strtolower(
            pathinfo($file_name, PATHINFO_EXTENSION)
        );

        $allowed_extensions = [
            "pdf",
            "doc",
            "docx"
        ];

        if (!in_array($file_extension, $allowed_extensions)) {
            $errors[] = "Only PDF, DOC and DOCX files are allowed.";
        }

        if ($file_size > 2 * 1024 * 1024) {
            $errors[] = "File size must be less than 2 MB.";
        }
    }


    if (count($errors) == 0) {

        $upload_folder = "uploads/";

        $new_file_name = time() . "_" . basename($file_name);

        $file_path = $upload_folder . $new_file_name;

        move_uploaded_file($file_tmp, $file_path);


        header(
            "Location: result.php?id=" .
                urlencode($applicationId) .
                "&name=" .
                urlencode($name) .
                "&file=" .
                urlencode($new_file_name) .
                "&email=" .
                urlencode($email) .
                "&phone=" .
                urlencode($phone) .
                "&gender=" .
                urlencode($gender) .
                "&job=" .
                urlencode($job) .
                "&qualification=" .
                urlencode($education) .
                "&address=" .
                urlencode($address)
        );

        exit();
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

        echo "<h3>Application Failed!</h3>";

        foreach ($errors as $error) {

            echo "<p>$error</p>";
        }

        echo '<a href="index.php">Go Back</a>';
    } else {

        echo "<p>Application submitted successfully.</p>";
    }

    ?>

</body>

</html>