var reverse=0;
var result="";



function isReverseEqual(){
  var num= document.getElementById("num").value;
   var temp=num;
  
  while(temp>0){
    
    var mod=temp%10;
    
    reverse=reverse*10;
    reverse=reverse+mod;
    
    temp=Math.floor(temp/10);
    
  }

  if(reverse==num)
  result="Yes";
 if(reverse!=num)
    result="No";
    
    document.getElementById("result").value=result;
    document.getElementById("num").value="";
    reverse=0;
  
}