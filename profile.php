<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'metadata.php';
  session_start(); ?>
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
              <img src="images/profile.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">
                <p class="text-muted mb-1" id="name_place"><?php
                                                            if (isset($_SESSION["name"])) {
                                                              echo $_SESSION["name"];
                                                            } else {
                                                              echo '';
                                                            } ?></p>
              </h5>
              <p class="text-muted mb-1"><?php
                                          if (isset($_SESSION["phone"])) {
                                            echo $_SESSION["phone"];
                                          } else {
                                            echo '';
                                          } ?></p>

              <div class="d-flex justify-content-center mb-2">
                <button type="button" class="btn btn-outline-danger btn-lg" onclick="window.location.href='logout.php';">Logout</button>

              </div>
            </div>
          </div>

        </div>




        <div class="col-lg-8">
          <div class="card mb-4">
            <div id="name_drop_down" class=" card-body ">
              <div class="row ">
                <div class="col-sm-3">
                  <p class="mb-0"><button onclick="show_hide_div();" id="change_name_button" type="button" class="btn btn-outline-info">Edit Name</button></p>

                </div>
                <div class="col-sm-9 ">




                  <div class="signin " id="change_name">


                    <input type="text" id="name" name="name" placeholder="Enter new name">
                    <br>
                    <br>
                    <button onclick="update_info();" type="button" class="btn btn-outline-success">Edit</button>





                  </div>



                </div>






              </div>


            </div>

          </div>
        </div>

      </div>
    </div>
    </div>
  </section>
</body>


<script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  show_hide_div();

  function show_hide_div() {
    var x = document.getElementById("change_name");
    var y = document.getElementById("name_drop_down");
    if (x.style.display === "none") {
      x.style.display = "block";
      y.style.height = "auto";
    } else {
      x.style.display = "none";
      y.style.height = "75px";


    }


  }



  function info_update(str) {
    console.log(str);
    $(document).ready(function() {
      $.ajax({
        type: "POST",
        // contentType: "application/json; charset=utf-8",
        url: "edit_personal_info.php",
        data: {
          name: str
        },
      });
    });

  }


  function update_info() {
    var x = document.getElementById("name").value;
    info_update(x);
    document.getElementById("name_place").innerHTML = x;

  }
</script>