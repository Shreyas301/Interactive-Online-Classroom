<?php session_start();
if(empty($_SESSION['id'])):
    header('Location:login.php');
endif;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Netflix</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <header class = "showcase">
        <div class = "showcase-top">
            <img src = "79402704f670d5a8cd3c4720b74a7b16.png"/>
            <div class = "showcase-top">
                
                <a href = "logout process.php" class = "btn btn-rounded">Log Out</a>
            </div>
        </div>
        <div class = "showcase-content">
            <h1>Welcome Rajani Mam!</h1>
            <p>Monitor your classroom and checkout whats going in other classes.</p>
            <a href = "main2.html" class = "btn btn-xl">
                Go to your class!
                <i class="fas fa-chevron-right btn-icon"></i>
            </a>
        </div>
    </header>
    <section class = "tabs">
        <div class = "container">
            <div id = "tab-1" class = "tab-item tab-border">
                <i class="fas fa-door-open fa-3x"></i>
                <p class = "hide-sm">CHECK ASSIGNMENTS</p>
            </div>
            <div id = "tab-2" class = "tab-item">
                <i class="fas fa-tablet-alt fa-3x"></i>
                <p class = "hide-sm">WATCH RECORDED LECTURES</p>
            </div>
            <div id = "tab-3" class = "tab-item">
                <i class="fas fa-tags fa-3x"></i>
                <p class = "hide-sm">SCHEDULE YOUR WORK</p>
            </div>
        </div>
    </section>
  
    <footer class = "footer">
        <p>Questions? Call 1-866-579-7172</p>
        <div class="footer-cols">
                <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Ways To Watch</a></li>
                        <li><a href="#">Corporate Information</a></li>
                        <li><a href="#">Netflix Originals</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Account</a></li>
                        <li><a href="#">Redeem Gift Cards</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Speed Test</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Media Center</a></li>
                        <li><a href="#">Buy Gift Cards</a></li>
                        <li><a href="#">Cookie Preferences</a></li>
                        <li><a href="#">Legal Notices</a></li>
                    </ul>
        </div>
    </footer>
    <script src = "script.js"></script>
</body>
</html>