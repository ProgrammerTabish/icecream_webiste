<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'metadata.php';
    session_start(); ?>
</head>

<body id="page" onload="get_cart()">


    <?php include 'header.php';
    include 'navbar.php' ?>

    <button onClick=sign1() id="myBtn">
        <div class="cart_txt"><?php if (isset($_SESSION["phone"])) {
                                    echo "<span id='notify' class='badge badge-pill badge-danger'>";


                                    echo "</span>";
                                } ?></div>
        <span class="material-symbols-outlined">

            shopping_cart
        </span>

    </button>

    <div class="home" id="homeid">
        <div id="quote">
            <h2 class="font-effect-neon webelive"><i>"We belive in consumer's satisfaction"</i></h2>
            <p><b>
                    <div class="namepalate"> - Mr. Zakir </div>
                </b></p>
        </div>



        <hr id="homehr">

        <h1 class="display-1 text-center text-dark">Home
        </h1>
    </div>


    <div id="newproducts">





        <h2 class="subheadings">
            New Products
        </h2>
    </div>





    <div class="newproductsdiv">




        <div id="gulkhanicecream" class="content  reveal">
            <h3>Rose (Gulkhan) IceCream</h3>

            <div calss="discription">
                <p>
                    Rose (Gulkhan) IceCream is an icecream made of rose extracts (gulkhan) and milk.
                </p>
            </div>
            <div class="rates">100₹ for 750ml.</div>
            <button class="navbuttons rose_icecream" onClick=add_to_cart(event.target.parentElement)>Add to
                cart</button>
            <div class="reviews">⭐⭐⭐⭐4.0</div>

        </div>


        <div id="rajbhogkulfi" class="content  reveal">
            <h3>Rajbhog Kulfi</h3>

            <div class="discription">
                <p>
                    Rajbhog kulfi is a safron flavoured kulfi coated with nuts and chocolate.
                </p>
            </div>

            <div class="rates">100₹ for 750ml.</div>
            <button class="navbuttons rajbhog_kulfi" onClick=add_to_cart(event.target.parentElement)>Add to
                cart</button>
            <div class="reviews">⭐⭐⭐⭐4.0</div>
        </div>





    </div>











    <div id="trending">
        <h2 class="subheadings">
            #Trending
        </h2>
    </div>


    <div id="trendingdiv">




        <div id="mawakulfi" class="content  reveal">
            <h3>Mawa Kulfi</h3>

            <div calss="discription">
                <p>
                    Mawa kulfi is made up of dried evaporated milk solids and milk.
                </p>
            </div>

            <div class="rates">100₹ for 750ml.</div>
            <button class="navbuttons mawa_kulfi" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
            <div class="reviews">⭐⭐⭐⭐4.0</div>
        </div>









        <div id="dryfruitkulfi" class="content  reveal ">
            <h3>Dryfruit Kulfi</h3>

            <div calss="discription">
                <p>
                    Dryfruit Kulfi is made up of dried evaporated milk solids and coated with dryfruits.
                </p>
            </div>

            <div class="rates">100₹ for 750ml.</div>
            <button class="navbuttons dryfruit_kulfi" onClick=add_to_cart(event.target.parentElement)>Add to
                cart</button>
            <div class="reviews">⭐⭐⭐⭐4.0</div>
        </div>

        <div id="vanillaicecream" class="content  reveal ">
            <h3>Vanilla IceCream</h3>

            <div calss="discription">
                <p>
                    Made with milk and vanilla flavour.
                </p>
            </div>

            <div class="rates">100₹ for 750ml.</div>
            <button class="navbuttons vanilla_icecream" onClick=add_to_cart(event.target.parentElement)>Add to
                cart</button>
            <div class="reviews">⭐⭐⭐⭐4.0</div>
        </div>


        <div id="mangoicecream" class="content  reveal">
            <h3>Mango IceCream</h3>

            <div calss="discription">
                <p>
                    Mango IceCream is made with mango extracts and milk.
                </p>
            </div>

            <div class="rates">100₹ for 750ml.</div>
            <button class="navbuttons mango_icecream" onClick=add_to_cart(event.target.parentElement)>Add to
                cart</button>
            <div class="reviews">⭐⭐⭐⭐4.0</div>
        </div>
        <div id="badamshake" class="content  reveal">
            <h3>Badam Shake</h3>

            <div calss="discription">
                <p>
                    Badam(almond) Shake is made up of real almond and milk milk.
                </p>
            </div>

            <div class="rates">100₹ for 750ml.</div>
            <button class="navbuttons badam_shake" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
            <div class="reviews">⭐⭐⭐⭐4.0</div>
        </div>
        <div id="anjeershake" class="content  reveal">
            <h3>Anjeer Shake</h3>

            <div calss="discription">
                <p>
                    Anjeer shake is a thick blend of fig and milk
                    along with dryfruits and ice.
                </p>
            </div>

            <div class="rates">100₹ for 750ml.</div>
            <button class="navbuttons anjeer_shake" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
            <div class="reviews">⭐⭐⭐⭐4.0</div>
        </div>


        <div id="lassi" class="content  reveal">
            <h3>Lassi</h3>

            <div calss="discription">
                <p>
                    Made up of sugar and curd.
                </p>
            </div>

            <div class="rates">100₹ for 750ml.</div>
            <button class="navbuttons lassi_" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
            <div class="reviews">⭐⭐⭐⭐4.0</div>
        </div>

        <div id="faludabasedrabdi" class="content  reveal">
            <h3>Faluda Based Rabdi</h3>

            <div calss="discription">
                <p>
                    Made with falooda and icecream with milk solids.
                </p>
            </div>

            <div class="rates">100₹ for 750ml.</div>
            <button class="navbuttons kulfi_base_rabdi" onClick=add_to_cart(event.target.parentElement)>Add to
                cart</button>
            <div class="reviews">⭐⭐⭐⭐4.0</div>
        </div>



    </div>







    <div id="alsotrythis">
        <h2 class="subheadings">
            Try it!
        </h2>
    </div>
    <div class="alsotrythisdiv">
        <div id="fruitsalad" class="content  reveal">
            <h3>Fruit Salad IceCream</h3>

            <div calss="discription">
                <p>
                    Fruit salad Icecream is made with real mix-fruit chunks and milk.
                </p>
            </div>

            <div class="rates">100₹ for 750ml.</div>
            <button class="navbuttons fruit_salad_icecream" onClick=add_to_cart(event.target.parentElement)>Add to
                cart</button>
            <div class="reviews">⭐⭐⭐⭐4.0</div>
        </div>
        <div id="kajushake" class="content  reveal">
            <h3>Kaju Shake</h3>

            <div calss="discription">
                <p>
                    Made with real cashew nuts and milk.
                </p>
            </div>

            <div class="rates">100₹ for 750ml.</div>
            <button class="navbuttons kaju_shake" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
            <div class="reviews">⭐⭐⭐⭐4.0</div>
        </div>
        <div id="fruitfaluda" class="content  reveal">
            <h3>Fruit Faluda</h3>

            <div calss="discription">
                <p>
                    Falooda made with real fruit chunks and icecream.
                </p>
            </div>

            <div class="rates">100₹ for 750ml.</div>
            <button class="navbuttons fruit_faluda" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
            <div class="reviews">⭐⭐⭐⭐4.0</div>
        </div>
        <div id="rabdimalai" class="content  reveal">
            <h3>Rabdi malai</h3>

            <div calss="discription">
                <p>
                    Made with evaporated milk solids and icecream with some milk.
                </p>
            </div>

            <div class="rates">100₹ for 750ml.</div>
            <button class="navbuttons rabdi_malai" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
            <div class="reviews">⭐⭐⭐⭐4.0</div>
        </div>
    </div>





    <!-- <div class="subheadings" id="footer"><button id="see_all_products" onclick="window.location.href = 'products.php'" class="navbuttons">
         See all products
    </button>

    </div> -->
    <div id="footer_div">
        <div id="footer_block_1">

            <div id="logo_zacnmerc">
                <img class="ans_img" id="zaklogo" src="images/zak.jpg" alt="img">

            </div>

            <div id="logo_zaysh">
                <div id="brand_info_line">
                    <p>
                        Zaysh Ice Cream is a product of Zak N Merc Industries
                    </p>
                </div>
                <img class="ans_img" id="zayshlogo" src="images/logo.png" alt="img">
            </div>

        </div>



        <div id="footer_block_2">

            <div id="fassai">
                <img class="ans_img" id="zayshlogo" src="vecotors/fssai_logo.svg" alt="img">
                <div id="fssai_number">
                    <p>FSSAI license number:<br>
                        12451232125<br>
                        12451232125
                    </p>
                </div>
                <div id="fssai_line">
                    <p>
                        <i>The Food Safety and Standards Authority of India (FSSAI) has been established under Food Safety and Standards , 2006 which consolidates various acts & orders that have hitherto handled food related issues in various Ministries and Departments. FSSAI has been created for laying down science based standards for articles of food and to regulate their manufacture, storage, distribution, sale and import to ensure availability of safe and wholesome food for human consumption.
                        </i> <b>(source: fssai.gov.in)</b>
                    </p>
                </div>

            </div>

        </div>




        <div id="footer_block_3">

            <div id="helpline">
                <hr class="helpline_hr">
                <p class="footer_helpline">Helpline Number :<b><a title="Click to copy" id="copy" href="javascript:copy_it('+91 9130080236');">+91 9130080236</a></b></p>
                <button class="navbuttons" onclick="copy_it('+91 9130080236');">Click to copy the number</button>
                <hr class="helpline_hr">
            </div>
            <div id="whatsapp_floating">

            </div>
            <div id="privacy_policy">
                <p>Kindly read our
                    <a href="privacy_policy.php" class="privacy">privacy policy</a>
                </p>

            </div>
            <br>
            <div id="copyright">
                <footer>&copy; Copyright 2022 Zaysh Ice Cream</footer>
            </div>


        </div>

    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
</body>


</html>
<?php

if (isset($_SESSION['phone'])) {
    $phone = $_SESSION["phone"];
    echo '
    <script type="text/javascript">
set_login_true();
</script>';
}


?>