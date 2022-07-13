<!DOCTYPE html>
<html lang="en">

<head>
   <?php include 'metadata.php';
    session_start();?>
</head>

<body  id="page">


    <?php
    include'navbar.php'?>

    
     
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="index.js"></script>
    <div class="home" id="homeid">

        

        <h1 class="display-1 text-center text-dark">Cart
        </h1>











<div class="allalignment">
            <div id="butterscotch" class="content  reveal">
                <h3>Butterscotch IceCream</h3>

                <div calss="discription">
                    <p>
                        IceCream made up of perfect combination of butter caramel and milk
                    </p>
                </div>
                
                <div class="rates">100₹ for 750ml.</div>
                
<button class="navbuttons butterscotch_icecream" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
  <div class="reviews">⭐⭐⭐⭐4.0</div>
            </div>

            <div id="vanilla" class="content  reveal">
                <h3>Vanilla Icecream</h3>

                <div calss="discription">
                    <p>Made with milk and vanilla flavour.</p>
                </div>
                
                <div class="rates">100₹ for 750ml.</div>
<button class="navbuttons vanilla_icecream" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
  <div class="reviews">⭐⭐⭐⭐4.0</div>
            </div>
            <div id="mango" class="content  reveal">
                <h3>Mango IceCream</h3>

                <div calss="discription">
                    <p>
                        Mango IceCream is made with mango extracts and milk.
                    </p>
                </div>
                
                <div class="rates">100₹ for 750ml.</div>
<button class="navbuttons mango_icecream" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
  <div class="reviews">⭐⭐⭐⭐4.0</div>
            </div>
            <div id="chocolate" class="content  reveal">
                <h3>Chocolate IceCream</h3>

                <div calss="discription">
                    <p>Made with chocolate and milk</p>
                </div>
                
                <div class="rates">100₹ for 750ml.</div>
<button class="navbuttons chocolate_icecream" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
  <div class="reviews">⭐⭐⭐⭐4.0</div>
            </div>
            <div id="americandryfruit" class="content  reveal">
                <h3>American Dryfruit Icecream</h3>

                <div calss="discription">
                    <p>
                        Made with condensed milk chocolate and dryfruits.
                    </p>
                </div>
                
                <div class="rates">100₹ for 750ml.</div>
<button class="navbuttons american_dryfruit_icecream" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
  <div class="reviews">⭐⭐⭐⭐4.0</div>
            </div>
            <div id="rajbhog" class="content  reveal">
                <h3>Rajbhog IceCream</h3>

                <div calss="discription">
                    <p>
                        Rajbhog IceCream is a safron flavoured icecream coated with nuts and chocolate.
                    </p>
                </div>
                
                <div class="rates">100₹ for 750ml.</div>
<button class="navbuttons rajbhog_icecream" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
  <div class="reviews">⭐⭐⭐⭐4.0</div>
            </div>
            <div id="blackcurrent" class="content  reveal">
                <h3>Dark Current IceCream</h3>

                <div calss="discription">
                    <p>
                        DarkCurrent IceCream is made up of Dark chocolate and milk.
                    </p>
                </div>
              
                <div class="rates">100₹ for 750ml.</div>
  <button class="navbuttons black_current" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
  <div class="reviews">⭐⭐⭐⭐4.0</div>
            </div>
            <div id="honeyfig" class="content  reveal">
                <h3>Honeyfig IceCream</h3>

                <div calss="discription">
                    <p>
                        IceCream made up of natural blend of milk an real dried fig.
                    </p>
                </div>
                
                <div class="rates">100₹ for 750ml.</div>
<button class="navbuttons honey_fig" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
  <div class="reviews">⭐⭐⭐⭐4.0</div>
            </div>
            <div id="guava" class="content  reveal">
                <h3>Guava IceCream</h3>

                <div calss="discription">
                    <p>
                        Made with Guava extracts and milk solids.
                    </p>
                </div>
                
                <div class="rates">100₹ for 750ml.</div>
<button class="navbuttons guava_icecream" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
  <div class="reviews">⭐⭐⭐⭐4.0</div>
            </div>
            <div id="rasberry" class="content  reveal">
                <h3>Rasberry IceCream</h3>

                <div calss="discription">
                    <p>
                        Made with Rasberry extracts and milk.
                    </p>
                </div>
               
                <div class="rates">100₹ for 750ml.</div>
 <button class="navbuttons rasberry_icecream" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
  <div class="reviews">⭐⭐⭐⭐4.0</div>
            </div>
            <div id="blueberry" class="content  reveal">
                <h3>Blueberry IceCream</h3>

                <div calss="discription">
                    <p>
                        Made with blueberry extracts and milk.
                    </p>
                </div>
                
                <div class="rates">100₹ for 750ml.</div>
