<html>
  <head>
    <title>My Website</title>
    <link rel = "stylesheet" type="text/css" href="style.css"   />
</head>
<body>
  <div id="container">
    <div id = "header">
    <h1> My website </h1>
    </div>
     <div id ="content">
        <div id = "nav">
        <h3>These are my favorite links and Diffrent Hobbies and interests:</h3>
         <ul>
         <li> Playing video games </a> </li>
         <li>Eating a lot of foods </li>
         <li>Making a simple game </li> 
         <li>Simple Programming </li>
         <li><a href="lol.ph"> League of Legends</a> </li>
         <li><a href="youtube.com"> Youtube</a> </li>
         <li><a href="github.com"> Github</a> </li>
         <li><a href="w3schools.com"> W3Schools</a> </li>
		 <li><a href="index.php"> CRUD LINK</a> </li>
         
         <ul>
        </div>
        
        <div id ="main">
        <h2> My Page </h2>
  <html>
  <head>
    <title>My Website</title>

</head>
<body>
        <p> Hi I'm Eligio S. Balao III, You can simply call me Eli</p>
        <img src = "gio dog.jpg" style="width:304px;height:228px;">

<p id="q1">What's my Favorite Food?</p>

<button type="button" onclick="document.getElementById('q1').innerHTML = 'Lechon!'">Show Answer!</button>
<button type="button" onclick="document.getElementById('q1').style.fontSize='35px'">Change!</button>

<p id="q2">What's my Favorite thing to do when I'm bored?</p>

<button type="button" onclick="document.getElementById('q2').innerHTML = 'Sleep!'">Show Answer!</button>
<button type="button" onclick="document.getElementById('q2').style.fontSize='45px'">Change!</button>

<p id="q3">What's my Favorite video game?</p>

<button type="button" onclick="document.getElementById('q3').innerHTML = 'League of Legends!'">Click Me!</button>
<button type="button" onclick="document.getElementById('q3').style.fontSize='55px'">Change!</button>

<p id="q4">What's my Favorite Programming Language so far?</p>

<button type="button" onclick="document.getElementById('q4').innerHTML = 'Java!'">Click Me!</button>
<button type="button" onclick="document.getElementById('q4').style.fontSize='65px'">Change!</button>


<p id="q5">I'm Interested in?</p>

<button type="button" onclick="document.getElementById('q5').innerHTML = 'WebDevelopment!'">Click Me!</button>
<button type="button" onclick="document.getElementById('q5').style.fontSize='75px'">Change!</button>

<p>Click the button to know what you are:</p>

<button onclick="myFunction()">You are?</button>

<script>
function myFunction() {
    alert("AWESOME!");
}
</script>

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
    if (!preg_match("/^[a-zA-Z 0-9 ]*$/",$name)) {
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

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
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

</body>




</html>
     </div>
     </div>
     <div id="footer">
     BY: Eligio S. Balao III
     </div>
</html>