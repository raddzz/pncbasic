
<!DOCTYPE html>
<html>
<head>
	<title>PNC Console</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<div class="centered">
<?php
$fname = strtoupper($_POST['firstname']);
$lname = strtoupper($_POST['lastname']);

if ($fname == "") {
	header("Location: 'URL HERE'");
}
elseif ($lname == "") {
	header("Location: 'URL HERE'");
}
$markers=array("Drugs","Firearms","Missed Court","Missing","Dangerous");
$randmark = $markers[array_rand($markers)];
	echo strtoupper($fname)?> <?php echo strtoupper($lname)?> HAS A MARKER FOR <?php echo strtoupper($randmark);
?>
<form action="index.html">
    <input type="submit" value="Go back" />
</form><br>

</div>
</body>
</html>