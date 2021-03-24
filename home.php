<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/card.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/nav.css">
<script src="js/nav.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #13B5FA;">
    <div class="container">
     
        <!-- links toggle -->
        <button class="navbar-toggler order-first" type="button" data-toggle="collapse" data-target="#links" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" style="color: white;"></i>
        </button>
        <!-- account toggle -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#account" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
           
        </button>

        <div class="collapse navbar-collapse" id="links">
            <ul class="navbar-nav ml-auto">
               
               
                <li class="nav-item"><a class="nav-link" href="home.php" style="color: white;">Home</a></li>
                <li class="nav-item dropdown dropdownn megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle" style="color: white;">Job Categories</a>
                    <div aria-labelledby="megamneu" class="dropdown-menu" style="background-color:#13B5FA ;">
                                  <ul class="list-unstyled">
                                    <li class="nav-item"><a href="#" class="nav-link text-small pb-0 " style="color: white;">Software/IT Jobs</a></li>
                                   
                                    <li class="nav-item"><a href="#" class="nav-link text-small pb-0 " style="color: white;">Product/Service Jobs</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link text-small pb-0 " style="color: white;">Marketing Jobs</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link text-small pb-0 " style="color: white;">Writing/Transcription Jobs</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link text-small pb-0 " style="color: white;">Business/Customer Service Jobs</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link text-small pb-0 " style="color: white;">Agents/Referral Services Jobs</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link text-small pb-0 " style="color: white;">Data Entry Jobs</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link text-small pb-0 " style="color: white;">Other</a></li>
                                    
                                  </ul>
                               
                      
                    </div>
                  </li>
                  <!-- <li class="nav-item dropdown dropdownn megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle" style="color: white;"></a>
                    <div aria-labelledby="megamneu" class="dropdown-menu" style="background-color:#13B5FA ;">
                                  <ul class="list-unstyled">
                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 " style="color: white;"></a></li>
                                   
                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 " style="color: white;"></a></li>
                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 " style="color: white;"></a></li>
                                    
                                  </ul>
                               
                      
                    </div>
                  </li> -->
                <li class="nav-item"><a class="nav-link" href="{% url 'choose-service' %}" style="color: white;">User Solutions</a></li>
                <li class="nav-item dropdown dropdownn megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle" style="color: white;"><?php echo $_SESSION['name']; ?></a>
                    <div aria-labelledby="megamneu" class="dropdown-menu" style="background-color:#13B5FA ;">
                                  <ul class="list-unstyled">
                                    <li class="nav-item"><a href="#" class="nav-link text-small pb-0 " style="color: white;">My Profile</a></li>
                                   
                                    <li class="nav-item"><a href="#" class="nav-link text-small pb-0 " style="color: white;">Project Owner</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link text-small pb-0 " style="color: white;">Post Businesses</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link text-small pb-0 " style="color: white;">Post Skills</a></li>
                                    
                                    
                                  </ul>
                               
                      
                    </div>
                  </li>
                  
            
                
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;">Available Jobs</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#" style="color: white;">Top Skills</a></li>
              
                <li class="nav-item"><a class="nav-link" href="logout.php" style="color: white;">Logout</a></li>
      
                
          
            </ul>
        </div>
        <div class="collapse navbar-collapse">
            
        </div>
    </div>
</nav>

<strong><h3 style="text-align: center;">How can we get you started off today <?php echo $_SESSION['name']; ?>?</h3></strong>
    
     <div class="container">
     <div class="row">

<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
    <br>
<div class="card mb-3" style="max-width: 100%;border-radius: 20px;" >
<div class="card-body">
    <div class="card-text" style="font-size: 14px;">
      <strong>"Get the top talent working on every project."</strong>
        <br><br><br>
        <a href="postproject.html" class="btn btn-info btn-block loginbtn2">Post A Project</a>
    </div>
</div>
</div>
</div>

<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
    <br>
<div class="card mb-3" style="max-width: 100%;border-radius: 20px;" >
<div class="card-body">
    <div class="card-text" style="font-size: 14px;">
      <strong>"Work on a large variety of project based jobs"</strong>
        <br><br>
        <a href="#" class="btn btn-info btn-block loginbtn2">Start Working</a>
    </div>
</div>
</div>
</div>

<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
    <br>
<div class="card mb-3" style="max-width: 100%;border-radius: 20px;" >
<div class="card-body">
    <div class="card-text" style="font-size: 14px;">
      <strong>"Get user views & employers looking for you."</strong>
        <br><br>
        <a href="#" class="btn btn-info btn-block loginbtn2">Post my Skills</a>
    </div>
</div>
</div>
</div>



</div>
    </div>
    
</body>
<script>
    $(document).ready(function () {
        $('li.dropdownn').hover(function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(400);
        }, function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(400);
        });
      
     });
    
     
    </script>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>