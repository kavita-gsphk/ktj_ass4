<?php
session_start();
$username = $_SESSION['username'];
$myData = $_POST['data'];
list($check_1, $check_2, $check_3, $check_4, $check_5, $check_6, $check_7, $check_8, $check_9, $check_10, $check_11, $check_12, $check_13, $check_14, $check_15, $check_16, $check_17, $check_18, $check_19, $check_20) = explode('|', $myData);
$db = mysqli_connect('fdb28.awardspace.net', '3508469_practice', 'qwe123qwe', '3508469_practice') or die("dont connect");

$dbname = 'practice';
$btest = mysqli_select_db($db, $dbname);
if (!$btest) {
    print "<h1>Unable to select the Database</h1>";
}
$sql_statement = "SELECT username,check_1,check_2,check_3,check_4,check_5,check_6,check_7,check_8,check_9,check_10,check_11,check_12,check_13,check_14,check_15,check_16,check_17,check_18,check_19,check_20 FROM base";
$result = mysqli_query($db, $sql_statement);
$statement = "insert into base(username,check_1,check_2,check_3,check_4,check_5,check_6,check_7,check_8,check_9,check_10,check_11,check_12,check_13,check_14,check_15,check_16,check_17,check_18,check_19,check_20) values('$username','$check_1','$check_2','$check_3','$check_4','$check_5','$check_6','$check_7','$check_8','$check_9','$check_10','$check_11','$check_12','$check_13','$check_14','$check_15','$check_16','$check_17','$check_18','$check_19','$check_20')";
$result = mysqli_query($db, $statement);
print "Added";
