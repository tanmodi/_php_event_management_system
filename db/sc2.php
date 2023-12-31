<?php
include 'sc1.php';
?>
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
  integrity="sha512-..."
/>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "searchcity";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
$searchcity = $_POST['searchcity'];
// echo "searchcity: " . $searchcity . "<br>";
$sql = "SELECT * FROM `city` WHERE `city` = '$searchcity'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);




?>

<style>
  .contact-form {
    width: 50%;
    padding: 20px;
}

.contact-form label {
    font-weight: bold;
    display: block;
}

.contact-form input, textarea {
    width: 80%;
    border: 1px solid #ccc;
    padding: 10px;
    margin: 5px 0;
}

.contact-form input[type="submit"] {
    width: 30%;
    background-color: pink;
    color: white;
    border: none;
    cursor: pointer;
}

  .container {
    display: flex;
  }
  .contact-form,
  .google-map {
    width: 50%;
    padding: 20px;
  }
  .footer {
    background-color: #f0f0f0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px;
  }
  .logo {
    font-family: "Brush Script MT", cursive;
    font-size: 24px;
    color: #ff69b4;
  }
  .social-icons {
    display: flex;
  }
  .social-icons i {
    margin: 5px;
    color: #808080;
  }
</style>


<div class="container">
  <!-- Contact Form -->
  <div class="contact-form">
    <form>

    <!-- echo $row[`name`]. "<br>";
echo $row[`address`]. "<br>";
echo $row[`email`]. "<br>";
echo $row[`phone`]. "<br>";
echo $row[`map`]. "<br>";
echo $row[`city`]. "<br>"; -->

      <label for="name">Name:</label><br />
      <label for="name"> <?php echo $row['name'];?></label><br /><br />

      <label for="name">address:</label><br />
      <label for="name"> <?php echo $row['address'];?></label><br /><br />

      <label for="name">email:</label><br />
      <label for="name"> <?php echo $row['email'];?></label><br /><br />

      <label for="name">phone:</label><br />
      <label for="name"> <?php echo $row['phone'];?></label><br /><br />
      <label for="name">city:</label><br />
      <label for="name"> <?php echo $row['city'];?></label><br /><br />
      <!-- I need to add a submit button here -->
      
    </form>
  </div>

  <!-- Google Map Embed -->
  
  <!-- I need to embed a Google map here -->
  <div class="google-map">
    <iframe
      src="<?php echo $row['map'];?>"
      
      width="700"
      height="500"
      style="border: 0"
      allowfullscreen=""
      loading="lazy"
    ></iframe>
  </div>
</div>


<!-- 
name VARCHAR(200) NOT NULL,
  address VARCHAR(300) NOT NULL,
  email VARCHAR(30) NOT NULL,
  phone BIGINT(15) NOT NULL,
  map VARCHAR(1000) NOT NULL,
  city VARCHAR(50) NOT NULL, -->