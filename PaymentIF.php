<?php
	include_once 'config.php';
?>
<table style="width:100%"  border = "1px solid black" bgcolor = "white">
		<tr>
			<th>Card Number</th>
			<th>Expire Date</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>CVV</th>
		</tr>
<?php
		
			$sql = "SELECT * FROM payment";
			$result = $conn -> query($sql);
			
			if($result->num_rows > 0){
			//ouput data of each row
			
				while ($row = $result->fetch_assoc()){
				
					$id=$row['User_ID'];
					
					echo "<tr><td>".$row["Card_Number"]."</td>";
					echo "<td>".$row["Exp_Date"]."</td>";
                    echo "<td>".$row["First_Name"]."</td>";
                    echo "<td>".$row["Last_Name"]."</td>";
                    echo "<td>".$row["CVV"]."</td>";
					echo "<td><button type='submit'><a href ='EmployeeDelete.php?Id=$id'>Delete</button></td>";
					echo "<td><button type='submit'><a href ='EmployeeEdit.php?Id=$id'>Edit</button></td>";
					
				}
				}
				else {
				
					echo "0 result";
				}
				
				echo "</table>";
				$conn->close();
		?> 