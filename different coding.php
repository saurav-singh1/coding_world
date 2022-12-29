<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <style>
        .MCL{
         text-align: center;
         padding-bottom:15px;
         display:flex;
         justify-content:center;
         color:brown;
         font-family: 'Merriweather', serif;
          
     }
     .MCL2{
         height:550px;
         width:300px;
         display: flex;
         flex-direction: row;
         /* border:2px solid white; */
         box-shadow:3px 3px 2px white, 2px 2px 3px black;
         
     }
     .MCL2 img{
        height:200px;
        width:300px;
        border-radius:5px;
     }
     .MCL1 h3{
         text-align: center;
     }
     .MCL1{
         display:flex;
         flex-direction: row;
         justify-content:space-evenly;
         
     }
     .buttn{
         justify-content: center;
         height:30px;
         width:70px;
         margin-left:120px;
         border-radius: 5px;
        
         
     }
      .buttn a{
         text-decoration: none;
         font-size: 20px;
         color:teal;
     }
    
     .found2{
         height:530px;
         width:420px;
         display:flex;
         flex-wrap:wrap;
         /* border:2px solid white; */
         box-shadow:3px 3px 2px white, 2px 2px 3px black;
         margin-top:60px;
         
     }
     
     .found2 img{
        height:200px;
        width:420px;
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
     .buttnA{
         justify-content: center;
         height:30px;
         width:120px;
         margin-left:150px;
         border-radius: 5px;
        
         
     }
      .buttnA a{
         text-decoration: none;
         font-size: 20px;
         color:teal;
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
              <li class="item"><a href="Realproject.php#Home">Home</a></li>
              <li class="item"><a href="Realproject.php#ab-1">About </a></li>
              <li class="item"><a href="Realproject.php#cn">Contact Us</a></li>
              <li id="png" class="item"><a href="form.php">Register</a> </li>
              <!-- <li class="item" title="Online Courses"><a href="https://onlinecourses.nptel.ac.in/"> Free courses</a></li> -->
              <li class="item" title="Question Banks"><a href="quiztime.php">Quiz</a></li>
              <li class="item" title=" Online Compiler"><a href="Realproject.php">Coding Platform</a></li>
           </ul>
        </nav>
     </header>
    <h1 class="MCL">More Coding languages</h1>
    <div class="MCL1">
    <div class="MCL2">
        <div>
            <img src="https://www.webdesignerdepot.com/cdn-origin/uploads/2019/07/featured_jquery.jpg" alt="none">
            <h3>Jquery</h3>
            <p> jQuery is a JavaScript library designed to simplify HTML DOM tree traversal and manipulation, as well as event handling, CSS animation, and Ajax. It is free, open-source software using the permissive MIT License. As of May 2019, jQuery is used by 73% of the 10 million most popular websites.</p>
            <button class="buttn" style="margin-top:20px;"><a href="https://www.javatpoint.com/jquery-tutorial">  visit</a></button>
        </div>
    </div>
    <div class="MCL2">
        <div>
            <img src="https://cdn.pixabay.com/photo/2020/05/21/05/29/security-5199239_960_720.jpg" alt="none">
            <h3>Cyber Security</h3>
            <p>Cyber security is the application of technologies, processes and controls to protect systems, networks, programs, devices and data from cyber attacks. It aims to reduce the risk of cyber attacks and protect against the unauthorised exploitation of systems, networks and technologies.</p>
            <button class="buttn" style="margin-top:20px;"><a href="https://www.geeksforgeeks.org/cyber-security-types-and-importance/">  visit</a></button>
        </div>
    </div>
    <div class="MCL2">
        <div>
            <img src="https://s3-ap-southeast-1.amazonaws.com/spaculus/cdns/images/mysql-img.jpg" alt="none">
            <h3>MySQL</h3>
            <p>MySQL is an open-source relational database management system.A relational database organizes data into one or more data tables in which data types may be related to each other; these relations help structure the data.MySQL Database Service is a fully managed database service to deploy cloud-​native applications. </p>
            <button class="buttn" style="margin-bottom:30px;"><a href="https://www.geeksforgeeks.org/sql-tutorial/">  visit</a></button>
        </div>
    </div>
    <div class="MCL2">
        <div>
            <img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-social-logo.png" alt="none">
            <h3>Bootstrap</h3>
            <p>Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains CSS- and (optionally) JavaScript-based design templates for typography, forms, buttons, navigation, and other interface components.</p>
            <button class="buttn" style="margin-top:35px;"><a href="https://www.geeksforgeeks.org/bootstrap-tutorials/">  visit</a></button>
        </div>
    </div>
    </div>
    <div class="found1">
        <div class="found2" >
            <div>
             <img src="https://images.theconversation.com/files/236859/original/file-20180918-158240-1jd9gm6.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=1200&h=1200.0&fit=crop" alt="none">
             <h3>Statistics</h3>
             <p>Statistics is the discipline that concerns the collection, organization, analysis, interpretation, and presentation of data. In applying statistics to a scientific, industrial, or social problem, it is conventional to begin with a statistical population or a statistical model to be studied. Populations can be diverse groups of people or objects such as "all people living in a country" or "every atom composing a crystal".</p>
             <button class="buttnA" style="margin-top:20px;"><a href="https://www.geeksforgeeks.org/">References</a></button>
         </div>
     </div>
    
    <div class="found2"  style="margin-right:0x;" >
        <div>
         <img src="https://vxchnge.com/hubfs/cloud%20computing_356197761.jpeg" alt="none">
         <h3>Cloud Computing</h3>
         <p>Cloud computing is the on-demand availability of computer system resources, especially data storage (cloud storag and computing power, without direct active management by the user.The term is generally used to describe data centers available to many users over the Internet.Large clouds, predominant today, often have functions distributed over multiple locations from central servers. If the connection to the user is relatively close, it may be designated an edge server.</p>
         <button class="buttnA" style="margin-top:4px;"><a href="https://searchcloudcomputing.techtarget.com/definition/cloud-computing">References</a></button>
     </div>
 </div>
 <div class="found2"  >
    <div>
     <img src="https://s30876.pcdn.co/wp-content/uploads/Career-Connections-1170x630.jpg" alt="none">
     <h3>Computer Network</h3>
     <p>A computer network is a group of computers that use a set of common communication protocols over digital interconnections for the purpose of sharing resources located on or provided by the network nodes. The interconnections between nodes are formed from a broad spectrum of telecommunication network technologies, based on physically wired, optical, and wireless radio-frequency methods that may be arranged in a variety of network topologies.</p>
     <button class="buttnA" style="margin-top:5px;"><a href="https://www.geeksforgeeks.org/basics-computer-networking/">References</a></button>
 </div>
</div>
</div><hr style="color:black">

<div class="tools" style="margin-left:710px;">
    <button style="height:40px; width:50px; background-color:aqua; "><a style="text-decoration: none; font-size: 20px;" href="Realproject.php#Home">1</a></button>
    <button style="height:40px; width:50px; background-color:aqua; color:red;  font-size:20px;">2</button></div>
    
</body>
</html>