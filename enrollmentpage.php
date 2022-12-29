<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Page1</title>
    <style>
        .enrollment{
         text-align: center;
         padding-bottom:15px;
         display:flex;
         justify-content:center;
         color:chocolate;
         font-family: 'Merriweather', serif;
     }
     .enrollment2{
         height:490px;
         width:300px;
         display: flex;
         flex-direction: row;
         /* border:2px solid white; */
         box-shadow:3px 3px 2px white, 2px 2px 3px black;
     }
     .enrollment2 img{
        height:200px;
        width:300px;
        border-radius:5px;
     }
     .enrollment2 h3{
         text-align: center;
         color:brown;
     }
     .enrollment1{
         display:flex;
         flex-direction: row;
         justify-content:space-evenly;
         position:relative;
     }
     .buttP{
         justify-content: center;
         height:30px;
         width:70px;
         margin-left:110px;
         border-radius: 5px;
     }
      .buttP a{
         text-decoration: none;
         font-size: 20px;
         color:teal;
     }
     /* nav */
     body {
            margin: 0;
            padding: 0;
            
        }

        
     .navigation1 {
           font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 20px;
            display: flex;
            
        }

        .navigation1 li {
            list-style: none;
            
           
        }
        .items1 img{
            padding-top:0px;
            height:50px;
            width:150px;
        }
        .item1{
            padding: 9px 20px;
        }
        .navbar1{
           
            border:2px solid red;
            border-top:2px solid gray;
            border-left:2px solid gray;
            border-right:2px solid gray;
            background-color:gray;
            padding-top:0px;
            position:relative;
            
        }
        .navbar1 li a {
         text-decoration: none;
         color:whitesmoke;
         font-family: 'Times New Roman', Times, serif;
      }

      .navbar1 li a:hover {
         color:salmon;
         border-bottom: 1px solid red;

      }
    </style>
</head>
<body>
    <header>
        <nav class="navbar1">
           <ul class="navigation1">
              <li class="items1"><img src="https://p4.wallpaperbetter.com/wallpaper/556/1022/404/code-geass-logos-1024x768-anime-code-geass-hd-art-wallpaper-preview.jpg" alt="none"></li>
        
              <li class="item1"><a href="Realproject.php#Home">Home</a></li>
              <li class="item1"><a href="Realproject.php#ab-1">About </a></li>
              <li class="item1"><a href="Realproject.php#cn">Contact Us</a></li>
              <li id="png" class="item1"><a href="form.php">Register</a> </li>
              <!-- <li class="item1" title="Online Courses"><a href="https://onlinecourses.nptel.ac.in/"> Free courses</a></a></li> -->
              <li class="item1" title="Question Banks"><a href="quiztime.php">Quizes</a></li>
              <li class="item1" title=" Online Compiler"><a href="Realproject.php#CD">Coding Platform</a></li>
           </ul>
        </nav>
     </header>
     
    <h1 class="enrollment">Upcoming Courses</h1>
    <div class="enrollment1">
    <div class="enrollment2">
        <div>
            <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/Data-Science-vs.-Big-Data-vs.jpg" alt="none">
            <h3>Data Science</h3>
            <h3>Instructer |IIT Madras</h3>
            <p style="text-align:center;">Ragunathan Rengasamy, Shankar Narasimhan   </p>
            <h3>Course Duration</h3>
            <p style="text-align:center;">Full Term -8 weeks course </p>
            <button class="buttP"><a href="https://onlinecourses.nptel.ac.in/noc21_cs69/preview">Enroll</a></button>
        </div>
    </div>
    <div class="enrollment2">
        <div>
            <img src="http://meritude.in/wp/wp-content/uploads/2019/10/amit-ka.jpg" alt="none">
            <h3>Data Science using Python</h3>
            <h3>Instructer |IIT Madras</h3>
            <p style="text-align:center;">Prof. Ragunathan Rengasamy </p>
            <h3>Course Duration</h3>
            <p style="text-align:center;">Full Term - 4 weeks course </p>
            <button class="buttP" style="margin-top:20px;"><a href="https://onlinecourses.nptel.ac.in/noc21_cs78/preview">Enroll</a></button>
        </div>
    </div>
    <div class="enrollment2">
        <div>
            <img src="https://t3.ftcdn.net/jpg/03/87/94/94/360_F_387949414_jvPBNVHETFghaUYLareyh5Nk8HX3bbFB.jpg" alt="none">
            <h3>Data Base Management System</h3>
            <h3>Instructer |IIT Kharagpur</h3>
            <p style="text-align:center;">Prof. Partha Pratim Das, Prof. Samiran... </p>
            <h3>Course Duration</h3>
            <p style="text-align:center;">Full Term - 8 weeks course </p>
            <button class="buttP" style="margin-top:20px;"><a href="https://onlinecourses.nptel.ac.in/noc21_cs58/preview">Enroll</a></button>
        </div>
    </div>
    <div class="enrollment2">
        <div>
            <img src="https://media.kasperskycontenthub.com/wp-content/uploads/sites/43/2019/10/14084818/abstract-robot-thinking-800x450.jpg" alt="none">
            <h3>Robotics</h3>
            <h3>Instructer |IIT Madras</h3>
            <p style="text-align:center;">Prof. Asokan T, Prof. Balaraman Ravindran</p>
            <h3>Course Duration</h3>
            <p style="text-align:center;">Full Term - 12 weeks course </p>
            <button class="buttP"><a href="https://onlinecourses.nptel.ac.in/noc21_de13/preview">Enroll</a></button> 
    </div>
    </div>
    </div><br><hr style="color:black">
    <div class="tools" style="margin-left:650px; ">
   
        <a style="text-decoration: none; font-size: 20px;" href="Realproject.php#enrolls">  <button style="height:40px; width:50px; background-color:aqua;" >1</button></a>
       <a href="" style="text-decoration: none; font-size: 25px; "><button style="height:40px; width:50px; background-color:aqua; color:red; ">2</button></a>
       <a style="text-decoration: none; font-size: 20px;" href="enrollmentpage2.php"><button style="height:40px; width:50px; background-color:aqua; ">3</button></a>
       <a style="text-decoration: none; font-size: 20px;" href="enrollmentpage3.php"><button style="height:40px; width:50px; background-color:aqua; ">4</button></a></div>
    
      

</body>
</html>
