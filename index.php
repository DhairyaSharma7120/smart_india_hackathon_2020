
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
         <nav class="navbar sticky-top navbar-light bg-transperent"  style="background-color: background-color: transparent;">
        <a class="brand-title" href="index.php" style="text-decoration: none; color: white; ">Fiber Cops</a>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="index.php">Home</a></li>


            <?php if(!isset($_SESSION['adminmail'])){

            echo '<li><a href="about.php">About Us</a></li>

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
      </li> ';
         }?>
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




<div class="modal fade" id="admin-panel-modal" tabindex="-1" role="dialog" aria-labelledby="admin-panel-modal" aria-hidden="true" style="">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select One</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="al">
        
        <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
        <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h1 class="text-gray-900 text-lg title-font font-medium mb-2" style="font-weight: bolder;">Mill Worker Table</h1>
        <p class="leading-relaxed text-base"></p>
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="milltableselect.php">Click Here
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div></div>
    
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
    <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h1 class="text-gray-900 text-lg title-font font-medium mb-2" style="font-weight: bolder;">Mill Worker Total Salary</h1>
        <p class="leading-relaxed text-base"></p>
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="milltotalsalary.php">Click Here
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div></div>
    <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h1 class="text-gray-900 text-lg title-font font-medium mb-2" style="font-weight: bolder;">Farmers Total Salary</h1>
        <p class="leading-relaxed text-base"></p>
        <a class="mt-3 text-indigo-500 inline-flex items-center" href="farmertotalsalary.php">Click Here
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div><br>
  </div>




    </div>
  </div>
</div>












         
<section class="text-gray-700 body-font" style="margin-top: -80px; ">







  <div class="container px-5 py-24 mx-auto flex flex-wrap">
    <div class="flex flex-wrap -m-4">


      <section class="text-gray-700 body-font">
  <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
    <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="image\1.jpg">
    <div class="text-center lg:w-2/3 w-full">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">JUTE</h1>
      <p class="mb-8 leading-relaxed">Jute is an important natural fibre crop in India next to cotton.In trade and industry, jute and mesta crop together known as raw jute as their uses are almost same.</p>
      <div class="flex justify-center">
        
        <button class="ml-4 inline-flex text-gray-700 bg-gray-200 border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 rounded text-lg" onclick="window.location.href='info/jute-info.php'">Know More About Jute</button>
      </div>
    </div>
  </div>
