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
background-image: url("https://javatutoring.com/wp-content/uploads/2018/09/java-620x330.png"); 

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
<h>java (level 1)</h1>
</div>
<form id="form1">

<h3><pre>public class Calculator
    {
        int num = 100;
        public void calc(int num)  { this.num = num * 10;  }
        public void printNum()     { System.out.println(num); }
      
        public static void main(String[] args)
        {
            Calculator obj = new Calculator();
            obj.calc(2);
            obj.printNum();
        }
    }</pre></h3>
<label for="var_string"><input type="radio" name="variable" value="1" id="var_string" />20</label>
<label for="var_join"><input type="radio" name="variable" value="0" id="var_join" />100</label>
<label for="var_info"><input type="radio" name="variable" value="0" id="var_info" />1000</label>
<label for="var_condition"><input type="radio" name="variable" value="0" id="var_condition"/>2</label><hr>

<h3><pre> public class MyStuff
    {
        String name;
      
        MyStuff(String n) {  name = n;  }
      
        public static void main(String[] args)
        {
            MyStuff m1 = new MyStuff("guitar");
            MyStuff m2 = new MyStuff("tv");
            System.out.println(m2.equals(m1));
        }
      
        @Override
        public boolean equals(Object obj)
        {
            MyStuff m = (MyStuff) obj;
            if (m.name != null)  { return true;  }
            return false;
        }
    }
    </pre></h3>
<label for="sub_string"><input type="radio" name="sub" value="0" id="sub_string"/>The output is true and MyStuff fulfills the Object.equals() contract.</label>
<label for="sub_join"><input type="radio" name="sub" value="0" id="sub_join"/>The output is false and MyStuff fulfills the Object.equals() contract. </label>
<label for="sub_info"><input type="radio" name="sub" value="1" id="sub_info" />The output is true and MyStuff does NOT fulfill the Object.equals() contract.</label>
<label for="sub_condition"><input type="radio" name="sub" value="0" id="sub_condition" />The output is false and MyStuff does NOT fulfill the Object.equals() contract.</label><hr>

<h3><pre>class Alpha
    {
        public String type = "a ";
        public Alpha() {  System.out.print("alpha "); }
    }
      
    public class Beta extends Alpha
    {
        public Beta()  {  System.out.print("beta ");  }
      
        void go()
        {
            type = "b ";
            System.out.print(this.type + super.type);
        }
      
        public static void main(String[] args)
        {
            new Beta().go();
        }
    }</pre></h3>
<label for="cat_string"><input type="radio" name="con" value="1" id="cat_string" /> alpha beta b b</label>
<label for="cat_join"><input type="radio" name="con" value="0" id="cat_join" /> alpha beta a b</label>
<label for="cat_info"><input type="radio" name="con" value="0" id="cat_info" /> beta alpha b b</label>
<label for="cat_condition"><input type="radio" name="con" value="0" id="cat_condition" />beta alpha a b</label><hr>

<h3><pre> public class Test
    {
        public static void main(String[] args)
        {
            StringBuilder s1 = new StringBuilder("Java");
            String s2 = "Love";
            s1.append(s2);
            s1.substring(4);
            int foundAt = s1.indexOf(s2);
            System.out.println(foundAt);
        }
    }</pre></h3>
<label for="if_string"><input type="radio" name="ifstate" value="0" id="if_string" />-1</label>
<label for="if_join"><input type="radio" name="ifstate" value="0" id="if_join" />3</label>
<label for="if_info"><input type="radio" name="ifstate" value="0" id="if_info" />4</label>
<label for="if_condition"><input type="radio" name="ifstate"  value="1" id="if_condition" />A StringIndexOutOfBoundsException is thrown at runtime.
</label><hr>

<h3><pre>  class Writer
    {
        public  static void write()
        {
            System.out.println("Writing...");
        }
    }
    class Author extends Writer
    {
        public  static void write()
        {
            System.out.println("Writing book");
        }
    }
      
    public class Programmer extends Author
    {
        public  static void write()
        {
            System.out.println("Writing code");
        }
      
        public static void main(String[] args)
        {
            Author a = new Programmer();
            a.write();
        }
    }</pre></h3>
<label for="func_string"><input type="radio" name="func" value="0" id="func_string" /> Writing…</label>
<label for="func_join"><input type="radio" name="func" value="1" id="func_join" />Writing book</label>
<label for="func_info"><input type="radio" name="func" value="0" id="func_info" />Writing code</label>
<label for="func_condition"><input type="radio" name="func"  value="0" id="func_condition" />Compilation fails</label><hr>

<h3> <pre>
    public class Base
    {
        private int data;
      
        public Base()
        {
            data = 5;
        }
      
        public int getData()
        {
            return this.data;
        }
    }
      
    class Derived extends Base
    {
        private int data;
        public Derived()
        {
            data = 6;
        }
        private int getData()
        {
            return data;
        }
      
        public static void main(String[] args)
        {
            Derived myData = new Derived();
            System.out.println(myData.getData());
        }
    }
</pre></h3>
<label for="arr_string"><input type="radio" name="arr" value="0" id="arr_string" />6</label>
<label for="arr_condition"><input type="radio" name="arr"  value="0" id="arr_condition" />5</label>
<label for="arr_info"><input type="radio" name="arr" value="1" id="arr_info" />Compile time error</label>
<label for="arr_join"><input type="radio" name="arr" value="0" id="arr_join" />Run time error</label><hr>
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


