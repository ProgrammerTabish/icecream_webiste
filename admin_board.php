<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'metadata.php';
    session_start(); ?>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Sofia&display=swap');



    #admin_info {

        border: 3px solid;
        text-align: center;
        margin-right: 20px;
        margin-left: 20px;
        margin-top: 30px;
        border-radius: 12px;
        padding: 15px;
        font-family: 'Sofia', cursive;
        background-color: black;
        color: #CDC7BE;
    }

    #options {
        border: 3px solid;
        text-align: center;
        margin-top: 50px;
        margin-left: 12px;
        margin-right: 12px;

        border-radius: 12px;
        padding: 15px;

        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        font-family: 'Sofia', cursive;
        background-color: black;
        color: #CDC7BE;
    }

    @media only screen and (max-width: 600px) {
        .dash_btn {
            height: 7rem;
            width: 7rem;
        }

    }

    @media only screen and (min-width: 600px) {
        .dash_btn {
            height: 6rem;
            width: 12rem;
        }
    }

    .dash_btn {
        align-items: center;
        justify-content: center;
        padding: 12px;
        border: 1px solid;
        text-align: center;
        display: flex;
        border-radius: 12px;
        color: white;
        margin: 12px;
        box-shadow: 0px 0px 12px 4px;

    }

    .dash_btn:hover {
        opacity: 0.5;
    }

    a:hover {
        text-decoration: none;
    }

    /* .btn_text {} */
</style>

<body id="page">
    <div class="home" id="homeid">
        <hr id="homehr">

        <h1 class="display-4 text-center text-dark">Wecome to Admin Dash Board
        </h1>

    </div>
    <div id="admin_info">
        <h2>
            <?php echo "<b>" . $_SESSION["name"] . "</b>";
            echo ' -';
            echo $_SESSION["position"]  . "</h2>";
            echo '<h3> <i>@ Zak N Merc industries</i></h3>'; ?>

    </div>
    <div id="options">
        <a href="">
            <div style="background-color:#4E9F3D ;" class="dash_btn">
                <h4 calss="btn_text">View Recent oreders</h4>
            </div>
        </a>

        <a href="">
            <div style="background-color:#781C68;" class="dash_btn">
                <h4 calss="btn_text">Check Orders</h4>
            </div>
        </a>
        <a href="">
            <div style="background-color:#CBA0AE;" class="dash_btn">
                <h4 calss="btn_text">Check Stocks</h4>
            </div>
        </a>
        <a href="admin/add_product.php">
            <div style="background-color:#9A86A4;" class="dash_btn">
                <h4 calss="btn_text">Add a new Product</h4>
            </div>
        </a>
        <a href="">
            <div style="background-color:#5F7161;" class="dash_btn">
                <h4 calss="btn_text">Remove a Product</h4>
            </div>
        </a>
        <a href="">
            <div style="background-color:#85586F;" class="dash_btn">
                <h4 calss="btn_text">Update Stocks</h4>
            </div>
        </a>
        <a href="">
            <div style="background-color:#E38B29;" class="dash_btn">
                <h4 calss="btn_text">Check Demands</h4>
            </div>
        </a>
        <a href="">
            <div style="background-color:#FFD8A9;" class="dash_btn">
                <h4 calss="btn_text">Check supply chain</h4>
            </div>
        </a>
        <a href="">
            <div style="background-color:#8E3200;" class="dash_btn">
                <h4 calss="btn_text">Check Deposits</h4>
            </div>
        </a>
        <a href="">
            <div style="background-color:#570A57;" class="dash_btn">
                <h4 calss="btn_text">Add employee</h4>
            </div>
        </a>
        <a href="">
            <div style="background-color:#7F8487;" class="dash_btn">
                <h4 calss="btn_text">Remove employee</h4>
            </div>
        </a>

        <a href="">
            <div style="background-color:green;" class="dash_btn">
                <h4 calss="btn_text">Add new admin</h4>
            </div>
        </a>

        <a href="">
            <div style="background-color:#541212;" class="dash_btn">
                <h4 calss="btn_text">Check Stats</h4>
            </div>
        </a>

        <a href="">
            <div style="background-color:#16003B;" class="dash_btn">
                <h4 calss="btn_text">Edit Profile</h4>
            </div>
        </a>
        <a href="admin/add_new_section.php">
            <div style="background-color:#712B75;" class="dash_btn">
                <h4 calss="btn_text">Add a new section</h4>
            </div>
        </a>
           <a href="admin/arrange_products.php">
            <div style="background-color:gold;" class="dash_btn">
                <h4 calss="btn_text">Arrage Products</h4>
            </div>
        </a>

                <a href="admin/arrange_section.php">
            <div style="background-color:orange;" class="dash_btn">
                <h4 calss="btn_text">Arrange the sections</h4>
            </div>
        </a>
    </div>

</body>


</html>