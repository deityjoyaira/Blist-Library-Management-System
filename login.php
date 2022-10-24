<?php 
include_once 'config/Database.php';
include_once 'class/User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

if($user->loggedIn()) {	
	header("Location: dashboard.php");	
}

$loginMessage = '';
if(!empty($_POST["login"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {	
	$user->email = $_POST["email"];
	$user->password = $_POST["password"];	
	if($user->login()) {
		header("Location: dashboard.php");	
	} else {
		$loginMessage = 'Invalid login! Please try again.';
	}
} else {
	$loginMessage = 'Fill all fields.';
}
include('inc/header4.php');
?>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="css/dashboard.css" />



</head>
<body>

	<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>


  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
			<a href = "index.html">
          		<img src = "images/3.png" style = "width:150px;height:150px;">
			</a>
            <h4 class="fw-bold mb-5" style = "color:rgb(255, 134, 53);">Log In Now</h4>
			<?php include('left_menus.php'); ?>
			<?php if ($loginMessage != '') { ?>
					<div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $loginMessage; ?></div>                            
				<?php } ?>

			<form id="loginform" class="form-horizontal" role="form" method="POST" action=""> 

              <!-- Email input -->
              <div class="form-outline mb-4">
               
				<input type="text" class="form-control" id="email" name="email" value="<?php if(!empty($_POST["email"])) { echo $_POST["email"]; } ?>" placeholder="email" style="background:white;" required>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
			  <input type="password" class="form-control" id="password" name="password" value="<?php if(!empty($_POST["password"])) { echo $_POST["password"]; } ?>" placeholder="password" required>
              </div>


              <!-- Submit button -->
              <div style="margin-top:10px" class="form-group">      
						<input type="submit" name="login" value="Login" class="btn btn-info">
					</div>

              <div class="registration">
                <a href = "registration.php">
                  <p> New User? Register Here. </p>
                </a>
              </div>
			  		<p>
					<strong>For Admin User Login:</strong><br>
					<strong>Email: </strong>admin@gmail.com<br>
					<strong>Password:</strong> 123<br><br>
					</p>
    
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="images/flib.jpg" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>

</section>
 
  </body>
</html>

