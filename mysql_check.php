<?php

include "config/config.php";

// create table
$temp_tablename = "tmp_".md5(time());
$query = "CREATE TABLE $temp_tablename (
    i INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    r INTEGER,
    t VARCHAR(40), UNIQUE(t)
)";
DB::getDB()->exec($query);

// insert data
$query = "INSERT $temp_tablename (r,t) VALUES
    (1,'value1'),
    (2,'value2'),
    (3,'value3');";
DB::getDB()->exec($query);

// insert with ON DUPLICATE KEY...
$query = "INSERT $temp_tablename (r,t) VALUES
    (5,'value2'),
    (4,'value4')
ON DUPLICATE KEY UPDATE r = VALUES(r);";
$stmt = DB::getDB()->exec($query);

// Check data
$query = "SELECT * FROM $temp_tablename ORDER BY r";
$stmt = DB::getDB()->query($query);

$i = 0;
while ($line = $stmt->fetch(PDO::FETCH_OBJ)) {
	$i++;

	switch ($i) {
		case 1:
			if (($line->r != 1) || ($line->t != "value1")) {
				echo "error<br />";
				echo "expected: 1 | value1 <br />";
				echo "actual: $line->r | $line->t <br />";
			} else {
				echo "okay<br />";
			}
			break;
		case 2:
			if (($line->r != 3) || ($line->t != "value3")) {
				echo "error<br />";
				echo "expected: 3 | value3 <br />";
				echo "actual: $line->r | $line->t <br />";
			} else {
				echo "okay<br />";
			}
			break;
		case 3:
			if (($line->r != 4) || ($line->t != "value4")) {
				echo "error<br />";
				echo "expected: 4 | value4 <br />";
				echo "actual: $line->r | $line->t <br />";
			} else {
				echo "okay<br />";
			}
			break;
		case 4:
			if (($line->r != 5) || ($line->t != "value2")) {
				echo "error<br />";
				echo "expected: 5 | value2 <br />";
				echo "actual: $line->r | $line->t <br />";
			} else {
				echo "okay<br />";
			}
			break;

	}

}

// drop test table from DB
$query = "DROP TABLE $temp_tablename";
DB::getDB()->exec($query);


?>