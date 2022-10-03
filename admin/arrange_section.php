


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

  
      input[type="number"] {
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

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>



function cart_update(strings, addr) {
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


  

      
function collect_data()
{
  let str="";
 let page = document.querySelectorAll("#select_page")
 let len=page.length;
 let i;
 for(i=1;i<=len;i++)
 {if(document.querySelectorAll("tr")[i].cells[4].childNodes[0].value  =="")
     {
      continue; 
     }

     else{
       let part=document.querySelectorAll("tr")[i].cells[3].childNodes[2].value+"."+document.querySelectorAll("tr")[i].cells[4].childNodes[0].value;
       let numb=document.querySelectorAll("tr")[i].cells[4].childNodes[0].value;
         if(str.includes(part)==false)
         {
          str += document.querySelectorAll("tr")[i].cells[1].childNodes[0].textContent+"."+document.querySelectorAll("tr")[i].cells[3].childNodes[2].value+"."+document.querySelectorAll("tr")[i].cells[4].childNodes[0].value+","; 


          document.querySelectorAll("tr")[i].cells[3].childNodes[0].innerText=" Done!";
          document.querySelectorAll("tr")[i].cells[3].childNodes[0].style.color="Green";
      
         }
         
         else{
          document.querySelectorAll("tr")[i].cells[3].childNodes[0].innerText=" Change the order!";
          document.querySelectorAll("tr")[i].cells[3].childNodes[0].style.color="red";
          continue;
         }
         
     }
 
      
 }


    if(str!="")
     {
      console.log(str);
      cart_update(str, "new.php");
     }
}



    
</script>




<body id="page">
    <div class="container">
   <button id="back" onclick="window.location.href='../admin_board.php'">
            <-Go to Dash board</button>
    </div>
 
   <div id="heading">

    
                <h1>Arrange the sections in the order you want</h1>


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
$query="SELECT * FROM `sections`";
$result=mysqli_query($conn, $query); 


$counter=1;
echo"<table class='center'>
  <tr>
    <th>Serial</th>
    <th>Name</th>
    
    <th>Position</th>
    <th>Page</th>
    <th>Chanage</th>
  </tr>";
 while($row = $result->fetch_assoc()) {
 $name= $row["name"];
$priority= $row["priority"];
    echo"<tr>
    <td>$counter</td>
    <td>$name</td>
    <td>$priority</td>
    ";
    echo'
    <td><label for="select_page">Choose a Page</label>
    
<select id="select_page">
  <option value="A">Home Page</option>
  <option value="B">Product Page</option>
  <option value="C">Remove</option>
</select>
    </td> '; 
   echo"<td><input type=number></td>
  </tr>";

   $counter++;
    }
echo"</table>"
?>
<div id="btn">
<button onclick="collect_data()" id="submit">
Change!
</button>
</div>

</div>


</body>

</html>