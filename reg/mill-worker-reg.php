<?php  
session_start();
$error = array();
$connection = mysqli_connect("localhost","root","","admin");
if(mysqli_connect_errno())
{
  echo "CONNECTION ERROR";
}
if(isset($_POST['register']))
{
  $millfname = $_POST['firstname'];
  $millfname = strip_tags($millfname);
  $millfname = strtolower($millfname);
  $millfname=str_replace(" ","",$millfname);
  $_SESSION['millfname'] = $millfname;
  $milllname = $_POST['lastname'];
  $milllname = strip_tags($milllname);
  $milllname = strtolower($milllname);
  $milllname = str_replace(" ","",$milllname);
  $_SESSION['milllname'] = $milllname;
  $millemail  = $_POST['email'];
  $_SESSION['millemail'] = $millemail;
  $contactnumber = "";
if(isset($_POST['contactnumber']))
{
  $contactnumber = $_POST['contactnumber'];
}
  $millage = $_POST['age'];
  $_SESSION['millage'] = $millage;
  $millgender = $_POST['gender'];
  $idcard = $_POST['idcard'];
  $adhar = $_POST['adhar'];
  $_SESSION['adhar'] = $adhar;
  //$pan=$_POST['pan'];
  //$_SESSION['pan'] = $pan;
  $religion = $_POST['religion'];
  $_SESSION['religion'] = $religion;
  $caste  = $_POST['caste'];
  $qualification = $_POST['qualification'];
  $qualification=strtolower($qualification);
  $address = $_POST['address'];
  $_SESSION['address'] = $address;
  $state = $_POST['state'];
  $city = $_POST['city'];
  $city = str_replace(" ","_",$city);
  $pincode = $_POST['pincode'];
  $organisationname ="";
  if(isset($_POST['organisationname']))
  {
    $organisationname=$_POST['organisationname'];
    $organisationname = strtolower($organisationname);
   }
  $organisationnumber = $_POST['organisationnumber'];
  $organisationaddress = $_POST['organisationaddress'];
  $_SESSION['organisationaddress'] = $organisationaddress;

  $income = $_POST['income'];
  $salaryrecieved = "";
  if(isset($_POST['salary_recieved']))
  {
    $salaryrecieved=$_POST['salary_recieved'];
  }
   if(preg_match('/[a-zA-Z]/',$milllname))
   {

    }
     else{
          array_push($error,"YOUR FIRST NAME MUST BE IN CHARACTERS");
   }
      if(preg_match('/[a-zA-Z]/',$millfname))
    {
       }
   else{
    array_push($error,"YOUR LAST NAME MUST BE IN CHARACTERS");
}
if(!empty($millemail))
{
if(filter_var($millemail,FILTER_VALIDATE_EMAIL))
{

}
else{
      array_push($error,"YOUR EMAIL IS NOT VALID");


}
}

if(preg_match("/[0-9]/",$contactnumber))
{

}
else{
        array_push($error,"YOUR NO MUST BE IN NUMBERS");

}
if(preg_match('/[0-9]/',$adhar))
{

}
else{
  array_push($error,"NOT VALID ADHAR NUMBER");


}
if(strlen($adhar) > 12 )
{
  array_push($error,"YOUR ADHAR NUMBER IS NOT OF CORRECT LENGTH");
}
if(strlen($adhar) < 12 )
{
    array_push($error,"YOUR ADHAR NUMBER IS NOT OF CORRECT LENGTH");


}
//if(preg_match('/[a-zA-Z0-9]/',$pan))
//{

//}
//else{
 // array_push($error,"NOT VALID PAN NUMBER");

//}
if(preg_match('/[a-zA-Z]/',$city))
{

}

else{
  array_push($error,"ENTER CITY IN CHARACTERS");


}
if(preg_match('/[0-9]/',$pincode))
{

}
else
{
  array_push($error,"ENTER VALID PINCODE");

}
if(preg_match("/[0-9]/",$organisationnumber))
{

}
else
{
    array_push($error,"ENTER VALID CONTACT NUMBER");
}
$queryemail = mysqli_query($connection,"SELECT email FROM  mill_worker WHERE email='$millemail'");
$emailrows=mysqli_num_rows($queryemail);
if($emailrows > 0)
{
array_push($error,"EMAIL ALREADY EXIST!");
}





if(empty($error)){
  $query = mysqli_query($connection,"INSERT INTO mill_worker VALUES('','$millfname','$milllname','$millemail','$contactnumber','$millage','$millgender','$idcard','$adhar' ,'$religion','$caste','$qualification','$address','$state','$city','$pincode','$organisationname','$organisationnumber','$organisationaddress','$income','$salaryrecieved')");
array_push($error,"SUCCESFULLY ADDED TO DATABASE");
  }

}
?>


