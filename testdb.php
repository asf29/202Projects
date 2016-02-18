#!/usr/bin/php
<?php
$db = new mysqli("localhost", "root", "asf18041624", "it202");
/*
    In here we can access the DB if it worked.
*/

## used for error checking
if($db->connect_errno > 0)
{
    echo __FILE__.__LINE__." ERROR: " . $db->connect_error.PHP_EOL;
    exit(-1);
}

## since this is a mysql command, another semicolon must go inside ""
## specify search string(command in mysql)
$query = "select * from Student;";

$results = $db->query($query);

print_r($results);

## fetch_assoc returns a single row of query as an associative array
while ($row = $results->fetch_assoc())
{
    print_r($row);
}

echo "We are connected to the Database".PHP_EOL;

$db->close();

?>
