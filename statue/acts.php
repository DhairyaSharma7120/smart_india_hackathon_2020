
<?php
session_start();
 if(isset($_SESSION['infor']))
{
  $accountant = $_SESSION['infor'];



}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>




	 <link rel="stylesheet" href="..\css\style.css">
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
     
</head>




<body>



<nav class="navbar sticky-top navbar-dark bg-dark" style="">
        <a class="brand-title" href="../index.php" style="text-decoration: none; color: white";>Fiber Cops</a>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../about.php">About Us</a></li>

             <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Jute
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../info/jute-info.php" style="color: black">Jute info</a>
          <a class="dropdown-item" href="../info/jute-cultivation.php" style="color: black">Cultivation</a>
          <a class="dropdown-item" href="../info/products.php" style="color: black">Products</a>
          
        </div>
      </li> 



              <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Statue
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../statue/acts.php" style="color: black">Acts</a>
          <a class="dropdown-item" href="../statue/orders.php" style="color: black">Orders</a>
          <a class="dropdown-item" href="../statue/rules.php" style="color: black">Rules</a>
          <a class="dropdown-item" href="../statue/national-jute-policy-2005.php" style="color: black">National Jute Policy 2005</a>
        </div>
      </li> 
           

             <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Data & Stats
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../list-of-jute-mills.php" style="color: black">List Of Jute Mills In India</a>
          <a class="dropdown-item" href="../income-graph.php" style="color: black">Income Graph</a>
          
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

   '<li> <a href="#">
              Welcome ' 
.strtoupper ($accountant['firstname']).'</a></li>';  
   
}?> 




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
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="../user-login.php">Click Here
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
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="../user-register.php">Click Here
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
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="../administration_login.php">Click Here
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
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="../admin_login.php">Click Here
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
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="../reg/mill-worker-reg.php">Click Here
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
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="../reg/farmer-reg.php">Click Here
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
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="../milltableselect.php">Click Here
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
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="../farmertable.php">Click Here
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>



</div>
    </div>
  </div>
</div>






<section class="text-gray-700 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="-my-8">
      <div class="py-8 flex flex-wrap md:flex-no-wrap">
      	<div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900" style="font-weight: bold;">Acts</h1>
    </div>
        
        <div class="md:flex-grow">
         
          
          <a class="text-indigo-500 inline-flex items-center mt-4" href="..\documents\acts\JPM Act - Notification for Percentage of Reservation.pdf" target="_blank" style="font-weight: bold; font-size: 90%;">JPM Act - Notification for Percentage of Reservation
            
          </a>
        </div>
      </div>
      <div class="py-8 flex border-t-2 border-gray-200 flex-wrap md:flex-no-wrap">
        
        <div class="md:flex-grow">
         
          
          <a class="text-indigo-500 inline-flex items-center mt-4" href="..\documents\acts\Press release-Extension of Norms for Mandatory Packaging in Jute Materials.pdf" target="_blank" style="font-weight: bold; font-size: 90%;"  >Press release-Extension of Norms for Mandatory Packaging in Jute Materials
            
          </a>
        </div>
      </div>
      <div class="py-8 flex border-t-2 border-gray-200 flex-wrap md:flex-no-wrap"><div class="md:flex-grow">
         
          
          <a class="text-indigo-500 inline-flex items-center mt-4" href="..\documents\acts\National Jute Board ACT 2008.pdf" target="_blank" style="font-weight: bold; font-size: 90%;">National Jute Board ACT 2008
            
          </a>
        </div>
      </div>
      <div class="py-8 flex border-t-2 border-gray-200 flex-wrap md:flex-no-wrap">
      	<div class="md:flex-grow">
         
        
          <a class="text-indigo-500 inline-flex items-center mt-4" href="..\documents\acts\Jute Packaging Materials (Compulsory Use in Packing Commodities) Act 1987.pdf
          " target="_blank" style="font-weight: bold; font-size: 90%;">Jute Packaging Materials (Compulsory Use in Packing Commodities) Act 1987
            
          </a>
        </div>
      </div>
      <div class="py-8 flex border-t-2 border-gray-200 flex-wrap md:flex-no-wrap">

      	<div class="md:flex-grow">
         
          
          <a class="text-indigo-500 inline-flex items-center mt-4" href="..\documents\acts\JMDC ACT 1983.pdf" target="_blank" style="font-weight: bold; font-size: 90%;">JMDC ACT 1983
          </a>
        </div>
      </div>
      <div class="py-8 flex border-t-2 border-gray-200 flex-wrap md:flex-no-wrap">

      	<div class="md:flex-grow">
         
          
          <a class="text-indigo-500 inline-flex items-center mt-4" href="Jute Manufacturers Cess Act 1983" target="_blank" style="font-weight: bold; font-size: 90%;">Jute Manufacturers Cess Act 1983
            
          </a>
        </div>
      </div>
      <div class="py-8 flex border-t-2 border-gray-200 flex-wrap md:flex-no-wrap">
    </div>
  </div>
</section>



<footer class="text-gray-700 body-font">
  <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-no-wrap flex-wrap flex-col">
    <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        
        <span class="ml-3 text-xl">FiberCops</span>
      </a>
      <p class="mt-2 text-sm text-gray-500" style="text-align: left;">Its Our Duty To Help You.</p>
    </div>
    <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <a class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3" href="../gallery.php">Gallery</a>
        
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <a class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3" href="../feedback.php">Feedback</a>
       
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <a class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3" href="../faqs.php">FAQs</a>
        
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <a class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3" href="../contact-us.php">Contact Us</a>
       
      </div>
    </div>
  </div>
  <div class="bg-gray-200">
    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
      <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 FiberCops —
        <a href="https://twitter.com/dhairya7120" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@Drockss</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
        <a class="text-gray-500" href="#" style="text-decoration: none;">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </div>
</footer>
</body>



</html>