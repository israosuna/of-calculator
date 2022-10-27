<meta http-equiv="expires" content="Mon, 26 Jul 1997 05:00:00 GMT"/>
<meta http-equiv="pragma" content="no-cache" />
 <?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: 0");

 $servername = "localhost";
 $database = "";
 $username = "";
 $password = "";
 
 // Create connection
 
 $conn = mysqli_connect($servername, $username, $password, $database);
 
 // Check connection
 
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }
 
 echo "Connected successfully";
 
 
$sql_count_sextcaption = "select COUNT(id)as total from content where id_category=2";
$result1 = mysqli_query($conn,$sql_count_sextcaption);
$total_sext=0;
if (mysqli_num_rows($result1) > 0) {
    // OUTPUT DATA OF EACH ROW
    while($row = mysqli_fetch_assoc($result1)) {
        $total_sext = $row['total'];
        echo "total No: " . $row["total"];
    }
} else {
    echo "0 results";

}

$sql_count_cock = "select COUNT(id)as total from content where id_category=1";
$result2 = mysqli_query($conn,$sql_count_cock);
$total_cock = 0;
if (mysqli_num_rows($result2) > 0) {
    // OUTPUT DATA OF EACH ROW
    while($row = mysqli_fetch_assoc($result2)) {
        $total_cock = $row['total'];
        echo "total No: " . $row["total"];
    }
} else {
    echo "0 results";

}

$sql_selectcaption = "SELECT * FROM content ORDER BY RAND() LIMIT 5";
$result3 = mysqli_query($conn,$sql_selectcaption);
$total_cock = 0;
if (mysqli_num_rows($result3) > 0) {
    // OUTPUT DATA OF EACH ROW
    while($row = mysqli_fetch_array($result3)) {

              echo $row['caption'];
          
    }
} else {
    echo "0 results";

}
mysqli_close($conn);