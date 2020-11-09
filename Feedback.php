<!DOCTYPE>
<html>
<head>
<style>

.feedb{
background-image:url(images/image16.jpg) ;
padding-bottom:20px;
background-size:cover;

}

.td1{
font-style:solid;
}
</style>
	
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	
	<meta charset="utf-8">
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>UserProfile</title> 
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
		include 'header.php';
	?>


<h1 class="heading">Customer Feedback Form</h1>


<center>
<p  style="font-family:cursive" class="discript">Please take a few minutes to give us feedback about our service by filling in this short Customer Feddback Form.
We are conducting this research in order to measure your satisfaction with the qaulity of our service.We thank your
for your participation.</p>
</center>

<div class="feedb" style="border:2px inset black;">
<form method="POST" action="submitFeedback.php"  onsubmit="return feedback()">
<table class="tbl">
<tr>
	<td></td>
	<td class=td1><b>&nbsp &nbsp &nbsp &nbsp  No Idea</b></td>
	<td class=td1><b>&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  Poor </b></td>
	<td class=td1><b>&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp Satisfied </b></td>
	<td class=td1><b>&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  Good </b></td>
	<td class=td1><b>&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  Excellent </b></td>
<tr> 
	<td >1.How would you rate your overall experience with our service?</td>
	   	  <td> <input class="cbox1" type="checkbox" name="rating1" value="No Idea" ></td>
      	  <td><input class="cbox2" type="checkbox" name="rating1" value="Poor" ></td>
       	  <td><input class="cbox3" type="checkbox" name="rating1" value="Satisfied" ></td>
       	  <td><input class="cbox4" type="checkbox" name="rating1" value="Good" ></td>
         <td><input class="cbox5" type="checkbox" name="rating1" value="Excellent" ></td>
</tr>		
 
<tr> 
		<td>2.How satisfied are you with the customer support?</td>
	 	  <td><input  class="cbox1"type="checkbox" name="rating2" value="No Idea" ></td>
       	  <td><input  class="cbox2" type="checkbox" name="rating2" value="Poor" ></td>
         <td><input class="cbox3"  type="checkbox" name="rating2" value="Satisfied" ></td>
       	  <td><input class="cbox4" type="checkbox" name="rating2" value="Good" ></td>
      	  <td><input class="cbox5"  type="checkbox" name="rating2" value="Excellent" ></td>
</tr>	

<tr>	
	<td>3.What do you think about our Experts work?</td>
	  <td><input class="cbox1" type="checkbox" name="rating3" value="No Idea" ></td>
        <td><input class="cbox2" type="checkbox" name="rating3" value="Poor" ></td>
        <td><input class="cbox3" type="checkbox" name="rating3" value="Satisfied" ></td>
        <td><input class="cbox4" type="checkbox" name="rating3" value="Good" ></td>
        <td><input class="cbox5" type="checkbox" name="rating3" value="Excellent" ></td>
</tr>

<tr>	  
	<td>4.How satisfied are you with the timeliness of service?</td>
	
		<td><input class="cbox1" type="checkbox" name="rating4" value="No Idea" ></td>
        <td><input class="cbox2" type="checkbox" name="rating4" value="Poor" ></td>
        <td><input class="cbox3" type="checkbox" name="rating4" value="Satisfied" ></td>
        <td><input class="cbox4" type="checkbox" name="rating4" value="Good" ></td>
        <td><input class="cbox5" type="checkbox" name="rating4" value="Excellent" ></td>
</tr>	  

<tr>	
	<td>5.Hoe would you rate our charge?</td>
	  <td><input class="cbox1"  type="checkbox" name="rating5" value="No Idea" ></td>
        <td><input class="cbox2"type="checkbox" name="rating5" value="Poor" ></td>
        <td><input class="cbox3" type="checkbox" name="rating5" value="Satisfied" ></td>
        <td><input  class="cbox4"  type="checkbox" name="rating5" value="Good" ></td>
        <td><input  class="cbox5"type="checkbox" name="rating5" value="Excellent" ></td>
</tr>

<tr>	  
	<td>6.Would you recommend our service to other people?</td>
		<td>  <input class="cbox1"  type="checkbox" name="rating6" value="No Idea" ></td>
        <td><input  class="cbox2" type="checkbox" name="rating6" value="Poor" ></td>
        <td><input class="cbox3" type="checkbox" name="rating6" value="Satisfied" ></td>
        <td><input class="cbox4" type="checkbox" name="rating6" value="Good" ></td>
        <td><input  class="cbox5" type="checkbox" name="rating6" value="Excellent" ></td>
</tr>
	  
</table>
		
	<center>	
	 <a href="#"><input class="button8" type="submit" value="Send Feedback" ></a>
	</center>
</form>
</div>

<?php
		include 'footer.php';
?>

</body>
</html>























