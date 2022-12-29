<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a web page that contains one coloured box, use the jquery and perform fade In and fade Out function
    </title>
    <style>
        #btn2{
            background-color: aqua;
        }
        #btn1{
            background-color: red;
            display: none;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
</head>

<body>
    <script>
        $(document).ready(function () {
            $("#btn2").click(function () {
                $("#btn1").fadeIn();
                $(document).ready(function(){
                    $("#btn2").click(function(){
                        $("#btn1").fadeOut();
                    });
                });
    });
});
    </script>
    </head>

    <body>
        <h2>Question-6:-Create a web page that contains one coloured box, use the jquery and perform fade In and fade Out function</h2>
        <div id="btn1" >This is fade in effect.Now you click again then its fade Out</div>
        <button id="btn2">Click me to fade in</button>
    </body>

</html>