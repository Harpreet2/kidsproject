<?php 
include ('header.php');?>
<script>
function validateForm() {
    var x = document.forms["myForm"]["Child"].value;
	var y = document.forms["myForm"]["Parent"].value;
    if (x == null || x == "" || y == null || y == "") {
        alert("Names must be filled out");
        return false;
    }
}
</script>
<section>
<form name="myForm" Action="process.php" onsubmit="return validateForm()" method="POST" >
  <label>Child's Name:</label> 
  <input type="text" name="Child"><br>
  <label>Parent's Name:</label>
  <input type="text" name="Parent"><br><br>
  <span  class="form-field-no-caption"><input type="submit" value="Search"></span>
</form>
</section>
<?php
include ('footer.php');
?>