</section>


      <div class="p-4 lg:w-1/2 md:w-full">
        <div class="flex border-2 rounded-lg border-gray-200 p-8 sm:flex-row flex-col">
          <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Jute Cultivation</h2>
            <p class="leading-relaxed text-base">Check Out<br>Jute Cultivation in India: Conditions, Method!</p>
            <a class="mt-3 text-indigo-500 inline-flex items-center" href="info/jute-cultivation.php">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="p-4 lg:w-1/2 md:w-full">
        <div class="flex border-2 rounded-lg border-gray-200 p-8 sm:flex-row flex-col">
          <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M0,6 L10,0 L20,6 L20,8 L0,8 L0,6 Z M0,18 L20,18 L20,20 L0,20 L0,18 Z M2,16 L18,16 L18,18 L2,18 L2,16 Z M2,8 L6,8 L6,16 L2,16 L2,8 Z M8,8 L12,8 L12,16 L8,16 L8,8 Z M14,8 L18,8 L18,16 L14,16 L14,8 Z" id="Combined-Shape"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Statue</h2>
            <p class="leading-relaxed text-base">Check Out <br>Acts/Orders/Rules/policy</p>
            <a class="mt-3 text-indigo-500 inline-flex items-center" href="statue.php ">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>


      <div class="p-4 lg:w-1/2 md:w-full">
        <div class="flex border-2 rounded-lg border-gray-200 p-8 sm:flex-row flex-col">
          <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
              <path xmlns="http://www.w3.org/2000/svg" d="M 0 0 l 6 4 l 8 -4 l 6 4 v 16 l -6 -4 l -8 4 l -6 -4 V 0 Z m 7 6 v 11 l 6 -3 V 3 L 7 6 Z" />
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Weather</h2>
            <p class="leading-relaxed text-base">Check Out<br>Weather Of Your State</p>
            <a class="mt-3 text-indigo-500 inline-flex items-center" href="weather.php">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>


      <div class="p-4 lg:w-1/2 md:w-full">
        <div class="flex border-2 rounded-lg border-gray-200 p-8 sm:flex-row flex-col">
          <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
             
             <path xmlns="http://www.w3.org/2000/svg" d="M 10 1 l 10 6 l -10 6 L 0 7 l 10 -6 Z m 6.67 10 L 20 13 l -10 6 l -10 -6 l 3.33 -2 L 10 15 l 6.67 -4 Z" />
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Data And Stats</h2>
            <p class="leading-relaxed text-base">Check Out <br> Data And Stats</p>
            <a class="mt-3 text-indigo-500 inline-flex items-center" href="jute-cultivation.php">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <div class="p-4 lg:w-1/2 md:w-full">
        <div class="flex border-2 rounded-lg border-gray-200 p-8 sm:flex-row flex-col">
          <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
              <path d="M18,9.87016923 L18,20 L2,20 L2,9.87077601 C2.30866727,9.95497234 2.64341414,10 3,10 C3.70959284,10 4.3932222,9.81559798 5,9.49198691 L5,14 L15,14 L15,9.49330204 C15.6064249,9.81616801 16.2898957,10 17,10 C17.3565204,10 17.6912816,9.95474687 18,9.87016923 Z M3,0 L0.94921875,6.15234375 C0.423463896,7.72960831 1.34314575,9 3,9 C4.65348288,9 6.14783953,7.66944427 6.33020882,6.02812059 L7,0 L3,0 Z M8,0 L7.30003297,6.29970324 C7.13486445,7.78621995 8.21738979,9 9.71911621,9 L10.2808838,9 C11.7858105,9 12.8656707,7.79103596 12.699967,6.29970324 L12,0 L8,0 Z M13,0 L13.6697912,6.02812059 C13.8524466,7.672019 15.3431458,9 17,9 C18.6534829,9 19.5750203,7.72506087 19.0507813,6.15234375 L17,0 L13,0 Z" id="Combined-Shape"></path>
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Products</h2>
            <p class="leading-relaxed text-base">Check Out <br> Products of jute</p>
            <a class="mt-3 text-indigo-500 inline-flex items-center" href="info/products.php">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <div class="p-4 lg:w-1/2 md:w-full">
        <div class="flex border-2 rounded-lg border-gray-200 p-8 sm:flex-row flex-col">
          <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" class="w-8 h-8" viewBox="0 0 20 20">
              <path d="M0,3.99406028 C0,2.8927712 0.898212381,2 1.99079514,2 L18.0092049,2 C19.1086907,2 20,2.89451376 20,3.99406028 L20,16.0059397 C20,17.1072288 19.1017876,18 18.0092049,18 L1.99079514,18 C0.891309342,18 0,17.1054862 0,16.0059397 L0,3.99406028 Z M6,4 L14,4 L14,16 L6,16 L6,4 Z M2,5 L4,5 L4,7 L2,7 L2,5 Z M2,9 L4,9 L4,11 L2,11 L2,9 Z M2,13 L4,13 L4,15 L2,15 L2,13 Z M16,5 L18,5 L18,7 L16,7 L16,5 Z M16,9 L18,9 L18,11 L16,11 L16,9 Z M16,13 L18,13 L18,15 L16,15 L16,13 Z M8,7 L13,10 L8,13 L8,7 Z" id="Combined-Shape"></path>
            </svg>
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Online Tutorials</h2>
            <p class="leading-relaxed text-base">Check Out <br> Online Tutorials Related To Jute</p>
            <a class="mt-3 text-indigo-500 inline-flex items-center" href="online-tutorial.php">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <br><br>



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
        <a class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3" href="gallery.php">Gallery</a>
        
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <a class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Feedback</a>
       
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <a class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">FAQs</a>
        
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <a class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Contact Us</a>
       
      </div>
    </div>
  </div>
  <div class="bg-gray-200">
    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
      <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 FiberCops —
        <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@Drockss</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
        <a class="text-gray-500">
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