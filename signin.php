 <?php
 $connect=mysqli_connect("localhost","username","password","login");
        if (mysqli_connect_errno()){
          print "Error".$connect->error;
          exit();
        }
          //selecting the database
            $db = $connect->select_db("login");
              if ($db){
              	//print"connected";
              } 
               if (isset($_POST["nm"])||isset($_POST["em"])|| isset($_POST["ps"])){

                       if (empty($_POST['nm'])||(empty($_POST['em']))||(empty($_POST['ps']))){
                       echo("please enter details");
                    }
                  }
                 

                 $query="SELECT username, Email,password FROM signin 
                  WHERE username ='jointheteam' AND Email='jointheteam@aglet.co.za',passsword='@TeamAglet'";

                  $result = mysqli_query($connect,$query);
                   if ($query||mysqli_num_rows($result)==0)
                   {
                        header("Location:index.html");
                   }                  
?> 
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/photoswipe.css">
	<link rel="stylesheet" href="css/default-skin.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Log In</title>
    
</head>
<body class="body">

	<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						
						
						<form action="#" class="sign__form" method="POST">
							<a href="index.html" class="sign__logo">
								<img src="img/aglet_logo.svg" alt="">
							</a>

							<div class="sign__group">
								<div class="sign__group">
								<input type="text" name="nm" class="sign__input" placeholder="Username">
							</div>
								<input type="text" name="em"  class="sign__input" placeholder="Email">
							</div>
                              
							<div class="sign__group">
								<input type="password"name ="ps" class="sign__input" placeholder="Password">
							</div>

							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked">
								<label for="remember">Remember Me</label>
							</div>
							
							<input type ="submit" class="sign__btn" name ="signIn" type="button">Log In</input>

							<span class="sign__text">Don't have an account? <a href="signup.html">Sign up!</a></span>

							<span class="sign__text"><a href="#">Forgot password?</a></span>
						</form>
					     
					</div>
				</div>
			</div>
		</div>
	</div>
             
             	<ul class="footer__social">
						<li class="facebook"><a href="https://www.facebook.com/thorisho.kekana.7"><i class="icon ion-logo-facebook"></i></a></li>
						<li class="instagram"><a href="https://www.instagram.com/kekanathorisho/"><i class="icon ion-logo-instagram"></i></a></li>
						<li class="twitter"><a href="https://twitter.com/WagaSekota"><i class="icon ion-logo-twitter"></i></a></li>
						<li class="linkedin"  style="color:blue;"><a href="https://www.linkedin.com/in/thorisho-kekana-28867a184/"><i class="icon ion-logo-linkedin"></i></a></li>
					</ul>
            
           
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/wNumb.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/jquery.morelines.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>