<!DOCTYPE html>
<!--Registration Form-->
<html>
<head>
<meta charset="utf-8">
<title>Membership</title>
<style>
/*Applying styles to the web page*/
tr {
  height: 100px;
}
td {
  width: 10%;
}
form {
  width: 800px;
  margin: 0 auto;
}
input {
  border: 2px solid black;
  height: 40px;
}
textarea {
  border: 2px solid black;
}
.error {
  color: #FF0001;
}

body {
  background-color: thistle;
  font-size: 20px;
}
</style>
</head>
<body>
<body style="background-color: thistle;font-size:20px">
<!--Registration form getting registration details from user and calling validate() function to validate the input data-->
<h1 style="text-align: center; font-family: Times New Roman;">Membership Details</h1>
<!--PHP code for form validation-->
<?php
// define variables to empty values
$nameErr = $emailErr = $mobilenoErr = $addressErr = $dateErr = $passwordErr = $usernameErr = "";

$name = $email = $mobileno = $address = $date = $username = $password = "";

//set flag as 0
$flag=0;

//Input fields validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //Name Validation
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $flag=1;
  } elseif($flag!=1) {
    $name = input_data($_POST["name"]);
    if (!preg_match("/^[a-zA-Z][a-zA-Z. ]{1,100}$/",$name)) {
      $nameErr = "Please enter a valid name";
    }
  }
  else{
    $flag=0;
  }
  
  //Address Validation
  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
    $flag=1;
  } elseif($flag!=1) {
    $address = input_data($_POST["address"]);
    if (!preg_match("/^[\w][\w_:,\. ]{1,100}$/",$address)) {
      $addressErr = "Please enter a valid address";
    }
  }
  else{
    $flag=0;
  }
  
  //Email Validation
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $flag=1;
  } elseif($flag!=1) {
    $email = input_data($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Please enter a valid email address";
    }
  }
  else{
    $flag=0;
  }
  
  //UserName Validation
  if (empty($_POST["username"])) {
    $usernameErr = "User Name is required";
    $flag=1;
  }
  elseif($flag!=1)
  {
    $username = input_data($_POST["username"]); 
    if(strlen($username)<8){
      $usernameErr="Username should have atleast 8 characters";
    }
    if (!preg_match ("/^[a-zA-Z0-9_]{8,}$/", $username) ) {
      $usernameErr = "Please enter a valid UserName";
    }
  }
  else
  {
    $flag=0;
  }
  
  //Password Validation
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
    $flag!=1;
  }
  elseif($flag!=1)
  {
    $password = input_data($_POST["password"]); 
    if(strlen($password)<8){
      $passwordErr="Password should have atleast 8 characters";
    }
    if (!preg_match ("/^[a-zA-Z0-9]{8,}$/", $password) ) {
      $passwordErr = "Please enter a valid password";
    }
  }
  else{
    $flag=0;
  }
  
  //Phone Number Validation
  if (empty($_POST["mobileno"])) {
    $mobilenoErr = "Phone number is required";
  }
  elseif($flag!=1) {
    $mobileno = input_data($_POST["mobileno"]); 
    if (!preg_match ("/^\d{10}$/", $mobileno) ) {
      $mobilenoErr = "Only numeric value is allowed.";
    }
    if (strlen ($mobileno) != 10) {
      $mobilenoErr = "Phone number should have 10 digits.";
    }
  }
  else{
    $flag=0;
  }
  
  //Date of birth validation
  if (empty($_POST["date"])) {
    $dateErr = "Date of Birth is required";
    $flag=1;
  }
  else{
    $date = input_data($_POST["date"]);
    $flag=0;
  }
}

function input_data($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data); 
  return $data;
}
?>
<form name="RegForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validate()" method="post">
  <table>
    <tr>
      <td><b> Name:</b></td>
      <td><input type="text" size="65" name="name" /><br>
        <span class="error"><?php echo $nameErr; ?> </span>
      </td>
    </tr>
    <tr>
      <td><b> Address: </b></td>
      <td><input type="text" size="65" name="address" /><br>
        <span class="error"><?php echo $addressErr; ?> </span>
      </td>
    </tr>
    <tr>
      <td><b> E-mail Address: </b></td>
      <td><input type="email" name="email" size="65" placeholder="email@domain.com" /><br>
        <span class="error"><?php echo $emailErr; ?> </span>
      </td>
    </tr>
    <br/>
    <tr>
      <td><b>User Name: </b></td>
      <td><input type="text" name="username" size="65" /><br>
        <span class="error"><?php echo $usernameErr; ?> </span>
      </td>
    </tr>
    <tr>
      <td><b> Password: </b></td>
      <td><input type="password" size="65" name="password" /><br>
        <span class="error"><?php echo $passwordErr; ?> </span>
      </td>
    </tr>
    <tr>
      <td><b> Phone Number: </b></td>
      <td><input type="text" size="65" name="mobileno" /><br>
        <span class="error"><?php echo $mobilenoErr; ?> </span>
      </td>
    </tr>
    <tr>
      <td><b> Date Of Birth: </b></td>
      <td><input type="date" size="65" name="date"/><br>
        <span class="error"><?php echo $dateErr; ?> </span>
      </td>
    </tr>
    <tr>
      <td><b>Comments: </b></td>
      <td><textarea cols="55" name="comment" > </textarea></td>
    </tr>
  </table>
  <br><br><br>
  <p> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <input type="submit" style="width:120px; font-size:30px" value="Submit" name="submit" />
  </p>
</form>
<!--PHP code for storing form data into the database-->
<?php 
if(isset($_POST['submit'])) { 
  if($flag==0) {
    // Create connection to the database
    $conn = mysqli_connect("localhost","root","","regdb"); 
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    //store form data into the database
    $sql = "INSERT INTO regt (UserName, Password, Name, Email, PhoneNumber, Address, DateOfBirth) VALUES ('$_POST[username]', '$_POST[password]','$_POST[name]','$_POST[email]', '$_POST[mobileno]','$_POST[address]','$_POST[date]')";

    if (mysqli_query($conn, $sql)) {
      echo '<script>window.alert("Registered successfully")</script>';
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    //Close database connection
    mysqli_close($conn);
  }
  else {
    echo '<script>alert("Form is not filled correctly")</script>'; 
    print $flag;
  }
}
?>
</body>
</html>