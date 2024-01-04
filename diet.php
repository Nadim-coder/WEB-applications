<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">


<script type="text/javascript" src="mychoicelist.js"></script>

<link rel="stylesheet" type="text/css" href="style_d.css">
</head>

<body>

<div id= "container">

<div style="width:1320px; height:170px; background-image: url('images/backg.jpg')"></div>
  
  <div class="header">
  <img src="images/logo.jpeg" height="95" width="135" padding-top="10px" alt="no image found">
			<h1 style="color: rgb(0,128,128)"> Personal Dashboard </h1>
			<h4>  <?php
        print "<b>Welcome back  <br /> <br />";
        print "Today is:</b> ";
        print date("l, F jS");
        print "<br />";
        print "<a href='login.php'>logout</a>"
      ?></h4>
			
	</div>


  
    
 <div id="sidebar">
  <ul class="link">
    
  <center><img src="images/pic1.jpg" onclick="showFoodList()" style="height:125px; width:215px; margin-top:25px"></center><br>
  <center><li><a href="#" onclick="showFoodList()"
  
                        onmouseover="this.style.color = 'red'; 
                        this.style.fontStyle = 'italic';
                        this.style.fontSize = '2em'" 
                        
                        onmouseout = "this.style.color = 'blue';
                       this.style.fontStyle = 'normal';
                       this.style.fontSize = '1.1em'">Food List</a></li></center> <br> 
        
    
    
    <img src="images/pic2.jpg" onclick="showToday()" style="height:175px; width:225px; margin-top:25px"><br><br>
 <center><li><a href="#" onclick="showToday()"
                        
                        onmouseover="this.style.color = 'red'; 
                        this.style.fontStyle = 'italic';
                        this.style.fontSize = '2em'" 
                        
                        onmouseout = "this.style.color = 'blue';
                       this.style.fontStyle = 'normal';
                       this.style.fontSize = '1.1em'">Today's List</a></li></center><br>
      
      
   <img src="images/pie.png" onclick="showChart()" style="height:175px; width:225px; margin-top:25px">
   <center> <li><a href="#" onclick="showChart()" 
   
                        onmouseover="this.style.color = 'red'; 
                        this.style.fontStyle = 'italic';
                        this.style.fontSize = '2em'" 
                        
                        onmouseout = "this.style.color = 'blue';
                       this.style.fontStyle = 'normal';
                       this.style.fontSize = '1.1em'">Pie chart</a></li></center><br>
        </ul>
    
    </div>
  
   
   
   
  <div id="maincontent">
       <center> <h2 id="page-title">Food List</h2></center>

        <table id="foodlist"> 
        <thead>
        <tr><th></th><th>Food Item</th><th>Carbs(g)</th><th>Fats(g)</th><th>Protein(g)</th><th></th></tr>
        </thead >
        <tbody></tbody>
        </table>

<button id="btn1" onclick="add()" style="margin:20px 15px; position:relative;left:20px">Add to Food List</button>
<button id="btn2" onclick="addToMyList()" style="position:relative; left:15px">Add to todays List</button>
        
         <br><br><br><br>
   
   <table id="todayslist"> 
        <thead>
        <tr><th></th><th>Food (g)</th><th>Carbs (g)</th><th>Fats (g)</th><th>Protein (g)</th><th></th></tr>
      </thead>
     <tbody></tbody>
      </table>
      <br><br>
      
      <table id="finallist" style="visibility:hidden" >
      <thead>
        <tr><th></th><th>Food</th><th>Carbs</th><th>Fats</th><th>Protein</th><th></th></tr>
      </thead>
     <tbody></tbody>
    </table> <br><br>
      
    <label id="lab">Total macro-nutrients consumption >
    
    <div id="result">
  <label>Carbs:  <input type="text" size="3" id="a" style="text-align:center"/> 
  <label>Fats: <input type="text" size="3" id="b" style="text-align:center"/>          
  <label>Protein: <input type="text" size="3" id="c" style="text-align:center"> 
  </div>
  </label>
 
    


  <div id="chart" style="width:400px; height:250px"><canvas id= "myChart"></canvas></div>
       
<footer style=font-size:22px> Personal Dashboard Services, Toronto, ON. <img src="images/copy.png" height="25" width="25"> All rights reserved   </footer>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
 
   
 
   
   const tBody= document.querySelector("tbody"); 
     const tHead = document.querySelector("thead");
     const Table = document.querySelector("table");
     
     var x, i;
     var table="";
     
     function showFoodList() {
    var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xmlhttp.open("GET", "foodlist.xml", true);
  xmlhttp.send();
}
function myFunction(xml) {
  
  var xmlDoc = xml.responseXML;
  
   x = xmlDoc.getElementsByTagName("FOOD");
  for (i = 0; i < x.length/2; i++) { 
    table += "<tr><td><input type='checkbox' name='selected'></td><td>" +
    x[i].getElementsByTagName("ITEM")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("CARBS")[0].childNodes[0].nodeValue +
    "</td><td>"+
     x[i].getElementsByTagName("FATS")[0].childNodes[0].nodeValue +
    "</td><td>"+
     x[i].getElementsByTagName("PROTEIN")[0].childNodes[0].nodeValue +
    "</td><td><button class='delbtn'>Delete</button></td></tr>";
  }
  
   tBody.innerHTML=table;
  }
  
  function add() {
   
   if(i<x.length){
    table += "<tr><td><input type='checkbox' name='selected'</td><td>" +
    x[i].getElementsByTagName("ITEM")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("CARBS")[0].childNodes[0].nodeValue +
    "</td><td>"+
     x[i].getElementsByTagName("FATS")[0].childNodes[0].nodeValue +
    "</td><td>"+
     x[i].getElementsByTagName("PROTEIN")[0].childNodes[0].nodeValue +
    "</td><td><button class='delbtn' >Delete</button></td></tr>";
  }
  
   tBody.innerHTML=table;
   i++;
  }

 
  
  function del(e){
  if(!e.target.classList.contains("delbtn")){
  return;
  }
  const btn = e.target;
  btn.closest("tr").remove();  
  i--;
  }
  
  Table.addEventListener("click", del);
  
  
</script> 
   </div> 
 
  
  </body>
</html>