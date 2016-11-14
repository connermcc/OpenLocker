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
	
	
$school = $_POST['school'];
$sport = $_POST['sport'];

$sql = "INSERT INTO Roster (SchoolID, SportID) VALUES ('$school', '$sport')";

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
}

$sql = mysql_query("SELECT ID From Roster ORDER BY ID DESC");
$row = mysql_fetch_array($sql);
$RID = $row['ID'];

mysql_close();

header("Location: http://www.theopenlocker.com/admin/roster.php?RID=" .$RID. ""); /* Redirect browser */
exit();


?>