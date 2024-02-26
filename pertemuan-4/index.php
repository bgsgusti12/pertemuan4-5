<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Bagas</title>
</head>
<body>
    <header>
        <input type ="checkbox" name ="" id ="chk1">
        <div class="logo"><h1>web master</h1></div>
            <div class="search-box">
                <form>
                    <input type ="text" name ="search" id ="srch" placeholder="Search">
                    <button type ="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <ul>
                <li><a href="index.php?modul=home">Home</a></li>
                <li><a href="index.php?modul=product">Product</a></li>
                <li><a href="index.php?modul=blog">Blog</a></li>
                <li><a href="index.php?modul=contact">Contact</a></li>
                <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>

                </li>
            </ul>
            <div class="menu">
    </header>
    <div id="main-content">
        <div id="bingung">
    <?php
    if(!isset($_GET['modul'])){
     include "home.php";
    }else
    if(isset($_GET['modul'])){
        $pages = $_GET['modul'];
        if($pages == "home"){
            include "home.php";
        }
        if($pages == "contact"){
            include "contact.php";
        }
    }else{
        $pages = "home";
    }
    if(!isset($_GET['modul']) || $pages=="home"){
    ?>
    <div id="Content-home">
    <h1>
        Home
    </h1>
    <p>bermain dilpangan<br>
    bags pergi <br>
    anjay mabar<br>
   </p>
</div>

<?php
    }
    if($pages == "product"){
        ?>
<div id="Content-product">
    <h1>
        product
    </h1>
    <p>bermain dilpangan<br>
    bags pergi <br>
    anjay mabar<br>
   </p>
   <ul>
    <li><a href="index.php=product1">Home</a></li>
    <li><a href="index.php=product2">Product</a></li>
    <li><a href="index.php=product3">Blog</a></li>
   </ul>
</div>

<?php
    }
    if($pages == "blog"){
        ?>
     <div id="Content-blog">
    <h1>
        blog
    </h1>
    <p>bermain dilpangan<br>
    bags pergi <br>
    anjay mabar<br>
   </p>
</div>
 <?php
    }
    if($pages == "contact"){
        ?>
    <div id="Content-contact">
    <h1>
        contact
    </h1>
    <p>bermain dilpangan<br>
    bags pergi <br>
    anjay mabar<br>
   </p>
</div>
<?php    
}
?>
</div>
    </div>
</body>
</html>