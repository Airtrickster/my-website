<?php
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
    include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="./lib/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="icon" href="images/icon.png">
    <title>Shoebox | Contact</title>
</head>
<body>

    <?php include "header.php"; ?>
    
    <section class="contact" id="contact">

        <h1 class="heading cont"> <span>contact</span> us </h1>

        <div class="info">
            <div class="text">
                <h4><i class="fa-regular fa-lg fa-user i"></i> Calvin James S. Medoza - CEO</h4>
                <h4><i class="fa-regular fa-lg fa-hashtag i"></i> (+63) 9123456789</h4>
                <h4><i class="fa-regular fa-lg fa-envelope i"></i> clvinjmes.ceo@gmail.com</h4>
            </div>
        </div>
    
        <div class="row">
    
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1474.1792288057443!2d121.05975269517278!3d14.62555284401961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b796aecb8763%3A0xaa026ea7350f82e7!2sTechnological%20Institute%20of%20the%20Philippines%20-%20Quezon%20City!5e0!3m2!1sen!2sph!4v1676642618419!5m2!1sen!2sph" width="685" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
            <form action="" id="contactForm" method="post" enctype="multipart/form-data">
                <h3>get in touch</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="Name" name="nameContact">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="Email (Optional)" name="emailContact">
                </div>
                <div class="inputBox">
                    <span class="fas fa-mobile"></span>
                    <input type="text" placeholder="Contact number (Optional)" name="phoneNumberContact">
                </div>
                <div class="inputBox">
                    <span class="fas"></span>
                    <textarea style="max-width: 500px; min-width:500px; background:#000; color:white; font-size:15px;" type="message" placeholder="Message" name="messageContact"></textarea>
                </div>
                <input type="submit" value="contact now" class="btn" name="sendContact">
            </form>
    
        </div>
    
    </section>

    <?php
        if(isset($_POST["sendContact"])) {
            if (empty($_POST["nameContact"])) {
                $nameContact = "anonymous";
            } else {
                $nameContact = $_POST["nameContact"];
            }
            $contactstmt = mysqli_prepare($link, "INSERT INTO inbox (name, phone_number, email, message) VALUES (?, ?, ?, ?);");
            mysqli_stmt_bind_param($contactstmt, "ssss", $nameContact, $_POST["phoneNumberContact"], $_POST["emailContact"], $_POST["messageContact"]);
            mysqli_stmt_execute($contactstmt);
            echo "<script> window.location.href = \"" . $_SERVER["SCRIPT_NAME"] . "\" </script>";
        }

    ?>

    <?php include "footer.php"; ?>


    <script src="js/script.js"></script>

</body>
</html>