<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booknook";

try {
    $conn = new PDO("mysql:host=localhost;dbname=booknook", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM products WHERE id='" . $_GET["id"] . "'";

    $conn->exec($sql);
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "
" . $e->getMessage();
    }

$conn = null;
?>




<?php

  // $conn = mysqli_connect("localhost", "root", "", "booknook");

  //   if (!$conn){

  //       die('Could not connect: ' . mysqli_error());

  //     }
  //         $sql = "SELECT * from products";

  //   $result = mysqli_query($conn, $sql);


  //   while ($row = mysqli_fetch_array($result)) {
  //     echo "<tr>
  //         <th>". $row["id"]."</th>
  //         <th>". $row["category_id"]. "</th>
  //         <th>". $row["name"]. "</th>
  //         <th>". $row["author_name"]. "</th>
  //         <th>". $row["small_description"]. "</th>
  //         <th>". $row["description"]. "</th>
  //         <th>". $row["original_price"]. "</th>
  //         <th>". $row["selling_price"]. "</th>
  //         <th>". $row["image"]. "</th>
  //         <th>". $row["quantity"]. "</th>
  //         <th>". $row["status"]. "</th>
  //         <th>". $row["trending"]. "</th>
  //         <th>". $row["created_at"]. "</th>

  //         <td><div class = 'btn-group'>
          
  //         <a class = 'btn btn-danger' href='./delete.php?id= ". $row["id"]."'> DELETE</a>
  //         </div></td>
  //       </tr>";
  //   }

  //   mysqli_close($conn);

   ?>