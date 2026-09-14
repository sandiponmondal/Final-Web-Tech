<?php



if (isset($_POST["clear_cookie"])) {

    // Delete student name cookie
    setcookie("student_name", "", time() - 3600);

    // Delete student ID cookie
    setcookie("student_id", "", time() - 3600);

    // Go back to index.php
    header("Location: index.php?success=Cookie deleted successfully.");
    exit();
}



if (isset($_POST["submit"])) {

    // Get form data

    $student_name = trim($_POST["student_name"]);
    $student_id = trim($_POST["student_id"]);
    $email = trim($_POST["email"]);
    $department = $_POST["department"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];




    if (empty($student_name)) {

        header("Location: index.php?error=Student Name is required.");
        exit();
    }

    if (!preg_match("/^[a-zA-Z ]+$/", $student_name)) {

        header("Location: index.php?error=Student Name should contain only letters and spaces.");
        exit();
    }




    if (empty($student_id)) {

        header("Location: index.php?error=Student ID is required.");
        exit();
    }

    if (strlen($student_id) < 4) {

        header("Location: index.php?error=Student ID must contain at least 4 characters.");
        exit();
    }




    if (empty($email)) {

        header("Location: index.php?error=Email is required.");
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        header("Location: index.php?error=Please enter a valid email address.");
        exit();
    }




    if (empty($department)) {

        header("Location: index.php?error=Please select a department.");
        exit();
    }




    if (empty($password)) {

        header("Location: index.php?error=Password is required.");
        exit();
    }

    if (strlen($password) < 6) {

        header("Location: index.php?error=Password must contain at least 6 characters.");
        exit();
    }




    if ($password !== $confirm_password) {

        header("Location: index.php?error=Passwords do not match.");
        exit();
    }



    setcookie(
        "student_name",
        $student_name,
        time() + 3600
    );

    setcookie(
        "student_id",
        $student_id,
        time() + 3600
    );




    header("Location: index.php?success=Registration successful!");

    exit();
}
