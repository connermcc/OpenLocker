<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php
define('DB_NAME', 'westnlxx_OpenLocker');
define('DB_USER', 'westnlxx_OL');
define('DB_PASSWORD', 'starbucks1');
define('DB_HOST', 'localhost');
$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
if (!$link) {
	die('Could not connect: ' . mysql_error());
}
$db_selected = mysql_select_db(DB_NAME, $link);
if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}
?>
</head>

<body>
<h3>Add New School</h3>
<form action="newroster.php" method="post">
<select name="conference" style="width:200px">
<option value="" disabled selected>Conference</option>
<?php $sql = mysql_query("SELECT * FROM Conferences ORDER BY Name ASC"); 
while($row = mysql_fetch_row($sql)) {
	echo "<option value='".$row[0]."'>".$row[1]."</option>";
}
?>
</select><br>
<input style="width:200px" name="school" type="text" placeholder="School Name"><br>
<input style="width:200px" name="link" type="text" placeholder="ESPN Roster Link"><br>
<input type="submit">
</form>

</body>
</html>