<!DOCTYPE html>
<html>

<head>
    <title>Student Registration</title>
</head>

<body>

    <div class="container">

        <h2>Student Registration Form</h2>

        <!-- Display saved cookie information -->

        <?php

        if (isset($_COOKIE["student_name"]) && isset($_COOKIE["student_id"])) {

            echo '<div class="welcome">';
            echo '<h3>Welcome Back!</h3>';
            echo 'Student Name: ' . htmlspecialchars($_COOKIE["student_name"]);
            echo '<br><br>';
            echo 'Student ID: ' . htmlspecialchars($_COOKIE["student_id"]);
            echo '</div>';
        } else {

            echo "<p>No saved student information found.</p>";
        }

        ?>


        <!-- Display error message -->

        <?php

        if (isset($_GET["error"])) {

            echo '<div class="error">';
            echo htmlspecialchars($_GET["error"]);
            echo '</div>';
        }

        ?>


        <!-- Display success message -->

        <?php

        if (isset($_GET["success"])) {

            echo '<div class="success">';
            echo htmlspecialchars($_GET["success"]);
            echo '</div>';
        }

        ?>


        <!-- Registration Form -->

        <form action="process.php" method="POST">

            <label>Student Name</label><br>

            <input
                type="text"
                name="student_name"
                placeholder="Enter student name">
            <br><br>


            <label>Student ID</label><br>

            <input
                type="text"
                name="student_id"
                placeholder="Enter student ID">
            <br><br>


            <label>Email</label><br>

            <input
                type="text"
                name="email"
                placeholder="Enter email">
            <br><br>


            <label>Department</label><br>

            <select name="department">

                <option value="">-- Select Department --</option>

                <option value="CSE">CSE</option>

                <option value="EEE">EEE</option>

                <option value="BBA">BBA</option>

                <option value="English">English</option>

            </select>

            <br><br>


            <label>Password</label><br>

            <input
                type="password"
                name="password"
                placeholder="Enter password">
            <br><br>


            <label>Confirm Password</label><br>

            <input
                type="password"
                name="confirm_password"
                placeholder="Confirm password">
            <br><br>


            <button
                type="submit"
                name="submit">
                Register
            </button>

        </form>


        <!-- Clear Cookie -->

        <form action="process.php" method="POST">

            <button
                type="submit"
                name="clear_cookie">
                Clear Cookie
            </button>

        </form>

    </div>

</body>

</html>