
<?php
session_start();
ob_start();
$signcon = mysqli_connect("localhost","root","","database");
if(mysqli_connect_errno())
{
	echo"CHECK CONNECTION";
}
$firstname="";
$lastname="";
$email="";
$password="";
$password2="";
$err=array();
$now=time();
$_SESSION['start']=time(); 
$_SESSION['expire']=time() + (60);
if(isset($_POST['sub']))
{
	$firstname=strip_tags($_POST['fname']);
	$firstname=str_replace(" ","",$firstname);
	$firstname=ucfirst(strtolower($firstname));
	$_SESSION['firstname']=$firstname;
	$lastname=strip_tags($_POST['lname']);
	$lastname=str_replace(" ","", $lastname);
	$_SESSION['lastname'] = $lastname;
	$email = strip_tags($_POST['email']);
	$email = str_replace(" ","",$email);
	$_SESSION['email']=$email;
	$password=strip_tags($_POST['pass']);
	$password=str_replace(" ","",$password);
	$_SESSION['password']=$password;
    $password2=strip_tags($_POST['pass2']);
    $password2=str_replace(" ","",$password2);
    if($password==$password2)
    {

    }
     else{
     	array_push($err,"YOUR PASSWORD IS NOT SAME");
     }
     if(strlen($firstname) > 25 || strlen($firstname) < 3)
     {
          array_push($err,"YOUR FIRST NAME IS NOT OF CORRECT LENGTH");
     }
     
         
     if(strlen($lastname) > 25 || strlen($lastname) < 3)
      {
           array_push($err,"YOUR LAST NAME IS NOT OF CORRECT LENGTH");
      }
     
    if(strlen($password) >= 6)
    {

    }
     else{
     	array_push($err,"YOUR PASSWORD IS NOT OF CORRECT LENGTH");
     }
    if(preg_match("/^[A-Za-z0-9_]/",$password) == TRUE)
      {

      }
      else{
      //  echo "passnotform";
      	array_push($err,"YOUR PASSWORD MUST BE IN CHARACTER AND NUMBER");
      } 
     if(filter_var($email,FILTER_VALIDATE_EMAIL))
     {

     }
     else{
      echo "emailinvalid";
     	array_push($err,"YOUR EMAIL IS NOT VALID");
     }
     $emailcheck = mysqli_query($signcon,"SELECT email from signin WHERE email='$email'");
     $row = mysqli_fetch_array($emailcheck);
     if($row > 1)
     {
     	array_push($err,"EMAIL ALREADY USED");

     }
       if(empty($err))
       {
      $password=md5($password);
      $username=ucfirst(strtolower($firstname.$lastname));
      $executequery = mysqli_query($signcon,"INSERT INTO signin VALUES('','$username','$firstname','$lastname','$email','$password')");

          $_SESSION['firstname']="";
           $_SESSION['lastname']="";
           $_SESSION['email']="";
          array_push($err,"GOAHEAD AND LOGIN");
        }
      
      if(!empty($err))
      {
          if(time()  > $_SESSION['expire'])
          {
            $_SESSION['firstname']="";
            $_SESSION['lastname']="";
            $_SESSION['email']="";
         // }
            }
      }
} 
?>

<!DOCTYPE html>
<html>
<head>


 <link rel="stylesheet" href="css\style.css">
      <link rel="stylesheet" href="background_styles.css">



      <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
      

      <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
    
      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


      <script src="js/script.js" defer></script>
     
      <title>Fiber Cops</title>




</head>



<body>


<nav class="navbar sticky-top navbar-dark bg-dark" style="">
        <a class="brand-title" href="index.php" style="text-decoration: none; color: white";>Fiber Cops</a>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>

             <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Jute
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="info/jute-info.php" style="color: black">Jute info</a>
          <a class="dropdown-item" href="info/jute-cultivation.php" style="color: black">Cultivation</a>
          <a class="dropdown-item" href="info/products.php" style="color: black">Products</a>
          
        </div>
      </li> 



              <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Statue
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="statue/acts.php" style="color: black">Acts</a>
          <a class="dropdown-item" href="statue/orders.php" style="color: black">Orders</a>
          <a class="dropdown-item" href="statue/rules.php" style="color: black">Rules</a>
          <a class="dropdown-item" href="statue/national-jute-policy-2005.php" style="color: black">National Jute Policy 2005</a>
        </div>
      </li> 
           

             <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Data & Stats
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="list-of-jute-mills.php" style="color: black">List Of Jute Mills In India</a>
          <a class="dropdown-item" href="income-graph.php" style="color: black">Income Graph</a>
          
        </div>
      </li> 

