
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db='jntucea';
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully<br>";

echo $_POST['first_name'];
echo '<br />';
echo $_POST['last_name'];

$first=$_POST['first_name'];
$sec=$_POST['last_name'];

$u="INSERT INTO phd(f_name,s_name) values('".$first."','".$sec."')";
if ($conn->query($u) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $u . "<br>" . $conn->error;
}
$r="SELECT f_name,s_name from phd";
$res=$conn->query($r);
if ($res->num_rows > 0) {
    // output data of each row
    while($row = $res->fetch_assoc()) {
        echo " - Name: " . $row["f_name"]. " " . $row["s_name"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
<body>
</body>
</html>
