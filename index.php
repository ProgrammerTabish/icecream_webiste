
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'metadata.php';
    session_start();?>
</head>

<body id="page">


    <?php include 'header.php';
    include'navbar.php'?>
  
    <button onClick=sign1() id="myBtn">
    <span class="material-symbols-outlined">
   
            shopping_cart
        </span>
        <div class="cart_txt">Cart</div><?php if(isset($_SESSION["email"])){
            echo "<span class='badge badge-pill badge-danger'>0</span>";
        } ?>
    </button>

    <div class="home" id="homeid">
        <div id="quote">
            <h2 class="font-effect-neon webelive"><i>"We belive in consumer's satisfaction"</i></h2>
            <p><b>
                    <div class="namepalate"> - Mr. Zakir </div>
                </b><br><em>
                    <div class="badge">(Founder of <b>ZAYSH Ice Cream</div></b><sup>TM</sup>)
                </em></p>
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
        <div id="anjeershake2" class="content  reveal">
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
        <div id="anjeershake1" class="content  reveal">
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
    <div id="commingsoon">
        <h2 class="subheadings">
            Comming Soon
        </h2>
    </div>
    <div class="commingsoondiv">
        <div id="americandryfruiticecream" class="content  reveal">
            <h3>American Dryfruit Icecream</h3>

            <div calss="discription">
                <p>
                    Made with condensed milk chocolate and cashew nuts.
                </p>
            </div>

            <div class="rates">100₹ for 750ml.</div>
            <button class="navbuttons dryfruit_icecream" onClick=add_to_cart(event.target.parentElement)>Add to
                cart</button>
            <div class="reviews">⭐⭐⭐⭐4.0</div>
        </div>

    </div>

    <hr class="homehr">

    
    <div class="subheadings" id="footer"><button id="see_all_products" onclick="window.location.href = 'products.php'" class="navbuttons">
        See all
    </button>

    </div>


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="index.js"></script>
</body>         


</html>
<?php

 if (isset($_SESSION['email'])) {
    $email=$_SESSION["email"];
    echo'
    <script type="text/javascript">
set_login_true();
</script>';
  
 
   

}


?>
