<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>ACCXEX Login Section</title>
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
  	<h2>Please Complete The Login Credentials</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<input type="text" placeholder="Please Enter Your Username" name="username" required>
  	</div>
  	<div class="input-group">
  		<input type="password" placeholder="Please Enter Your Password" name="password" required>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
        <button type="reset" class="btn">Reset</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>


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