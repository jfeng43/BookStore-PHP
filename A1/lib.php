
	<?php
	

	$lines=file('../secret/topsecret.txt');
	//var_dump($lines);
	$dbhost=trim($lines[0]);
	$dbuser=trim($lines[1]);
	$dbpass=trim($lines[2]);
	$dbname=trim($lines[3]);

   $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	
	if (!$connection)
	{
		die("Database connection failed: ".
			mysqli_connect_error().
			" ( ". mysqli_connect_errno(). " )"
		);
	} else
	{
		echo "connection success. <br>";
	}
	
	
	
			
	$title_Err =$Pub_Err=$author_Err=$isbn_Err=$price_Err=$date_Err =$cat_Err ="";
    $title= $author= $price=  $pub_date =  $isbn =  $status =  $rating = $note = $category =  "";	
    $valid=false;
	
	if ($_POST){
	
	
	
	
	
	
    $status = $_POST["status"];
	$rating = $_POST["rating"];
	$note =$_POST["note"];
	
	
	
	
	if ( trim($_POST["title"]) == NULL)
	{
		$title_Err = "*Error: Input title.";
	
		
	} else{
		
		$title=$_POST["title"];
			
	}
	
	
	
	if( trim($_POST["author"]) == NULL )
	{
		$author_Err = "*Error: Input author";

	} else{
		
		
		$author=$_POST["author"];
		
		
		
	}


	
    if( trim($_POST["price"]) == NULL || (!(is_numeric($_POST["price"])) ))
	{
		$priceErr = "* Error:   Input a numeric value for price";
		
	} else{
		
			
				
						$price= $_POST["price"];
		   }
		   

	
	
			$pub_date = $_POST["publishdate"];
	
         preg_match("/^(\d{2})\/(\d{2})\/(\d{4})$/",$pub_date, $match);
    
  
			if(!$match)  
			{
		    			
		
				$date_Err = "*Error:  input format as mm/dd/yyyy ";
				
				
			}
  
	
	if(isset($_POST['ca']))
{
	$category = $_POST["ca"];
	
}  else {
              
			  $cat_Err = "*Select a category";
         }
	
	if((strlen( trim($_POST["isbn"])) >13) || (!(is_numeric($_POST["isbn"])) ))
{
        $isbn_Err = "*Error: Input title.";
		
}
else
{
	            $isbn =$_POST["isbn"];
	
					
			 
		
}
	
	}
	
			 if (empty($title_Err) && (empty($author_Err))    && (empty($isbn_Err)) &&  (empty($cat_Err)) &&(empty($price_Err)) &&(empty($date_Err )))
	{ 
				
				$valid = true;
	}
		
		

	
		 if (isset($_POST["submit"]))
{		
			
			if($valid){
			
										
			$find="SELECT isbn FROM book WHERE isbn=$isbn";
			
			$query = mysqli_query($connection,$find);		
			
			
			$number_of_rows = mysqli_fetch_array($query, MYSQLI_NUM);
			
			
			if($number_of_rows[0] > 1) 	{         	$isbn_Err = "isbn $isbn  Already in Exists";		}					
					
				else
				{									
	
					$query = "INSERT INTO book ";
					$query .= "( title, author, isbn, publishDate,category,price,status,rating,note) ";
					$query .= "VALUES ";
					$query .= "('$title', '$author', '$isbn', '$pub_date','$category','$price','$status','$rating','$note')";
			    	$result = mysqli_query($connection, $query);
					echo $query."<br>";
	
		
			  }
			  
			}
			
			   }
		
		
			?>