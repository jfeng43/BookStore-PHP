

<?php
require_once('lib.php');
	// test if connection occurred	

if (!$connection)
	{
		die("Database connection failed: ".
			mysqli_connect_error().
			" ( ". mysqli_connect_errno(). " )"
		);
	} 
	else
	{		
	
	// 2. Perform database query     		  
	$id = $_GET['id'];
	$result = mysqli_query($connection,"SELECT * FROM book WHERE bookID = $id");
	
		echo "connection success. <br>";
	}

?>

<?php 
	
	//test if query succeeds or not
	if (!$result)
	{
		die ("Database query failed!");
	} else
	{
/*		echo "<p>Successfully selected " 
          . mysqli_affected_rows($connection) . " record(s).</p>";
	*/	echo "<p>Successfully selected " 
          . mysqli_num_rows($result) . " record(s) and "
		  .mysqli_num_fields($result). " field(s) "
		  ."</p>";
		  
	}
?>

<!DOCTYPE html>
<html>
<head>
  <title></title> 
  <style>
  body  {
    background-image: url("paper.gif");
    background-color: #cccccc;
	text-align: center;
}
  table, td, th {
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}
  
  </style>
</head>
<body>
 
<a href = "addBook.php">HOME</a> 
    <?php
						//3. Process with query result if any	
						$row = mysqli_fetch_assoc($result);
						echo "<br><br>";
						echo "<table  > ";						
						echo "<caption> Book Information </caption>";
						echo "<tr>";
						echo "<th>BookId:" . $row["bookID"] . "</th>" ;
						echo "<th>Title: " .  $row["title"] ."</th>";					
						echo "<th>Author: " . $row["author"] ."</th>";					
						echo "<th>Publish Date: " . $row["publishDate"]. "</th>";					
						echo "<th>ISBN: " . $row["isbn"]. "</th>";			
						echo "<th>Category: " . $row["category"]. "</th>";	
						echo "<th>Price($): " . $row["price"] ."</th>";
						echo "<th>Status: " . $row["status"]. "</th>";
						echo "<th>Rating: " . $row["rating"] ."</th>";
						echo "<th>note: " . $row["note"] ."</th>";
						echo "</tr>";
					
																
						echo "<tr>";
						echo "<td>" . $row["bookID"] . "</td>" ;
						echo "<td> " .  $row["title"] ."</td>";					
						echo "<td> " . $row["author"] ."</td>";					
						echo "<td> " . $row["publishDate"]. "</td>";					
						echo "<td> " . $row["isbn"]. "</td>";			
						echo "<td> " . $row["category"]. "</td>";	
						echo "<td> " . $row["price"] ."</td>";
						echo "<td> " . $row["status"]. "</td>";
						echo "<td> " . $row["rating"] ."</td>";
						echo "<td>" . $row["note"] .   "</td>";
						echo "</tr>";
						
						echo "</table  > ";	
						

   ?>
    
<a href = "addBook.php">HOME</a> 
 
  <?php 
	//4. Release returned data
	mysqli_free_result($result);
   ?>
  
</body>
</html>

<?php 
	//5. close database connection
	mysqli_close($connection);
?>