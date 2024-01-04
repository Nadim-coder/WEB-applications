var count_pos=0; 
   var count_neg=0;



function total_positive_negative(){
 
  
  var num = document.getElementById("integer").value;
  
  

  if(num>0){
count_pos++;
document.getElementById("integer").value="";


  }  
  
  if(num<0){
  count_neg++;
  document.getElementById("integer").value="";
}


 
if(num==0){
document.getElementById("pout").value=count_pos;
document.getElementById("nout").value=count_neg;
document.getElementById("integer").disabled=true;

}
}
