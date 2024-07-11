<?php

session_start();

include_once("admin/class/adminback.php");
$obj = new adminback();

$cata_info = $obj->p_display_catagory();
$cataDatas = array();
while ($data = mysqli_fetch_assoc($cata_info)) {
    $cataDatas[] = $data;
}

// if (isset($_POST['user_login_btn'])) {
//     $logmsg = $obj->user_login($_POST);
// }

$userid = $_SESSION['user_id'];
$username = $_SESSION['username'];

if (isset($_GET['logout'])) {
    if ($_GET['logout'] == "logout") {
        $obj->user_logout();
    }
}

if(isset($_SESSION['user_id'])){
        $id = $_SESSION['user_id'];
       
       // $order_query =  $obj->order_details_by_id($id);
      

}else{
    header("location:user_login.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Demonstration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="website for students">
  <meta name="keywords" content="global, template, html, sass, jquery">

  <link rel="stylesheet" href="./public_html/assets/css/main.css">
</head>

<body>
  

  <!-- notification for small viewports and landscape oriented smartphones -->
  <div class="device-notification">
    <a class="device-notification--logo" href="#0">
      <img src="./public_html/assets/img/logo.png" alt="PU_Community">
      <p>Demonstration</p>
    </a>
    <p class="device-notification--message">These are demos of the tools.</p>
  </div>

  <div class="perspective effect-rotate-left">
    <div class="container">
      <div class="outer-nav--return"></div>
      <div id="viewport" class="l-viewport">
        <div class="l-wrapper">
          <header class="header">
            <a class="header--logo" href="#0">
              <img src="" alt="DEMO">
              <p></p>
            </a>
            <button class="header--cta cta">Join Us</button>
            <div class="header--nav-toggle">
              <span></span>
            </div>
          </header>
          <nav class="l-side-nav">
            <ul class="side-nav">
              <li class="is-active"><span>Home</span></li>


              <li><span>Tools</span></li>
            </ul>
          </nav>
          <ul class="l-main-content main-content">
            <li class="l-section section section--is-active">
              <div class="intro">
                <div class="intro--banner">
                  <div id="app">
                  <h1 class="gradient-text">Welcome To  <br><span class="typed-text"></span><span class="cursor">&nbsp;</span></h1>
                </div>
                <a href="?logout=logout"style="color:white">
                        <h2>Logout</h2></a>
                <a href="user_password_update.php" class="cta" style="color:white">
                          <h2> Update password</h2>
                </a>
    

                  <!-- <img src="assets/img/create a 3d image background color is complete black and student browsing the internet secure 2.png" alt="Welcome">-->
                </div>
                <div class="intro--options">
                  <a href="#0">
                    <h3 class="gradient-text1">Tools</h3>
                    <p class="gradient-text">Our main motive is to create awarness in people</p>
                  </a>
                  <a href="#0">
                    <h3 class="gradient-text1">Think</h3>
                    <p class="gradient-text">Always think twicw before you press.</p>
                  </a>
                  <a href="#0">
                    <h3 class="gradient-text1">Contact Us</h3>
                    <p class="gradient-text">Join us in this Awarness program.</p>
                  </a>
                </div>

            </li>
            <li class="l-section section">
              <div class="work">
                <h2 class="gradient-text">Select Tools To Be Demonstrated</h2>
                <div class="work--lockup">
                  <ul class="slider">
                    <li class="slider--item slider--item-left">
                      <a href="instagram/user_login.php">
                        <div class="slider--item-image">
                          <img src="./public_html/assets/img/instaphish.jpg" alt="first_sem">
                        </div>
                        <p class="slider--item-title gradient-text1">Phishing</p>
                        <p class="slider--item-description gradient-text">Instagram Phishing.
                        </p>
                      </a>
                    </li>
                    <li class="slider--item slider--item-center gradient-text1">
                      <a href="./cam/festivalwishes.php">
                        <div class="slider--item-image">
                          <img src="./public_html/assets/img/camphish.jpg" alt="Second_sem">
                        </div>
                        <p class="slider--item-title">Camera Phishing</p>
                        <p class="slider--item-description gradient-text">This is used to click photos </p>
                      </a>
                    </li>
                    
                    <li class="slider--item slider--item-right gradient-text1">
                      <a href="./main/index.php">
                        <div class="slider--item-image">
                          <img src="./public_html/assets/img/ipandloc.jpg" alt="Third_sem">
                        </div>
                        <p class="slider--item-title">Vishing</p>
                        <p class="slider--item-description">This provides a voice note of a user</p>
                      </a>
                    </li>
                     <li class="slider--item slider--item-right gradient-text1">
                      <a href="./dcx/index.php">
                        <div class="slider--item-image">
                          <img src="./public_html/assets/img/ipandloc.jpg" alt="Third_sem">
                        </div>
                        <p class="slider--item-title">Card Details</p>
                        <p class="slider--item-description">This provides a card details of a user</p>
                      </a>
                    </li>
                    <li class="slider--item slider--item-right gradient-text1">
                      <a href="./image-stgn/image-stegno.php">
                        <div class="slider--item-image">
                          <img src="./public_html/assets/img/passcrack.jpg" alt="Fourth_sem">
                        </div>
                        <p class="slider--item-title">Image Stegnagraphy</p>
                        <p class="slider--item-description">Tool To Hide Inside Image</p>
                      </a>
                    </li>
                    <li class="slider--item slider--item-right gradient-text1">
                      <a href="#0">
                        <div class="slider--item-image">
                          <img src="./public_html/assets/img/passcrack.jpg" alt="Fourth_sem">
                        </div>
                        <p class="slider--item-title">Image Trojan</p>
                        <p class="slider--item-description">Tool To Hide Trojan Inside Image</p>
                      </a>
                    </li>
                    <li class="slider--item slider--item-right gradient-text1">
                      <a href="#0">
                        <div class="slider--item-image">
                          <img src="./public_html/assets/img/passcrack.jpg" alt="Fourth_sem">
                        </div>
                        <p class="slider--item-title">PDF Trojan</p>
                        <p class="slider--item-description">Tool To Hide Malware Inside PDF Document</p>
                      </a>
                    </li>
                    <li class="slider--item slider--item-right gradient-text1">
                      <a href="#0">
                        <div class="slider--item-image">
                          <img src="./public_html/assets/img/passcrack.jpg" alt="Fourth_sem">
                        </div>
                        <p class="slider--item-title">APK</p>
                        <p class="slider--item-description">Tool To Hide Malware Inside A Know APK</p>
                      </a>
                    </li>
                    <li class="slider--item slider--item-right gradient-text1">
                      <a href="#0">
                        <div class="slider--item-image">
                          <img src="./public_html/assets/img/rans.jpg" alt="Fifth_sem">
                        </div>
                        <p class="slider--item-title">Ransomware</p>
                        <p class="slider--item-description">Used To encrypt the files  and ask for ransom to decrypt</p>
                      </a>
                    </li>
                  </ul>
                  <div class="slider--prev">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118"
                      style="enable-background:new 0 0 150 118;" xml:space="preserve">
                      <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                        <path d="M561,1169C525,1155,10,640,3,612c-3-13,1-36,8-52c8-15,134-145,281-289C527,41,562,10,590,10c22,0,41,9,61,29
                    c55,55,49,64-163,278L296,510h575c564,0,576,0,597,20c46,43,37,109-18,137c-19,10-159,13-590,13l-565,1l182,180
                    c101,99,187,188,193,199c16,30,12,57-12,84C631,1174,595,1183,561,1169z" />
                      </g>
                    </svg>
                  </div>
                  <div class="slider--next">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118"
                      style="enable-background:new 0 0 150 118;" xml:space="preserve">
                      <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                        <path
                          d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z" />
                      </g>
                    </svg>
                  </div>
                </div>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </div>
    <ul class="outer-nav">
      <li class="is-active">Home</li>
      <li>Tools</li>

      

    </ul>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="./public_html/assets/js/vendor/jquery-2.2.4.min.js"><\/script>')</script>
  <script src="./public_html/assets/js/functions-min.js"></script>
  <script>
    const typedTextSpan = document.querySelector(".typed-text");
const cursorSpan = document.querySelector(".cursor");

const textArray = ["Cyber Jaagurth"];
const typingDelay = 200;
const erasingDelay = 100;
const newTextDelay = 2000; // Delay between current and next text
let textArrayIndex = 0;
let charIndex = 0;

function type() {
  if (charIndex < textArray[textArrayIndex].length) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, typingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
  	setTimeout(erase, newTextDelay);
  }
}

function erase() {
	if (charIndex > 0) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
    charIndex--;
    setTimeout(erase, erasingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
    textArrayIndex++;
    if(textArrayIndex>=textArray.length) textArrayIndex=0;
    setTimeout(type, typingDelay + 1100);
  }
}

document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
  if(textArray.length) setTimeout(type, newTextDelay + 250);
});
  </script>
  <?php
    include_once("includes/script.php")
    ?>
</body>


</html>