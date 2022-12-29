<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <title>Coding World</title>
    <style>
        * {
            box-sizing: border-box;
            /* overflow-y: auto; */
        }

        body {
            top: 0px;
            left: 0px;
            margin: 0px;
            padding: 0px;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            position: relative;
            /* margin: auto; */
        }

        .numbertext {
            color: #f2f2f2;
            font-size: 35px;
            margin-top: 240px;
            margin-left: 400px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
            font-family: 'Lobster', cursive;
            color: red;
        }

        .numbertext1 {
            color: #f2f2f2;
            font-size: 25px;
            margin-top: 340px;

            margin-left: 640px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
            font-family: 'Lobster', cursive;
            color: rgb(241, 228, 154);
        }

        #aks1 {
            color: #f2f2f2;
            font-size: 25px;
            margin-top: 470px;
            /* margin-bottom:350px; */
            /* margin-right:350px; */
            margin-left: 700px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
            font-family: 'Lobster', cursive;

        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 200s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .7
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .7
            }

            to {
                opacity: 1
            }
        }

        @media only screen and (max-width: 400px) {
            .numbertext {
                font-size: 10px
            }
        }

        #aks {
            height: 40px;
            width: 130px;
            background-color: black;
            border-radius: 8px;
            border: 2px solid white;
        }

        #aks a {
            text-decoration: none;
            font-size: 20px;
            color: red;
        }

        /* new data */
        .growmore {
            border: 3px solid rgb(64, 6, 119);
            padding: 10px, 10px, 10px, 10px;
            margin-top: 0px;
            margin-bottom: 20px;
            margin-left: 30px;
            margin-right: 20px;
            border-radius: 10px;
            width: 450px;
            height: 500px;
            box-sizing: border-box;
            overflow: auto;
            list-style: none;
            background-color: black;
            box-shadow: 7px 7px 5px white, 7px 7px 5px rgb(28, 143, 28);
            /* blood shadow:offset-x offset-y blurradius spreadradius color and box-shadow:inset 7px 7px green;  inset ka matlab andar mai shadow  */
        }

        .growmore p {
            font-style: oblique;
            text-align: left;
            color: white;
        }

        .growmore-1 {
            border: 3px solid rgb(64, 6, 119);
            padding: 10px, 10px, 10px, 10px;
            margin-top: 20px;
            margin-bottom: 20px;
            margin-right: 20px;
            margin-left: 30px;
            justify-content: space-evenly;
            border-radius: 10px;
            width: 450px;
            height: 500px;
            box-sizing: border-box;
            overflow: auto;
            list-style: none;
            background-color: black;
            box-shadow: 7px 7px 5px white, 7px 7px 5px rgb(28, 143, 28);
        }

        .growmore-1 p {
            font-style: oblique;
            text-align: left;
            color: white;
        }

        #c {

            background-color: rgb(135, 206, 250);
            border-bottom: 3px solid whitesmoke;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        #c1 {
            background-color: rgb(0, 0, 128);
            border-bottom: 3px solid whitesmoke;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        #c2 {
            background-color: rgb(105, 105, 105);
            border-bottom: 3px solid whitesmoke;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        #c3 {
            background-color: rgb(25, 25, 112);
            border-bottom: 3px solid whitesmoke;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            /* width: 492px; */
        }

        #c4 {
            background-color: rgb(255, 179, 71);
            border-bottom: 3px solid whitesmoke;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            /* width: 492px; */
        }

        #c5 {
            background-color: rgb(255, 225, 53);
            border-bottom: 3px solid whitesmoke;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            /* width: 492px; */
        }

        #c6 {
            background-color: rgb(188, 143, 143);
            border-bottom: 3px solid whitesmoke;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            /* width: 492px; */
        }

        #c7 {
            background-color: rgb(220, 208, 255);
            border-bottom: 3px solid whitesmoke;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            /* width: 492px; */
        }

        #c8 {
            background-color: rgb(244, 164, 96);
            border-bottom: 3px solid whitesmoke;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            /* width: 492px; */
        }

        .btn a {
            text-decoration: none;
            color: white;
        }

        .btn a:hover {
            color: rgb(5, 0, 0);
            background-color: rgb(221, 166, 38);
        }

        .btn a:visited {
            background-color: yellow;
        }

        .btn a:active {
            background-color: darkblue;
        }

        .btn {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
            /* background-color: rgb(135, 206, 250); */
            padding: 6px;
            border: none;
            cursor: pointer;
            font-size: 13px;
            border-radius: 4px;
        }

        .btn :hover {
            color: darkgoldenrod;
            background-color: rgb(223, 245, 201);
            border: 2px solid black;
        }

        #btn1 {
            background: rgb(135, 206, 250);
        }

        #btn2 {
            background-color: rgb(0, 0, 128);
        }

        #btn3 {
            background-color: rgb(105, 105, 105);
        }

        #btn4 {
            background-color: rgb(25, 25, 112);
        }

        #btn5 {
            background-color: rgb(255, 179, 71);
        }

        #btn6 {
            background-color: rgb(255, 225, 53);
        }

        #btn7 {
            background-color: rgb(188, 143, 143);
        }

        #btn8 {
            background-color: rgb(220, 208, 255);
        }

        #btn9 {
            background-color: rgb(244, 164, 96);
        }

        header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            opacity: 0.8;
        }

        .navigation {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 20px;
            display: flex;
        }

        .navigation li {
            list-style: none;
        }

        section {
            height: 344px;
            font-family: 'Bree Serif', serif;
            margin: 3px 230px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        #him {
            align-items: center;
            font-size: 4rem;
            margin-top: 500px;
            font-family: 'Lobster', cursive;
        }

        #sam {
            align-items: center;
            font-size: 3rem;
            margin-top: 25px;
            color: rgb(255, 166, 107);
            font-family: 'Lobster', cursive;
        }

        section button {
            font-family: 'Bree Serif', serif;
            height: 40px;
            width: 150px;
            font-size: 25px;
            border-radius: 15px;
            background-color: black;
            border: 2px solid white;
        }

        section button a {
            text-decoration: none;
            color: white;
        }

        .items img {
            padding-top: 0px;
            height: 50px;
            width: 150px;
        }

        .item {
            padding: 9px 20px;
        }

        .navbar {
            top: 0px;
            left: 0px;
            height: 90px;
            width: 1530px;
            border: 2px solid red;
            border-top: 2px solid gray;
            border-left: 2px solid gray;
            border-right: 2px solid gray;
            background-color: gray;
            padding-top: 0px;
            position: fixed;
        }

        .navbar li a {
            text-decoration: none;
            color: whitesmoke;
            font-family: 'Times New Roman', Times, serif;
        }

        .navbar li a:hover {
            color: salmon;
            border-bottom: 1px solid red;

        }

        /* AI CSS */
        #ar-1 img {
            width: 500px;
            height: 550px;
            margin: 50px;
            box-sizing: border-box;
            /* opacity: 0.9; */
            border-radius: 10px;
            box-shadow: 5px 5px 3px white;
        }

        .pk {

            height: 700px;
            width: 900px;
        }

        .AI {
            display: flex;
            flex-direction: inherit;
            height: 650px;
            width: 1520px;
            background: url('solidcolorgray.png') no-repeat center center/cover;
            content: "";
            position: static;
            top: 0px;
            left: 0px;
        }

        .Ai {
            padding-left: 0px;
            padding-top: 70px;
            text-align: center;
            color: red;
            text-shadow: 2px 2px 1px blanchedalmond;
        }

        #nn {
            padding-left: 40px;
            font-size: 18px;
            color: whitesmoke;
        }

        .pk-2 {
            margin-left: 350px;
            height: 50px;
            width: 100px;
            background: tomato;
            font-size: 17px;
            border-radius: 5px;
            box-shadow: -3px -3px 2px black;
        }

        .pk-2 a {
            text-decoration: none;
            color:black;
        }

        .pk-2 a:hover {
            color: rgb(5, 0, 0);
        }

        .pk-2 a:visited {
            color: whitesmoke;
        }

        .pk-2 a:active {
            background-color: darkblue;
        }

        /* iot */
        #ar-6 img {
            width: 500px;
            height: 600px;
            margin: 50px;
            border-radius: 5px;
            box-sizing: border-box;
            /* opacity: 0.7; */
            box-shadow: -5px -5px 3px white;
        }

        .IOT {
            display: flex;
            flex-direction: row-reverse;
            /* flex-direction: inherit; */
            height: 700px;
            width: 1520px;
            background: url('green.png') no-repeat center center/cover;
            content: "";
            position: static;
            top: 0px;
            left: 0px;
        }

        .Iot {
            padding-left: 220px; 
           
             padding-top: 40px;
            text-align: justify;
            color: crimson;
            text-shadow: 2px 2px 1px blanchedalmond;
        }

        #bn {
            /* float:right; */
            padding-left: 20px;
            font-size: 18px;
            color: whitesmoke;
        }

        .pk-4 {
            padding-left: 50px;
            /* padding: 0px 0px 40px 50px; */
            height: 350px;
            width: 1000px;
        }

        .pk-5 {
            margin-left: 300px;
            height: 50px;
            width: 100px;
            background: tomato;
            font-size: 17px;
            border-radius: 5px;
            box-shadow: 3px 3px 2px black;
        }

        .pk-5 a {
            text-decoration: none;
            color: black;
        }

        /* android development */
        #AD-1 img {
            width: 530px;
            height: 550px;
            margin: 50px;
            box-sizing: border-box;
            /* opacity: 0.7; */
            border-radius: 5px;
            box-shadow: 5px 5px 3px white;
        }

        .AD {
            display: flex;
            flex-direction: inherit;
            height: 650px;
            width: 1520px;
            background: url('download.png') no-repeat center center/cover;
            content: "";
            position: static;
            top: 0px;
            left: 0px;
        }

        .ad-5 {
            height: 500px;
            width: 800px;
        }

        .AD-4 {
            padding-left: 200px;
            padding-top: 70px;
            text-align: justify;
            color: red;
            text-shadow: 2px 2px 1px blanchedalmond;
        }

        #an {
            padding-left: 40px;
            font-size: 18px;
            color: whitesmoke;
        }

        .ad-2 {
            margin-left: 300px;
            height: 50px;
            width: 100px;
            background: tomato;
            font-size: 17px;
            border-radius: 5px;
            box-shadow: -3px -3px 2px black;
        }

        .ad-2 a {
            color:black;
            text-decoration: none;
        }

        .ad-2 a:hover {
            color: rgb(5, 0, 0);
        }

        .ad-2 a:visited {
            color: whitesmoke;
        }

        .ad-2 a:active {
            background-color: darkblue;
        }

        /* Machine Learning */
        #ml-2 img {
            width: 500px;
            height: 600px;
            margin: 50px;
            border-radius: 5px;
            box-sizing: border-box;
            /* opacity: 0.7; */
            box-shadow: -5px -5px 3px white;
        }

        .ML-1 {
            display: flex;
            flex-direction: row-reverse;
            height: 700px;
            width: 1520px;
            background: url('random5.png') no-repeat center center/cover;
            content: "";
            position: static;
            top: 0px;
            left: 0px;
        }

        .ML {
            padding-left: 270px;
            padding-top: 50px;
            text-align: justify;
            color: crimson;
            text-shadow: 2px 2px 1px blanchedalmond;
        }

        #ak {
            padding-left: 40px;
            font-size: 18px;
            color: whitesmoke;
        }

        .ML-3 {
            padding-left: 50px;
            height: 500px;
            width: 1000px;
        }

        .ML-4 {
            margin-left: 350px;
            height: 50px;
            width: 100px;
            background: tomato;
            font-size: 17px;
            border-radius: 5px;
            box-shadow: 3px 3px 2px black;
        }

        .ML-4 a {
            text-decoration: none;
            color: black;
        }

        /* data science */
        #ni-2 img {
            width: 500px;
            height: 550px;
            margin: 50px;
            box-sizing: border-box;
            /* opacity: 0.9; */
            border-radius: 5px;
            box-shadow: 5px 5px 3px white;
        }

        .NI-1 {
            display: flex;
            flex-direction: inherit;
            height: 650px;
            width: 1520px;
            background: url('mateeblack.png') no-repeat center center/cover;
            content: "";
            position: static;
            top: 0px;
            left: 0px;
        }

        .NI-3 {
            height: 650px;
            width: 850px;
        }

        .DS {
            padding-left: 300px;
            padding-top: 50px;
            text-align: justify;
            color: red;
            text-shadow: 2px 2px 1px blanchedalmond;
        }

        #ni {
            padding-left: 30px;
            font-size: 18px;
            color: whitesmoke;
        }

        .NI-4 {
            margin-left: 350px;
            height: 50px;
            width: 100px;
            background: tomato;
            font-size: 17px;
            border-radius: 5px;
            box-shadow: -3px -3px 2px black;
        }

        .NI-4 a {
            text-decoration: none;
            color: black;
        }

        .NI-4 a:hover {
            color: rgb(5, 0, 0);
        }

        /* about */
        .AB-1 {
            display: flex;
            flex-direction: inherit;
            height: 700px;
            width: 1520px;
            background: url('coding2.jpg') no-repeat center center/cover;
            content: "";
            position: static;
            top: 0px;
            left: 0px;
        }

        .AB-5 {
            height: 500px;
            width: 600px;
            /* font-size:50px; */
        }

        .AB-4 {
            padding-left: 300px;
            padding-top: 70px;
            padding-bottom: 0px;
            text-align: justify;
            color: gold;
        }

        .AB-5 {
            padding-left: 40px;
            font-size: 18px;
            color: whitesmoke;
        }

        .AB-3 {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: flex-start;
            text-align: center;
            padding-left: 600px;
        }

        /* robotics */
        #rb-2 img {
            /* top:0;
         left:0; */
            width: 500px;
            height: 500px;
            margin: 50px;
            border-radius: 5px;
            box-sizing: border-box;
            /* opacity: 0.7; */
            box-shadow: -5px -5px 3px white;
        }

        .RB-4 {
            padding-left: 320px;
            padding-top: 50px;
            text-align: justify;
            color: crimson;
            text-shadow: 2px 2px 1px blanchedalmond;
        }

        #rb {
            /* float:right; */
            padding-left: 40px;
            font-size: 18px;
            color: whitesmoke;
        }

        .RB-3 {
            padding-left: 50px;
        }

        .RB-5 {
            margin-left: 320px;
            height: 50px;
            width: 100px;
            background: tomato;
            font-size: 17px;
            border-radius: 5px;
            box-shadow: 3px 3px 2px black;
        }

        .RB-1 {
            display: flex;
            flex-direction: row-reverse;
            /* flex-direction: inherit; */
            height: 600px;
            width: 1520px;
            background: url('solidblue.jpg') no-repeat center center/cover;
            content: "";
            position: static;
            top: 0px;
            left: 0px;
        }

        /* web development */
        #wd-1 img {
            width: 550px;
            height: 550px;
            margin: 50px;
            box-sizing: border-box;
            /* opacity: 0.7; */
            border-radius: 5px;
            box-shadow: 5px 5px 3px white;
        }

        .WD-1 {
            display: flex;
            flex-direction: inherit;
            height: 670px;
            width: 1520px;
            background: url('plainred.jpg') no-repeat center center/cover;
            content: "";
            position: static;
            top: 0px;
            left: 0px;
        }

        .WD-3 {
            height: 400px;
            width: 750px;
        }

        .WD-4 {
            padding-left: 250px;
            padding-top: 40px;
            text-align: justify;
            color: black;
            text-shadow: 2px 2px 1px blanchedalmond;
        }

        #wd {
            padding-left: 40px;
            font-size: 17px;
            color: whitesmoke;
        }

        .WD-5 {
            margin-left: 330px;
            height: 50px;
            width: 100px;
            background: tomato;
            font-size: 17px;
            border-radius: 5px;
            box-shadow: -3px -3px 2px black;
        }

        .WD-5 a {
            text-decoration: none;
            color:black;
        }

        .WD-5 a:hover {
            color: rgb(5, 0, 0);
        }

        .WD-5 a:visited {
            color: whitesmoke;
        }

        /* some changes */
        .listitem {
            display: flex;
            flex-direction: row;
            flex-shrink: inherit;
        }

        .prom {
            text-align: center;
            /* padding-bottom:15px;
         padding-top:150px; */
            display: flex;
            justify-content: center;
            color: chocolate;
            font-family: 'Merriweather', serif;
        }

        .prom2 {
            height: 470px;
            width: 300px;
            display: flex;
            flex-direction: row;
            /* border:2px solid white; */
            box-shadow: 3px 3px 2px white, 2px 2px 3px black;
        }

        .prom2 img {
            height: 200px;
            width: 300px;
            border-radius: 5px;
        }

        .prom1 h3 {
            text-align: center;
        }

        .prom1 {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            position: static;
        }

        .butt {
            justify-content: center;
            height: 30px;
            width: 70px;
            margin-left: 110px;
            border-radius: 5px;
        }

        .butt a {
            text-decoration: none;
            font-size: 20px;
            color: teal;
        }

        /* switch button */
        .PF a {
            text-decoration: none;
            color: aqua;
            font-size: 25px;
        }

        .PF {
            height: 200px;
            width: 350px;
            border: 2px solid red;
            background-color: black;
            border-radius: 5px;
            margin-left: 70px;
        }

        /* contact */
        .CN-1 {
            display: flex;
            flex-direction: column;
            height: 720px;
            width: 1520px;
            background: url('contactform.jpg') no-repeat center center/cover;
            content: "";
            position: static;
            top: 0px;
            left: 0px;
        }

        .CN-2 {
            height: 380px;
            width: 400px;
            /* border:2px solid black; */
            display: flex;
            flex-direction: column;
            margin-top: 50px;
            margin-bottom: 250px;
            margin-right: 250px;
            margin-left: 770px;
        }

        .CN-3 {
            display: flex;
            flex-direction: row;
            justify-content: center;
            padding: 8px;
        }

        /* coding platform */
        .plat {
            text-align: center;
            /* padding-bottom:15px;
         padding-top:150px; */
            display: flex;
            justify-content: center;
            color: brown;
            font-family: 'Merriweather', serif;
        }

        .plat2 {
            height: 515px;
            width: 400px;
            display: flex;
            flex-direction: row;
            /* border:2px solid white; */
            box-shadow: 4px 4px 3px white, 3px 3px 3px black;
        }

        .plat2 img {
            height: 200px;
            width: 400px;
            border-radius: 5px;
        }

        .plat1 h3 {
            text-align: center;
            color: black;
            font-size: 20px;
        }

        .plat1 {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            position: static;
        }

        .plat1 p {
            color: black;
        }

        .buttN {
            justify-content: center;
            height: 40px;
            width: 100px;
            margin-left: 140px;
            border-radius: 5px;
            background-color: black;
        }

        .buttN a {
            text-decoration: none;
            font-size: 15px;
            color: teal;
        }

        .platform2 {
            height: 515px;
            width: 400px;
            display: flex;
            flex-direction: row;
            /* border:2px solid white; */
            box-shadow: 4px 4px 3px white, 3px 3px 3px black;
        }

        .platform2 img {
            height: 200px;
            width: 400px;
            border-radius: 5px;
        }

        .platform1 h3 {
            text-align: center;
            color: black;
            font-size: 20px;
        }

        .platform1 p {
            color: black;
        }

        .platform1 {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            position: static;
        }
    </style>