<button class="navbuttons blueberry_icecream" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
  <div class="reviews">⭐⭐⭐⭐4.0</div>
            </div>
            <div id="strawberry" class="content  reveal">
                <h3>Strawberry IceCream</h3>

                <div calss="discription">
                    <p>
                        Made with strawberry extracts and milk.
                    </p>
                </div>
               
                <div class="rates">100₹ for 750ml.</div>
 <button class="navbuttons" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
  <div class="reviews">⭐⭐⭐⭐4.0</div>
            </div>












            <div id="matkakulfi" class="content  reveal">
                <h3>Matka Kulfi</h3>
         
                <div calss="discription">
                    <p>
                        Made up of pure and natural milk solids and milk.
                    </p>
                </div>
               
                <div class="rates">100₹ for 750ml.</div>
 <button class="navbuttons matka_kulfi" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
  <div class="reviews">⭐⭐⭐⭐4.0</div>
            </div>


        </div>
 




  <div id="kulfi">
                <h2 class="subheadings">
                    Kulfi:
                </h2>
            </div>

        <div class="allalignment">
          

            <div id="pistaslice" class="content  reveal">
                <h3>Pista Slice Kulfi</h3>

                <div calss="discription">
                    <p>
                        Made up of pure and natural milk solids, pista and milk.
                    </p>
                </div>
               
                <div class="rates">100₹ for 750ml.</div>
 <button class="navbuttons pista_slice_kulfi" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
  <div class="reviews">⭐⭐⭐⭐4.0</div>
            </div>
            <div id="badampistaslice" class="content  reveal">
                <h3>Badam Pista Slice kulfi</h3>

                <div calss="discription">
                    <p>
                        Made up of pure and natural milk solids, pista, almond and milk.
                    </p>
                </div>
                
                <div class="rates">100₹ for 750ml.</div>
<button class="navbuttons badam_pista_slice_kulfi" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
  <div class="reviews">⭐⭐⭐⭐4.0</div>
            </div>
            <div id="mangoslice" class="content  reveal">
                <h3>Mango Slice kulfi</h3>

                <div calss="discription">
                    <p>
                        Mango slice kulfi is made with mango extracts and condensed milk solids.
                    </p>
                </div>
              
                <div class="rates">100₹ for 750ml.</div>
  <button class="navbuttons mango_slice_kulfi" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
  <div class="reviews">⭐⭐⭐⭐4.0</div>
            </div>
            <div id="anjeerslice" class="content  reveal">
                <h3>Anjeer Slice Kulfi</h3>

                <div calss="discription">
                    <p>
                        Anjeer shake is a thick blend of fig and milk
                        along with dryfruits and ice.
                    </p>
                </div>
             
                <div class="rates">100₹ for 750ml.</div>
   <button class="navbuttons anjeer_slice_kulfi" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
  <div class="reviews">⭐⭐⭐⭐4.0</div>
            </div>
            <div id="rajbogslice" class="content  reveal">
                <h3>Rajbhog Slice Kulfi</h3>

                <div calss="discription">
                    <p>
                        Rajbhog kulfi is a safron flavoured kulfi coated with nuts and chocolate.
                    </p>
                </div>
                
                <div class="rates">100₹ for 750ml.</div>
<button class="navbuttons rajbhog_slice_kulfi" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
  <div class="reviews">⭐⭐⭐⭐4.0</div>
            </div>






      </div>
<div id="shakes">
                <h2 class="subheadings">
                    Shakes
                </h2>
            </div>
      <div class="allalignment">
            
            <div id="badamshakes" class="content  reveal">
                <h3>Badam Shake</h3>

                <div calss="discription">
                    <p>Badam(almond) Shake is made up of real almond and milk milk.

                    </p>
                </div>
                
                <div class="rates">100₹ for 750ml.</div>
<button class="navbuttons badam_shake" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
  <div class="reviews">⭐⭐⭐⭐4.0</div>
            </div>
            <div id="kajushakes" class="content  reveal">
                <h3>Kaju Shake</h3>

                <div calss="discription">
                    <p>
                        kaju Shake is made up of real cashew and milk milk.
                    </p>
                </div>
               
                <div class="rates">100₹ for 750ml.</div>
 <button class="navbuttons kaju_shake" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
  <div class="reviews">⭐⭐⭐⭐4.0</div>
            </div>
            <div id="anjeershakes" class="content  reveal">
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
            <div id="rabdis" class="content  reveal">
                <h3>Rabdi</h3>

                <div calss="discription">
                    <p>
                        Rabdi is made evapurated milk solids(mawa) and pure milk.
                    </p>
                </div>
                
                <div class="rates">100₹ for 750ml.</div>
<button class="navbuttons rabdi_malai" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
  <div class="reviews">⭐⭐⭐⭐4.0</div>
            </div>
            <div id="lassis" class="content  reveal">
                <h3>Lassi</h3>

                <div calss="discription">
                    <p>
                        Made with sugar and curd.
                    </p>
                </div>
             
                <div class="rates">100₹ for 750ml.</div>
   <button class="navbuttons lassi_" onClick=add_to_cart(event.target.parentElement)>Add to cart</button>
  <div class="reviews">⭐⭐⭐⭐4.0</div>
            </div>




        </div>


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





 






</body>