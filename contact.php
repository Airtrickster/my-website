<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./lib/fontawesome-free-6.2.1-web/css/all.min.css">
    <title>On your feet | Contact</title>
</head>
<body>

    <header class="header">

        <a href="index.html" class="logo">
            <img src="images/mini-logo.png" alt="Logo">
        </a>
    
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="about.php">about</a>
            <a href="product.php">product</a>
            <a href="contact.php">contact</a>
        </nav>
    
        <div class="icons">
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fa-solid fa-user" id="user-btn" onclick='<?php if (isset($_SESSION["user_id"])) { echo 'window.location.href="logout.php"'; } else { echo 'window.location.href="tos.html"'; } ?>'>
                <?php
                    if (isset($_SESSION["user_id"])) {
                    echo $_SESSION["username"];
                    } else {
                        echo "login";
                    }
                ?>
            </div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>
    
        <div class="cart-items-container">
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-1.png" alt="">
                <div class="content">
                    <h3>cart item 01</h3>
                    <div class="price">Php 150/-</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-2.png" alt="">
                <div class="content">
                    <h3>cart item 02</h3>
                    <div class="price">Php 150/-</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-3.png" alt="">
                <div class="content">
                    <h3>cart item 03</h3>
                    <div class="price">Php 180/-</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-4.png" alt="">
                <div class="content">
                    <h3>cart item 04</h3>
                    <div class="price">Php 180/-</div>
                </div>
            </div>
            <a href="#" class="btn">checkout now</a>
        </div>
    
    </header>
    
    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="info">
            <img src="./images/pic-2.jpg" alt="logo">
            <div class="text">
                <h4>Name: Calvin James S. Medoza</h4>
                <h4>Email: CalvinJ@gmail.com</h4>
                <h4>Number: 09123456789</h4>
            </div>
        </div>
    
        <div class="row">
    
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15431.196470921965!2d121.02174176977539!3d14.780342099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ae32623635c7%3A0xfb416c7fe568e681!2sGalilean%20Fundamental%20Christian%20Baptist%20Church!5e0!3m2!1sen!2sph!4v1664634443368!5m2!1sen!2sph" width="685" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
            <form action="">
                <h3>get in touch</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="Name">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="Email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-mobile"></span>
                    <input type="text" placeholder="Contact number">
                </div>
                <div class="inputBox">
                    <span class="fas"></span>
                    <input type="text" placeholder="Message">
                </div>
                <input type="submit" value="contact now" class="btn">
            </form>
    
        </div>
    
    </section>

    <footer class="footer">

        <div class="credit">
            <div class="wrap">
                <p>Be the first to know about our special offers, upcoming sales, special events, new arrivals, and more.</p>
            </div>
    
            <div class="help">
                <a href="FAQ.html">faq's</a>
                <a href="privacy_policy.html">privacy policy</a>
                <a href="shipping_policy.html">shipping policy</a>
                <a href="refund_policy.html">refund policy</a>
            </div>
    
            <div class="share">
                <a href="https://www.facebook.com/VandKApparel" class="fab fa-xl fa-square-facebook"></a>
                <a href="https://www.twitter.com/" class="fab fa-xl fa-square-twitter"></a>
                <a href="https://www.instagram.com/" class="fab fa-xl fa-square-instagram"></a>
            </div>
        </div>
    
    </footer>
    
    <footer class="sub-footer">
        <p> Copyright &copy; 2023. On your feet, inc. all rights reserved.</p>
    </footer>


    <script src="js/script.js"></script>

</body>
</html>