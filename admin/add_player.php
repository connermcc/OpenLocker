<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Player to Roster</title>

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
</body>
</html>