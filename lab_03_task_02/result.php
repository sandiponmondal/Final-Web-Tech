<?php


$applicationId = $_GET["id"] ?? "";
$name = $_GET["name"] ?? "";
$cvName = $_GET["cv"] ?? "";


$email = $_REQUEST["email"] ?? "";
$phone = $_REQUEST["phone"] ?? "";
$gender = $_REQUEST["gender"] ?? "";
$job = $_REQUEST["job"] ?? "";
$education = $_REQUEST["education"] ?? "";
$address = $_REQUEST["address"] ?? "";

?>

<!DOCTYPE html>
<html>

<head>
    <title>Application Successful</title>
</head>

<body>

    <h2>=================================</h2>
    <h2>APPLICATION SUCCESSFUL</h2>
    <h2>=================================</h2>

    <p>
        <strong>Applicant ID:</strong>
        <?php echo htmlspecialchars($applicationId); ?>
    </p>

    <p>
        <strong>Name:</strong>
        <?php echo htmlspecialchars($name); ?>
    </p>

    <p>
        <strong>Email:</strong>
        <?php echo htmlspecialchars($email); ?>
    </p>

    <p>
        <strong>Phone:</strong>
        <?php echo htmlspecialchars($phone); ?>
    </p>

    <p>
        <strong>Gender:</strong>
        <?php echo htmlspecialchars($gender); ?>
    </p>

    <p>
        <strong>Job Position:</strong>
        <?php echo htmlspecialchars($job); ?>
    </p>

    <p>
        <strong>Qualification:</strong>
        <?php echo htmlspecialchars($education); ?>
    </p>

    <p>
        <strong>Address:</strong>
        <?php echo htmlspecialchars($address); ?>
    </p>

    <p>
        <strong>Uploaded CV:</strong>
        <?php echo htmlspecialchars($cvName); ?>
    </p>

    <p>
        <strong>Application submitted successfully.</strong>
    </p>

</body>

</html>