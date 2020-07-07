<!doctype html >
<html>
<head>
<title> Home CodeIgniter</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style src="text/css">
   body {
    background-color:black;
    font: 400 15px Lato, sans-serif;
    line-height: 1;
    color: black;
    position: relative;
  }

  .h1, .h2, .h3,.h5, h1, h2, h3,h5 {
    margin-top: 40px;
    margin-bottom: 60px;
  }

  a:link, a:visited {
  background-color: #171735;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

  a:hover, a:active {
  background-color: #36efe5;
}

  .progress-bar {
  height: 8px;
  background: #36efe5;
  width: 0%;
  }

  .jumbotron {
    background-color: black;
    color: #36efe5;
    font-family: Montserrat, sans-serif;
  }
  
  .container-fluid {
    padding: 60px 50px;
  }

  .navbar {
    margin-bottom: 0;
    background-color: #171735;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }

  .navbar li a, .navbar .navbar-brand {
    color: white !important;
  }

  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: white !important;
    background-color: black !important;
  }

  .navbar-default .navbar-toggle {
    border-color: #3a4b53;
    color: white !important;
  }

  .w3-teal, .w3-hover-teal:hover {
      color: #fff!important;
      background-color: #767686!important;
  } 

  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .text {font-size: 11px}
  }

</style>
</head>
<body>
	<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="30">
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../index.html">HOME</a></li>
      </ul>
    </div>
  </div>
</nav>
<div>
<div class="jumbotron text-center">
<p>
	<h1>Login berhasil !</h1>
	<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
	<a href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a></p>
</div>
</div>
</div>
</ul>
<ul class="pagination visible-xs pull-right">
</ul>
</div>
</div>
</div>
<script>
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}

</script>
</body>
</html>