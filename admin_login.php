<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'metadata.php' ?>
</head>

<body>

    <?php

    include 'navbar.php' ?>


    <hr id="signinhr">

    <h1 class=" display-1 text-center text-dark" id="signinheading">
        Admin Login
    </h1>


    <div class="signin" id="note">

        <p><i id="errormsg">


                <?php

                session_start();


                if (isset($_SESSION['error_phone'])) {
                    echo $_SESSION["error_phone"];
                    echo "<br>";
                }


                session_unset();
                session_destroy();


                $_SESSION["error_phone"] = "";


                ?>


            </i></p>
    </div>
    <div class="signin">
        <form name="signinform" action="post_admin.php" method="POST">

            <label for="phone">Enter your 10 digit phone number</label><br>
            <input type="text" id="phone" name="phone" placeholder="10 digit phone number"><br><br>



            <input type="submit" id="submit" name="submit" class="navbuttons">
            <input type="reset" id="reset" name="reset" class="navbuttons">



        </form>


    </div>



    <script src="index.js"> </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>