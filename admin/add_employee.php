<?php
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Employee</title>
    <link rel="stylesheet" href="style.css">
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
    input[type='date']
    {
         width: 70%;
        height: 50px;
        font-size: 20px;
        font-family: 'Sofia', cursive;
        border:1px solid black;
        padding-left:15px;
    }
    input[type='number']
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
  <body>
<div class="header">
    <div class="btn_div">
        <button class="btn" onclick="location.href='../admin_board.php'"> Back</button>
    </div>
    
    <h2>Add employee data by filling the form -></h2>
</div>
<div class="form">
    <form action="add_employee.php">
       <div class="inputs">   
       <label>First name:</label><br> 
        <input type="text" name="fname" placeholder="Enter the first here">
       </div>

       <div class="inputs">
         <label>Last name:</label><br> 
        <input type="text" name="lname" placeholder="Enter the last name here">
    </div>
          <div class="inputs">    
             <label>Phone number:</label><br> 
        <input type="phone" name="phone" placeholder="Enter the phone number here">
       </div>

        <div class="inputs">  
         <label>Adhaar number:</label><br>   
        <input type="number" name="fname" placeholder="Enter the adhaar number here">
       </div>


       <div class="inputs">  
        <label>Upload adhaar cart image:</label><br>   
        <input type="file" name="adhaar_image">
       </div>
         <div class="inputs">
          <label>Employee Image:</label><br>    
        <input type="file" name="adhaar_image">
       </div>
       
        <div class="inputs">
         <label>Address of the employee:</label><br>     
        <input type="text" name="addr" placeholder="Enter the current address here">
       </div>

      <div class="inputs"> 
       <label>Current post of the employee:</label><br>    
        <input type="text" name="post" placeholder="Joined as /post of the employee (eg: salesman)">
       </div>

<div class="inputs">    
     <label>Promotion status</label><br> 
        <input type="text" name="promotion" placeholder="Enter the promotion status (eg: will be promoted to assistant manager)">
       </div>

       <div class="inputs">
         <label>Joining date</label><br> 

        <input type="date" name="date">
       </div>
 
        <div class="inputs">
      

        <input type="submit" name="submit">
        <input type="reset" name="reset">
       </div>
       
      
    </form>

</div>


    <script></script>
  </body>
</html>