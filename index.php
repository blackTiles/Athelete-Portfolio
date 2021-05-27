<?php
include_once 'dbConfig.php';
$result = mysqli_query($db,"SELECT * FROM marathons");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Ramanjit Singh Oberoi">
    <meta name="keywords" content="Ramanjit Singh Oberoi, About Ramanjit Singh Oberoi, Achievements of Ramanjit Singh Oberoi, Official website of Ramanjit Singh Oberoi">
    <meta name="description" content="Ramanjit Singh Oberoi's Official website">
    <meta name="author" content="Black Tiles">
    <title>Ramanjit Singh Oberoi</title>
    <link rel="icon" href="./images/demo_icon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .loader-wrapper {
        width: 100%;
        height: 100%;
        position: fixed;
        z-index: 1000;
        top: 0;
        left: 0;
        background-color: #242f3f;
        display:flex;
        justify-content: center;
        align-items: center;
        }
        .loader {
        display: inline-block;
        width: 30px;
        height: 30px;
        position: relative;
        border: 4px solid #Fff;
        animation: loader 2s infinite ease;
        }
        .loader-inner {
        vertical-align: top;
        display: inline-block;
        width: 100%;
        background-color: #fff;
        animation: loader-inner 2s infinite ease-in;
        }
        @keyframes loader {
        0% { transform: rotate(0deg);}
        25% { transform: rotate(180deg);}
        50% { transform: rotate(180deg);}
        75% { transform: rotate(360deg);}
        100% { transform: rotate(360deg);}
        }
        @keyframes loader-inner {
        0% { height: 0%;}
        25% { height: 0%;}
        50% { height: 100%;}
        75% { height: 100%;}
        100% { height: 0%;}
        }
        .about_content ul{
            flex-direction: column;
            display: flex;
            box-shadow: 1px 1px 30px 2px black;
        }
        .about_content ul li{
            font-size: 12px;
            border: 1px solid rgba(5, 5, 5, 0.897);
            padding: 10px;
            text-align: center;
            background: rgba(109, 116, 21, 0.753);
            color: rgb(7, 6, 0);
            list-style: none;
        }
        .about_content ul .numpy{
            font-size: 17px;
            
            color: white;
            color: #A7DD3C;
            text-shadow: 2px 0 0px #800040, 3px 2px 0px rgba(77,0,38,0.5), 3px 0 3px #FF002B, 5px 0 3px #800015, 6px 2px 3px rgba(77,0,13,0.5), 6px 0 9px #FF5500, 8px 0 9px #802A00, 9px 2px 9px rgba(77,25,0,0.5), 9px 0 18px #FFD500, 11px 0 18px #806A00, 12px 2px 18px rgba(77,66,0,0.5), 12px 0 30px #D4FF00, 14px 0 30px #6A8000, 15px 2px 30px rgba(64,77,0,0.5), 15px 0 45px #80FF00, 17px 0 45px #408000, 17px 2px 45px rgba(38,77,0,0.5);
        }
        @media(max-width:1291px){
            .about_content ul{
                flex-direction: row;
            }
        }
    </style>
