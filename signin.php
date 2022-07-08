

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'metadata.php'?>
</head>

<body>

    <?php 
       
        include 'navbar.php'?>

   
    <hr id="signinhr">
   <div> 
       
       <h1 class="display-1 text-center text-dark" id="signinheading">
           sign in
           
       </h1>
       
        
       <div class="signin" id="note">
         
        <p><i id="errormsg">
      

<?php  
session_start();


         if (isset($_SESSION['error_name'])||isset($_SESSION['error_email'])||isset($_SESSION['error_tnc'])) {
  echo $_SESSION["error_name"];
  echo "<br>";
echo $_SESSION["error_email"];
  echo "<br>";
   echo $_SESSION["error_tnc"];
 
}


$_SESSION["error_tnc"]="";
      $_SESSION["error_email"]="";  
        $_SESSION["error_name"]="";

?>  


        </i></p>
       </div>
       <div class="signin">
        <form name="signinform" action="post.php" method="POST">
            <label for="fname">Please enter your name</label><br>
            <input type="text" id="name" name="name" placeholder="Name"><br><br>
            
            <label for="e_mial">Please enter your email id</label><br>
            <input type="text" id="e_mail" name="email" placeholder="Email"><br><br>
            <input type="checkbox" id="tnc" name="tnc" value="tnc">
            <label for="tnc">I agree the <a href="../website/tnc.html">terms & conditions</a></label><br>
             
            
            <input type="submit" id="submit" name="submit" class="navbuttons">
            <input type="reset" id="reset" name="reset" class="navbuttons">
            
           
            
          </form>
            
         
    </div>
       <div class="signin">
        
           <h3>-Or-</h3>
        </div>
        <div class="signin">
        
            <button type="button" class="login-with-google-btn" >
  Sign in with Google
</button>
        </div>
          
    </div>
    
    <script src="index.js"> </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>