<!DOCTYPE html>
<html lang="en"> 
<head> 
<title>Techno Limited</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <script> 
    function myfunc()
    {
      alert("Your message is submitted");
    }
  
    </script>



	<link rel="stylesheet" type="text/css" href="Stylesheet.css" >
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <a href="#" class="navbar-brand">
    <img src="images/logo.png" height="28" alt="Tera Tech">
    </a>
      <a class="navbar-brand" href="#">Techno</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">About Us</a></li>
      <li><a href="#">Why We?</a></li>
      <li><a href="#">Products</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Blogs</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="sign.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  <a href="#" class="notification">
  <span>Notification</span>
  <span class="badge">3</span>
   </a>

   
  <div class="container">
   <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>

  
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/pic1.jpg" alt="Techno" class="d-block w-100">
      <div class="carousel-caption">
        <h3>Technocom</h3>
        <p>Always ready to help.</p>
      </div>
    </div>

    <div class="item">
      <img src="images/pic2.jpg" alt="Sale" class="d-block w-100">
      <div class="carousel-caption">
        <h3>Summer Sale</h3>
        <p>Ready to witness the Summer Sale of the year!!!</p>
      </div>
    </div>

    <div class="item">
      <img src="images/pic3.jpg" alt="Smartphones" class="d-block w-100">
      <div class="carousel-caption">
        <h3>Smartphones</h3>
        <p>Big offers in latest handsets.</p>
      </div>
    </div>

    <div class="item">
      <img src="images/pic4.jpg" alt="Headphones" class="d-block w-100">
      <div class="carousel-caption">
        <h3>Need Headphones.</h3>
        <p>Wide range of headphones now!!!</p>
      </div>
    </div>

    <div class="item">
      <img src="images/pic5.jpg" alt="Clothes" class="d-block w-100">
      <div class="carousel-caption">
        <h3>Fashion</h3>
        <p>Wide range of stores added now.</p>
      </div>
    </div>

    <div class="item">
      <img src="images/pic6.jpg" alt="Medicines" class="d-block w-100">
      <div class="carousel-caption">
        <h3>Drugs and medicines.</h3>
        <p>We take care of all your needs.</p>
      </div>
    </div>


  </div>

  
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


<div class="frm">
<form action="new.php" method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="username" class="form-control" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="contact">Contact No.</label>
        <input type="text" name="contact" class="form-control" placeholder="Contact No.">
    </div>
    <div class="form-group">
        <label for="messages">Message/Feedback</label>
        <input type="textarea" name="message" class="form-control" placeholder="Message">
    </div>
    <button type="submit" class="btn btn-primary" onclick="myfunc()">Submit</button>
</form>





<nav class="navbar-wrapper navbar-inverse navbar-fixed-bottom">
  <div class="container-fluid">
    <p class="navbar-text pull-left">&copy; 2020 by Technocom. All rights reserved.</p>
    <a href="index.php" class="btn navbar-btn btn-danger pull-right">Techno.com</a> 
  </div>
</nav>




</body>
</html>
