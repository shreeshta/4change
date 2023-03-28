<?php
  // Retrieve the form data
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  // Connect to the database and create the user profile
  $conn = mysqli_connect('localhost', 'root', 'root', 'healthcare');
  
  $sql = "INSERT INTO table1 (id,name, email, username, password) VALUES ('$id','$name', '$email', '$username', '$password')";
  
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select data from the "users" table
$sql = "SELECT * FROM table1";
$result = mysqli_query($conn, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    // Output the data for each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Id: " . $row["id"] . "<br>";
        echo "Name: " . $row["name"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Phone: " . $row["phone"] . "<br>";
        echo "<br>";
    }
} else {
    echo "No results found";
}

// Close the connection to MySQL
mysqli_close($conn);
  
  mysqli_close($conn);
?>