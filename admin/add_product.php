<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Sofia&display=swap');

    #heading {

        margin-top: 20px;
        text-align: center;

        font-family: 'Sofia', cursive;

    }

    #form_div {
        margin-top: 10px;
        font-family: 'Sofia', cursive;
        text-align: center;
        font-size: 20px;


    }

    input[type="text"] {
        font-family: 'Sofia', cursive;
        text-align: center;
        height: 50px;
        width: 50%;
        font-size: 20px;
        border: 3px solid;
        border-radius: 12px;
        margin-top: 17px;

    }



    #discription {
        font-family: 'Sofia', cursive;
        margin-top: 17px;
        font-size: 20px;
        padding: 2px;
        border: 2px solid;
        border-radius: 12px;
        width: 50%;
    }

    input[type="number"] {
        font-family: 'Sofia', cursive;
        text-align: center;
        height: 50px;
        width: 17%;
        font-size: 20px;
        border: 3px solid;
        border-radius: 12px;
        margin-top: 17px;
    }



    #unit {
        font-family: 'Sofia', cursive;
        text-align: center;
        height: 50px;
        width: 18%;
        border: 3px solid;
        font-size: 20px;

        border-radius: 12px;
        margin-top: 17px;
    }

    #file_upload {
        font-family: 'Sofia', cursive;
        text-align: center;
        margin: 30px;
        margin-left: 20%;
        margin-right: 20%;
        font-size: 20px;
        border: 2px solid;
        border-radius: 12px;
        color: white;
        background-color: black;
        padding-top: 17px;

    }

    input[type="file"] {
        font-family: 'Sofia', cursive;
        text-align: center;


    }

    #img_upload {
        width: 0px;
    }

    #submit {
        font-family: 'Sofia', cursive;
        text-align: center;

        font-size: 20px;
        border: 2px solid;
        border-radius: 12px;
        color: white;
        background-color: black;

    }

    #reset {
        font-family: 'Sofia', cursive;
        text-align: center;

        font-size: 20px;
        border: 2px solid;
        border-radius: 12px;
        color: white;
        background-color: black;
    }

    .new_div {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;

        background-repeat: no-repeat;
        background-size: 100% 100%;


    }

    #sample {
        font-family: 'Sofia', cursive;
        font-size: 22px;
    }

    #check_button {
        margin: 32px;

    }

    #refresh {
        font-family: 'Sofia', cursive;
        text-align: center;

        font-size: 25px;
        border: 2px solid;
        border-radius: 12px;
        color: white;
        background-color: green;
        padding: 8px;
        margin-top: 40px;
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

    #section {
        font-family: 'Sofia', cursive;
        text-align: center;
        height: 50px;
        width: auto;
        border: 3px solid;
        font-size: 20px;

        border-radius: 12px;
        margin-top: 17px;
    }
</style>
<script>
    function update_upload() {
        var files = document.getElementById('img_upload');
        console.log(document.getElementById("img_upload").value);
        if (document.getElementById("img_upload").value !== "") {
            document.getElementById("file_upload").style.fontSize = "12px";
            document.getElementById("file_upload").style.background = "green";
            document.getElementById("file_upload").childNodes[1].innerText = document.getElementById("img_upload").value;
        }
    }

    function update_sample() {
        document.getElementById("sample").childNodes[1].innerText = document.querySelectorAll("#product_name")[0].value;
        document.getElementById("sample").childNodes[3].innerText = document.querySelectorAll("#discription")[0].value;
        document.getElementById("sample").childNodes[5].innerText = document.querySelectorAll("#price")[0].value + "₹ for" + document.querySelectorAll("#qnt")[0].value + document.querySelectorAll("#unit")[0].value;
        let stars = "";
        let rating = 0;
        for (i = 1; i <= document.querySelectorAll("#rating")[0].value; i++) {
            stars += "⭐";
            rating += 1;
            if (i == 5) {
                rating = 5;
                break;
            }
        }

        document.getElementById("sample").childNodes[9].innerText = stars + " " + rating;
        document.getElementById("sample").style.color = document.querySelectorAll("#favcolor")[0].value;
    }
</script>

<body id="page">
    <div id="heading">

        <button id="back" onclick="window.location.href='../admin_board.php'">
            <-Go to Dash board</button>
                <h1>Fill the product delails and submit</h1>


    </div>
    <div id="form_div">

        <form action="add_product.php">



            <label for="product_name">Product name</label><br>

            <input type="text" id="product_name" name="product_name"><br><br>
            <label for="product_id">Product id</label><br>

            <input type="text" id="product_id" name="product_id"><br><br>
            <label for="discription">Discription of product:</label><br>
            <textarea id="discription" name="discription" rows="10"></textarea><br>
            <br>
            <label for="favcolor">Theme</label>
            <input type="color" id="favcolor" name="favcolor" value="#ff0000"><br><br>
            <label for="price">price in rupees</label><br>

            <input type="number" id="price" name="price"><br><br>

            <label for="qnt">For</label><br>

            <input type="number" id="qnt" name="qnt">

            <select id="unit" name="unit">
                <option value="ml">ml</option>
                <option value="litre">litre</option>
                <option value="gm">gram</option>
                <option value="kg">kg</option>
            </select>
            <br>
            <div id="file_upload">
                <label for="img_upload">Upload an image</label><br>
                <input type="file" name="upload and image" id="img_upload" onchange="update_upload()">
            </div>

            <label for="rating">How many star rating out of 5?</label><br>


            <input type="number" id="rating" name="rating"><br><br>
            <label for="section">Under which section you want this product to be?</label>
            <br>
            <select id="section" name="section">

                <?php




                ?>

                <option value=""></option>
            </select>
            <br>

            <input type="submit" id="submit" name="submit"><input type="reset" id="reset" name="reset">


        </form>
        <div id="check _button">
            <button id="refresh" onclick="update_sample()">Refresh</button>
        </div>

        <div class="new_div">




            <div id="sample" class="content  reveal">
                <h3></h3>

                <div calss="discription">
                    <p>
                    </p>
                </div>
                <div class="rates"></div>
                <button class="navbuttons rose_icecream">Add to
                    cart</button>
                <div class="reviews"></div>

            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="../index.js"></script>
</body>

</html>