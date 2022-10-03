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


function insert_product($name,$discription,$hex,$rate,$rating,$section,$upload_path)

{
        $default = NULL;
$sql="INSERT INTO `products` (`name`, `discription`, `color`, `price_per_uint`, `total_stock`, `available_stock`, `image`, `rating`, `section`) VALUES ('$name', '$discription', '$hex', '$rate', '0', '0', '$upload_path', '$rating', '$section');";
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

  if(!isset($_POST['product_name'])||$_POST['product_name']=="")
  {
    
 $em+=" Section name is blank";

  }
  else{
     $name = $_POST['product_name'];}
   



  if(!isset($_POST['discription'])||$_POST['discription']=="")
  {
    
 $em+=" Discripiton is blank";

  }
  else{$sec_err=""; 
     $discription = $_POST['discription'];}
   



  if(!isset($_POST['favcolor'])||$_POST['favcolor']=="")
  {
    
 $em+=" No color selected";

  }
  else{
     $hex = $_POST['favcolor'];}
   


  if(!isset($_POST['price'])||$_POST['price']=="")
  {
    
 $em+=" Price is not set!";

  }
  else{
     $price = $_POST['price'];}
   



  if(!isset($_POST['qnt'])||$_POST['qnt']=="")
  {
    
 $em+=" Quantity is not set!";

  }
  else{ 
     $qnt = $_POST['qnt'];}



  if(!isset($_POST['unit'])||$_POST['unit']=="")
  {
    
 $em+=" Select the unit!";

  }
  else{
     $unit = $_POST['unit'];}


if(!isset($_POST['rating'])||$_POST['rating']=="")
  {
    
 $em+=" Rating is not set!";

  }
  else{
     $rating = $_POST['rating'];}




if(!isset($_POST['section'])||$_POST['section']=="")
  {
    
 $em=" Select the section!";

  }
  else{
     $section = $_POST['section'];}


    if(!isset($_FILES['image']['name'])&&$em=""||$_FILES['image']['error']=="4"&&$em=="")
  {
      $em+=" upload image!";
  }
  else{
    $img_name=$_FILES['image']['name'];
    $img_size=$_FILES['image']['size'];
    $img_temp=$_FILES['image']['tmp_name'];
    $img_error=$_FILES['image']['error'];}


  
  
   
    
   
    
    if($img_error===0&& $em=="")
    {
        if($img_size>999999)
       {
           $em+=" Sorry the file is too large"." ".$img_size;
           
       }
       else
       {
        $img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
        $img_ex_lc=strtolower($img_ex);
            $allowed_exs=array("jpg","jpeg","png"); 
        if(in_array($img_ex_lc,$allowed_exs))   
        { 
            
        $new_img_name=uniqid("IMG-",true).".".$img_ex_lc;
        $upload_path='../admin/product_bg/'.$new_img_name;
        move_uploaded_file($img_temp,$upload_path);
        $rate=$price."rs for ".$qnt.$unit;
        insert_product($name,$discription,$hex,$rate,$rating,$section,$upload_path);
        

   
    
}   
        else {

            $em+="Only jpg,jpeg,png are allowed!";
        }   
    }
    }
    else{
        
    }
  
}





?>




 <?php
                
                    
                    $conn=connect_to_db();
                    $query='SELECT * FROM `sections`';
                    $result=mysqli_query($conn, $query);

                    


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



    #unit {
        font-family: 'Sofia', cursive;
        text-align: center;
        height: 50px;
        width: 18%;
        border: 3px solid;
        font-size: 20px;

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
        padding:12px;
        font-size: 20px;
        border: 2px solid;
        border-radius: 12px;
        color: white;
        background-color: red;
        margin:50px;

    }

    #reset {
        padding:12px;
        font-family: 'Sofia', cursive;
        text-align: center;
        margin:18px;
        font-size: 20px;
        border: 2px solid;
        border-radius: 12px;
        color: white;
        background-color: black;
    }

    .new_div {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;

        background-repeat: no-repeat;
        background-size: 100% 100%;


    }

    #sample {
        font-family: 'Sofia', cursive;
        font-size: 22px;
        background-repeat: no-repeat;
    background-size: 100% 100%;
    }

    #check_button {
        margin: 32px;

    }

    #refresh {
        font-family: 'Sofia', cursive;
        text-align: center;

        font-size: 25px;
        border: 2px solid;
        border-radius: 12px;
        color: white;
        background-color: green;
        padding: 8px;
        margin-top: 40px;
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

    #section {
        font-family: 'Sofia', cursive;
        text-align: center;
        height: 50px;
        width: auto;
        border: 3px solid;
        font-size: 20px;

        border-radius: 12px;
        margin-top: 17px;
    }
