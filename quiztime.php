<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz page</title>
    <style>
        .quiz{
         text-align: center;
         padding-bottom:15px;
         display:flex;
         justify-content:center;
         color:brown;
         font-family: 'Merriweather', serif;
         font-size: 45px;
     }
     .quiz2{
         height:400px;
         width:300px;
         display: flex;
         flex-direction: row;
         /* border:5px solid white; */
         box-shadow:3px 3px 4px white, 2px 2px 5px black ;
         background-color:aquamarine;
     }
     .quiz2 img{
        height:250px;
        width:300px;
        /* border-radius:5px; */
        
     }
     .quiz2 h2{
         text-align: center;
         color:brown;
     }
     .quiz1{
         display:flex;
         flex-direction: row;
         justify-content:space-evenly;
         position:relative;
         border-radius: 5px;
     }
     .buttP{
         justify-content: center;
         height:40px;
         width:90px;
         margin-left:100px;
         border-radius: 5px;
         background-color: black;
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
            background:url('https://img.freepik.com/free-photo/isolated-3d-rendering-question-mark-yellow-background-with-space-text_139143-256.jpg?size=626&ext=jpg') no-repeat center center/cover;
            /* background:black; */
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
              
              <li class="item1" title="Question Banks"><a href="#">Quizes</a></li>
              <li class="item1" title=" Online Compiler"><a href="Realproject.php#CD">Coding Platform</a></li>
           </ul>
        </nav>
     </header>
     
    <h1 class="quiz" >Quizzes</h1>
    <div class="quiz1">
    <div class="quiz2">
        <div>
            <img src="https://sparc.org.in/wp-content/uploads/2018/12/best-C-Programming-training-gtb-nagar-sparc-academy.jpg" alt="none">
            <h2>Programmimng in c</h2>
            
            <button class="buttP"><a href="quiz.php">Level 1</a></button>
        </div>
    </div>
    <div class="quiz2">
        <div>
            <img src="https://www.educative.io/v2api/collection/10370001/5799373671759872/image/6398988892766208" alt="none">
            <h2>Programming in C++</h2>
           
            <button class="buttP"><a href="quizc++.php">Level 1</a></button>
        </div>
    </div>
    <div class="quiz2">
        <div>
            <img src="https://www.bhmpics.com/thumbs/java-t3.jpg" alt="none">
            <h2>Java</h2>
            
            <button class="buttP"><a href="quizjava.php">Level 1</a></button>
        </div>
    </div>
    <div class="quiz2">
        <div>
            <img src="https://geekboots.sfo2.cdn.digitaloceanspaces.com/post/javascript-1567486564472.jpg" alt="none">
            <h2>Java Script</h2>
            
            <button class="buttP"><a href="quizjs1.php">Level 1</a></button>
        </div>
    </div>
    
    </div><br><br>      
    <div class="tools" style="margin-left:723px; ">
   
        <a style="text-decoration: none; " href="Realproject.php#quizs">  <button style="height:50px; width:100px; background-color:black; color:red;font-size:25px; border-radius: 5px;" >Back</button></a>
       </div> 
    
      

</body>
</html>
