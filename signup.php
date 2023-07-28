<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<script>
  function verifyPsd(){
    var pw=document.getElementById("pds").value;
    var userN=document.getElementById("usname").value;
    if(userN=="" || pw==""){
      alert("FILL THE EMPTY SPACE");
      
    }

  }
</script>
<body>
  <div class="header">
    <h1>FREEZER  INVENTORY</h1>
  </div>
  <div class="form_elements">
    <form  action="freezzerphp.php" method="post" class="form">
        <div class="login">
          <h1>sign up</h1>
        </div>   
        <input id="usname" value="" name="username1" type="text" placeholder="FULL NAME";>
        <br><br>
        <input name="password1" method="post" type="text" placeholder="YOUR EMAIL" id="pds" value="">
        <br><br>
        <input name="password1" method="post" type="password" placeholder="PASSWORD" id="pds" value="">
        <br><br>
        <div class="submition">
            <input onclick="verifyPsd()" type="submit">
        </div>
        <br><br>
        <a href="login.php">Login</a>
    </form>
  </div>
</body>
</html>