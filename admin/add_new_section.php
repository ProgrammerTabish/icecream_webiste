<?php

session_start();

$em="";

function connect_to_db()
{
if($_SESSION["phone"] = $_SESSION["phone_u"])
    {$server_name = "localhost";
    $username = "root";
    $password = "";
    $dbname = "signin";
    $sql = mysqli_connect($server_name, $username, $password, $dbname);
    return $sql;
}
else
{
    return null;
}
}
function insert_section($name,$bg,$repeat,$color)
{
        $default = NULL;
$sql="INSERT INTO `sections` (`name`, `background`, `repeation`, `color`, `priority`) VALUES ('$name', '$bg', '$repeat', '$color', '0');";
$conn= connect_to_db();
try
{
  mysqli_query($conn, $sql);  
}
catch(Exception $e)
{
    global $em;
    $em = "This section already exists in the website, Please enter a different name  ";
    
}

}


if (isset($_POST['submit']) && isset($_FILES['image'])) {

  if(!isset($_POST['section_name'])||$_POST['section_name']=="")
  {
    
 $sec_err="Please enter the section name!";

  }
  else{$sec_err=""; 
     $name = $_POST['section_name'];}
    if(!isset($_POST['favcolor'])||$_POST['favcolor']=="")
  {
    $col_err="Please seclect the color!";
  }
  else{$col_err=""; 
    $color = $_POST['favcolor'];}
    if(!isset($_POST['repeat'])||$_POST['repeat']=="")
  {
    $rep_err="Please select repeat or no repeat background!";
  }
  else{$rep_err="";$repeat=$_POST['repeat'];
}
    if(!isset($_FILES['image']['name'])||$_FILES['image']['error']=="4")
  {
      $file_err="Please upload a background image!";
  }
  else{$file_err=""; 
    $img_name=$_FILES['image']['name'];
    $img_size=$_FILES['image']['size'];
    $img_temp=$_FILES['image']['tmp_name'];
    $img_error=$_FILES['image']['error'];}


  $em=$em."\n".$sec_err."\n".$col_err."\n".$rep_err."\n"."$file_err";
  
   
    
   
    
    if($img_error===0)
    {
        if($img_size>999999)
       {
           $em="Sorry the file is too large"." ".$img_size;
           
       }
       else
       {
        $img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
        $img_ex_lc=strtolower($img_ex);
            $allowed_exs=array("jpg","jpeg","png"); 
        if(in_array($img_ex_lc,$allowed_exs))   
        { 
            
        $new_img_name=uniqid("IMG-",true).".".$img_ex_lc;
        $upload_path='../admin/section_bg/'.$new_img_name;
        move_uploaded_file($img_temp,$upload_path);
        insert_section($name,$upload_path,$repeat,$color);
        

   
    
}   
        else {

            $em="Only jpg,jpeg,png are allowed!";
        }   
    }
    }
    else{
        
    }
  
}

?>









<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Sofia&display=swap');

    #heading {

        margin-top: 20px;
        text-align: center;

        font-family: 'Sofia', cursive;

    }

    #form_div {
        margin-top: 10px;
        font-family: 'Sofia', cursive;
        text-align: center;
        font-size: 20px;


    }

    input[type="text"] {
        font-family: 'Sofia', cursive;
        text-align: center;
        height: 50px;
        width: 50%;
        font-size: 20px;
        border: 3px solid;
        border-radius: 12px;
        margin-top: 17px;

    }



    #discription {
        font-family: 'Sofia', cursive;
        margin-top: 17px;
        font-size: 20px;
        padding: 2px;
        border: 2px solid;
        border-radius: 12px;
        width: 50%;
    }

    input[type="number"] {
        font-family: 'Sofia', cursive;
        text-align: center;
        height: 50px;
        width: 17%;
        font-size: 20px;
        border: 3px solid;
        border-radius: 12px;
        margin-top: 17px;
    }





    #file_upload {
        font-family: 'Sofia', cursive;
        text-align: center;
        margin: 30px;
        margin-left: 20%;
        margin-right: 20%;
        font-size: 20px;
        border: 2px solid;
        border-radius: 12px;
        color: white;
        background-color: black;
        padding-top: 17px;

    }

    input[type="file"] {
        font-family: 'Sofia', cursive;
        text-align: center;


    }

    #img_upload {
        width: 0px;
    }

    #submit {
        font-family: 'Sofia', cursive;
        text-align: center;

        font-size: 20px;
        border: 2px solid;
        border-radius: 12px;
        color: white;
        background-color: black;

    }

    #reset {
        font-family: 'Sofia', cursive;
        text-align: center;

        font-size: 20px;
        border: 2px solid;
        border-radius: 12px;
        color: white;
        background-color: black;
    }




    #back {
        font-family: 'Sofia', cursive;
        text-align: center;

        font-size: 30px;
        border: 2px solid;
        border-radius: 12px;
        color: white;
        background-color: black;
    }
    #warning{
        color:red;
    }
</style>


<script>
    function update_upload() {
        var files = document.getElementById('img_upload');
        console.log(document.getElementById("img_upload").value);
        if (document.getElementById("img_upload").value !== "") {
            document.getElementById("file_upload").style.fontSize = "12px";
            document.getElementById("file_upload").style.background = "green";
            document.getElementById("file_upload").childNodes[1].innerText = document.getElementById("img_upload").value;
        }
    }

    
</script>

<body id="page">
    <div id="heading">

        <button id="back" onclick="window.location.href='../admin_board.php'">
            <-Go to Dash board</button>
                <h1>Fill the product delails and submit</h1>


    </div>
    <div id="form_div">

        <form action="add_new_section.php" method="POST" enctype="multipart/form-data">



            <label for="section_name">Section name</label><br>

            <input type="text" id="section_name" name="section_name"><br><br>




            <br>
            <label for="favcolor">Theme</label>
            <input type="color" id="favcolor" name="favcolor" value="#ff0000"><br><br>

           

            <div>
                <input type="radio" id="repeat" name="repeat" value="yes">
                <label for="repeat">Repeat</label>
            </div>

            <div>
                <input type="radio" id="no_repeat" name="repeat" value="no">
                <label for="no_repeat">NO Repeat</label>
            </div>
            <br>
            <div id="file_upload">
                <label for="img_upload">Upload backgournd image</label><br>
                <input type="file" name="image" id="img_upload" onchange="update_upload()">
            </div>



            <input type="submit" id="submit" name="submit"><input type="reset" id="reset" name="reset">


        </form>
<div id="warning">
    <?php
         echo($em);
    ?>
    <br>
    <?php


$conn=connect_to_db();
$query="SELECT * FROM `sections`";
$result=mysqli_query($conn, $query); 

 while($row = $result->fetch_assoc()) {
        echo "Name: ".$row["name"]. "<br>";
    }

?>
</div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="../index.js"></script>
</body>

</html>