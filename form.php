<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">
    <title>form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
    <script>
        $(document).ready(function() {
            $("#button1").click(function() {
                alert("FORM SUBMITTED SUCCESSFULLY. ADMINISTRATOR WILL CONTACT YOU SOON");
            });
        });
    </script>
    <style>
        /* css code starts */
        marquee {
            color: red;
            font-size: 30px;
            font-family: 'Tourney', cursive;
        }

        span {
            border: 3px;
            height: 100px;
            width: 180px;
            border-width: 4px;
            border-radius: 5px;
            background-color: gray;
            border-style: solid;
            border-color: green;
            border-radius: 7px;
            border-top: 4px solid red;
            border-bottom: 4px solid black;
            border-left: 4px solid blue;
            border-right: 4px solid purple;
        }

        span:hover {
            color: darkgoldenrod;
            background-color: rgb(223, 245, 201);
            border: 2px solid brown;
            border-width: 4px;
            border-radius: 5px;
        }

        body {
            background-image: url('https://cdn.pixabay.com/photo/2016/09/26/09/10/binary-1695478_960_720.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            /* display: flex; */

        }

        center {
            width: 1500px;
            height: 1000px;
            /* border: 6px solid purple; */
            border-radius: 20px;
        }

        #extension {

            background-color: rgb(231, 240, 220);
            border: 2px solid rgb(64, 60, 119);
            width: 500px;
            box-sizing: border-box;
            padding: 23px, 25px, 27px, 20px;
            margin-top: 20px;
            margin-bottom: 10px;
            border-radius: 15px;
        }

        .button {
            cursor: pointer;
            padding: 2px, 2px, 2px, 2px;
            font-size: 20px;
            border-radius: 5px;
            margin: 10px;
            background-color: gray;
        }

        #codeitnow {
            color: blueviolet
        }

        hr {
            color: brown;
        }

        h1 {
            /* font-family: 'Otomanopee One', sans-serif; */
            /* font-family: 'Tourney', cursive; */
            font-family: 'Otomanopee One', sans-serif;
        }

        h3 {
            font-family: 'Otomanopee One', sans-serif;
        }
    </style>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $Firstname = $_POST['firstname'];
        $LastName = $_POST['lastname'];
        $Fathername = $_POST['fathername'];
        $Mothername = $_POST['mothername'];
        $Phonenumber = $_POST['phonenumber'];
        $DOB = $_POST['dob'];
        $Email = $_POST['email'];
        // $Password = $_POST['password'];
        $Educationaldetails = $_POST['ed'];
        $State = $_POST['state'];
        $Codinglanguagetolearn = $_POST['clt'];
        $Resume = $_POST['resume'];
        // echo "Welcome to the stage where we are ready to get connected to a database <br>";
        // ---connecting to the database--- 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "form";
        // create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // if (!$conn) {
        //     die("Sorry we fail to connect:".mysqli_connect_error());
        // } else {

        // echo "connection was sucessful";
        //---submit these to a database---
        // ---sql query to be executed ---
       
        $sql= "INSERT INTO `forms` (`First name`, `Last name`, `Father name`, `Mother name`, `Phone number`, `D.O.B`, `G-mail`, `Educational details`, `State`, `Coding language to learn`, `Resume`) VALUES ('$Firstname', '$LastName', '$Fathername', '$Mothername', '$Phonenumber', '$DOB', '$Email', '$Educationaldetails', '$State', '$Codinglanguagetolearn', '$Resume')";
        $result = mysqli_query($conn, $sql);
        // ---Add a new data to the table in the database---
        // if ($result) {
        //     echo "The record has been sucessfully inserted <br>";
        // } else {
        //     echo "The record was not inserted";
        //     mysqli_error($conn);
        // }
        }
    
    ?>
    <!-- Html code starts -->
    <center>
        <div id="extension">
            <marquee behavior="scroll" direction="left">“First, solve the problem. Then, write the code. Don't be a
                minimum Guy...” </marquee>
            <hr>
            <h1 style="color: rgb(199, 166, 117)">Offered by <strong style="color: blueviolet;">Code it now </strong>
            </h1>
            <hr>

            <h3 style="color: rgb(138, 191, 252)">Coding skill academy form</h3>
            <strong>**Fill the application form**</strong>
            <form action="/Project/form.php" method="POST"><br>
                <div>
                    <label for="firstname">First name:</label>
                    <input type="text" placeholder="First name" id="firstname" required="abcd" title="Enter your First name" name="firstname"><br>
                </div><br>
                <div>
                    <label for="lastname">Last name:</label>
                    <input type="text" placeholder="Last name" id="lastname" required="abcd" title="Enter your last name" name="lastname"><br>
                </div><br>
                <div>
                    <label for="fathername">Father's name:</label>
                    <input type="text" placeholder="Father's name" id="fathername" required="abcd" title="Enter you father name" name="fathername"><br>
                </div><br>
                <div>
                    <label for="mothername">Mother's name:</label>
                    <input type="text" placeholder="Mother's name" id="mothername" required="abcd" title="Enter your mother name" name="mothername"><br>
                </div><br>
                <div>
                    <label for="">Phone number:</label>
                    <input type="tel" placeholder="xxxxx-xxxxx" id="phone" class="contact" required pattern="[0-9]{5}[0-9]{5}" title="Enter '10' digit number " name="phonenumber"><br>
                </div>
                <br>
                <div>Gender:
                    <label for="classid1">
                        <input type="radio" values="male" name="gender" id="classid"> male
                    </label>
                    <label for="classid2">
                        <input type="radio" values="female" name="gender" id="classid"> female
                    </label>
                    <label for="classid3">
                        <input type="radio" values="other" name="gender" id="classid" class="red blue"> other
                    </label>
                </div>
                <p>D.O.B:
                    <input type="date" placeholder="date" max="01/01/2006" min="01/01/1999" name="dob">
                    <br>
                </p>
                <p>G-mail:
                    <input type="email" placeholder="name@gmail.com" required="abcd@gmail.com" name="email">
                </p>
                <!-- <div>
                    <label for="pass">Password:</label>
                    <input type="password" name="password" id="pass" placeholder="Create a new password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title=" Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                </div> -->
                <p>Educational details:
                    <select name="ed" id="degree">
                        <option value="no degree">select your degree</option>
                        <option value="10th">10th</option>
                        <option value="12th">12th</option>
                        <option value="graduation">graduation</option>
                        <option value="post-graduation">post graduaton</option>
                        <option value="BE/B.Tech">BE/B.TECH</option>
                        <option value="ME/M.Tech">ME/M.TECH</option>
                        <option value="BCA">BCA</option>
                        <option value="MCA">MCA</option>
                    </select>
                </p>
                <div>
                    <label for="country">Country name:</label>
                    <input type="text" placeholder="country" value="INDIA" readonly>
                </div>
                <p>State:
                    <select name="state" id="state">
                        <option value="no state">select your state</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujrat">Gujrat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal pradesh">Himachal pradesh</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="karnatak">Karnatak</option>
                        <option value="kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="West bengal">West bengal</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>

                    </select>
                </p>
                <p>Coding language to learn:
                    <select name="clt" id="codingskill" required>
                        <option value="no code">Coding language</option>
                        <option value="c">c</option>
                        <option value="c++">c++</option>
                        <option value="java">java</option>
                        <option value="java script">java script</option>
                        <option value="python">python</option>
                        <option value="python for data science">python for data science</option>
                        <option value="web development">web development</option>
                        <option value="web development using python">web development using python</option>
                        <option value="php">php</option>
                        <option value="data structure and algorithm">data structure and algorithm</option>
                        <option value="c#">c#</option>
                        <option value="php">php</option>
                        <option value="sql">sql</option>
                        <option value="ruby">ruby</option>
                    </select>
                <!-- </p>
                <label for="avatar">Profile picture:</label>
                <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
                <br> -->
                <p>
                    <label for="resume">Write about yourself(Resume):</label><br>
                    <textarea id="explain" cols="50" rows="5" name="resume"></textarea>
                </p>
                <div>
                    <button class="button">
                        <input type="reset" value="Reset"></button>
                    <a href="submission.php" target="_blank"><button class="button" id="button1">
                            <input type="submit" value="Submit"></button></a>

                </div>
        </div>
    </center>
    </form>
</body>

</html>