<!--
            <li><a href="about.php">Major Links</a></li>

            <li><a href="about.php">Gallery</a></li>

            <li><a href="about.php">Contact Us</a></li>
 
-->


              <div id="google_translate_element" style=""></div>


      <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>





          <?php if(!isset($_SESSION['adminismail']) && !isset($_SESSION['adminmail']) && !isset($_SESSION['infor']))
          {

          echo '<li> <a href="#" data-toggle="modal" data-target="#user-login-modal">
                          Login/Registration
            </a></li> 

             <li> <a href="#" data-toggle="modal" data-target="#employee-login-modal" >
                                      Employee Login
                        </a></li>';

            }?>





            <?php if(isset($_SESSION['adminismail']))
          {
echo' <li><a href="#" data-toggle="modal" data-target="#employee-reg-modal" >
                          REGISTRATION
            </a></li>';} ?>


           

 <?php if(isset($_SESSION['adminmail'])){

 echo 

      '<li> <a href="#" data-toggle="modal" data-target="#admin-panel-modal">
                          ADMIN PANEL
            </a></li>';}?> 

            <?php if(isset($_SESSION['infor'])){

 echo 

      '<li> <a href="#" data-toggle="modal" data-target="#admin-panel-modal">
                          Welcome 
            </a></li>';}?> 




             <?php 
            if(isset($_SESSION['adminismail']) || isset($_SESSION['adminmail']) || isset($_SESSION['infor']))
          {
            echo '<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Log Out
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="logout.php" style="color: black">Wanna LogOut?</a>
        </div>
      </li> 
';}?>

          </ul>
        </div>
      





      </nav> 

     


      <!-- Modal -->
<div class="modal fade" id="user-login-modal" tabindex="-1" role="dialog" aria-labelledby="user-login-modal" aria-hidden="true" style="margin-top: 5%;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select One</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="al">
        

        <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h1 class="text-gray-900 text-lg title-font font-medium mb-2" style="font-weight: bolder;">Login</h1>
        <p class="leading-relaxed text-base"></p>
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="user-login.php">Click Here
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div><br><br>
    <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
      <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h2 class="text-gray-900 text-lg title-font font-medium mb-2" style="font-weight: bolder;">Register</h2>
        <p class="leading-relaxed text-base"></p>
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="user-register.php">Click Here
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="employee-login-modal" tabindex="-1" role="dialog" aria-labelledby="employee-login-modal" aria-hidden="true" style="margin-top: 5%;">
        <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select One</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="al">

      <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h1 class="text-gray-900 text-lg title-font font-medium mb-2" style="font-weight: bolder;">Employee Login</h1>
        <p class="leading-relaxed text-base"></p>
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="administration_login.php">Click Here
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div><br><br>
    <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
      <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h2 class="text-gray-900 text-lg title-font font-medium mb-2" style="font-weight: bolder;">Admin Login</h2>
        <p class="leading-relaxed text-base"></p>
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="admin_login.php">Click Here
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="employee-reg-modal" tabindex="-1" role="dialog" aria-labelledby="employee-reg-modal" aria-hidden="true" style="margin-top: 5%;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select One</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="al">
        

        <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h1 class="text-gray-900 text-lg title-font font-medium mb-2" style="font-weight: bolder;">Mill Worker Registration</h1>
        <p class="leading-relaxed text-base"></p>
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="reg/mill-worker-reg.php">Click Here
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div><br><br>
    <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
      <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h2 class="text-gray-900 text-lg title-font font-medium mb-2" style="font-weight: bolder;">Farmers Registration</h2>
        <p class="leading-relaxed text-base"></p>
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="reg/farmer-reg.php">Click Here
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>


      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="admin-panel-modal" tabindex="-1" role="dialog" aria-labelledby="admin-panel-modal" aria-hidden="true" style="margin-top: 5%;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select One</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="al">
        

        <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h1 class="text-gray-900 text-lg title-font font-medium mb-2" style="font-weight: bolder;">Mill Worker Table</h1>
        <p class="leading-relaxed text-base"></p>
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="milltableselect.php">Click Here
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div><br><br>
    <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
      <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h2 class="text-gray-900 text-lg title-font font-medium mb-2" style="font-weight: bolder;">Farmer's Table</h2>
        <p class="leading-relaxed text-base"></p>
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="farmertable.php">Click Here
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>



</div>
    </div>
  </div>
</div>









<div class="flex items-center justify-center h-screen" >
  <div class="w-full max-w-xs">
            
            
	<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="user-register.php" method="POST">

		<h2 style="font-size: 140%;">Registration </h2><br>

			<div class="mb-4">
			    <label class="block text-gray-700 text-sm font-bold mb-2"> Firstname </label>

			    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="fname"  autocomplete="off" value="<?php 
			    if(isset($_SESSION['firstname']))
			    {echo $_SESSION['firstname']; 
			    }?>" required>
			    <?php  
			    if(in_array("YOUR FIRST NAME IS NOT OF CORRECT LENGTH",$err))
			    {
			      echo  '<div style="font-size:0.6em;color:red">YOUR FIRST NAME IS NOT OF CORRECT LENGTH!</div>';
			    }
			    ?><br>
			</div>
		    
		<div class="mb-4">
		  <label class="block text-gray-700 text-sm font-bold mb-2"> Lastname </label>
		    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="lname"  autocomplete="off"  value="<?php 
		    if(isset($_SESSION['lastname']))
		    {
		      echo $_SESSION['lastname']; 
		    }
		    ?>" required>
		     <?php 
		     if(in_array("YOUR LAST NAME IS NOT OF CORRECT LENGTH",$err))
		      {
		       echo '<div style="font-size:0.6em;color:red">YOUR LAST NAME IS NOT OF CORRECT LENGTH!</div>';
		      }
		      ?><br>
		</div>

		<div class="mb-4">
		  <label class="block text-gray-700 text-sm font-bold mb-2"> Email </label>
			    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" id="" autocomplete="off" value="<?php 
			    if(isset($_SESSION['email']))
			    {
			      echo $_SESSION['email']; 
			    }
			    ?>"   required>
			      <?php 
			     if(in_array("EMAIL ALREADY USED",$err))
			      {
			       echo'<span style="color:red;">EMAIL ALREADY USED!</span>';
			      }
			      if(in_array("YOUR EMAIL IS NOT VALID",$err))
			      {
			       echo '<div style="font-size:0.6em;color:red">YOUR EMAIL IS NOT VALID!</div>';
			      }

			      ?><br>
		</div>

		<div class="mb-4">
		  <label class="block text-gray-700 text-sm font-bold mb-2"> Password </label>
			    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" name="pass" id="" autocomplete="off" maxlength="8" required>
			     <?php
			                        
			       if(in_array("YOUR PASSWORD IS NOT OF CORRECT LENGTH",$err))
			      {
			       echo '<div style="font-size:0.6em;color:red">YOUR PASSWORD IS NOT OF CORRECT LENGTH!</div>';
			      }
			      ?>
			      <br>
			      <?php
			      if(in_array("YOUR PASSWORD MUST BE IN CHARACTER AND NUMBER",$err))
			      {
			        echo '<div style="font-size:0.6em;color:red">PASSWORD MUST BE IN CHARACTER AND NUMBER!</div>';
			      }
			      ?>

			</div>
		<div class="mb-4">
		  <label class="block text-gray-700 text-sm font-bold mb-2"> Repeat Password </label>
			    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" name="pass2" id="" autocomplete="off"  maxlength="8" required> 
			     <?php 
			       if(in_array("YOUR PASSWORD IS NOT SAME",$err))
			      {
			       echo '<div style="font-size:0.6em;color:red">YOUR PASSWORD IS NOT SAME!</div>';  
			       }      
			     ?><br>
			</div>

			              <div class="flex items-center justify-between">
			    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="sub" type="submit">
			      Register
			    </button></div><br>
			    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="user-login.php">
			      Already Have An Account?
			    </a>
			      
			        
			    </div>
			  <?php 
			  if(in_array("GOAHEAD AND LOGIN",$err))
			  {
			    echo '<span style="color:green;">GOHEAD AND LOGIN!</span>';
			  }

			  ?>
		</form>




		</div>
		</div>






</body>
</html> 