<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
	<div >
		<table cellspacing="20">
                	<?php
                	$connect=new mysqli('localhost','root','','dealer_login');
                	$select=mysqli_select_db($connect,'dealer_login');
                	$check="select * from names ";
                	$check_q=$connect->query($check);
                	$i=0;
                	while($row=mysqli_fetch_row($check_q))
                	{
                		if ($i==0) 
                			echo '<tr>';
                		$i++;
                		?>
                		<td>
                		<div class="card" onclick="alert('hello')" >
  						<img src="chicken.jpg" alt="Avatar" style="width:330px; height:250px" >
  						<input type ="button" class="classic_button_next " id="next_button" value="1750" />
  						<img class="img-circle" src="images\man.jpeg" alt="man" style="width:60px; height:60px" >
  						<div class="container">
  	    						<h4><b><?php echo $row[0]; ?> Makers</b></h4> 
  	    						<?php
										$starNumber=2.5;
  	    								for($x=1;$x<=$starNumber;$x++)
  	    								 {
        									echo '<img  src="images\fs.png " style=\"width=13px; height=13px\"/>';
   										 }
   										 if (strpos($starNumber,'.')) 
   										 {
       										 echo '<img  src="images\hs.jpg" style=\"width=13px; height=13px\" />';
       										 $x++;
   										 }
   										 while ($x<=5) 
   										 {
        									echo '<img src="images\ws.png" style=\"width=13px; height=13px\" />';
        									$x++;
    									 }

  	    						?>
    							<p>&#9733&#9733&#9733&#9734 509 reviews</p> 
  						</div>
					</div>
				</td>
					<?php
					if($i==3)
					{
						echo '</tr>';
						$i=0;
					}

                	}

                	?>
		</table>
	</div>
	<input type="radio">
</body>
</html>


