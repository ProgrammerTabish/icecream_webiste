<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>


</head>

<style>

  #heading {

        margin-top: 20px;
        text-align: center;

        font-family: 'Sofia', cursive;

    }
 

    @import url('https://fonts.googleapis.com/css2?family=Sofia&display=swap');

  
      input[type="text"] {
        font-family: 'Sofia', cursive;
        text-align: center;
        height: 50px;

        font-size: 20px;
        border: 3px solid;
        border-radius: 12px;
        margin-top: 17px;
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

     table th, td {
            border: 1px solid black;
            padding:12px;
         }
         .center {font-family: 'Sofia', cursive;
  margin-left: auto;
  margin-right: auto;
}
#page{
    width: 100%;
}
#submit{
    text-align:center;
    color:white;
    background-color: red;
    border-radius: 12px;
    padding:12px;
    margin: 50px;
}
.cntr{
    padding: 12px;

    text-align: center;

}

</style>


</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
  function post_update(strings, addr) {
    // console.log(strings);
    $(document).ready(function () {
        $.ajax({
            type: "POST",
            // contentType: "application/json; charset=utf-8",
            data: { cart: strings },
            url: addr,
        });
    });
}


  
function create_str()
{
let str="";
let len=document.querySelectorAll("tr").length;
let i;
for(i=1;i<len;i++)
{
let name=document.querySelectorAll("tr")[i].childNodes[3].innerText;
let value=document.querySelectorAll("select")[i-1].value;

if(value!="no_change") 
{
 str+=name+"-"+value+","
}
}

if(str!="")
     {
      console.log(str);
      post_update(str, "post_arrange.php");
     }
}
   
</script>




<body id="page">
    <div class="container">
   <button id="back" onclick="window.location.href='../admin_board.php'">
            <-Go to Dash board</button>
    </div>
 
   <div id="heading">

    
                <h1>Arrange the Products in the order you want</h1>


    </div>


<div id="form_div">














<?php
session_start();
function connect_to_db()
{
if($_SESSION["phone"] = $_SESSION["phone_u"])
    {$server_name = "localhost";
    $username = "root";
    $password = "";
    $dbname = "signin";
    $sql = mysqli_connect($server_name, $username, $password, $dbname);
    return $sql;
}}

$conn=connect_to_db();
$que="SELECT * FROM `sections`";
$res=mysqli_query($conn, $que); 


    

$query="SELECT * FROM `products`";
$result=mysqli_query($conn, $query); 


$counter=1;
echo"<table class='center'>
  <tr>
    <th>Serial</th>
    <th>Name</th>
    
    <th>Position</th>
    
    <th>Chanage</th>
  </tr>";
 while($row = $result->fetch_assoc()) {
 $name= $row["name"];
$priority= $row["section"];
    echo"<tr>
    <td>$counter</td>
    <td>$name</td>
    <td>$priority</td>
    ";
   
   echo"<td><select class='val' name='change'>";
echo"<option value='no_change'>No change!</option>";
$res=mysqli_query($conn, $que);

 while($row = $res->fetch_assoc()) {
       $temp=$row["name"];
      echo"<option value='$temp'>$temp</option>";
    }
 echo"<option value='0' style='color:red;'>Remove product!</option>";
 echo "
</select></td>
  </tr>";

   $counter++;
    }
echo"</table>"
?>
<div id="btn">
<button id="submit" onclick="create_str()">
Change!
</button>
</div>

</div>


</body>

</html>
    