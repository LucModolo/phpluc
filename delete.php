<?php
$stmt = new mysqli("localhost", "Luc", "Password1", "Luc", 3306);

if ($stmt->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 
      // Check if the ID is provided
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    
        // Connect to the database
        $conn = new mysqli("localhost", "username", "password", "database");
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // Prepare and execute the delete query
        $sql = "DELETE FROM table_name WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    
        // Check if the record was deleted successfully
        if ($stmt->affected_rows > 0) {
            echo "Record deleted successfully.";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    
        // Close the statement and connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Invalid request.";
    }
    
}



