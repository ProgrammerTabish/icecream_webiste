<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'metadata.php';
    session_start();?>
</head>
<body> 
    <?php
       include 'navbar.php';
       ?>
<section style="background-color: #eee; font-family:sofia;">
  <div class="container py-5">
    

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="images/profile.png" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?php
            if(isset($_SESSION["name"]))
            {
                echo $_SESSION["name"];}
                else{
                echo '-';}?></h5>
            <p class="text-muted mb-1"><?php
            if(isset($_SESSION["email"]))
            {
                echo $_SESSION["email"];}
                else{
                echo '-';}?></p>
            <p class="text-muted mb-4"><?php
            if(isset($_SESSION["addr"]))
            {
                echo $_SESSION["addr"];}
                else{
                echo '-';}?></p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-outline-danger btn-lg" onclick="window.location.href='logout.php';">Logout</button>
             
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php
            if(isset($_SESSION["name"]))
            {
                echo $_SESSION["name"];}
                else{
                echo '-';}?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php
            if(isset($_SESSION["email"]))
            {
                echo $_SESSION["email"];}
                else{
                echo '-';}?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php
            if(isset($_SESSION["phone"]))
            {
                echo $_SESSION["phone"];}
                else{
                echo '-';}?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php
            if(isset($_SESSION["mobile"]))
            {
                echo $_SESSION["mobile"];}
                else{
                echo '-';}?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php
            if(isset($_SESSION["addr"]))
            {
                echo $_SESSION["addr"];}
                else{
                echo '-';}?></p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>
</body>