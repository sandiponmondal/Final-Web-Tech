<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Job Application Syatem</title>
</head>

<body>

    <form action="process.php" method="POST" enctype="multipart/form-data">

        <label> Application Id:</label>
        <input type="text" name="applicationId">
        <br>
        <br>

        <label>Full Name</label>
        <input type="text" name="name">
        <br>
        <br>

        <label>Email:</label>
        <input type="email" name="email">
        <br>
        <br>


        <label>Phone:</label>
        <input type="text" name="phone">
        <br>
        <br>


        <label>Password:</label>
        <input type="password" name="password">
        <br>
        <br>

        <label>Gender:</label>
        <label for="male">Male</label>
        <input type="radio" name="gender" value="Male">

        <label for="male">Female</label>
        <input type="radio" name="gender" value="Female">
        <br>
        <br>
        <select name="job">
            <label>Job Position</label>
            <option value="Software  Developer">Software Developer</option>
            <option value="Web Developer">Web Developer</option>
            <option value="Database Adminstrator">Database Adminstrator</option>
            <option value="Network Engineer">Network Engineer</option>
        </select>
        <br>
        <br>

        <label>Education Qualification:</label>
        <input type="text" name="education">

        <br>
        <br>
        <label>Address :</label>
        <br>
        <textarea name="address" row="4" cols="30">

 </textarea>

        <br>
        <br>
        <label>Upload CV:</label>
        <input type="file" name="cv" accept=".pdf,.doc,.docx">
        <br>
        <br>
        <input type="submit" value="Register">



    </form>
</body>

</html>