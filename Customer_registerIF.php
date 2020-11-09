<?php
	include_once 'config.php';
?>
<table style="width:100%"  border = "1px solid black" bgcolor = "white">
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Password</th>
		</tr>
<?php
		
			$sql = "SELECT * FROM regdetailscust";
			$result = $conn -> query($sql);
			
			if($result->num_rows > 0){
			//ouput data of each row
			
				while ($row = $result->fetch_assoc()){
				
					$id=$row['User_ID'];
					
					echo "<tr><td>".$row["First_Name"]."</td>";
					echo "<td>".$row["Last_Name"]."</td>";
                    echo "<td>".$row["Address"]."</td>";
                    echo "<td>".$row["Email"]."</td>";
                    echo "<td>".$row["Phone_Number"]."</td>";
                    echo "<td>".$row["Gender"]."</td>";
                    echo "<td>".$row["DOB"]."</td>";
					echo "<td>".$row["Password"]."</td>";
					echo "<td><button type='submit'><a href ='CustomerDelete.php?Id=$id'>Delete</button></td>";
					echo "<td><button type='submit'><a href ='CustomerEdit.php?Id=$id'>Edit</button></td>";
					
				}
				}
				else {
				
					echo "0 result";
				}
				
				echo "</table>";
				$conn->close();
		?> 