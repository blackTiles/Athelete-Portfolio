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
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Rajdhani&family=Xanh+Mono&display=swap');
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
    scroll-behavior: smooth;
    }
    body{
        margin-left: 10%;
        margin-right: 10%;
        margin-top: 5%;
        background: #00B4DB;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to top, #0083B0, #00B4DB);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to top, #0083B0, #00B4DB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background-position:fixed;
        font-family: 'Rajdhani', sans-serif;
    }
    header{
        display: flex;
        justify-content: space-between;
    }
    header h1{
        color:white;
        font-size:50px;
        border-bottom:3px solid white;
    }
    section{
        transition:1s ease;
    }
    #sec{
        display:none;
        position:relative;
        width:40vw;
        height:50vh;
        background:black;
        border-radius:5px;
        color:green;
        position:absolute;
        left:50%;
        transform:translate(-50%);
        z-index:1000;
    }
    .passcontain{
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
    }
    .passcontain form{
        display:flex;
        align-items:center;
        flex-direction:column;
    }
    .passcontain form i{
        font-size:30px;
        color:black;
        background:green;
        padding:20px;
        border-radius:50%;
        box-shadow:1px 1px 50px 2px green;
    }
    .passcontain form #passinput{
        background:transparent;
        text-align:center;
        height:35px;
        width:20vw;
        color:green;
        outline:none;
        border:none;
        border-bottom:1px solid green;
    }
    .passcontain form #passvalid{
        background:transparent;
        padding:10px;
        color:green;
        border:1px solid green;
        outline:none;
        cursor:pointer;
        box-shadow:1px 1px 50px 2px green;
    }
    #formclose{
        padding:20px;
        width:fit-content;
        color:green;
        font-size:30px;
        cursor:pointer;
    }
    #formclose:hover{
        color:red;
    }
    .passcontain form #passvalid:hover{
        background:green;
        color:black;
        
    }
    header i{
        cursor:pointer;
        color:white;
        font-size:30px;
    }
    #gal_section{
        display:flex;
        justify-content:center;
        margin-top:30px;
    }
    .gallery{
        display:grid;
        grid-template-columns:repeat(4,300px);
        grid-template-rows:auto;
        grid-auto-rows:auto;
        background:white;
        grid-row-gap:10px;
        place-items:center;
        justify-content:center;
        width:fit-content;
        padding-top:12px;
        border-radius:5px;
    }
    .gallery img{
        width:270px;
        height:auto;
        border-radius:5px;
        box-shadow:1px 1px 10px 2px black;
    }
    footer{
            padding-top:20px;
            margin-bottom: 50px;
            display:flex;
            justify-content:center;
        }
    #home{
        padding:13px;
        padding-left: 20px;
        padding-right: 20px;
        border: none;
        outline: none;
        font-size: 15px;
        background: rgb(252, 248, 248);
        color: rgb(5, 5, 5);
        box-shadow: 1px 1px 20px 2px black;
        cursor: pointer;
    }
    #gal{
        padding: 13px;
        padding-left: 20px;
        padding-right: 20px;
        border: none;
        outline: none;
        font-size: 15px;
        background: black;
        color: blanchedalmond;
        box-shadow: 1px 1px 20px 2px black;
        cursor: pointer;
    }
    @media(max-width:1300px){
        body{
            margin-left:2%;
            margin-right:2%;
        }
        .gallery{
        display:grid;
        grid-template-columns:repeat(3,300px);
        }
    }
    @media(max-width:960px){
        body{
            margin-left:2%;
            margin-right:2%;
        }
        .gallery{
        display:grid;
        grid-template-columns:repeat(2,300px);
        }
    }
    @media(max-width:650px){
        body{
            margin-left:2%;
            margin-right:2%;
        }
        .gallery{
        display:grid;
        grid-template-columns:repeat(1,90vw);
        background:white;
        
        }
        #sec{
            width:80vw;
        }
        .passcontain form #passinput{
            width:60vw;
        }
        i{
            font-size:20px;
        }
        .gallery img{
        width:85vw;
        height:auto;
        }  
        
    }
    @media(max-width:500px){
        body{
            margin-left:2%;
            margin-right:2%;
        }
        .gallery{
        display:grid;
        grid-template-columns:repeat(1,95vw);
        }
        .gallery img{
        width:90vw;
        height:auto;
        }   
    }
    </style>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body>
    <header id="head_id">
        <a href="index.html"><i class="fas fa-home"></i></a>
        <h1>Gallery</h1>
        <div class="btn"><i class="fas fa-user-lock"></i></div>
    </header>
    <main>
        <section>
        
        </section>
        <section id="sec">
        <div id="formclose" onclick="formClose()"><i class="fas fa-times"></i></div>
            <div class="passcontain">
                <form action="validate.php" method="get">
                    <i class="fas fa-lock"></i><br>
                    <input type="password" name="pwd" id="passinput" placeholder="Enter your Password"><br>
                    <input type="submit" id="passvalid" name="sub" value="Validate">
                </form>                
                
            </div>
        </section> 
        <section id="gal_section">
            <?php 
                // Include the database configuration file  
                require_once 'dbConfig.php'; 
                
                // Get image data from database 
                $result = $db->query("SELECT image FROM images ORDER BY uploaded DESC"); 
                ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Document</title>
                </head>
                <body>
                <?php if($result->num_rows > 0){ ?> 
                    <div class="gallery"> 
                        <?php while($row = $result->fetch_assoc()){ ?> 
                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
                        <?php } ?> 
                    </div> 
                <?php }else{ ?> 
                    <p class="status error">Image(s) not found...</p> 
                <?php } 
            ?>
            </section>    
            <footer>
                <a href="index.html"><button id="home">Home</button></a>&nbsp;&nbsp;&nbsp;
                <a href="#head_id"><button id="gal">Go To Top</button></a>
            </footer>        

    </main>
    <script>
        function formClose(){
            x = document.getElementById("sec");
            if(x.style.display=="block"){
                x.style.display="none";
            }
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
    $(".btn").click(function(){
        $("#sec").toggle();
    });
    });
    </script>
</body>
</html>