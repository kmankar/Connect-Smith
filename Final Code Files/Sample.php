<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
</body>
<form action = "">
<select name = "Year" onchange="showAlumnus(this.value)">
<option value = "Select the Batch" selected> Select Your Choice</option>
<?php include 'db_connect.php'; ?>
<?php while($row = mysqli_fetch_array($result)):;?>
<option value="<?php echo $row[0];?>"><?php echo $row[0];?></option>
<?php endwhile; ?>
</select>
</form>
<br>
<div id="txtHint"></div>

<script>
function showAlumnus(str) {
  var xhttp; 
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getalumni.php?q="+str, true);
  xhttp.send();
}</script>
</body>
</html>

