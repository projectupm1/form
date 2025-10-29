<?php
$password = "teacher123";

if (!isset($_POST['pass']) || $_POST['pass'] !== $password) {
    echo '<form method="POST">
            <h3>Admin Login</h3>
            <input type="password" name="pass" placeholder="Enter password" required>
            <button type="submit">View Submissions</button>
          </form>';
    exit;
}

if (file_exists("submissions.txt")) {
    echo "<h2>All Student Submissions:</h2><pre>";
    echo htmlspecialchars(file_get_contents("submissions.txt"));
    echo "</pre>";
} else {
    echo "<p>No submissions yet.</p>";
}
?>