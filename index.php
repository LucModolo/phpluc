<?php include 'components/head.inc.php'; ?>

<div class="container">
  <h2>User Data</h2>
  <table class="table table-striped">
    <thead>
      <tr>
      <th>ID</th>
        <th>Name</th>
        <th>Vorname</th>
        <th>Strasse</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // Connect to the database
      $mysqli = new mysqli("localhost", "Luc", "Password1", "Luc", 3306);

      // Check connection
      if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
      }

      // Fetch data from the database
      $sql = "SELECT id, name, vorname, Strasse FROM Luc";
      $result = $mysqli->query($sql);

      // Loop through the data and display it in the table
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["id"] . "</td>";
          echo "<td>" . $row["name"] . "</td>";
          echo "<td>" . $row["vorname"] . "</td>";
          echo "<td>" . $row["Strasse"] . "</td>";
          echo "<td>
          <form method='post' action='delete.php'>
            <input type='hidden' name='id' value='" . $row['id'] . "'>
            <button type='submit' class='btn btn-danger btn-sm'>Delete</button>
          </form>
        </td>"
          ?>
          <html>
          <th><button onclick="document.location='insertForm.php'" class="btn btn-default">Insert</button></th>
          <th><button onclick="document.location='updateForm.php'" class="btn btn-default">Update</button></th>
          
                 
          </html>
          <?php
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='4'>No data found</td></tr>";
      }

      // Close the database connection
      $mysqli->close();
      ?>
    </tbody>
  </table>
</div>


<script>
function confirmDelete(id) {
    if (confirm("Are you sure you want to delete this record?")) {
        $.ajax({
            url: 'delete.php',
            type: 'POST',
            data: {id: id},
            success: function(response) {
                if (response == 'success') {
                    alert('Record deleted successfully!');
                    location.reload(); // Reload the page to reflect the changes
                } else {
                    alert('Error deleting record!');
                }
            }
        });
    }
}
</script>


</body>
</html>
