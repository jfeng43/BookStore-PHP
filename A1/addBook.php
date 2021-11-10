
<?php

	require_once('./lib.php');
	

?>
<!DOCTYPE html>
<html>
<head>
   <title></title>
   
   <style> body  {
    background-image: url("paper.gif");
    background-color: #cccccc;	
}




</style>
</head>
<body >
	
	
	<h1>Welcome to Jiajie's bookstore</h1>
		<p>You can<a href="addBook.php">Add a book</a> to the database or
		<a href="viewBooks.php">view all the book</a> available in the database</p><br>
		<pre><a href="addBook.php">Add a book</a> <a href="viewBooks.php">View books</a>
		</pre>
	
    <form name ="frm1" method ="post"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		
		Title:<input type = "text" name = "title" value="<?php echo $title;?>"/> 
		<span style="color:red;"> <?php echo $title_Err;?></span>
		<br><br>
		Author(s):<input type="text" name ="author" value="<?php echo $author;?>"/>
		<span style="color:red;"> <?php echo $author_Err;?></span>
		<br><br>
		PublishDate:<input type = "text" name = "publishdate" value="<?php echo $pub_date;?>"/> 
		<span style="color:red;"> <?php echo $date_Err;?>  </span>
		<br><br>
		ISBN:<input type = "text" name = "isbn" value="<?php echo $isbn;?>"/>
	<span style="color:red;"> <?php echo $isbn_Err;?></span>	
		<br><br>
		Category:<input type="radio" name="ca" value="hardcover" />
		Hardcover <input type="radio" name="ca" value="paperback" />
		Paperback<input type="radio" name="ca" value="ebook" />eBOOK	
		<span style="color:red;"> <?php echo $cat_Err;?></span>
		<br><br>
		Price:<input type = "text" name = "price" value="<?php echo $price;?>" />
	<span style="color:red;"> <?php echo $price_Err;?></span>	
		<br><br>
		Status:<select name ="status">
			<option value="instock">in stock</option>
			<option value="outofstock">out of stock</option>
			<option value="pre-order">pre-order</option>
			<option value="NA">N/A</option>
		</select>
		<br><br>
		Rating:<select name="rating">
			<option value="NA">N/A</option>
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
		</select>
		<br><br>
		Note:<textarea row="4" cols="50" name='note' id='note'></textarea><br>
		<input type="submit" name= "submit" value ="submit"> &nbsp; &nbsp; <input type="reset" name="reset" value="clear">			
		
</form>
<footer>
<pre>
<span> Part C reflection </span>
<ul> How long did you spend on this part?
<il> A:I spent about 4 days.
</il>
</ul>	
<ul>What was the difficulty level (1-10) in your opinion? 1 is easiest, 10 is most difficulty.<il> 7/10</il></ul>
<ul>What did you learn from this part?
<il> I review the html and php how to make a form and i am studying how to connetc database with html.</il></ul>
<ul>Any other comment?
<il></il>
</ul>
<?php 
echo " I declare that the attached assignment is wholly my own work in accordance
with Seneca Academic Policy. No part of this assignment has been copied
manually or electronically from any other source (including web sites) or
distributed to other students.
Name: <u>   jaijie     </u> Student ID: <u>    052807138     </u>"
?>
</pre>   
</footer>

</body>
</html>

<?php 
	//5. close database connection
	mysqli_close($connection);
	?>


