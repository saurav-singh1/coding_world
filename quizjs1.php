<!DOCTYPE html>
<html>
<head>
<title>JavaScript Quiz</title>
<style>
body {
background-color: lightblue;
font-family: Helvetica;
}

#main {
width: 80%;
max-width: 950px;
border: 1px gray solid;
margin: auto;
padding: 10px;
background-color: white;
border-radius: 10px;
}

#header {
margin-top: 0;
border: 2px solid black;
padding: 5px;
height: 250px;
background: beige;
background-image: url("https://www.tutorialrepublic.com/lib/images/javascript-illustration.png");
color: white;
}

label {
display: block;
}

input {
width: 30px;
margin-left: 20px;
}

h2 {
clear: both;
padding-top: 20px;
}

button {
width: 100px;
margin-top: 20px;
}

</style>


</head>
<body>
<div id="main">
<div id="header">
<h1>JavaScript Quiz(level 1)</h1>
</div>
<form id="form1">

<h2>Which is the best description of a variable?</h2>
<label for="var_string"><input type="radio" name="variable" value="0" id="var_string" />Identifies a portion of a string.</label>
<label for="var_join"><input type="radio" name="variable" value="0" id="var_join" />A method to join strings.</label>
<label for="var_info"><input type="radio" name="variable" value="1" id="var_info" />Allows you to store information so it can be reused throughout the program</label>
<label for="var_condition"><input type="radio" name="variable" value="0" id="var_condition"/>Allows you to make a decision based on a condition.</label>

<h2>Which is the best description of the substring method?</h2>
<label for="sub_string"><input type="radio" name="sub" value="1" id="sub_string"/>Identifies a portion of a string.</label>
<label for="sub_join"><input type="radio" name="sub" value="0" id="sub_join"/>A method to join strings.</label>
<label for="sub_info"><input type="radio" name="sub" value="0" id="sub_info" />Allows you to store information so it can be reused throughout the program</label>
<label for="sub_condition"><input type="radio" name="sub" value="0" id="sub_condition" />Allows you to make a decision based on a condition.</label>

<h2>Which is the best description of concatenation?</h2>
<label for="cat_string"><input type="radio" name="con" value="0" id="cat_string" />Identifies a portion of a string.</label>
<label for="cat_join"><input type="radio" name="con" value="1" id="cat_join" />A method to join strings.</label>
<label for="cat_info"><input type="radio" name="con" value="0" id="cat_info" />Allows you to store information so it can be reused throughout the program</label>
<label for="cat_condition"><input type="radio" name="con" value="0" id="cat_condition" />Allows you to make a decision based on a condition.</label>

<h2>Which is the best description of an if statement?</h2>
<label for="if_string"><input type="radio" name="ifstate" value="0" id="if_string" />Identifies a portion of a string.</label>
<label for="if_join"><input type="radio" name="ifstate" value="0" id="if_join" />A method to join strings.</label>
<label for="if_info"><input type="radio" name="ifstate" value="0" id="if_info" />Allows you to store information so it can be reused throughout the program</label>
<label for="if_condition"><input type="radio" name="ifstate"  value="1" id="if_condition" />Allows you to make a decision based on a condition.</label>

<h2>How can you get the type of arguments passed to a function?</h2>
<label for="func_string"><input type="radio" name="func" value="1" id="func_string" />using typeof operator</label>
<label for="func_join"><input type="radio" name="func" value="0" id="func_join" />using getType function</label>
<label for="func_info"><input type="radio" name="func" value="0" id="func_info" />Both of the above</label>
<label for="func_condition"><input type="radio" name="func"  value="0" id="func_condition" />None of the above</label>

<h2>Which built-in method calls a function for each element in the array?</h2>
<label for="arr_string"><input type="radio" name="arr" value="0" id="arr_string" />while()</label>
<label for="arr_join"><input type="radio" name="arr" value="0" id="arr_join" />loop()</label>
<label for="arr_info"><input type="radio" name="arr" value="1" id="arr_info" />forEach()</label>
<label for="arr_condition"><input type="radio" name="arr"  value="0" id="arr_condition" />None of the above</label>
<button type="submit" value="Submit">Submit</button>

</form>
    
<p>Your grade is: <span id="grade">__</span></p>
<p id="grade2"></p>



<script>
document.getElementById("form1").onsubmit=function() {
       variable = parseInt(document.querySelector('input[name = "variable"]:checked').value);
	   sub = parseInt(document.querySelector('input[name = "sub"]:checked').value);
	   con = parseInt(document.querySelector('input[name = "con"]:checked').value);
	   ifstate = parseInt(document.querySelector('input[name = "ifstate"]:checked').value);
	   func= parseInt(document.querySelector('input[name = "func"]:checked').value);
	   arr= parseInt(document.querySelector('input[name = "arr"]:checked').value);
	   result = variable + sub + con + ifstate +func +arr;
	   
	document.getElementById("grade").innerHTML = result;

 grading = [
	   {score:0,feedback:"I don't think you studied", image: "none.jpg"},
	   {score:1,feedback:"You need to spend more time. Try again", image: "poor.jpg"},
	   {score:3,feedback:"I think you could do better. Try again.", image: "avg.jpg"},
	   {score:5,feedback:"So close. Try again.", image: "above.jpg"},
	   {score:6,feedback:"Excellent! You're a JavaScript pro!", image: "excellent.jpg"}
	   ];
	  
for(i=0; i<grading.length; i++) {
    if(result == grading[i].score) {
    result2 = grading[i].feedback ;
	  }
	  }


document.getElementById("grade2").innerHTML = result2; 

return false; }

</script>


</div>
</body>
</html>


