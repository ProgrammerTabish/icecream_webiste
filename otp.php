
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
          OTP
           
       </h1>
       <div class="signin"><img src="vecotors/email.gif">
       
</div>
 <div class="signin" style="color:red;"><i><?php 
 session_start();
 if(isset($_SESSION["error_otp"])){
    echo $_SESSION["error_otp"];
   
 }
  $_SESSION["error_otp"]="";
 ?></i>
       
</div>
       <div class="signin" id="signinid">
        
        <form name="signinform" action="validate.php" method="POST">
            <label for="otp">An OTP was sent to your email by business@zayshicecream.com</label><br>
            <input type="text" id="otp" name="otp" placeholder="Enter the OTP" required><br><br>
            
            <input type="submit" id="submit" name="submit" class="navbuttons">
            
            </form>
            
    </div>

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
