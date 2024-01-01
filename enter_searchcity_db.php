<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "searchcity";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<form action="sc2.php" method="post">
    <select name="searchcity" id="searchcity">
        <option value="searchcity">Search city</option>
        <?php
        $sql = "SELECT `city` FROM `city`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $city = $row['city'];
            echo "<option value='$city'>$city</option>";
        }
        ?>
    </select>
    <button type="submit">search</button>
</form>
<!-- echo "Connected successfully<br>";

$sql = "SELECT * FROM `city`";
print_r($conn);
$result = mysqli_query($conn, $sql);
echo "Connected successfully<br>";
// Find the number of records returned
$num = mysqli_num_rows($result);
echo "Connected successfully<br>";
echo $num;
echo " records found in the DataBase<br>";


// Close connection -->
<?php
mysqli_close($conn);
?>