</head>

<body>



    <!-- <h2>Automatic Slideshow</h2>
<p>Change image every 2 seconds:</p> -->

    <div class="slideshow-container">


        <div class="mySlides fade">
            <div class="numbertext">
                <p style="font-size:4rem"> Welcome to the coding world</p>
            </div><br>
            <div class="numbertext1">
                <p style="font-size:3rem"> 'Code It Now'</p>
            </div><br>
            <div id="aks1">
                <button id="aks"><a href="#Home"> Let's Start</a></button>
            </div>
            <img src="https://cdn.pixabay.com/photo/2017/08/10/03/31/macbook-2617705_960_720.jpg"
                style="height:750px; width:100%;">

        </div>

        <div class="mySlides fade">
            <div class="numbertext">
                <p style="font-size:4rem">Welcome to the coding world</p>
            </div>
            <div class="numbertext1">
                <p style="font-size:3rem"> 'Code It Now'</p>
            </div>
            <div id="aks1">
                <button id="aks"><a href="#Home"> Let's Start</a></button>
            </div>
            <img src="backgroundimage.jpg" style="height:750px; width:100%;">

        </div>

        <div class="mySlides fade">
            <div class="numbertext">
                <p style="font-size:4rem"> Welcome to the coding world</p>
            </div>
            <div class="numbertext1">
                <p style="font-size:3rem">'Code It Now'</p>
            </div>
            <div id="aks1">
                <button id="aks"><a href="#Home"> Let's Start</a></button>
            </div>
            <img src="https://cdn.pixabay.com/photo/2015/09/05/20/02/coding-924920_960_720.jpg"
                style="height:750px; width:100%;">

        </div>

        <div class="mySlides fade">
            <div class="numbertext">
                <p style="font-size:4rem"> Welcome to the coding world</p>
            </div>
            <div class="numbertext1">
                <p style="font-size:3rem">'Code It Now'</p>
            </div>
            <div id="aks1">
                <button id="aks"><a href="#Home"> Let's Start</a></button>
            </div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg"
                style="height:750px; width:100%;">

        </div>
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    </div>
    <!-- new data -->
    <header id="head">
        <nav class="navbar">
            <ul class="navigation">
                <li class="items"><img
                        src="https://p4.wallpaperbetter.com/wallpaper/556/1022/404/code-geass-logos-1024x768-anime-code-geass-hd-art-wallpaper-preview.jpg"
                        alt="none"></li>
                <!-- <li class="item"><a href="http://127.0.0.1:5500/rough.html"> Home</a></li> -->
                <li class="item"><a href="#Home">Home</a></li>
                <li class="item"><a href="#ab-1">About </a></li>
                <li class="item"><a href="#cn">Contact Us</a></li>
                <li id="png" class="item"><a href="form.php">Register</a> </li>
                <!-- <li class="item" title="Online Courses"><a href="https://onlinecourses.nptel.ac.in/"> Free
                        courses</a></a></li> -->
                <li class="item" id="quizs" title="Question Banks"><a href="quiztime.php">Quizes</a></li>
                <li class="item" title=" Online Compiler"><a href="#CD">Coding Platform</a></li>
            </ul>
        </nav>
    </header>

    <br>
    <div id="Home">
        <h1 style="text-align: center; color:brown; font-size:40px;">Coding Language</h1>
        <table>
            <tr>
                <ul class="listitem">
                    <td>
                        <li class="growmore">
                            <div class="post-image bg1" id="c">
                                <img src="https://img.icons8.com/color/144/000000/c-programming.png"
                                    alt="Fast and easy to use">
                            </div>

                            <div class="post-content">
                                <h3 style="color:white;">C language </h3>
                                <p>C is a general-purpose, procedural computer programming language supporting
                                    structured
                                    programming, lexical variable scope, and recursion, with a static type system. By
                                    design, C
                                    provides constructs that map efficiently to typical machine instructions. It has
                                    found
                                    lasting use in applications previously coded in assembly language. Such applications
                                    include
                                    operating systems and various application software for computer architectures that
                                    range from
                                    supercomputers to PLCs and embedded systems. </p>
                                <center><button class="btn" id="btn1"><a href="c1.php">More on
                                            C</a>
                                    </button>
                                    <button class="btn" id="btn1"><a
                                            href="https://www.youtube.com/watch?v=7Dh73z3icd8&list=PLu0W_9lII9aiXlHcLx-mDH1Qul38wD3aR">videos</a>
                                    </button>
                                </center>

                            </div>
                        </li>
                    </td>
                    <td>
                        <li class="growmore">
                            <div class="post-image bg2" id="c1">
                                <img src="https://img.icons8.com/color/144/000000/c-plus-plus-logo.png"
                                    alt="Without limitation">
                            </div>
                            <div class="post-content">
                                <h3 style="color:white;">C++ language</h3>
                                <p>C++ is a general-purpose programming language created by Bjarne Stroustrup as an
                                    extension of
                                    the C programming language, or "C with Classes". The language has expanded
                                    significantly over
                                    time, and modern C++ now has object-oriented, generic, and functional features in
                                    addition to
                                    facilities for low-level memory manipulation. It is almost always implemented as a
                                    compiled
                                    language, and many vendors provide C++ compilers, including the Free Software
                                    Foundation,
                                    LLVM, Microsoft, Intel, Oracle, and IBM, so it is available on many platforms.
                                </p>
                                <center><button class="btn" id="btn2"> <a href="c++.php"> More on
                                            C++</a></button>
                                    <button class="btn" id="btn2"> <a
                                            href="https://www.youtube.com/watch?v=j8nAHeVKL08&list=PLu0W_9lII9agpFUAlPFe_VNSlXW5uE0YL">videos</a></button>
                                </center>
                            </div>
                        </li>
                    </td>
                    <td>
                        <li class="growmore">
                            <div class="post-image bg3" id="c2">
                                <img src="https://img.icons8.com/color/144/000000/c-sharp-logo.png"
                                    alt="Safe and Clean">
                            </div>

                            <div class="post-content">
                                <h3 style="color:white;">C# language</h3>
                                <p>C# is a general-purpose, multi-paradigm programming language encompassing static
                                    typing,
                                    strong typing, lexically scoped, imperative, declarative, functional, generic,
                                    object-oriented (class-based), and component-oriented programming disciplines.C# was
                                    developed around 2000 by Microsoft as part of its.It was designed by Anders
                                    Hejlsberg, and
                                    its development team is currently led by Mads Torgersen, being one of the
                                    programming
                                    languages designed for the Common Language Infrastructure (CLI).
                                </p>
                                <center><button class="btn" id="btn3"><a href="http://localhost/Project/c%23.php">
                                            More on
                                            C#</a></button>
                                    <button class="btn" id="btn3"> <a
                                            href="https://www.youtube.com/watch?v=SuLiu5AK9Ps">videos</a></button>
                                </center>
                            </div>
                        </li>
                    </td>
            </tr>
            <tr>
                <td>
                    <li class="growmore-1">
                        <div class="post-image bg4" id="c3">
                            <img src="https://img.icons8.com/color/144/000000/java-coffee-cup-logo.png"
                                alt="Full platforms supported">
                        </div>
                        <div class="post-content">
                            <h3 style="color:white;">Java language</h3>
                            <p>Java is a high-level, class-based, object-oriented programming language that is designed
                                to have
                                as few implementation dependencies as possible. It is a general-purpose programming
                                language
                                intended to let application developers write once, run anywhere,meaning that compiled
                                Java code
                                can run on all platforms that support Java without the need or recompilation.Java
                                applications
                                are typically compiled to bytecode that can run on any Java virtual machine regardless
                                of the
                                underlying computer architecture.The Java runtime provides dynamic capabilities that are
                                typically not available in traditional compiled languages. </p>
                            <center><button class="btn" id="btn4"><a href="java1.php">
                                        More on
                                        Java</a></button>
                                <button class="btn" id="btn4"> <a
                                        href="https://www.youtube.com/watch?v=ntLJmHOJ0ME&list=PLu0W_9lII9agS67Uits0UnJyrYiXhDS6q">videos</a></button>
                            </center>
                        </div>
                    </li>
                </td>
                <td>
                    <li class="growmore-1">
                        <div class="post-image bg5" id="c4">
                            <img src="https://img.icons8.com/color/144/000000/java-coffee-cup-logo.png"
                                alt="Full file format supported">
                        </div>

                        <div class="post-content">
                            <h3 style="color:white;">Java script language</h3>
                            <p>JavaScript is a programming language that conforms to the ECMAScript specification.
                                JavaScript
                                is high-level, often just-in-time compiled, and multi-paradigm. It has curly-bracket
                                syntax,
                                dynamic typing, prototype-based object-orientation, and first-class functions. Alongside
                                HTML
                                and CSS, JavaScript is one of the core technologies of the World Wide Web.Over 97% of
                                websites
                                use it client-side for web page behavior,often incorporating third-party libraries.All
                                major web
                                browsers have a dedicated JavaScript engine to execute the code on the user's device.As
                                a
                                multi-paradigm language, JavaScript supports event-driven, functional, and imperative
                                programming styles.</p>
                            <center><button class="btn" id="btn5"><a href="js.php">More on
                                        JS</a></button>
                                <button class="btn" id="btn5"> <a
                                        href="https://www.youtube.com/watch?v=hKB-YGF14SY">videos</a></button>
                            </center>
                        </div>
                    </li>
                </td>
                <td>
                    <li class="growmore-1">
                        <div class="post-image bg6" id="c5">
                            <img src="https://img.icons8.com/color/144/000000/python.png" alt="Cloud support">
                        </div>

                        <div class="post-content">
                            <h3 style="color:white;">Python</h3>
                            <p>Python is an interpreted high-level general-purpose programming language. Python's design
                                philosophy emphasizes code readability with its notable use of significant indentation.
                                Its
                                language constructs as well as its object-oriented approach aim to help programmers
                                write clear,
                                logical code for small and large-scale projects. Python is dynamically-typed and
                                garbage-collected. It supports multiple programming paradigms, including structured
                                (particularly, procedural), object-oriented and functional programming. Python is often
                                described as a "batteries included" language due to its comprehensive standard library.
                            </p>
                            <center><button class="btn" id="btn6"><a href="python.php">More on
                                        Python</a> </button>
                                <button class="btn" id="btn6"> <a
                                        href="https://www.youtube.com/watch?v=aqvDTCpNRek&list=PLu0W_9lII9agICnT8t4iYVSZ3eykIAOME">videos</a></button>
                            </center>
                        </div>
                    </li>
                </td>
            </tr>
            <tr>
                <td>
                    <li class="growmore-1">
                        <div class="post-image bg4" id="c6">
                            <img src="https://img.icons8.com/officel/160/000000/ruby-programming-language.png"
                                alt="Full platforms supported">
                        </div>
                        <div class="post-content">
                            <h3 style="color:white;">Ruby language</h3>
                            <p>Ruby is an interpreted, high-level, general-purpose programming language. It was designed
                                and
                                developed in the mid-1990s by Yukihiro "Matz" Matsumoto in Japan. Ruby is dynamically
                                typed and
                                uses garbage collection and just-in-time compilation. It supports multiple programming
                                paradigms, including procedural, object-oriented, and functional programming. According
                                to the
                                creator, Ruby was influenced by Perl, Smalltalk, Eiffel, Ada, BASIC, and Lisp. </p>
                            <center><button class="btn" id="btn7"><a
                                        href="ruby.php">
                                        More on Ruby</a></button>
                                <button class="btn" id="btn7"> <a
                                        href="https://www.youtube.com/watch?v=fDRa82lxzaU">videos</a></button>
                            </center>
                        </div>
                    </li>
                </td>
                <td>
                    <li class="growmore-1">
                        <div class="post-image bg5" id="c7">
                            <img src="https://img.icons8.com/dusk/128/000000/php-logo.png"
                                alt="Full file format supported">
                        </div>

                        <div class="post-content">
                            <h3 style="color:white;">php language</h3>
                            <p>PHP is a general-purpose scripting language especially suited to web development.It was
                                originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994.The PHP
                                reference
                                implementation is now produced by The PHP Group.PHP originally stood for Personal Home
                                Page, but
                                it now stands for the recursive initialism PHP: Hypertext Preprocessor.PHP code is
                                usually
                                processed on a web server by a PHP interpreter implemented as a module, a daemon or as a
                                Common
                                Gateway Interface (CGI) executable. On a web server, the result of the interpreted and
                                executed
                                PHP code which may be any type of data, such as generated HTML or binary image data –
                                would
                                form the whole or part of an HTTP response.</p>
                            <center><button class="btn" id="btn8"><a
                                        href="php.php">
                                        More on
                                        php</a></button>
                                <button class="btn" id="btn8"> <a
                                        href="https://www.youtube.com/watch?v=1SnPKhCdlsU">videos</a></button>
                            </center>
                        </div>
                    </li>
                </td>
                <td>
                    <li class="growmore-1">
                        <div class="post-image bg6" id="c8">
                            <img src="https://img.icons8.com/color/144/000000/html-5--v2.png" alt="Cloud support">
                        </div>

                        <div class="post-content">
                            <h3 style="color:white;">HTML language</h3>
                            <p>The HyperText Markup Language, or HTML is the standard markup language for documents
                                designed to
                                be displayed in a web browser. It can be assisted by technologies such as Cascading
                                Style Sheets
                                (CSS) and scripting languages such as JavaScript.Web browsers receive HTML documents
                                from a web
                                server or from local storage and render the documents into multimedia web pages. HTML
                                describes
                                the structure of a web page semantically and originally included cues for the appearance
                                of the
                                document. </p>
                            <center><button class="btn" id="btn9"><a href="https://www.w3schools.com/html/"> More on
                                        HTML</a></button>
                                <button class="btn" id="btn9"><a
                                        href="https://www.youtube.com/watch?v=BsDoLVMnmZs&t=1446s"> Videos</a></button>
                            </center>
                        </div>
                    </li>
                </td>
            </tr>
            </ul>
        </table>

    </div>

    <div class="tools" style="padding-left:700px;font-size:20px; ">
        <button style="height:40px; width:50px; background-color:aqua; color:red; font-size:20px;">1</button>
        <button style="height:40px; width:50px; background-color:aqua"><a style="text-decoration: none; font-size:20px;"
                href="different coding.php">2</a></button>
    </div>
    <hr style="color:black">

    <!-- AI page -->
    <div class="AI" id="ai">
        <div class="pk-1" id="ar-1">
            <img src="data science.jpg" alt="AI">
        </div>

        <div class="pk" id="ar">
            <h1 class="Ai">Artificial Intelligence</h1>

            <p id="nn">
                Artificial intelligence (AI) refers to the simulation of human intelligence in machines that are
                programmed to think like humans and mimic their actions. The term may also be applied to any machine
                that exhibits traits associated with a human mind such as learning and problem-solving.The ideal
                characteristic of artificial intelligence is its ability to rationalize and take actions that have
                the
                best chance of achieving a specific goal. A subset of artificial intelligence is machine learning,
                which
                refers to the concept that computer programs can automatically learn from and adapt to new data
                without
                being assisted by humans. Deep learning techniques enable this automatic learning through the
                absorption
                of huge amounts of unstructured data such as text, images, or video.Artificial intelligence is based
                on
                the principle that human intelligence can be defined in a way that a machine can easily mimic it and
                execute tasks, from the most simple to those that are even more complex. The goals of artificial
                intelligence include mimicking human cognitive activity. Researchers and developers in the field are
                making surprisingly rapid strides in mimicking activities such as learning, reasoning, and
                perception,
                to the extent that these can be concretely defined. Some believe that innovators may soon be able to
                develop systems that exceed the capacity of humans to learn or reason out any subject. But others
                remain
                skeptical because all cognitive activity is laced with value judgments that are subject to human


            </p>
            <button class="pk-2" id="ar-2"><a href="https://www.w3schools.com/ai/default.asp">More on AI</a></button>
        </div>
    </div>

    <!-- iot -->
    <!-- <div style="background-image: url('green.png');"> -->
    <div class="IOT" id="iot">
        <div class="pk-6" id="ar-6">
            <img src="https://cdn.pixabay.com/photo/2017/11/04/10/25/success-2917048_960_720.jpg" alt="IOT">
        </div>

        <div class="pk-4" id="ar-4">
            <h1 class="Iot">Internet Of Things</h1>

            <p id="bn">
                The Internet of things (IoT) describes the network of physical objects—a.k.a. "things"—that are embedded
                with sensors, software, and other technologies for the purpose of connecting and exchanging data with
                other
                devices and systems over the Internet.

                Things have evolved due to the convergence of multiple technologies, real-time analytics, machine
                learning,
                ubiquitous computing, commodity sensors, and embedded systems. Traditional fields of embedded systems,
                wireless sensor networks, control systems, automation (including home and building automation), and
                others
                all contribute to enabling the Internet of things. In the consumer market, IoT technology is most
                synonymous
                with products pertaining to the concept of the "smart home", including devices and appliances (such as
                lighting fixtures, thermostats, home security systems and cameras, and other home appliances) that
                support
                one or more common ecosystems, and can be controlled via devices associated with that ecosystem, such as
                smartphones and smart speakers. The IoT can also be used in healthcare systems.
                An IoT ecosystem consists of web-enabled smart devices that use embedded systems, such as processors,
                sensors and communication hardware, to collect, send and act on data they acquire from their
                environments.
                IoT devices share the sensor data they collect by connecting to an IoT gateway or other edge device
                where
                data is either sent to the cloud to be analyzed or analyzed locally. Sometimes, these devices
                communicate
                with other related devices and act on the information they get from one another. The devices do most of
                the
                work without human intervention, although people can interact with the devices -- for instance, to set
                them
                up, give them instructions or access the data.
            </p>
            <button class="pk-5" id="ar-5"><a
                    href="https://internetofthingsagenda.techtarget.com/definition/Internet-of-Things-IoT">More on
                    IOT</a></button>
        </div>

    </div>

    <!-- android development -->
    <!-- <div style="background-image: url('download.png');"> -->
    <div class="AD" id="ad">
        <div class="ad-1" id="AD-1">
            <img src="androiddevp.jpg" alt="AI">
        </div>

        <div class="ad-5" id="AD-5">
            <h1 class="AD-4">Android Development</h1>

            <p id="an">
                Android software development is the process by which applications are created for devices running the
                Android operating system. Google states that "Android apps can be written using Kotlin, Java, and C++
                languages" using the Android software development kit (SDK), while using other languages is also
                possible.
                All non-JVM languages, such as Go, JavaScript, C, C++ or assembly, need the help of JVM language code,
                that
                may be supplied by tools, likely with restricted API support. Some programming languages and tools allow
                cross-platform app support (i.e. for both Android and iOS). Third party tools, development environments,
                and
                language support have also continued to evolve and expand since the initial SDK was released in 2008.
                The
                official Android app distribution mechanism to end users is Google Play; it also allows staged gradual
                app
                release, as well as distribution of pre-release app versions to testers.Android is an open source and
                Linux-based operating system for mobile devices such as smartphones and tablet computers. Android was
                developed by the Open Handset Alliance, led by Google, and other companies. This tutorial will teach you
                basic Android programming and will also take you through some advance concepts related to Android
                application development.
            </p>

            <button class="ad-2" id="AD-2"><a href="https://www.tutorialspoint.com/android/index.htm">More on
                    AD</a></button>
        </div>
    </div>

    <!-- Machine Learning -->
    <!-- <div style="background-image: url('random5.png');"> -->
    <div class="ML-1" id="ml-1">
        <div class="ML-2" id="ml-2">
            <img src="https://cdn-media-1.freecodecamp.org/images/1*92h6Lg1Bu1F9QqoVNrkLdQ.jpeg" alt="ML">
        </div>

        <div class="ML-3" id="ml-3">
            <h1 class="ML">Machine Learning</h1>

            <p id="ak">
                Machine learning (ML) is the study of computer algorithms that improve automatically through experience
                and
                by the use of data. It is seen as a part of artificial intelligence. Machine learning algorithms build a
                model based on sample data, known as "training data", in order to make predictions or decisions without
                being explicitly programmed to do so. Machine learning algorithms are used in a wide variety of
                applications, such as in medicine, email filtering, speech recognition, and computer vision, where it is
                difficult or unfeasible to develop conventional algorithms to perform the needed tasks.

                A subset of machine learning is closely related to computational statistics, which focuses on making
                predictions using computers; but not all machine learning is statistical learning. The study of
                mathematical
                optimization delivers methods, theory and application domains to the field of machine learning. Data
                mining
                is a related field of study, focusing on exploratory data analysis through unsupervised learning. In its
                application across business problems, machine learning is also referred to as predictive
                analytics.Machine
                learning is a method of data analysis that automates analytical model building. It is a branch of
                artificial
                intelligence based on the idea that systems can learn from data, identify patterns and make decisions
                with
                minimal human intervention.Machine learning is important because it gives enterprises a view of trends
                in
                customer behavior and business operational patterns, as well as supports the development of new
                products.
                Many of today's leading companies, such as Facebook, Google and Uber, make machine learning a central
                part
                of their operations.
            </p>
            <button class="ML-4" id="ml-4"><a
                    href="https://internetofthingsagenda.techtarget.com/definition/Internet-of-Things-IoT">More on
                    ML</a></button>
        </div>

    </div>

    <!-- data science -->
    <!-- <div style="background-image: url('mateeblack.png');"> -->
    <div class="NI-1" id="ni-1">
        <div class="NI-2" id="ni-2">
            <img src="https://cdn.pixabay.com/photo/2019/08/06/22/48/artificial-intelligence-4389372_960_720.jpg"
                alt="DS">
        </div>

        <div class="NI-3" id="ni-3">
            <h1 class="DS">Data Science</h1>

            <p id="ni">
                Data science is an interdisciplinary field that uses scientific methods, processes, algorithms and
                systems to extract knowledge and insights from structured and unstructured data, and apply
                knowledge and actionable insights from data across a broad range of application domains. Data science is
                related to data mining, machine learning and big data. Data science is a "concept to unify statistics,
                data analysis, informatics, and their related methods" in
                order to "understand and analyze actual phenomena" with data. It uses techniques and theories drawn
                from many fields within the context of mathematics, statistics, computer science, information science,
                and domain knowledge. However, data science is different from computer science and information science.
                Turing Award winner Jim Gray imagined data science as a "fourth paradigm" of science (empirical,
                theoretical, computational, and now data-driven) and asserted that "everything about science is changing
                because of the impact of information technology" and the data deluge.Data science continues to evolve as
                one of the most promising and in-demand career paths for skilled professionals. Today, successful data
                professionals understand that they must advance past the traditional skills of analyzing large amounts
                of
                data, data mining, and programming skills. In order to uncover useful intelligence for their
                organizations, data scientists must master the full spectrum of the data science life cycle and possess
                a
                level of flexibility and understanding to maximize returns at each phase of the process.
            </p>
            <button class="NI-4" id="ni-4"><a
                    href="https://ischoolonline.berkeley.edu/data-science/what-is-data-science/">More on DS</a></button>
        </div>
    </div>
    <!-- robotics -->
    <div class="RB-1" id="rb-1">
        <div class="RB-2" id="rb-2">
            <img src="mars.jpg" alt="RB">
        </div>

        <div class="RB-3" id="rb-3">
            <h1 class="RB-4">Robotics</h1>

            <p id="rb">
                Robotics is an interdisciplinary field that integrates computer science and engineering. Robotics
                involves design, construction, operation, and use of robots. The goal of robotics is to design machines
                that can help and assist humans. Robotics integrates fields of mechanical engineering, electrical
                engineering, information engineering, mechatronics, electronics, bioengineering, computer engineering,
                control engineering, software engineering, mathematics, among others. Robotics develops machines that
                can
                substitute for humans and replicate human actions. Robots can be used
                in many situations and for many purposes, but today many are used in dangerous environments (including
                inspection of radioactive materials, bomb detection and deactivation), manufacturing processes, or where
                humans cannot survive (e.g. in space, underwater, in high heat, and clean up and containment of
                hazardous
                materials and radiation). Robots can take on any form but some are made to resemble humans in
                appearance.
                This is said to help in the acceptance of a robot in certain replicative behaviors usually performed by
                people. Such robots attempt to replicate walking, lifting, speech, cognition, or any other human
                activity. Many of today's robots are inspired by nature, contributing to the field of bio-inspired
                robotics.
            </p>
            <a href="https://builtin.com/robotics"><button class="RB-5" id="rb-5">More on Robotics</button></a>
        </div>

    </div>
    </div>
    <!-- web development -->
    <div class="WD-1" id="wd-1">
        <div class="WD-2" id="wd-2">
            <img src="website.png" alt="WD">
        </div>

        <div class="WD-3" id="wd-5">
            <h1 class="WD-4">Web Development</h1>

            <p id="wd">
                Web development is the work involved in developing a Web site for the Internet (World Wide Web) or an
                intranet (a private network).Web development can range from developing a simple single static page of
                plain
                text to complex web applications, electronic businesses, and social network services. A more
                comprehensive
                list of tasks to which Web development commonly refers, may include Web engineering, Web design, Web
                content
                development, client liaison, client-side/server-side scripting, Web server and network security
                configuration, and e-commerce development. Among Web professionals, "Web development" usually refers to
                the
                main non-design aspects of building Web sites: writing markup and coding. Web development may use
                content
                management systems (CMS) to make content changes easier and available with basic technical skills.Since
                the
                commercialization of the Web, Web development has been a growing industry. The growth of this industry
                is
                being driven by businesses wishing to use their Web site to advertise and sell products and services to
                customers.There are many open source tools for Web development such as BerkeleyDB, GlassFish, LAMP
                (Linux,
                Apache, MySQL, PHP) stack and Perl/Plack. This has kept the cost of learning Web development to a
                minimum.
                Another contributing factor to the growth of the industry has been the rise of easy-to-use WYSIWYG
                Web-development software, such as Adobe Dreamweaver, BlueGriffon and Microsoft Visual Studio. Knowledge
                of
                HyperText Markup Language (HTML) or of programming languages is still required to use such software, but
                the
                basics can be learned and implemented quickly.
            </p>

            <button class="WD-5" id="wd-2"><a
                    href="https://blog.openclassrooms.com/en/2018/03/28/web-development-definition/">More on
                    WB</a></button>
        </div>
    </div>
    <!-- enrollment page -->

    <div id="enrolls">
        <h1 class="prom">Upcoming Courses</h1>
        <div class="prom1">
            <div class="prom2">
                <div>
                    <img src="https://miro.medium.com/max/1838/1*OdEUXKMKpM9DRNOXBQhGkA.png" alt="none">
                    <h3 style="color:brown;">Machine Learning</h3>
                    <h3 style="color:brown;">Instructer |IIT kharagpur</h3>
                    <p style="text-align:center;color:black;">Prof. Sanjeev Kumar, Prof. S. K. Gupta </p>
                    <h3 style="color:brown;">Course Duration</h3>
                    <p style="text-align:center; color:black;">Full Term - 12 weeks course </p>
                    <button class="butt"><a
                            href="https://onlinecourses.nptel.ac.in/noc21_cs85/preview">Enroll</a></button>
                </div>
            </div>
            <div class="prom2">
                <div>
                    <img src="https://www.sentinelassam.com/wp-content/uploads/2020/03/Artificial-Intelligence.jpg"
                        alt="none">
                    <h3 style="color:brown;">Artificial Intelligence</h3>
                    <h3 style="color:brown;">Instructer |IIT Madras</h3>
                    <p style="text-align:center; color:black;">Prof. Deepak Khemani </p>
                    <h3 style="color:brown;">Course Duration</h3>
                    <p style="text-align:center; color:black;">Full Term - 12 weeks course </p>
                    <button class="butt"><a
                            href="https://onlinecourses.nptel.ac.in/noc21_cs79/preview">Enroll</a></button>
                </div>
            </div>
            <div class="prom2">
                <div>
                    <img src="https://itchronicles.com/wp-content/uploads/2020/11/examples-of-IoT.png" alt="none">
                    <h3 style="color:brown;">Internet Of Things</h3>
                    <h3 style="color:brown;">Instructer |IIT Kharagpur</h3>
                    <p style="text-align:center; color:black;">Prof. Sudip Misra </p>
                    <h3 style="color:brown;">Course Duration</h3>
                    <p style="text-align:center; color:black;">Full Term - 12 weeks course </p>
                    <button class="butt"><a
                            href="https://onlinecourses.nptel.ac.in/noc21_cs63/preview">Enroll</a></button>
                </div>
            </div>
            <div class="prom2">
                <div>
                    <img src="https://www.mintmedia.in/wp-content/uploads/2020/08/E-Commerce-Services-Web-Development-Company-in-India-MintMedia.jpeg"
                        alt="none">
                    <h3 style="color:brown;">Web Development</h3>
                    <h4 style="color:brown; text-align: center;">Instructer |Jhons Hopkin University</h4>
                    <p style="text-align:center; color:black;">Yaakov Chaikin </p>
                    <h3 style="color:brown;">Course Duration</h3>
                    <p style="text-align:center; color:black;">Full Term - 12 weeks course </p>
                    <button class="butt"><a
                            href="https://www.coursera.org/learn/html-css-javascript-for-web-developers">Enroll</a></button>
                </div>
            </div>
        </div><br>
        <div class="tools" style="margin-left:650px; ">
            <button style="height:40px; width:50px; background-color:aqua; color:red; font-size:20px;">1</button>
            <button style="height:40px; width:50px; background-color:aqua; "><a
                    style="text-decoration: none; font-size: 20px;" href="enrollmentpage.php">2</a></button>
            <button style="height:40px; width:50px; background-color:aqua; "><a
                    style="text-decoration: none; font-size: 20px;" href="enrollmentpage2.php">3</a></button>
            <button style="height:40px; width:50px; background-color:aqua; "><a
                    style="text-decoration: none; font-size: 20px;" href="enrollmentpage3.php">4</a></button>
        </div>
        <hr style="color:black">
    </div>
    <!-- coding platform -->
    <div id="CD">
        <h1 class="plat">Online Coding Platform</h1>
        <div class="plat1">
            <div class="plat2">
                <div>
                    <img src="https://images.ctfassets.net/piwi0eufbb2g/6nCaCYxOpz6ody4U5cGIbd/69c23706c8f4e33aa67517616c3d4f4e/Topcoder-Generic-Banner.jpg"
                        alt="none">
                    <h3>Topcoder</h3>
                    <p>It provides a lot of changes from the past that you can complete on your own directly online
                        using their code editor. Their popular Single Round Matches are offered a few times per month at
                        a specific time where you compete against others to solve challenges the fastest with the best
                        score.TopCoder is one of the original platforms for competitive programming online.</p>
                    <button class="buttN"><a href="https://www.topcoder.com/community/practice">Let's code</a></button>
                </div>
            </div>
            <div class="plat2">
                <div>

                    <img src="https://static.startuptalky.com/2021/04/codechef-logo-startuptalky.jpg" alt="none">
                    <h3>Codechef</h3>
                    <p>CodeChef is an Indian-based competitive programming website that provides hundreds of challenges.
                        You are able to write code in their online editor and view a collections of challenges that are
                        separated into different categories depending on your skill level. They have a large community
                        of coders that contribute to the forums, write tutorials, and take part in CodeChef’s coding
                        competitions.</p>
                    <button class="buttN"><a href="https://www.codechef.com/ide">Let's code</a></button>
                </div>
            </div>
            <div class="plat2">
                <div>
                    <img src="https://www.yosuccess.com/wp-content/uploads/2015/01/HackerRank2.png" alt="none">
                    <h3>Hacker Rank</h3>
                    <p style="text-align: center;">HackerRank provides challenges for several different domains such as
                        Algorithms, Mathematics, SQL, Functional Programming, AI, and more. You can solve all the
                        challenge directly online. They provide a discussion and leaderboard for every challenge, and
                        most challenges come with an editorial that explains more about the challenge and how to
                        approach it to come up with a solution. </p>
                    <button class="buttN"><a href="https://www.hackerrank.com/dashboard">Let's code</a></button>
                </div>
            </div>
        </div><br>
        <div class="platform1">
            <div class="platform2">
                <div>
                    <img src="https://pathrise-website-guide-wp.s3.us-west-1.amazonaws.com/guides/wp-content/uploads/2019/06/28184913/fNvMopTM.jpg"
                        alt="none">
                    <h3>Coderbyte</h3>
                    <p>Coderbyte provides 200+ coding challenges you can solve directly online in one of 10 programming
                        languages (check out this example). The challenges range from easy (finding the largest word in
                        a string) to hard (print the maximum cardinality matching of a graph).They also provide a
                        collection of algorithm tutorials, introductory videos, and interview preparation courses.</p>
                    <button class="buttN"><a href="https://www.coderbyte.com/">Let's code</a></button>
                </div>
            </div>
            <div class="platform2">
                <div>

                    <img src="https://leetcode.com/static/images/LeetCode_Sharing.png" alt="none">
                    <h3>Leetcode</h3>
                    <p>LeetCode is a popular Online Judge that provides a list of 190+ challenges that can help you
                        prepare for technical job interviews. You can solve the challenges directly online in one of 9
                        programming languages. You are not able to view other users' solutions, but you are provided
                        statistics for your own solutions such as how fast your code ran when compared to other users'
                        code.</p>
                    <button class="buttN"><a href="https://leetcode.com/">Let's code</a></button>
                </div>
            </div>
            <div class="platform2">
                <div>
                    <img src="https://pathrise-website-guide-wp.s3.us-west-1.amazonaws.com/guides/wp-content/uploads/2019/06/10173114/codingame_logo_square.jpg"
                        alt="none">
                    <h3>CodinGame</h3>
                    <p>CodinGame is a bit different from the other websites, because instead
                        of simply solving coding challenges in an editor, you actually take part in writing the code for
                        games that you play directly online. You can see a list of games currently offered here. The game comes with a problem description, test cases, and an editor where
                        you can write your code in one of 20+ programming languages. </p>
                    <button class="buttN"><a href="https://www.hackerrank.com/dashboard">Let's code</a></button>
                </div>
            </div>
        </div><br><br>
        <hr style="color:black;">
        <!-- about -->
        <div class="AB-1" id="ab-1">
            <div class="AB-3">
                <h1 class="AB-4" id="ab-4">About </h1>
                <p class="AB-5" id="ab-5" style="font-size: 20px;">
                    This website is created by <strong><b
                            style="color:black; font-size:25px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                            'Code it now'.</b></strong>
                    This is for those who are new in coding or computer science sector and they don't know about coding
                    language,
                    yhen they visist number of sites in search of content. Due to high avability of website for coding
                    language they don't understand what they have to choose,learn. they are in confusion about which
                    website
                    has better content. So to tackle these problems this site is designed. It is best platform to
                    explore. It
                    contains every type of language references, quiz,exercise, puzzle and many other content.This is
                    very
                    useful site where you can navigate. <br>
                    <br>Founder:
                    <span style="color:lightsalmon; font-size: 25px;">
                        Prashant Kumar and Saurav Singh</span><br><br>
                    <span class="PF" id="pf">
                        <a href="powered by .php">Founders and Promoters</a></span>

                </p>


            </div>
        </div>
        <!-- Contact Details -->
        <div class="CN-1" id="cn">
            <h1 style="font-family: 'Permanent Marker', cursive; padding-left:750px;  font-size:80px; color:crimson;">
                Contact Us</h1>
            <div class="CN-2">
                <div style="color:brown; font-size: 25px; text-align: center; ">Call Us</div>
                <div style="text-align: center; color:black;"><img
                        src="https://img.icons8.com/emoji/48/000000/telephone-receiver.png" />6201005789,
                    6574201599</div><br>
                <div style="color:brown; font-size: 25px; text-align: center; ">Email Us</div>
                <div style="text-align: center; color:black"><img
                        src="https://img.icons8.com/color/48/000000/gmail-new.png" />samsaurav@gmail.com,pk3214122@gmail.com
                </div><br>
                <div style="color:brown; font-size: 25px; text-align: center; ">Follow Us</div>
                <div class="CN-3">
                    <div><img src="https://img.icons8.com/color/48/000000/instagram-new.png" /></div>
                    <div><img src="https://img.icons8.com/color/48/000000/telegram-app.png" /></div>
                    <div><img src="https://img.icons8.com/color/48/000000/facebook.png" /></div>

                    <div><img src="https://img.icons8.com/office/40/000000/whatsapp--v3.png" /></div>
                    <div><img src="https://img.icons8.com/color/48/000000/messaging-.png" /> </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 5000); // Change image every 5 seconds
        }
    </script>

</body>

</html>