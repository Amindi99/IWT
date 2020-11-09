<?php
	include_once 'config.php';
?>
<table style="width:100%"  border = "1px solid black" bgcolor = "white">
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
            <th>Email</th>
            <th>Registration Number</th>
            <th>Address</th>
            <th>Contact Number</th>
            <th>Priority level</th>
            <th>Issue Category</th>
            <th>Issue_description</th>
            <th>Date</th>
		</tr>
<?php
		
			$sql = "SELECT * FROM requirement";
			$result = $conn -> query($sql);
			
			if($result->num_rows > 0){
			//ouput data of each row
			
				while ($row = $result->fetch_assoc()){
				
					$id=$row['User_ID'];
					
					echo "<tr><td>".$row["First_Name"]."</td>";
					echo "<td>".$row["Last_Name"]."</td>";
                    echo "<td>".$row["Email"]."</td>";
                    echo "<td>".$row["Registration_Num"]."</td>";
                    echo "<td>".$row["Address"]."</td>";
                    echo "<td>".$row["Contact_Num"]."</td>";
                    echo "<td>".$row["Priority_level"]."</td>";
                    echo "<td>".$row["Issue_category"]."</td>";
                    echo "<td>".$row["Issue_description"]."</td>";
                    echo "<td>".$row["Date"]."</td>";
					echo "<td><button type='submit'><a href ='FeedbackDelete.php?Id=$id'>Delete</button></td>";
					echo "<td><button type='submit'><a href ='FeedbackEdit.php?Id=$id'>Edit</button></td>";			
				}
				}
				else {
				
					echo "0 result";
				}
				
				echo "</table>";
				$conn->close();
		?> 