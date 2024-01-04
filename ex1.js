

function calculate(){
  var grade="";
  var num = document.getElementById("numgrade").value;
  
if(num<=100 && num>=90)
grade="A+";

if(num<90 && num>=80)
grade="A";

if(num<80 && num>=75)
grade="B+";

if(num<75 && num>=70)
grade="B";

if(num<70 && num>=65)
grade="C+";

if(num<65 && num>=60)
grade="C";

if(num<60 && num>=55)
grade="D+";

if(num<55 && num>=50)
grade="D";

if(num<50 && num>=40)
grade="E";

if(num<40)
grade="FAIL";


  
 document.getElementById("lettergrade").value=grade; 
  
  
}