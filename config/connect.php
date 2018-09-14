<?php
$db_config = parse_ini_file('config.ini');

$db_host = $db_config['host'];
$db_user = $db_config['user'];
$db_pass = $db_config['pass'];
$db_dbname = $db_config['dbname'];

$db = new mysqli($db_host, $db_user, $db_pass, $db_dbname);

/* check connection */
if ($db->connect_errno) {
   printf("Connect failed: %s\n", $db->connect_error);
   exit();
}
/* change character set to utf8 */
if (!$db->set_charset("utf8")) {
	printf("Error loading character set utf8: %s\n", $db->error);
	exit();
}

/*if ($result = $db->query($sql)) {
	if ($result->num_rows > 0 ) {
		printf("Select returned %d rows.\n", $result->num_rows);
	} else {
		printf("Select returned %d rows.\n", $result->num_rows);
	}

	$result->close();
}*/

 $db->close();
?>