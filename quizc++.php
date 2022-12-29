<!DOCTYPE html>
<html>
<head>
<title>C++ Quiz</title>
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
background-image: url("https://wallpapercave.com/wp/wp4009915.jpg"); 

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
<h1>Programming in C++ (level 1)</h1>
</div>
<form id="form1">

<h3>Inline functions are useful when</h3>
<label for="var_string"><input type="radio" name="variable" value="0" id="var_string" />Function is large with many nested loops</label>
<label for="var_join"><input type="radio" name="variable" value="0" id="var_join" />Function has many static variables</label>
<label for="var_info"><input type="radio" name="variable" value="1" id="var_info" />Function is small and we want to avoid function call overhead</label>
<label for="var_condition"><input type="radio" name="variable" value="0" id="var_condition"/>None of the above</label><hr>

<h2><pre>#include<iostream>
    using namespace std;
    int x = 1;
    void fun()
    {
        int x = 2;
        {
            int x = 3;
            cout << ::x << endl;
        }
    }
    int main()
    {
        fun();
        return 0;
    }
    </pre></h2>
<label for="sub_string"><input type="radio" name="sub" value="0" id="sub_string"/>1</label>
<label for="sub_join"><input type="radio" name="sub" value="0" id="sub_join"/> 2</label>
<label for="sub_info"><input type="radio" name="sub" value="1" id="sub_info" />3</label>
<label for="sub_condition"><input type="radio" name="sub" value="0" id="sub_condition" />0</label><hr>

<h2><pre>#include<iostream>
    using namespace std;
    
    union A {
      int a;
      unsigned int b;
      A() { a = 10; }
      unsigned int getb() {return b;}
    };
    
    int main()
    {
        A obj;
        cout << obj.getb();
        return 0;
    }</pre></h2>
<label for="cat_string"><input type="radio" name="con" value="0" id="cat_string" />Compile Error:union can't have functions</label>
<label for="cat_join"><input type="radio" name="con" value="0" id="cat_join" />Compiler Error:can't access private member of A</label>
<label for="cat_info"><input type="radio" name="con" value="1" id="cat_info" />10</label>
<label for="cat_condition"><input type="radio" name="con" value="0" id="cat_condition" />garbage  value</label><hr>

<h3>Which of the following is true about inline functions and macros.</h3>
<label for="if_string"><input type="radio" name="ifstate" value="0" id="if_string" />Inline functions do type checking for parameters. macros don't</label>
<label for="if_join"><input type="radio" name="ifstate" value="0" id="if_join" />Macros are prone to bugs and errors, inline functions are not.</label>
<label for="if_info"><input type="radio" name="ifstate" value="0" id="if_info" />Macros cannot have return statement, inline functions can.</label>
<label for="if_condition"><input type="radio" name="ifstate"  value="1" id="if_condition" />all of the above</label><hr>

<h3>How can we make a C++ class such that objects of it can only be created using new operator? If user tries to create an object directly, the program produces compiler error.</h3>
<label for="func_string"><input type="radio" name="func" value="1" id="func_string" />after loop counter=1</label>
<label for="func_join"><input type="radio" name="func" value="0" id="func_join" />1, after loop counter=2</label>
<label for="func_info"><input type="radio" name="func" value="0" id="func_info" />1, after loop counter=1</label>
<label for="func_condition"><input type="radio" name="func"  value="0" id="func_condition" />after loop counter=2</label><hr>

<h3>How can we make a C++ class such that objects of it can only be created using new operator? If user tries to create an object directly, the program produces compiler error.</h3>
<label for="arr_string"><input type="radio" name="arr" value="0" id="arr_string" />Not possible</label>
<label for="arr_condition"><input type="radio" name="arr"  value="0" id="arr_condition" />By making both constructor and destructor private</label>
<label for="arr_info"><input type="radio" name="arr" value="0" id="arr_info" />By making constructor private</label>
<label for="arr_join"><input type="radio" name="arr" value="1" id="arr_join" />All of the above</label><hr>
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


