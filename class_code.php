<?php
// ----------------------------
// Database connection
// ----------------------------
$servername = "localhost";   // MySQL server
$username = "root";           // MySQL username
$password = "";       // MySQL password
$database = "testdb";         // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

// ----------------------------
// CREATE: Insert a new student
// ----------------------------
$sql = "INSERT INTO students (name, age) VALUES ('Ali', 20)";
if ($conn->query($sql) === TRUE) {
    echo "New student inserted successfully<br>";
} else {
    echo "Error: " . $conn->error . "<br>";
}

// ----------------------------
// READ: Select all students
// ----------------------------
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Student List:<br>";
    while($row = $result->fetch_assoc()) {
        echo "ID: {$row['id']} | Name: {$row['name']} | Age: {$row['age']}<br>";
    }
} else {
    echo "No students found<br>";
}

// ----------------------------
// UPDATE: Update age for a student
// ----------------------------
$sql = "UPDATE students SET age=21 WHERE name='Ali'";
if ($conn->query($sql) === TRUE) {
    echo "Student updated successfully<br>";
} else {
    echo "Error: " . $conn->error . "<br>";
}

// ----------------------------
// DELETE: Delete a student (optional)
// ----------------------------
//$sql = "DELETE FROM students WHERE name='Ali'";
//if ($conn->query($sql) === TRUE) {
//    echo "Student deleted successfully<br>";
//} else {
//    echo "Error: " . $conn->error . "<br>";
//}

// ----------------------------
// Close connection
// ----------------------------
$conn->close();
?>

//cd /d D:\Web-Technologies\PHP-Coding
//php -S localhost:8000
// Simple Code for Test