</style>
<script>


function paste()
{
document.getElementById("favcolor").value=document.getElementById("col").value;
}




 

function preview() {
   let url= URL.createObjectURL(event.target.files[0]);
    frame.src=url;
   
}

    function update_upload() {
        var files = document.getElementById('img_upload');
        console.log(document.getElementById("img_upload").value);
        if (document.getElementById("img_upload").value !== "") {
            document.getElementById("file_upload").style.fontSize = "12px";
            document.getElementById("file_upload").style.background = "green";
            document.getElementById("file_upload").childNodes[1].innerText = document.getElementById("img_upload").value;
            

        }

    }

    function update_sample() {
        document.getElementById("sample").childNodes[1].innerText = document.querySelectorAll("#product_name")[0].value;
        document.getElementById("sample").childNodes[3].innerText = document.querySelectorAll("#discription")[0].value;
        document.getElementById("sample").childNodes[5].innerText = document.querySelectorAll("#price")[0].value + "₹ for" + document.querySelectorAll("#qnt")[0].value + document.querySelectorAll("#unit")[0].value;
             let img=document.getElementById("frame").src;
             document.getElementById("sample").style.backgroundImage="url("+"'"+img+"')";


        let stars = "";
        let rating = 0;
        for (i = 1; i <= document.querySelectorAll("#rating")[0].value; i++) {
            stars += "⭐";
            rating += 1;
            if (i == 5) {
                rating = 5;
                break;
            }
        }

        document.getElementById("sample").childNodes[9].innerText = stars + " " + rating;
        document.getElementById("sample").style.color = document.querySelectorAll("#favcolor")[0].value;
    }
</script>

<body id="page">
    <div id="heading">

        <button id="back" onclick="window.location.href='../admin_board.php'">
            <-Go to Dash board</button>
                <h1>Fill the product delails and submit</h1>


    </div>
    <div id="form_div">

       <form action="add_product.php" method="POST" enctype="multipart/form-data">



            <label for="product_name">Product name</label><br>

            <input type="text" id="product_name" name="product_name"><br><br>
        
            <label for="discription">Discription of product:</label><br>
            <textarea id="discription" name="discription" rows="10" ></textarea><br>
            <br>
            <label for="favcolor">Theme</label>
            <input type="color" id="favcolor" name="favcolor" value="#ff0000" ><br>
            <input id="col" type="text" placeholder="Enter the hexcode!" onkeypress="paste()" onchange="paste()"><br>
            <label for="price">price in rupees</label><br>
            
            <input type="number" id="price" name="price" ><br><br>
           
            <label for="qnt">For</label><br>

            <input type="number" id="qnt" name="qnt" >

            <select id="unit" name="unit">
                <option value="ml">ml</option>
                <option value="litre">litre</option>
                <option value="gm">gram</option>
                <option value="kg">kg</option>
            </select>
            <br>
            <br>


                <img id="frame" src="" width="100px" height="100px"/><br>
            <div id="file_upload">
                <label for="img_upload">Upload icecream image</label><br>
                <input type="file" name="image" id="img_upload" onchange="update_upload();  preview();">
            </div>
 
            <label for="rating">How many star rating out of 5?</label><br>


            <input type="number" id="rating" name="rating"><br><br>
            <label for="section">Under which section you want this product to be?</label>
            <br>
            <select id="section" name="section" >

               <?php
               while($row = $result->fetch_assoc()) {
                    $name= $row["name"];
                    $priority=$row["priority"];
                    echo '<option value='.'"'.$name.'">'.$name.'-'.$priority.'</option>';
                    }

               ?>

                
            </select>
            <br> <input name="submit" id="submit" type="submit">

           <input type="reset" id="reset" name="reset">


        </form>
        <?php
        echo $em; 
        ?>
       
        <div id="check _button">
            <button id="refresh" onclick="update_sample()">Refresh</button>
        </div>

        <div class="new_div">




            <div id="sample" class="content  reveal">
                <h3></h3>

                <div calss="discription">
                    <p>
                    </p>
                </div>
                <div class="rates"></div>
                <button class="navbuttons rose_icecream">Add to
                    cart</button>
                <div class="reviews"></div>

            </div>
        </div>
        <br>
        <br><hr>
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="../index.js"></script>
</body>

</html>