<!DOCTYPE html>


<html>

   <head>
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


        <script src="../js/script.js" defer></script>
     
        <title>Fiber Cops</title>


   </head>

    <body>
              
        <section class="text-gray-700 body-font" style="" >
  <div class="container px-5 py-24 mx-auto">
    <div>
    <!--<div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">      -->





         <form class="w-full max-w-lg" style="" action="mill-worker-reg.php" method="POST">


            <h1 style="font-weight: bolder;">Jute Mill Workers Registration</h3><br><br>


                <h3 style="font-weight: bolder;">Personal Details</h3><br><br>



  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name" >
        First Name
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder=""  name="firstname" required>
    </div>
    <?php   
    if(in_array("YOUR FIRST NAME MUST BE IN CHARACTERS",$error))
    {
      echo '<span style="color:red;">FIRST NAME MUST BE IN CHARACTERS</span>';

    }
    ?>



    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Last Name
      </label>
      <input name="lastname" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="" required>
    </div>
  </div>
  <?php   if(in_array("YOUR LAST NAME MUST BE IN CHARACTERS",$error))
    {
      echo '<span style="color:red;">YOUR LAST NAME MUST BE IN CHARACTERS</span>';

    }
    ?>
  

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Email 
      </label><p class="text-red-500 text-xs italic">(optional)</p>
      <input name="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="email" placeholder="xyz@abc.com" name="email">
    </div>
  </div>
  <?php   
   if(in_array("YOUR EMAIL IS NOT VALID",$error))
    {
      echo '<span style="color:red;">YOUR EMAIL IS NOT VALID</span>';

    }
    if(in_array("EMAIL ALREADY EXIST!",$error))
    {
            echo '<span style="color:red;">EMAIL ALREADY EXIST</span>';

    }
    ?>


  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Contact Number
      </label>
      <input type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name"  placeholder="" name="contactnumber" required>
    </div>
  </div>
     <?php   
     if(in_array("YOUR NO MUST BE IN NUMBERS",$error))
    {
      echo '<span style="color:red;">YOUR NO MUST BE IN NUMBERS</span>';

    }
    ?>






     <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Age
      </label>
      <input name="age" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" maxlength="3" placeholder="" required >
    </div>



    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        gender
      </label>
      <div class="inline-block relative w-64">
  <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="gender" required>
    <option>Male</option>
    <option>Female</option>
    <option>Other</option>
  </select>
  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
  </div>
</div>
    </div>
  </div>

     <div class="flex flex-wrap -mx-3 mb-6">
       <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Identity Card
      </label>
      <div class="inline-block relative w-64">
  <select id="idcard" onchange = "ShowHideDiv()" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="idcard" required>
    <option value="adhar">Adhar Card</option>
   <!-- <option value="pan">PAN Card</option>-->
  </select>
  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
  </div>
</div>
    </div>
</div>

 <div id="adharcard" class="flex flex-wrap -mx-3 mb-6" >
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Adhar Card
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="" name="adhar" minlength="12" maxlength="12">
    </div>
</div>

<?php 
  if(in_array("NOT VALID ADHAR NUMBER",$error))
    {
      echo '<span style="color:red;">NOT VALID ADHAR NUMBER</span>';

    }
    if(in_array("YOUR ADHAR NUMBER IS NOT  OF CORRECT LENGTH",$error))
    {
      echo '<span style="color:red";>YOUR ADHAR NUMBER IS NOT OF CORRECT LENGTH</span>';

    }
?>



 <!-- <div id="pancard" class="flex flex-wrap -mx-3 mb-6" style="display: none;">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        PAN Card
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="" name="pan" minlength="10" maxlength="10">
    </div>

</div>
<?php   
//if(in_array("NOT VALID PAN NUMBER",$error))
    {
  //    echo '<span style="color:red;">NOT VALID PAN NUMBER</span>';

    }
    ?> -->




<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Religion
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="" name="religion" required>
    </div>



    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Caste
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="" name="caste">
    </div>
  </div>



<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Qualifications
      </label>
      <textarea rows="2" cols="60" class="resize border rounded focus:outline-none focus:shadow-outline" name="qualification" required></textarea>
    </div>
</div>

<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Address
      </label>
      <textarea rows="5" cols="60" class="resize border rounded focus:outline-none focus:shadow-outline" name="address" minlength="20" required></textarea>
    </div>
