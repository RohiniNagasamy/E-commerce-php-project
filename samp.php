<?php
// Include the database connection file
$conn = mysqli_connect('localhost','root','MySQL8.0.39','profile') or die('connection failed');
// Insert data into the database
$query = "SELECT `*` FROM `productcard`";

$result = mysqli_query($conn, $query);
if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc()) {
        $field1name = $row["col1"];
        $field2name = $row["col2"];
        $field3name = $row["col3"];
        $field4name = $row["col4"];
        $field5name = $row["col5"];

        echo '<b>'.$field1name.$field2name.'</b><br />';
        echo $field5name.'<br />';
        echo $field5name.'<br />';
        echo $field5name;
    }

/*freeresultset*/
$result->free();
}
mysqli_close($conn);
?>