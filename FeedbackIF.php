<?php
	include_once 'config.php';
?>
<table style="width:100%"  border = "1px solid black" bgcolor = "white">
		<tr>
			<th>Feedback1</th>
			<th>Feedback2</th>
            <th>Feedback3</th>
            <th>Feedback4</th>
            <th>Feedback5</th>
            <th>Feedback6</th>
		</tr>
<?php
		
			$sql = "SELECT * FROM feedback";
			$result = $conn -> query($sql);
			
			if($result->num_rows > 0){
			//ouput data of each row
			
				while ($row = $result->fetch_assoc()){
				
					$id=$row['User_ID'];
					
					echo "<tr><td>".$row["Feedback1"]."</td>";
					echo "<td>".$row["Feedback2"]."</td>";
                    echo "<td>".$row["Feedback3"]."</td>";
                    echo "<td>".$row["Feedback4"]."</td>";
                    echo "<td>".$row["Feedback5"]."</td>";
					echo "<td>".$row["Feedback6"]."</td>";
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