</div>

  <div class="flex flex-wrap -mx-3 mb-2">
    

    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        State
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" name="state" required>
                      <option value="Andhra Pradesh">Andhra Pradesh</option>
                      <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                      <option value="Assam">Assam</option>
                      <option value="Bihar">Bihar</option>
                      <option value="Chandigarh">Chandigarh</option>
                      <option value="Chhattisgarh">Chhattisgarh</option>
                      <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                      <option value="Daman and Diu">Daman and Diu</option>
                      <option value="Delhi">Delhi</option>
                      <option value="Lakshadweep">Lakshadweep</option>
                      <option value="Puducherry">Puducherry</option>
                      <option value="Goa">Goa</option>
                      <option value="Gujarat">Gujarat</option>
                      <option value="Haryana">Haryana</option>
                      <option value="Himachal Pradesh">Himachal Pradesh</option>
                      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                      <option value="Jharkhand">Jharkhand</option>
                      <option value="Karnataka">Karnataka</option>
                      <option value="Kerala">Kerala</option>
                      <option value="Madhya Pradesh">Madhya Pradesh</option>
                      <option value="Maharashtra">Maharashtra</option>
                      <option value="Manipur">Manipur</option>
                      <option value="Meghalaya">Meghalaya</option>
                      <option value="Mizoram">Mizoram</option>
                      <option value="Nagaland">Nagaland</option>
                      <option value="Odisha">Odisha</option>
                      <option value="Punjab">Punjab</option>
                      <option value="Rajasthan">Rajasthan</option>
                      <option value="Sikkim">Sikkim</option>
                      <option value="Tamil Nadu">Tamil Nadu</option>
                      <option value="Telangana">Telangana</option>
                      <option value="Tripura">Tripura</option>
                      <option value="Uttar Pradesh">Uttar Pradesh</option>
                      <option value="Uttarakhand">Uttarakhand</option>
                      <option value="West Bengal">West Bengal</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
  
  <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
       CITY/TALUKA 
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="" name="city" required>
    </div>
  </div>
  <?php   if(in_array("ENTER CITY IN CHARACTERS",$error))
    {
      echo '<span style="color:red";>ENTER CITY IN CHARACTERS</span>';

    }
    ?>




    



    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0"><BR> 
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
        Pincode
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210" name="pincode" minlength="6" maxlength="6" required>
    </div>
  </div><br><br>
  <?php   if(in_array("ENTER VALID PINCODE",$error))
    {
      echo '<span style="color:red";>"ENTER VALID PINCODE"</span>';

    }
    ?>



  <h3 style="font-weight: bolder;">Income Details</h3><br><br>





   
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Organization Name
      </label>
      <input type="text" name="organisationname"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password"  placeholder="xyz company" required>
    </div>
  </div>

 <?php   if(in_array("ENTER VALID PINCODE",$error))
    {
      echo '<span style="color:red";>"ENTER VALID PINCODE"</span>';

    }
    ?>



    <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Organization Contact Number
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" maxlength="10" placeholder="" name="organisationnumber" required>
    </div>
  </div>

 <?php   if(in_array("ENTER VALID CONTACT NUMBER",$error))
    {
      echo '<span style="color:red";>ENTER VALID CONTACT NUMBER</span>';

    }
    ?>


  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Organization Address
      </label>
      <textarea rows="5" cols="60" class="resize border rounded focus:outline-none focus:shadow-outline" name="organisationaddress" minlength="20" required></textarea>
    </div>
</div>


    <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Gross Monthly Income
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="" name="income" required>
    </div>


  </div> 
   <div class="flex flex-wrap -mx-3 mb-6" style="">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0" style="">
      <span class="text-gray-700" style="">Salary Recieved</span>
      <div class="mt-2">
        <label class="inline-flex items-center">
        <input name="salary_recieved" type="radio" class="form-radio"  value="Yes">
        <span class="ml-2">Yes</span>
      </label>
      <label class="inline-flex items-center ml-6">
        <input name="salary_recieved" type="radio" class="form-radio"  value="No">
        <span class="ml-2">No</span>
      </label>
    </div>
  </div>
</div>

<br><br>

    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="register">
        Register
      </button>
<?php  
if(in_array("SUCCESFULLY ADDED TO DATABASE",$error))
{
        echo '<span style="color:green";>SUCCESFULLY ADDED TO DATABSE</span>';

}
?>



  






</form>






    </div>
  </div>

</section>















<!-- <footer class="text-gray-700 body-font">
  <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-no-wrap flex-wrap flex-col">
    <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        
        <span class="ml-3 text-xl">FiberCops</span>
      </a>
      <p class="mt-2 text-sm text-gray-500" style="text-align: left;">Its Our Duty To Help You.</p>
    </div>
    <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-gray-800">First Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-gray-800">First Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-gray-800">First Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-gray-800">First Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
          </li>
        </nav>
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
 -->
      

    </body>




    <script type="text/javascript">
    function ShowHideDiv() {
        var idcard = document.getElementById("idcard");
        var adharcard = document.getElementById("adharcard");
        var pancard = document.getElementById("pancard");
        adharcard.style.display = idcard.value == "adhar" ? "block" : "none";

    }


</script>
</html>