<?php 
include_once 'config/Database.php';
include_once 'class/User.php';
include_once 'class/Books.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

if(!$user->loggedIn()) {
	header("Location: index.php");
}
$book = new Books($db);
include('inc/header4.php');
?>
<title>Dashboard</title>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="css/dashboard.css" />
</head>
<body>
  
  <div class="container-fluid" id="main">
  <?php include('top_menus.php'); ?>	
    <div class="row row-offcanvas row-offcanvas-left">
      <?php include('left_menus.php'); ?>
      <div class="col-md-9 col-lg-10 main"> 
		<h2>Dashboard</h2>
        <div class="row mb-3">		
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-success">
              <div class="card-block bg-success">
                <div class="rotate">
                  <i class="fa fa-user fa-5x"></i>
                </div>
                <h6 class="text-uppercase">Total Books</h6>
                <h1 class="display-1"><a href="books.php"><?php echo $book->getTotalBooks(); ?></a></h1>
              </div>
            </div> 
          </div>        
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-info">
              <div class="card-block bg-info">
                <div class="rotate">
                  <i class="fa fa-twitter fa-5x"></i>
                </div>
                <h6 class="text-uppercase">Available Books</h6>
                <h1 class="display-1"><a href="books.php"><?php echo ($book->getTotalBooks() - $book->getTotalIssuedBooks()); ?></a></h1>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-warning">
              <div class="card-block bg-warning">
                <div class="rotate">
                  <i class="fa fa-share fa-5x"></i>
                </div>
                <h6 class="text-uppercase">Returned Books</h6>
                <h1 class="display-1"><a href="books.php"><?php echo $book->getTotalReturnedBooks(); ?></a></h1>
              </div>
            </div>
          </div>
		  <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-danger">
              <div class="card-block bg-danger">
                <div class="rotate">
                  <i class="fa fa-list fa-4x"></i>
                </div>
                <h6 class="text-uppercase">Issued Books</h6>
                <h1 class="display-1"><a href="issue_books.php"><?php echo $book->getTotalIssuedBooks(); ?></a></h1>
              </div>
            </div>
          </div>
        </div>
        <hr>         
       </div>       
      </div>     
    </div>

      <?php
      if(isset($_POST['submit'])){

        $news = sanitize(trim($_POST['news']));
    
        $sql = "INSERT into news (announcement) values ('$news')"; 
    
        $query = mysqli_query($conn,$sql);
        $error = false;
    
           if($query){
           $error = true;
          }
          else{
            echo "<script>alert('Not successful!! Try again.');
                        </script>"; 
          }
     }
    
         if(isset($_POST['UpDat'])){
        $id = sanitize(trim($_POST['id']));
            $text = sanitize(trim($_POST['text']));
    
            $sql_up = "UPDATE news set announcement = '$text' where newsId = '$id'";
        echo mysqli_error($sql_up);
             $result = mysqli_query($conn,$sql_del);
                    if ($result)
                    {
                        echo "<script>
                
               
                       alert('Update successful');
    
             </script>";
                    }
    
    
         }
    
         if(isset($_POST['del'])){
    
            $id = sanitize(trim($_POST['id']));
    
            $sql_del = "DELETE from news where newsId = $id"; 
    
            $result = mysqli_query($conn,$sql_del);
                    if ($result)
                    {
        
                    }
    
         }
    
      ?>
    
    
   
      
      
      
  </body>
</html>