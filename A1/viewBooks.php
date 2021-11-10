
<?php
require_once('./lib.php');

	
	if (!$connection)
	{
		die("Database connection failed: ".
			mysqli_connect_error().
			" ( ". mysqli_connect_errno(). " )"
		);
	} else
	{	
		// 2. Perform database query
	$query = "SELECT * FROM book  "; 
	$result = mysqli_query($connection, $query);
	//result set 
		echo "connection success. <br>";
	}	
?>
<!DOCTYPE html>
<html>
<head>
<title> </title>
 <style>
 
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

body  {
    background-image: url("paper.gif");
    background-color: #cccccc;
	text-align: center;
 </style> 
</head>
<body >
		<a href = "addBook.php">HOME</a> 
    <?php						
				    echo "<br>";
					echo "<table  > ";
					echo "<caption> Book Information </caption>";
					echo "<tr>";
					echo "<th> Book Title </th>";
					echo "<th> Book Author </th>";
					echo "<th> Publish Date </th>";
					echo "<th> View Book Details </th>";
					echo "</tr>";
	
	 if (mysqli_num_rows($result) > 0)
	{
	while ($row = mysqli_fetch_array($result))

	{			
					$book_id = $row['bookID'];	
					echo "<tr>";
					echo "<td>".$row["title"]."</td>";
					echo "<td>".$row["author"]."</td>";
					echo "<td>".$row["publishDate"]."</td>";	
					echo '<td><a href="viewDetails.php?id=' . $book_id  .' ">details</a></td>';
					echo "</tr>";
		
	}			
	 }				echo "</table>";
						
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