<?php
  function connect_to_db()
{
if($_SESSION["phone"] = $_SESSION["phone_u"] && $_SESSION["phone"] =="9860751466" )
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
session_start();

if(isset($_POST["fname"])&&$_POST["fname"]&&$_POST["lname"]&&$_POST["phone"]&&$_POST["post"])
{
  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $name=$fname." ".$lname;
$phone=$_POST["phone"];
$post=$_POST["post"];


function insert_section($name,$phone,$post)
{
        
$sql="INSERT INTO `admin_info` (`name`, `phone`, `post`, `otp`) VALUES ('$name', '$phone', '$post', '1');";
$conn= connect_to_db();

  mysqli_query($conn, $sql);  


}


insert_section($name,$phone,$post);


}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Employee</title>
    
  </head>
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Sofia&display=swap');
    .header{
        margin-top:30px;
        width: auto;
        height:auto;    
        padding:30px;
        background: black;
        border:0px;
        border-radius:12px;
        font-family: 'Sofia', cursive;
        color:white;
        text-align: center
    }  

table, th, td {
  border: 1px solid black;
  padding-top:18px;
  

  border-collapse: collapse;
}

    .form{
         margin-top:30px;
        width: auto;
        height:auto;    
        padding:10px;
       
        border:0px;
        border-radius:12px;
        font-family: 'Sofia', cursive;
        
        text-align: center
    }
    .inputs{
           margin-top:10px;
        
        padding:10px;
        
      
    }
    .btn {
        text-align: center;
        padding:5px;
         font-family: 'Sofia', cursive;
        height: auto;
        width: auto;
        font-size: 20px;    
    }
    .btn_div{
        text-align: left;
    }

    input[type='text']
    {
        width: 70%;
        height: 50px;
        font-size: 20px;
        font-family: 'Sofia', cursive;
        border:1px solid black;
        padding-left:15px;
    }

    
     input[type='phone']
    {
        width: 70%;
        height: 50px;
        font-size: 20px;
        font-family: 'Sofia', cursive;
        border:1px solid black;
        padding-left:15px;
    }
    input[type='submit']
    {
          text-align: center;
        padding:5px;
         font-family: 'Sofia', cursive;
        height: auto;
        width: auto;
        font-size: 20px;
        color:white;
        background-color:black;
        border-radius: 12px;
        border:0px;
        padding:10px;

    }
      input[type='reset']
    {
          text-align: center;
        padding:5px;
         font-family: 'Sofia', cursive;
        height: auto;
        width: auto;
        font-size: 20px;
         color:white;
        background-color:black;
        border-radius: 12px;
        border:0px;
        padding:10px;

    }
    label{
     font-size: 20px;
    }


  </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script type="text/javascript">





function cart_update(strings, addr) {
    // console.log(strings);
    $(document).ready(function () {
        $.ajax({
            type: "POST",
            // contentType: "application/json; charset=utf-8",
            data: { rm_str: strings },
            url: addr,
        });
    });
}






    function collect_data()
{
  let str="";
 let page = document.querySelectorAll("#select_page")
 let len=page.length;
 let i;
 for(i=1;i<=len;i++)
 {
 
  if(document.querySelectorAll("tr")[i].cells[4].childNodes[1].value=="0")
  {
    continue;
  }    
  else{
   str +=
document.querySelectorAll("tr")[i].cells[2].childNodes[0].textContent + ",";
  }
 }


    if(str!="")
     {
      console.log(str);
      cart_update(str, "remove_admin.php");
     }
}

  </script>
  <body>
<div class="header">
    <div class="btn_div">
        <button class="btn" onclick="location.href='../admin_board.php'">-Back to dash board</button>
    </div>
    
    <h2>Add employee data by filling the form -></h2>
</div>
<div class="form">
    <form action="add_admin.php" method="POST" enctype="multipart/form-data">
       <div class="inputs">   
       <label>First name:</label><br> 
        <input type="text" name="fname" placeholder="Enter the first here" >
       </div>

       <div class="inputs">
         <label>Last name:</label><br> 
        <input type="text" name="lname" placeholder="Enter the last name here" >
    </div>
          <div class="inputs">    
             <label>Phone number:</label><br> 
        <input type="phone" name="phone" placeholder="Enter the phone number here" >
       </div>

       

       
         
       

      <div class="inputs"> 
       <label>Current post of the admin:</label><br>    
        <input type="text" name="post" placeholder="Joined as /post of the employee (eg: Director)" >
       </div>

 
        <div class="inputs">
      

        <input type="submit" name="submit">
        <input type="reset" name="reset">
       </div>
       
      
    </form>

<?php

$conn=connect_to_db();

$query="SELECT * FROM `admin_info`";
$result=mysqli_query($conn, $query); 


$counter=1;
echo"<table class='center' style='width:100%'>
  <tr>
    <th>Serial</th>
    <th>Name</th>
  
    <th>Phone</th>
    <th>Post</th>
    <th>remove</th>
  </tr>";
 while($row = $result->fetch_assoc()) {
 $name= $row["name"];
$phone= $row["phone"];
$post=$row["post"];
    echo"<tr>
    <td>$counter</td>
    <td>$name</td>
    <td>$phone</td>
    <td>$post</td>
    ";
    echo'
    <td>
    
<select id="select_page">
  <option value="0">Keep</option>
  <option value="1">Remove</option>
</select>
    </td> '; 


   $counter++;
    }
echo"</table>"




?>

<button onclick="collect_data()" class="btn" style="margin-top: 12px;">Remove</button>
</div>


    <script></script>
  </body>
</html>