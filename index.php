<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/mystyle.css">
  <title>CAB230</title>
</head>


<body>

  <div class="container">
    <div class="topnav">
      <a href="../index.php" id="logo">
        <img src="../img/logogo.png" alt="" height="75px" style="margin: 0%">
      </a>
      <button id="nav_btn" class="btns" onclick="location.href='/signup.php'">Sign up</button>
      <button id="nav_btn" class="btns" onclick="location.href='/login.php'">Sign in</button>
    </div>
  </div>

  <div class="container">
    <div class="content_home">
      <br>
      <div class="col-75" style="padding-left: 10%; padding-right: 20%;">
        <form style="display: inline" action="../search_result.php" method="get">
          <br>

          <label style="opacity: 0.7;"><b>Sorting options</b></label>
          <br>
          <span style="opacity: 0.7;">Rating   </span><select id='rating'name="rating" style="width: 20%; color: #6495ED;">
          <option selected="" value="Default">(Please select a rating)</option>
          <option value="rateone">*</option>
          <option value="ratetwo">**</option>
          <option value="ratethree">***</option>
          <option value="ratefour">****</option>
          <option value="ratefive">*****</option>
          </select>
          <span style="opacity: 0.7; padding-left: 10px;">Suburb   </span><select id='suburb'name="suburb" style="width: 20%; color: #6495ED;">
          <option selected="" value="Default">(Please select a suburb)</option>
          <option value="nsw">Anarrly</option>
          <option value="qld">Chermside</option>
          <option value="sa">City</option>
          <option value="tas">Uppermount Gravatt</option>
          <option value="vic">Garden city</option>
          </select>
          <input style="width: 80%" type="text" placeholder="Enter your suburb or location..">
          <button class="btns">Search</button>
        </form>
      </div>
    </div>
    <div style="margin-top: 10px;">
      <div style="margin: auto;">
        <div class="news list-group">
          <div class="list-group-item">
            <div class="float-left" style="max-width: 220px;">
              <img src="../img/boy_wifi_park.jpg">
            </div>
            <div class="float-right" style="width: 75%;">
              <h2>Wi-Fi in parks</h2>
              <p> Find out which parks and public spaces offer free Wi-Fi access, as well as information on support,
                 use and hotspot locations. Separate web pages cover free Wi-Fi access at:</p>
            </div>
          </div>
          <div class="news list-group-item">
            <div class="float-left" style="max-width: 220px; margin-right: 10px;">
              <img src="../img/wifi-queen-st.jpg">
            </div>
            <div class="float-right" style="width: 75%;">
              <h2>Wi-Fi in Brisbane Central Business District</h2>
              <p> Read about how to access free Wi-Fi in the CBD as well as information on support, use and hotspot locations.
              </p>
            </div>
          </div>
          <div class="news list-group-item">
            <div class="float-left" style="max-width: 220px;">
              <img src="../img/boy-digital-tablet.jpg">
            </div>
            <div class="float-right" style="width: 75%;">
              <h2>Wi-Fi in Brisbane Libraries</h2>
              <p> Free wireless access to the internet (Wi-Fi) is available in Council libraries to all library visitors
                with a laptop, tablet, smartphone or personal digital assistant (PDA).
                Library members can also make a booking to access the internet from a library computer. </p>
            </div>
          </div>

        </div>

      </div>

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
