<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>ACCXEX Logged In Portal</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="menu">
   <div id="logo">ACCXEX</div>
<ul>
                <li><a href="#">Market <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown_menu">
                        <ul>
                            <li><a href="Dashboard.html">Dashboard</a></li>
                            <li><a href="Rate-Fluctuation.html">% Rate UpDown</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">Services <i class="fas fa-caret-down"></i></a>
                <div class="dropdown_menu">
                    <ul>
                        <li><a href="">Investing</a></li>
                        <li><a href="">Trading</a></li>
                        <li><a href="">Pricing</a></li>
                        <li><a href="">Exchange Crypto</a></li>
                        <li><a href="">P2P Transfer</a></li>
                    </ul>
                </div>
            </li>
                <li><a href="#">Learn <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown_menu">
                        <ul>
                            <li><a href="">Terms</a></li>
                            <li><a href="">Investing</a></li>
                            <li><a href="">Accounts</a></li>
                            <li><a href="">Ledger <i class="fas fa-caret-right"></i></a>
                                <div class="dropdown_menuB">
                                <ul>
                                    <li><a href="">Crypto</a></li>
                                    <li><a href="">NFTs</a></li>
                                    <li><a href="">Smart Contracts</a></li>
                                    <li><a href="">Trade Finance</a></li>
                                </ul>
                            </div>
                          </li>
                        </ul>
                    </div>
                </li>
                <li><a href="support.html">Support</a></li>
                <li><a href="#">Who we are <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown_menu">
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="blog.html">Blogs</a></li>
                            <li><a href="">Customers</a></li>
                            <li><a href="">Commitments</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <a href="login.php" class="log">Log In</a>
            <a href="register.php"><button class="sign">Sign Up</button></a>
</nav>
        
        <br><br>

<div class="header">
	<h2>From Here You Can Access Website</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Heya... <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="Services-Sign-Log-Section.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>

	<br>
	<a href="index.html"><button class="sign">Securely Access Website</button></a>
	<br>

	<p>Now your history on this website is completely secure. We respect our User's Privacy therefore we look after complete authentication from our server's end...</p>
</div>
		
<!-- Footer Text -->
<footer id="footer">
        <div class="row">
            <div class="col">
                <div class="logo">ACCXEX</div>
                <p>© 2022 ACCXEX. All rights reserved. <br><br>
                    ACCXEX and its in-application and web experiences with its family of wholly owned subsidiaries which includes ACCXEX Securities, and ACCXEX Crypto.</p>
            </div>
            <div class="col">
                <h3>HeadQuarter<div class="underline"><span></span></div></h3>
                <p>Kanpur</p>
                <p>Lucknow</p>
                <p>GB Nagar</p>
                <p class="email-id"><a href="mailto:asthreetaschaft@gmail.com">sddf@gmail.com</a></p>
            </div>
            <div class="col">
                <h3>Explore<div class="underline"><span></span></div></h3>
                <ul>
                    <li><a href="">About</a></li>
                    <li><a href="">Ledger</a></li>
                    <li><a href="">Privacy</a></li>
                    <li><a href="">Pricing</a></li>
                    <li><a href="">Options</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">
            All investments involve risks, including the possible loss of capital.
        </p>
    </footer>
</body>
</html>