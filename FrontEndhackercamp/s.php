 <?php


$servername = "localhost";
$username = "root";
$password = "sunilmanu";
$dbname = "fend";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$var=$_POST['Category'];
$var1=$_POST['Price'];
$var2=$_POST['Date'];

$sql =	"INSERT INTO Expense (Date,Category,Price) VALUES
            ('$var2','$var', '$var1')";

if(mysqli_query($conn, $sql)){
    header("location:first.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);
?>
