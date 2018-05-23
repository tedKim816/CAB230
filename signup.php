<!DOCTYPE html>
<html lang="en">

<head>
  <title>CAB230</title>
  <link rel="stylesheet" href="css/mystyle.css">
  <script type="text/javascript" src="javascript/script.js"></script>
</head>


<body>

  <div class="container">
      <div class="topnav">
        <a href="../index.php" id="logo">
          <img src="../img/logogo.png" alt="" height="75px" style="margin: 0%">
        </a>
        <button id="nav_btn" class="btns" onclick="location.href='../signup.php'" >Sign up</button>
        <button id="nav_btn" class="btns" onclick="location.href='../login.php'" >Sign in</button>
      </div>
    </div>

  <div class="container">
    <div class="content">
      <h2>Welcome to Registration</h2>
    </div>

    <hr class="liner">

    <div class="container">
      <form id="sign_up_form" class="signup_container" name='form1'>
        <label for="username"><b>Username</b></label>
        <br>
        <input type="text" name="username" placeholder="Enter your Username">
        <span id="surnameMissing" class="error-message">* Username is a required field</span>
        <br>
        <label for name ="phonenum"><b>Mobile</b></label>
        <br>
        <input type="text" id="phone_num" name="phonenum" placeholder="Enter your Mobile Number">
        <span id='messagephone' class="error-message"></span>
        <br>
        <label><b>Email</b></label>
        <br>
        <input type="text" placeholder="Enter your Email address">
        <label><b>Password</b></label>
        <br>
        <input name="password" id="password" type="password" placeholder="Enter your Password">
        <br>
        <label><b>Confirm Password</b></label>
        <br>
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Enter your Password">
        <span id='message' class="error-message"></span>
        <label for="country"><b>Country</b></label>
        <select id='selectstate'name="country">
        <option selected="" value="Default">(Please select a state)</option>
        <option value="nsw">NSW</option>
        <option value="qld">QLD</option>
        <option value="sa">SA</option>
        <option value="tas">TAS</option>
        <option value="vic">VIC</option>
        <option value="wa">WA</option>
        </select>
        <br>
        <span id='messagestate' class="error-message">* Select your state from the list</span>
        <br>
        <label id="gender"><b>Gender</b></label>
        <input type="radio" name="sex" value="Male" id="msexselect"><span>Male</span>
        <input type="radio" name="sex" value="Female" id="fsexselect"><span>Female</span>
        <br>
        <span id='messagegender' class="error-message">* Select your gender</span>
        <br>
        <br>
        <input type="checkbox" name="agreement" id="terms"><span>I accept the <a href="javascript:void(0)">Terms and Conditions</a></span>
        <br>
        <span id='messageagreement' class="error-message">* Please accept terms and conditions to proceed</span>
        <br>
        <div class="btns">
          <button  type="button" class="joinbtn" onclick="validate()">Join</button>
        </div>
      </form>
    </div>
  </div>



      <div class="container">
        <div class="icon-bar">
          <p>Follow us: </p>
          <a href="#">
            <img src="./img/instagram.png" alt="">
          </a>
          <a href="#">
            <img src="/img/facebook.png" alt="">
          </a>
          <a href="#">
            <img src="/img/twitter.png" alt="">
          </a>
        </div>
        <div class="footer">
          <p>Copyright &copy;</p>
        </div>
      </div>



</body>

</html>
