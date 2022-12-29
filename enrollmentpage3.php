<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Page3</title>
    <style>
        .prom{
         text-align: center;
         padding-bottom:15px;
         display:flex;
         justify-content:center;
         color:chocolate;
         font-family: 'Merriweather', serif;
     }
     .prom2{
         height:480px;
         width:300px;
         display: flex;
         flex-direction: row;
         /* border:2px solid white; */
         box-shadow:3px 3px 2px white, 2px 2px 3px black;
     }
     .prom2 img{
        height:200px;
        width:300px;
        border-radius:5px;
     }
     .prom1 h3{
         text-align: center;
         color:brown;
     }
     .prom1{
         display:flex;
         flex-direction: row;
         justify-content:space-evenly;
         position:relative;
     }
     .butt{
         justify-content: center;
         height:30px;
         width:70px;
         margin-left:110px;
         border-radius: 5px;
     }
      .butt a{
         text-decoration: none;
         font-size: 20px;
         color:teal;
     }
     
        
     /* nav */
      body{
            margin: 0;
            padding: 0;
            
        }

     
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
            width:1530px; */
            border:2px solid red;
            border-top:2px solid gray;
            border-left:2px solid gray;
            border-right:2px solid gray;
            background-color:gray;
            padding-top:0px;
            position:relative;
            
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
              <li class="item" title="Question Banks"><a href="quiztime.html">Quizes</a></li>
              <li class="item" title=" Online Compiler"><a href="Realproject.php#CD">Coding Platform</a></li>
           </ul>
        </nav>
     </header>
    <h1 class="prom">Upcoming Courses</h1>
    <div class="prom1">
    <div class="prom2">
        <div>
            <img src="https://www.educative.io/v2api/editorpage/5393602882568192/image/6038586442907648" alt="none">
            <h3>Programming in C++</h3>
            <h3>Instructer |IIT Kharagpur</h3>
            <p style="text-align:center;">Prof. Partha Pratim Das  </p>
            <h3>Course Duration</h3>
            <p style="text-align:center;">Full Term -8 weeks course </p>
            <button class="butt"><a href="https://onlinecourses.nptel.ac.in/noc21_cs55/preview">Enroll</a></button>
        </div>
    </div>
    <div class="prom2">
        <div>
            <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20200710234318/Why-Cloud-Computing-is-Booming-in-the-Market.png" alt="none">
            <h3>Programming in Java</h3>
            <h3>Instructer |IIT Kharagpur</h3>
            <p style="text-align:center;">Prof. Debasis Samanta</p>
            <h3>Course Duration</h3>
            <p style="text-align:center;">Full Term - 12 weeks course</p>
            <button class="butt"><a href="https://onlinecourses.nptel.ac.in/noc21_cs56/preview">Enroll</a></button>
        </div>
    </div>
    <div class="prom2">
        <div>
            <img src="https://miro.medium.com/max/840/1*RJMxLdTHqVBSijKmOO5MAg.jpeg" alt="none">
            <h3>Programming using python</h3>
            <h3>Instructer |IIT Guwahati</h3>
            <p style="text-align:center;">Prof. Partha Pratim Das, Prof. Samiran... </p>
            <h3>Course Duration</h3>
            <p style="text-align:center;">Full Term - 8 weeks course </p>
            <button class="butt"><a href="https://onlinecourses.nptel.ac.in/noc21_cs67/preview">Enroll</a></button>
        </div>
    </div>
    <div class="prom2">
        <div>
            <img src="https://365datascience.com/resources/blog/2017-11-Programming-in-900-words-min.png" alt="none">
            <h3 style="text-align: center;">The Joy of computing </h3>
            <h3>Instructer |IIT Ropar</h3>
            <p style="text-align:center;">Prof. Sudarshan Iyengar</p>
            <h3>Course Duration</h3>
            <p style="text-align:center;">Full Term - 12 weeks course </p>
            <button class="butt"><a href="https://nptel.ac.in/courses/106/105/106105217/">Enroll</a></button> 
    </div>
    </div>
    </div><br><hr style="color:black">
    <div class="tools" style="margin-left:650px; ">
   
        <a style="text-decoration: none; font-size: 20px;" href="Realproject.php#enrolls">  <button style="height:40px; width:50px; background-color:aqua;" >1</button></a>
        <a style="text-decoration: none; font-size: 20px;" href="enrollmentpage.php"><button style="height:40px; width:50px; background-color:aqua; ">2</button></a>
        <a style="text-decoration: none; font-size: 20px;" href="enrollmentpage2.php"><button style="height:40px; width:50px; background-color:aqua; ">3</button></a>
        <a href=""  style="text-decoration: none; font-size: 25px; "><button style="height:40px; width:50px; background-color:aqua; color:red; ">4</button></a></div>

</body>
</html>