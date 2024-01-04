
 
 function addToMyList(){
 tab1= document.getElementById("foodlist");
 tab2 = document.getElementById("todayslist");
  but1= document.getElementById("btn1");
 but2= document.getElementById("btn2");
 
 final = document.getElementById("finallist");
var selected = document.getElementsByName("selected");
var x;

for(x =0; x< selected.length; x++){

if(selected[x].checked){
 
 var row = tab2.insertRow(tab2.length); var Row = final.insertRow(final.length);
 var td1, td2, td3, td4, td5; var td01, td02, td03, td04, td05;
 td1 = row.insertCell(0); td01 = Row.insertCell(0);  
 td2 = row.insertCell(1); td02 = Row.insertCell(1); 
 td3 = row.insertCell(2); td03 = Row.insertCell(2);
 td4 = row.insertCell(3); td04 = Row.insertCell(3);
 td5 = row.insertCell(4); td05 = Row.insertCell(4);
 td6 = row.insertCell(5); td06 = Row.insertCell(5);
 
 
  
    
td1.innerHTML= "<input type='checkbox' name='deselect'>";
 td2.innerHTML= tab1.rows[x+1].cells[1].innerHTML;
  td3.innerHTML= tab1.rows[x+1].cells[2].innerHTML;
   td4.innerHTML= tab1.rows[x+1].cells[3].innerHTML;
    td5.innerHTML= tab1.rows[x+1].cells[4].innerHTML;
     td6.innerHTML="<button class='delbtn' onclick='removeFromMyList()'> Remove </button>";
     
td01.innerHTML= "<input type='checkbox' name='deselect'>";
 td02.innerHTML= tab1.rows[x+1].cells[1].innerHTML;
  td03.innerHTML= tab1.rows[x+1].cells[2].innerHTML;
   td04.innerHTML= tab1.rows[x+1].cells[3].innerHTML;
    td05.innerHTML= tab1.rows[x+1].cells[4].innerHTML;
    
    
    var ind = tab1.rows[x+1].rowIndex;
     tab1.deleteRow(ind);
     x--;
     
  }
}
}

function removeFromMyList(){
var tab1= document.getElementById("foodlist");

var unselected = document.getElementsByName("deselect");


for(var i=0; i< unselected.length; i++){

if(unselected[i].checked){

 var row = tab1.insertRow(tab1.length);

 var td1, td2, td3, td4, td5;

 
 td1 = row.insertCell(0); 
 td2 = row.insertCell(1); 
 td3 = row.insertCell(2);
 td4 = row.insertCell(3);
 td5 = row.insertCell(4);
 td6 = row.insertCell(5);
 
 

    
    
    
td1.innerHTML= "<input type='checkbox' name='selected'>";
 td2.innerHTML= tab2.rows[i+1].cells[1].innerHTML;
  td3.innerHTML= tab2.rows[i+1].cells[2].innerHTML;
   td4.innerHTML= tab2.rows[i+1].cells[3].innerHTML;
    td5.innerHTML= tab2.rows[i+1].cells[4].innerHTML;
     td6.innerHTML="<button class='delbtn'> Delete</button>";
     
      var ind = tab2.rows[i+1].rowIndex;
     tab2.deleteRow(ind);final.deleteRow(ind);
     i--; 
     

}
}


}
 
function showToday(){
   a=0; b=0; c=0;

var lab= document.getElementById("lab").style;
var output=document.getElementById("result").style;
var chart= document.getElementById("chart").style;
var title= document.getElementById("page-title");  
  
  r= final.rows.length;
  for(var x=1; x<r; x++){
  
     a+=Number(final.rows[x].cells[2].innerHTML);
     b+=Number(final.rows[x].cells[3].innerHTML);
     c+=Number(final.rows[x].cells[4].innerHTML);
   }
   
  document.getElementById("a").value=a;
  document.getElementById("b").value=b;
  document.getElementById("c").value=c;

  
  title.innerHTML="Todays List";
  final.style.visibility="visible";
  
  
  final.style.position="absolute";
  final.style.top="100px";
  final.style.left="100px";
   
   tab2.style.visibility="hidden";
   tab1.style.visibility="hidden";
    
    but1.style.visibility="hidden";
    but2.style.visibility="hidden";
    
    lab.position="absolute";
    lab.top="400px";
    lab.left="50px";
    
    output.position="absolute";
    output.top="60px";
    output.left="50px";
    
    chart.position="absolute";
    chart.top="400px";
    chart.left="450px";
    
    
    
}
 
 
function showChart(){
    const ctx = document.getElementById('myChart');
new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['Carbs', 'Fats',  'Proteins'],
      datasets: [{
        label: 'Total',
        data: [a, b, c],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
   
   
  
  
  
}  
   
 
 
 
 
 
 
 
 
 
 