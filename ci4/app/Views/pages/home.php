<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
 background-color:linen; 
 }

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 70%;
  margin: auto;
  text-align: center;
  background-color:white;
}

button {
  border-color:linen;
  border-style: solid;
  display: inline-block;
  padding: 10px;
  color: white;
  background-color: plum;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 20px;
}


.container {
  position: relative;
  width: 50%;
  margin: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: palevioletred;
}

.container:hover .overlay {
  opacity: 1;
}

.image {
  display: block;
  width: 100%;
  height: auto;
  text-align: center;
}

.text {
  color: linen;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

.profile {
 border-radius: 50%
}

h2 {
color: palevioletred;
}



</style>
</head>
<body>

<div class="card"> 
       
  <h1><button><b><i>PROFILE</i></b></button></h1>
  <img src="https://i.pinimg.com/564x/0e/95/7e/0e957e1c3ed14b56fd39143b6ee4af41.jpg" class="profile" style="width: 10%">
  
  <h2 id="demo">Good Evening! I'm Sayaka</h2>
<script>
if (new Date().getHours() < 18) {
  document.getElementById("demo").innerHTML = "Good day! I'm Sayaka";
}
</script>
  <p> <b><i>BS Computer Science Student<b></i></p>
  <p> <b><i>I like cats, kpop, games, and make up! <b></i></p>

  <section class="page-section about" id="about">
  <div class="container">
  <img src="https://i.pinimg.com/564x/ff/3d/59/ff3d59797bad3eadf19deb1256d53e9a.jpg" class="image"  style="width: 100%">
  <div class="overlay">
    <div class="text">Experience: <br> Java, SQL, HTML, Python</div>
  </div>
</div>

  <div class="container">
  <img src="https://i.pinimg.com/564x/9e/c3/6f/9ec36f084312d3e25fd1f40cc15c059b.jpg" class="image"  style="width: 100%">
  <div class="overlay">
    <div class="text">
	Goals in Life: <br> To be financially stable where I can buy both needs and wants for my family and myself
	</div>
  </div>
</div>

 <div class="container">
  <img src="https://i.pinimg.com/564x/6f/fd/7d/6ffd7d48ad3145791db5840ba83e9129.jpg" class="image"  style="width: 100%">
  <div class="overlay">
    <div class="text">
	What do you expect to learn from Web Programming? <br> Learn and recall previous and new HTML and CSS topics
	</div>
  </div>
</div>

 <div class="container">
  <img src="https://i.pinimg.com/564x/24/10/29/24102902536cacd4636d4082e2e19be7.jpg" class="image"  style="width: 100%">
  <div class="overlay">
    <div class="text">
	What do you want to learn to help you in your chosen Major? <br> I want to learn about how to handle data in my course and also web programming
	</div>
  </div>
</div>

<p><i>images are all from pinterest!</i></p>

  <div style="margin: 30px 0; margin-top: 10px;"> 
	</div>
</div>

</section>



<div class="card">
   <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

 <h1><button><b><i>GUEST FORM</i></b></button></h1>
<p><span class="error">* required field</span></p>
<form method="post" action="/~sphernandez/lab3/ci4/public/home">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

 <h1><button><b><i>GUEST LIST</i></b></button></h1>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
        $servername = "192.168.150.213";
        $username = "webprogss211";
        $password = "fancyR!ce36";
        $dbname = "webprogss211";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO sphernandez_myguests ( name, email, website, comment, gender)
VALUES ('$name', '$email', '$website', '$comment', '$gender')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}

?>
</div>


</body>
</html>
