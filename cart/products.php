<?php
	if(isset($_GET['action']) && $_GET['action']=="add"){
		
		$id=intval($_GET['id']);
		
		if(isset($_SESSION['cart'][$id])){
			
			$_SESSION['cart'][$id]['quantity']++;
			
		}else{
			
			$sql_s="SELECT * FROM medicine
				WHERE medId={$id}";
			$query_s=mysqli_query($con,$sql_s);
			if(mysqli_num_rows($query_s)!=0){
				$row_s=mysqli_fetch_array($query_s);
				
				$_SESSION['cart'][$row_s['medId']]=array(
						"quantity" => 1,
						"price" => $row_s['price']
					);
				
				
			}else{
				
				$message="This product id it's invalid!";
				
			}
			
		}
		
	}

?>
	<h1>Product List</h1>
	<?php
		if(isset($message)){
			echo "<h2>$message</h2>";
		}
	?>
			<table>
			    <tr>
			        <th>Name</th>
			        <th>Description</th>
			        <th>Price</th>
			        <th>Action</th>
			    </tr>
			    
				<?php
				
					$sql="SELECT * FROM medicine ORDER BY medName ASC";
					$query=mysqli_query($con,$sql);
					
					while ($row=mysqli_fetch_array($query)) {
						
				?>
						<tr>
						    <td><?php echo $row['medName'] ?></td>
						    <td><?php echo $row['diseaseCategory'] ?></td>
						    <td><?php echo $row['price'] ?>$</td>
						    <td><a style="background:#3BB1E4;color:black;padding:7px" href="index.php?page=products&action=add&id=<?php echo $row['medId'] ?>">Add to cart</a></td>
						</tr>
				<?php
						
					}
				
				?>
			    
			</table>