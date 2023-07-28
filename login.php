<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freezer</title>
    <link rel="stylesheet" href="style1.css">
</head>
<script>
  function verifyPsd(){
    var pw=document.getElementById("pds").value;
    var userN=document.getElementById("usname").value;
    if(userN=="" || pw==""){
      alert("FILL THE EMPTY FILLED");
      
    }

  }

</script>
<body>
  <div class="header">
    <h1>FREEZER  INVENTORY</h1>
  </div>
  <div class="form_elements">
    <form  action="dashboard.php" method="post" class="form">
        <div class="login">
          <h1>login</h1>
        </div>   
        <input  id="usname" value="" name="username1" type="text" placeholder="USERNAME";>
        <br>
        <input name="password1" method="post" type="password" placeholder="PASSWORD" id="pds" value="">
        <br>
        <br>
        <div class="submition">
            <input onclick="return verifyPsd()" type="submit"  value="Login">
        </div>
        <br><br>
        <a href="forgotpassword.php">forgot password?</a>       
        <a href="signup.php">sign up</a>
    </form>
  </div>
</body>
</html>