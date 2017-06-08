
<?php 
include ('header.php');
?>
<section>
<?php
$con =  @new mysqli("mysql.2freehosting.com", "u236307361_root", "password", "u236307361_child");
$ChildName = $_POST["Child"];
$ParentName = $_POST["Parent"];
$result = mysqli_query($con,"SELECT * FROM kids where Name = '$ChildName' AND Parent = '$ParentName'");
$row = mysqli_fetch_array($result);
?>
<p class="par">
<?php
if($row>0){
	echo "Name: ".$row["Name"]."<br>Gender: ".$row["Gender"]."<br>Parent: ".$row["Parent"]."<br>Date Of Birth: ".$row["DOB"]."<br><br>"; 
}else{
	echo "<h2>You don't exist, in database terms!( </h2>";
}
mysqli_close($con);
?>

<a href="index.php"><button type="button"> Return to Previous page</button></a>
</p>
	</section>
	<?php
	include ('footer.php');
?>

