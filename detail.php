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
        <div class="row">
            <div class="col-75" style="margin: auto;">
                <div class="float-left col-50">
                    <h1>7th Brigade Park, Chermside</h1>
                    <ul>
                        <li>Rating:
                            <span>
                                <img src="../img/rating4.5.jpg" height="15" width="80"></img>
                            </span>
                        </li>
                        <li>Address: Delaware St</li>
                        <li>Suburb: Chermside</li>
                    </ul>
                </div>
            </div>
            <div>
                <img style="max-height:500px; width: 80%; margin-left: 10%;" src="../img/7thBrigadePark_googlemap.png">
            </div>
            <div class="col-75" style="margin: auto;">
                <div>
                    <h3>Write a Review</h3>
                    <input type="text" placeholder="Help other foodies by sharing your review">
                    <button>Add your review</button>
                </div>
                <div class="list-group">
                    <div class="list-group-item">
                        <img class="float-left" src="../img/id.png">
                        <h2>David</h2>
                        <p>Rating:
                            <span>
                                <img src="../img/rating4.jpg" height="15" width="80"></img>
                            </span>
                        </p>
                        <p> I like the atmosphere and the internet is really fast.</p>
                    </div>
                    <div class="list-group-item">
                        <img class="float-left" src="../img/id.png">
                        <h2>Aaron</h2>
                        <p>Rating:
                            <span>
                                <img src="../img/rating4.5.jpg" height="15" width="80"></img>
                            </span>
                        </p>
                        <p> I did one speed test and got around 8mbps, so nowhere near those speeds – that's impressive. I'm
                            pretty sure there's no data limit either :)</p>
                    </div>
                    <div class="list-group-item">
                        <img class="float-left" src="../img/id.png">
                        <h2>Kim</h2>
                        <p>Rating:
                            <span>
                                <img src="../img/rating5.jpg" height="15" width="80"></img>
                            </span>
                        </p>
                        <p> I've used 7th Brigade Park's free Wi-Fi a few times in the last month, and it's actually been quite
                            a pleasant experience, definitely not slow.

                        </p>
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