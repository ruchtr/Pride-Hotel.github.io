<?php 
session_start();

error_reporting(1);
?>
<!--Menu Bar Close Here-->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <p style="color:grey; margin-top:5px; font-size:1.5em;">PRIDE PLAZA HOTEL</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php"title="Home">Home</a></li>
        <li><a href="about.php"title="About">About us</a></li>
		<li><a href="contact.php"title="About">Contact us</a></li>
		    <li><a href="image_gallery.php"title="Gallery">Gallery </a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <?php 
      if($_SESSION['create_account_logged_in']!="")
      {
        ?>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View Status <span class="caret"></span></a>
        	<ul class="dropdown-menu">
          		<li><a href="profile.php">Profile</a></li>
              <li><a href="order.php">Booking Status</a></li>
              <li><a href="logout.php">Logout</a></li>
        	</ul>
        </li>
        <?PHP } else
		{
		?>
		<li><a href="Login.php"title="login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Login</a>
        </li>
		
		<li><a href="registration_form.php"title="login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Register</a>
        </li>
		
		<?php 
		} ?>
      </ul>
    </div>
  </div>
</nav>   

<!--Menu Bar Close Here-->
