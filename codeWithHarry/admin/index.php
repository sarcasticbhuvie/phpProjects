<?php
session_start();
if(!isset($_SESSION['userid'])){
    header('location:../login.php?msg=You dont have permission');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Animated Website</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="nav">
        <img src="https://eiwgew27fhz.exactdn.com/wp-content/uploads/2023/02/logo-white.svg" alt="logo unvailable">
        <h4>TopTracer Range</h4>
        <h4>golf lessons</h4>
        <h4>advanture golf</h4>
        <h4>coffee shop</h4>
        <h4>leagues</h4>
    </div>
    <div id="cursor"></div>
    <div id="cursor-blur"></div>
    <video src="hero.mp4" autoplay muted loop></video>
    <div class="main">
        <div class="page1">
            <h1>EAT. DRINK. PLAY.</h1>
            <h3>WELCOME TO SIDCUP FAMILY GOLF!</h3>
            <p>Sidcup Family Golf is a multipurpose golf facility located in Sidcup, South East London. Passionate about
                technology, player development and making golf fun and accessible to everyone.</p>
        </div>
        <div id="page2">
            <div id="scroller">
                <marquee behavior="Scroll" direction="left">
                    <h4 class="mrq-text">TopTracer Range</h4>
                    <h4 class="mrq-text">golf lessons</h4>
                    <h4 class="mrq-text">advanture golf</h4>
                    <h4 class="mrq-text">coffee shop</h4>
                    <h4 class="mrq-text">leagues</h4>
                    <h4 class="mrq-text">TopTracer Range</h4>
                    <h4 class="mrq-text">golf lessons</h4>
                    <h4 class="mrq-text">advanture golf</h4>
                    <h4 class="mrq-text">coffee shop</h4>
                    <h4 class="mrq-text">leagues</h4>
            </marquee>
            </div>
            <div id="about-us">
                <img src="https://eiwgew27fhz.exactdn.com/wp-content/uploads/2023/02/home-about-1-300x200.jpg?strip=all&lossy=1&sharp=1&ssl=1" alt="" class="card">
                <div id="about-us-in">
                        <h2> <?php echo $_SESSION['userid'];  ?> </h2>
                        <h2>user password</>

                </div>
                <img src="https://eiwgew27fhz.exactdn.com/wp-content/uploads/2023/02/home-about-2-300x200.jpg?strip=all&lossy=1&sharp=1&ssl=1"  alt="" class="card">
            </div>
        </div>
        </div>
        

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"
        integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"
        integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
</body>

</html>