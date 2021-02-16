<?php
include('config.php');
?>

<?php
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
    ?>

    <table border="1px solid black">
		<thead>
			<tr> 
				<th>Name</th>
				<th>E-Mail</th>
				<th>Gender</th>
				<th>City</th>
			</tr>
		</thead>
		<tbody>
			
            <?php
			// while($row = $result->fetch_array())
			while($row = $result->fetch_assoc()){?>
			<tr>
				<td><?php echo $row['username']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['gender']?></td>
				<td><?php echo $row['city']?></td>
            </tr>
           <?php } ?>
		</tbody>
	</table>
<?php    }
?>
<html>
    <head>
        <title>User Details</title>
    </head>
    <style>
   		table{
                       border-collapse: collapse;
                       margin-left: 100px;
                       background-color:lightgrey;
                                          
        		 }
        		
                th,td{
                	
                	padding: 10px;
                	
                }
    </style>
<body>

</body>
</html>
