<?php
require_once('connection.php');
$query = "select * from conference";
$result = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Conference Management System</h1>

    <!-- Registration Form -->
    <h2>Register for a Conference</h2>
    <form action="register.php" method="POST">
        <!-- Form to collect user registration details -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <!-- Input field for user's name -->

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <!-- Input field for user's email -->

        <label for="conference">Select Conference:</label>
        <select id="conference" name="conference" required>
            <!-- Dropdown menu to select conference -->
            <option value="conference1">Conference 1</option>
            <option value="conference2">Conference 2</option>
            <!-- Add more options as needed -->
        </select><br><br>

        <button type="submit">Register</button>
        <!-- Button to submit registration form -->
    </form>

    <!-- Schedule -->
    <h2>Conference Schedule</h2>
    <table>
        <!-- Table to display conference schedule -->
        <tr>
            <!-- Table header row -->
            <th>Conference Name</th>
            <th>Date</th>
            <th>Email</th>
            <th>UserName</th>
        </tr>
        <?php
            while($rows= mysqli_fetch_assoc($result))
            {
        ?>
        <tr>
            <!-- Conference schedule row -->
            <td><?php echo $rows['Type'] ?></td>
            <td><?php echo $rows['Date'] ?></td>
            <td><?php echo $rows['Email'] ?></td>
            <td><?php echo $rows['Name'] ?></td>
        </tr>
        <?php
            }
            ?>
        <!-- Add more rows for additional conferences -->
    </table>

    <!-- Feedback Form -->
    <h2>Give Feedback</h2>
    <form action="feedback.php" method="POST">
        <!-- Form to collect user feedback -->
        <label for="conference_feedback">Conference:</label>
        <select id="conference_feedback" name="conference_feedback" required>
            <!-- Dropdown menu to select conference for feedback -->
            <option value="conference1">Conference 1</option>
            <option value="conference2">Conference 2</option>
            <!-- Add more options as needed -->
        </select><br><br>

        <label for="feedback">Your Feedback:</label><br>
        <textarea id="feedback" name="feedback" rows="4" cols="50" required></textarea><br><br>
        <!-- Textarea for user to enter feedback -->

        <button type="submit">Submit Feedback</button>
        <!-- Button to submit feedback form -->
    </form>
</body>
</html>