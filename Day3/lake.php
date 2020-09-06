// Place this file in 'htdocs' if using XAMPP (Apache php Server)
<?php
header('Access-Control-Allow-Origin: *');
date_default_timezone_set('US/Eastern');

class MyDB extends SQLite3 {
    function __construct() {
       $this->open('PondDB.db');
    }
 }
//Capturing input from the form (frontend)
$entityBody = file_get_contents('php://input');
$data = json_decode($entityBody); //php json format different from JS json format as it uses associative arrays

if ($entityBody) {
    $formData = $data->{'formDate'};
    $fromTime = $data->{'formTime'};
    $toDate = $date->{'toDate'};
    $toTime = $date->{'toTime'};
} else {
    $fromDate = '2015_01_01';
    $fromTime = '00:00:00';
    $toDate = '2015_01_01';
    $toTime = '00:10:00';
}

$db = new MyDB();
if(!$db) {
   echo $db->lastErrorMsg();
} else {
   echo "Opened database successfully<br>";
}

//Query
$sql = "SELECT reading_date, Barometric_Press from tbl_pond_data WHERE reading_date BETWEEN \"$fromDate\" AND \"$toDate\" AND time BETWEEN \"$fromTime\" AND \"$toTime\"";
$results = $db->query($sql);

//Numeric array
$bp_arr = array();
$rd_arr = array();

// push the data from db into the numeric arrays
while($row = $results->fetchArray(SQLITE3_ASSOC)) {
    array_push($bp_arr , $row['Barometric_Press']);
    array_push($rd_arr , "\"".$row['reading_date']."\"");
}

// output
echo "{ \"barometric_pressure\": [". join(', ', $bp_arr)."], \"dates\": [". join(', ', $rd_arr) ."]}<br>";
?>