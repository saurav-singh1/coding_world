<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Powered By</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <style>
     .prom{
         text-align: center;
         padding-bottom:15px;
         display:flex;
         justify-content:center;
         color:chocolate;
         font-family: 'Merriweather', serif;
         position:static;
     }
     .prom2{
         height:400px;
         width:250px;
         display: flex;
         flex-direction: row;
         /* border:2px solid white; */
         box-shadow:3px 3px 2px white, 2px 2px 3px black;
     }
     .prom2 img{
        height:200px;
        width:250px;
        border-radius:5px;
     }
     .prom1 h3{
         text-align: center;
     }
     .prom1{
         display:flex;
         flex-direction: row;
         justify-content:space-evenly;
         /* position:static; */
     }
     .butt{
         justify-content: center;
         height:30px;
         width:70px;
         margin-left:90px;
         border-radius: 5px;
     }
      .butt a{
         text-decoration: none;
         font-size: 20px;
         color:teal;
     }
     /* founder */
     .found{
         text-align: center;
         padding-bottom:15px;
        display:flex;
        justify-content: center;
        color:crimson;
        font-family: 'Merriweather', serif; 
     }
     .found2{
         height:350px;
         width:400px;
         display:flex;
         flex-wrap:wrap;
         /* border:2px solid white; */
         box-shadow:3px 3px 2px white, 2px 2px 3px black;
         
     }
     .found2 img{
        height:200px;
        width:400px;
        border-radius:5px;
     }
     .found1 h3{
         text-align: center;
     }
     .found1{
         display:flex;
         flex-direction: row;
         justify-content:space-evenly;
         
     }
    button{
        margin-left:710px;
        height:50px;
        width:100px;
        border-radius:5px;
        background-color: black;
    }
    button a{
        text-decoration: none;
        font-size: 20px;
        color:red;
    }
    /* nav */
    body {
            margin: 0;
            padding: 0;
            
        }

        /* header::before{
           
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
           
        } */

        .navigation {
           font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 20px;
            display: flex;
            
        }

        .navigation li {
            list-style: none;
            
           
        }
        .items img{
            padding-top:0px;
            height:50px;
            width:150px;
        }
        .item{
            padding: 9px 20px;
        }
        .navbar{
           /* top:0px;
           left:0px;
            height:90px;
            width:1520px; */
            border:2px solid red;
            border-top:2px solid gray;
            border-left:2px solid gray;
            border-right:2px solid gray;
            background-color:gray;
            padding-top:0px;
            /* position:fixed;
             */
        }
        .navbar li a {
         text-decoration: none;
         color:whitesmoke;
         font-family: 'Times New Roman', Times, serif;
      }

      .navbar li a:hover {
         color:salmon;
         border-bottom: 1px solid red;

      }
     
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
           <ul class="navigation">
              <li class="items"><img src="https://p4.wallpaperbetter.com/wallpaper/556/1022/404/code-geass-logos-1024x768-anime-code-geass-hd-art-wallpaper-preview.jpg" alt="none"></li>
              <!-- <li class="item"><a href="http://127.0.0.1:5500/rough.html"> Home</a></li> -->
              <li class="item"><a href="Realproject.php">Home</a></li>
              <li class="item"><a href="Realproject.php#ab-1">About </a></li>
              <li class="item"><a href="Realproject.php#cn">Contact Us</a></li>
              <li id="png" class="item"><a href="form.php">Register</a> </li>
              <!-- <li class="item" title="Online Courses"><a href="https://onlinecourses.nptel.ac.in/"> Free courses</a></a></li> -->
              <li class="item" title="Question Banks"><a href="quiztime.php">Exercises</a></li>
              <li class="item" title=" Online Compiler"><a href="Realproject.php">Coding Platform</a></li>
           </ul>
        </nav>
     </header>
     <div class="prom5">
    <h1 class="prom">Promoted By</h1>
    <div class="prom1">
    <div class="prom2">
        <div>
            <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20190710102234/download3.png" alt="none">
            <h3>GeeksforGeeks</h3>
            <p>This site provide many content to this webpage.Special thanks to Geeks for geeks website.</p>
            <button class="butt"><a href="https://www.geeksforgeeks.org/">  visit</a></button>
        </div>
    </div>
    <div class="prom2">
        <div>
            <img src="https://st3.depositphotos.com/9543826/14609/v/600/depositphotos_146090343-stock-illustration-letter-and-digit-w3-logo.jpg" alt="none">
            <h3>W3 school</h3>
            <p>This site provide many content to this webpage.Special thanks to W3 school website.</p>
            <button class="butt"><a href="https://www.geeksforgeeks.org/">  visit</a></button>
        </div>
    </div>
    <div class="prom2">
        <div>
            <img src="https://www.sanfoundry.com/wp-content/uploads/2021/02/sanfoundry-logo.png" alt="none">
            <h3>Sanfoundry</h3>
            <p>This site provide many content to this webpage.Special thanks to Sanfoundry website.</p>
            <button class="butt"><a href="https://www.geeksforgeeks.org/">  visit</a></button>
        </div>
    </div>
    <div class="prom2">
        <div>
            <img src="https://static.startuptalky.com/2021/04/codechef-logo-startuptalky.jpg" alt="none">
            <h3>Codechef</h3>
            <p>This site provide many content to this webpage.Special thanks to Codechef website.</p>
            <button class="butt"><a href="https://www.geeksforgeeks.org/">  visit</a></button>
        </div>
    </div>
    </div>
    <h1 class="found" style="padding-top:30px;">Founders</h1>
      
    <div class="found1">
        <div class="found2" style="margin-left:120x;">
            <div>
             <img src="https://cdn.pixabay.com/photo/2019/07/12/18/48/code-4333398_960_720.jpg" alt="none">
             <h3>Prashant Kumar</h3>
             <p style="text-align:center;">UID:20BCS9422</p>
             <P style="text-align:center;">Web Developer:Front End</P>
         </div>
     </div>
    
    <div class="found2"  style="margin-right:0x;" >
        <div>
         <img src="https://cdn.pixabay.com/photo/2021/03/02/13/04/laptop-6062423_960_720.jpg" alt="none">
         <h3>Saurav Singh</h3>
         <p style="text-align:center;">UID:20BCS9427</p>
         <P style="text-align:center;">Web Developer:Back End</P>
     </div>
 </div>
</div>
</div><hr style="color:black;">
<button><a href="Realproject.php#ab-1">Back</a></button>
</div>

</body>
</html>