</head>
<body>
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
      </div>
    <div class="container">
        <div class="home" id="a_home">
            <div class="nav1" id="nav_one">
                <span class="raman" id="singh">Ramanjit Singh Oberoi</span>
                <ul>
                    <li><a href="#a_home">Home</a></li>
                    <li><a href="#a_bout">About</a></li>
                    <li><a href="#a_gallery">Gallery</a></li>
                    <li><a href="#a_contact">Contact</a></li>
                </ul>
            </div>   
            <div class="navbar" id="navmobile">
                <div id="menu-bar">
                    <div id="menu" onclick="onClickMenu()">
                        <div id="bar1" class="bar"></div>
                        <div id="bar2" class="bar"></div>
                        <div id="bar3" class="bar"></div>
                    </div>
                    <ul class="nav" id="nav">
                        <li onclick="onClickMenu()"><a href="#a_home">Home</a></li>
                        <li onclick="onClickMenu()"><a href="#a_bout">About</a></li>
                        <li onclick="onClickMenu()"><a href="#a_gallery">Gallery</a></li>
                        <li onclick="onClickMenu()"><a href="#a_contact">Contact</a></li>
                    </ul>
                </div>
                <div class="menu-bg" id="menu-bg"></div>
            </div>
            <div class="mobileh1" id="mobil_h">Ramanjit Singh Oberoi</div>
            <div class="content">
                <div class="main_cont">
                    <p style="background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);   text-shadow: 0 1px 0 #9e9999, 0 2px 0 #070606, 0 3px 0 rgb(14, 13, 13), 0 4px 0 #0c0c0c, 0 5px 0 rgb(17, 16, 16), 0 6px 1px rgba(0,0,0,.1), 0 0 5px rgba(0,0,0,.1), 0 1px 3px rgba(0,0,0,.3), 0 3px 5px rgba(0,0,0,.2), 0 5px 10px rgba(0,0,0,.25), 0 10px 10px rgba(0,0,0,.2), 0 20px 20px rgba(0,0,0,.15);">
                        Ramanjit Singh Oberoi</p>
                    <br /><br />
                    <div class="divq"> <q>I discovered running rather late in life when most people are slowing down. But I saw how it made me feel and I could not give it up. I feel free and doubly alive when I am on the road, in the hills, and I start singing. It’s the most enjoyable part of my life</q>
                    </div>
                  </div>
                <img src="./images/pic1.png" alt="">
            </div>
        </div>
        <div class="about" id="a_bout">
            <h1>About</h1>
            <div class="about_content">
                <div class="about_image">
                    <img src="./images/1.png" alt="" id="about_img_one">
                    <img src="./images/2.png" alt="" id="about_img_two">
                    <img src="./images/3.png" alt="" id="about_img_three">
                    <img src="./images/5.png" alt="" id="about_img_five">
                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;
                <?php
                    if (mysqli_num_rows($result) > 0) {
                ?>
                <ul>
                <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                ?>
                    <li>Total Marathons <hr color="green"><span class="numpy"><?php echo $row["total"]; ?></span></li>
                    <li>Full Marathons <hr color="green"><span class="numpy"><?php echo $row["full"]; ?></span></li>
                    <li>Half marathons <hr color="green"><span class="numpy"><?php echo $row["half"]; ?></span></li>
                    <li>Ultra Marathons <hr color="green"><span class="numpy"><?php echo $row["ultra"]; ?></span></li>
                    <?php
                        $i++;
                        }
                    ?>
                </ul>
                <?php
                    }
                    else{
                        echo "No result found";
                    }
                ?>
                <p>Yes it’s the story of a Georgian, Ramanjit singh
                    Oberoi.<br />Oberoi’s unbounded energy is the result of his passion. After years of working in a bank and then in a
                    security company, Oberoi came upon the pleasures of running after he did a mere 7 km run in 2012.
                    <br />
                    Many runners in these famous marathons have great backstories. So does Oberoi.
                    He started running at the age of 55, and now it's his passion. The Boston Marathon was something he never
                     ran before, but
                    the charm of 30,000 people running, bowled him over. He began running in marathons at the early age of 55, in 2014, 
                    when he took part in a half-marathon.
                    Oberoi has participated in <span style="color: rgb(250, 2, 2); font-family: sans-serif;"> 67 </span>half marathons, some in challenging conditions, for
                    example along the steps of Khumbalgarh Fort (2nd only to The Great wall of China), in the rarified
                    atmosphere of Ladakh, and in the hills of Shimla.
                    <br />
                    Oberoi has run <span style="color: rgb(250, 2, 2); font-family: sans-serif;">13</span> full marathons.
                        That is not all. He participated in <span style="color: rgb(250, 2, 2); font-family: sans-serif;">10</span> Ultras.
                        <br />
                        He was a Georgian from RMS Belgaum.
                        <br><br>
                        <a href="about.html"><button class="readmore">Read More</button></a>
                </p>
            </div>
        </div>
        <div class="gallery" id="a_gallery">
            <div class="gallery_head">
                <h1>Gallery</h1>
            </div>
            <div class="gallery_images">
                <img src="./images/gal4.jpeg" alt="" id="gallery_img_four">
                <img src="./images/gal4.png" alt="" id="gallery_img_one">
                <img src="./images/gal3.jpeg" alt="" id="gallery_img_two">
                <img src="./images/gal1.jpeg" alt="" id="gallery_img_three">
                <img src="./images/gal2.jpeg" alt="" id="gallery_img_five">
                <img src="./images/gal5.jpeg" alt="" id="gallery_img_six">
            </div>
            <div class="gallery_foot">
                <a href="gallery.php"><button style="color: blanchedalmond;">See More</button></a>
            </div>
        </div>
        <div class="contact" id="a_contact">
            <div class="contact_container"> 
                <h1>Contact</h1>
                <div class="contact_inner">
                    <div class="contact_msg">
                        <div class="social_media_head">Message</div><br />
                        <form action="mailto:satyamraj4766@gmail.com" class="contact_msg_body"><br>
                            <label for="sender_name">Your Name</label>
                            <input type="text" name="sender_name" id="naam"/><br>
                            <label for="sender_email">Your Email</label>
                            <input type="email"id="mail" name="sender_email" /><br>
                            <label for="sender_msg">Message</label>
                            <textarea name="sender_msg" id="sendmsg" cols="30" rows="5"></textarea><br>
                            <input type="submit" id="btn_submit" value="Send" name="msg_submit" />
                        </form>
                    </div>
                    <div class="social_media">
                        <div class="social_media_heade">Follow Me</div><br />
                        <div class="social_media_body">
                            <div class="instagram"><a href="https://www.instagram.com/ramanjitoberoi/" target="_blank" style="color: white;"><i class="fab fa-instagram"></i></a></div>
                            <div class="facebook"><a href="https://www.facebook.com/raman.oberoi.777" target="_blank" style="color: white;"><i class="fab fa-facebook-f"></i></a></div>
                            <div class="twitter"><i class="fab fa-twitter"></i></div>
                            <div class="youtube"><a href="https://youtu.be/kDSJfG8v81Q" target="_blank" style="color: white;"><i class="fab fa-youtube"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
        });
    </script>
    <script> 
        function onClickMenu()
        {
            document.getElementById("menu").classList.toggle("change");
            document.getElementById("nav").classList.toggle("change");
            document.getElementById("menu-bg").classList.toggle("change-bg");
        }
        window.onscroll = function() {myFunction()};

        function myFunction() {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                document.getElementById("nav_one").className="test";
                document.getElementById("navmobile").className="test1";
                
                document.getElementById("mobil_h").style.display="block";
            } 
            else {
                document.getElementById("nav_one").className = "nav1";
                document.getElementById("navmobile").className="navbar";
                document.getElementById("mobil_h").style.display="none";
                }
            }
    </script>
</body>
</html>