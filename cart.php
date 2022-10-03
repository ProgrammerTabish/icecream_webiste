<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'metadata.php';
    session_start(); ?>
</head>

<body id="page">


    <?php
    include 'navbar.php';
    include 'arrays.php'; ?>

    <?php
    session_start();
    function connect_to_db()
    {
        $server_name = "localhost";
        $username = "root";
        $password = "";
        $dbname = "signin";
        $sql = mysqli_connect($server_name, $username, $password, $dbname);

        return $sql;
    }

    function getpid($phone, $conn)
    {
        // $sql = "SELECT * FROM `signin` WHERE `phone` = '$phone';" ;


        $sql = "SELECT * FROM signin WHERE phone = '$phone';";
        $result = mysqli_query($conn, $sql);
        $arr = mysqli_fetch_row($result);

        return $arr[3];
    }
    $phone = $_SESSION["phone"];
    $con = connect_to_db();





    // $names   = array(
    //     "americandryfruiticecream" => array("American Dryfruits Icecream", "122"), "anjeershake" => array("Fig Shake", "120"),
    //     "anjeerslice" => array("Fig Slice Kulfi", "100"), "badampistaslice" => array("Almond Slice Kulfi", "100"), "badamshake" =>
    //     array("Almond Nut Shake", "100"), "blackcurrent" => array("Black Currnent IceCream", "100"), "blueberry" => array("Blueberry Icecream", "100"),
    //     "butterscotch" => array("Butterscotch IceCream", "100"), "chocolate" => array("Chocolate IceCream", "100"),
    //     "dryfruitkulfi" => array("Dryfruits and nuts Kulfi", "100"), "faludabasedrabdi" => array("Faluda Based Rabdi", "100"),
    //     "fruitfaluda" => array("Fruit Faluda", "100"), "fruitsalad" => array("Fruit Salad", "100"),
    //     "guava" => array("Guava Icecream", "100"), "gulkhanicecream" => array("Rose Icecream", "100"), "honeyfig" => array("Honeyfig Icecream", "100"),
    //     "kajushake" => array("Casew nut Shake", "100"), "lassi" => array("Lassi", "100"),
    //     "mangoicecream" => array("Mango Icecream", "100"),
    //     "mangoslice" => array("Mango Slice Icecream", "100"), "matkakulfi" => array("Matka Kulfi", "100"),
    //     "mawakulfi" => array("Mawa Kulfi", "100"), "pistaslice" => array("Pistachio Sliced Kulfi", "100"),
    //     "rabdimalai" => array("Rabdi Malai", "100"), "rabdis" => array("Rabdi", "100"),
    //     "rajbhog" => array("Rajbhog IceCream", "100"), "rajbhogkulfi" => array("Rajbhog Kulfi", "100"),
    //     "rajbogslice" => array("Rajbhog Slice Kulfi", "100"), "rasberry" => array("Rasberry Icecream", "100"), "strawberry" => array("Strawberry IceCream", "100"),
    //     "vanillaicecream" => array("Vanilla IceCream", "100")
    // );


    $data = getpid($phone, $con);
    $arrayString = explode(" ", $data);

    ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
    <div class="home" id="homeid">



        <h1 class="display-3 text-center text-dark">Cart
        </h1>

        <div class="answer" id="cart_table">

            <h3 id="prompt"></h3>

            <table class="table">
                <thead>
                    <tr>

                        <th scope="col">Product</th>

                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $str_foot = '</tbody>

                <tfoot>
                    <tr>
                        <td><b>Total</b></td>
                        <td><b id="total_ammount"></b> <button class="navbuttons checkout"><b>Buy it!</b></button></td>

                    </tr>
                </tfoot>


        </div>';
                    $x = 0;

                    if ($arrayString[0] == " ") {
                        array_shift($arrayString);
                    }



                    for ($x = 0; $x < count($arrayString); $x++) {

                        $id = $arrayString[$x];
                        if ($id == "") {
                            $str_foot = '';
                            break;
                        }
                        $n = $names[$arrayString[$x]][0];
                        $price = $names[$arrayString[$x]][1];

                        echo '<tr>

                        <td>


                            <h4><b class="serial_number"></b> <b>';


                        echo $n;
                        echo '</b></h4>

                            <div id=';
                        echo $id;
                        echo ' class="content product_photo">
                            </div>

                            <p class="cost_str">';

                        echo $price;
                        echo '₹ per unit
                            </p>


                            <p>

                                <b>
                                    <input name="" inputmode="numeric" type="number" onkeyup="qnt_change(event.target.parentElement)" value="1">
                                </b>

                            </p>
                            <!-- <input type="buttons" class="add_remove" onclick="increase(event.target.parentElement)" class="navbuttons" value="+"> -->
                            <button class="add_remove_button navbuttons" onclick="increase(event.target.parentElement)">+</button>
                            <button class="add_remove_button  navbuttons" onclick="decrease(event.target.parentElement)">-</button>
                        </td>


                        




                        <td>

                            <div class="ammount">
                                <p></p>
                            </div>
                            <div class="remove_btn_cart">
                                <button type="button" onclick="remove_cart(event.target.parentElement)" class="remove_button navbuttons">Remove</button>
                            </div>

                        </td>

                    </tr>';
                    }


                    ?>

                    <?php
                    if ($id != "") {
                        echo $str_foot;
                    } else {
                        echo '<div class="content answer"><h3 class="display-4 text-center text-dark">Cart is Empty! </h3></div>';
                    }
                    ?>







</body>
<script>

</script>