function myFunction(x) {
    x.classList.toggle("change"); 
}
function plasticdisp(){
    var x = document.getElementById("plastic");
    var x2=document.getElementById("print1");
    var z=document.getElementById("content1");
    var z2=document.getElementById("content2");
    var z3=document.getElementById("content3");
    var z1=document.getElementById("printa");
    var x3=document.getElementById("print2");
    var x4=document.getElementById("paper");
    var x5=document.getElementById("wood");
    var x6=document.getElementById("print3");   
     if (x.style.display === "none") {
        x.style.display = "block";
        z.style.display="block";
        z1.style.display="none";
        x2.style.display="none";
        x3.style.display="none";
        x4.style.display="none";
        x5.style.display="none";
        x6.style.display="none";
        z2.style.display="none";
        z3.style.display="none";
        }
    else {
        x.style.display = "none";
    }
}
function plasticdisp1(){
    var x = document.getElementById("plastic");
    var x2=document.getElementById("print1");
    var z=document.getElementById("content1");
    var z2=document.getElementById("content2");
    var z3=document.getElementById("content3");
    var z1=document.getElementById("printa");
    var x3=document.getElementById("print2");
    var x4=document.getElementById("paper");
    var x5=document.getElementById("wood");
    var x6=document.getElementById("print3");
    x2.style.display="none";
    var ans=confirm('Are you sure to dispose plastic?');
    if(ans){
    if (x2.style.display === "none"){
        x2.style.display = "block";
        x.style.display="none";
        z.style.display="none";
        z1.style.display="none";
        x3.style.display="none";
        x4.style.display="none";
        x5.style.display="none";
        x6.style.display="none";
        z2.style.display="none";
        z3.style.display="none";        
        setTimeout(function(){location.href="sellplastic.php"},3000);
    }
    else {
        x2.style.display="none";
    }
}
    else{
        //
    }
}
function paperdisp1(){
    var x = document.getElementById("plastic");
    var x2=document.getElementById("print1");
    var z=document.getElementById("content1");
    var z2=document.getElementById("content2");
    var z3=document.getElementById("content3");
    var z1=document.getElementById("printa");
    var x3=document.getElementById("print2");
    var x4=document.getElementById("paper");
    var x5=document.getElementById("wood");
    var x6=document.getElementById("print3");
    x3.style.display="none";
    var ans=confirm('Are you sure to dispose paper?');
    if(ans){
    if (x3.style.display === "none"){   
        x3.style.display = "block";
        x.style.display="none";
        z.style.display="none";
        z1.style.display="none";
        x2.style.display="none";
        x4.style.display="none";
        x5.style.display="none";
        x6.style.display="none";
        z2.style.display="none";
        z3.style.display="none";
        setTimeout(function(){location.href="sellpaper.php"},3000);
    }
    else {
        x3.style.display="none";
    }}
}
function wooddisp1(){
    var x = document.getElementById("plastic");
    var x2=document.getElementById("print1");
    var z=document.getElementById("content1");
    var z2=document.getElementById("content2");
    var z3=document.getElementById("content3");
    var z1=document.getElementById("printa");
    var x3=document.getElementById("print2");
    var x4=document.getElementById("paper");
    var x5=document.getElementById("wood");
    var x6=document.getElementById("print3");
    x6.style.display="none";
    var ans=confirm('Are you sure to dispose wood?');
    if(ans){
    if (x6.style.display === "none"){   
        x2.style.display = "none";
        x.style.display="none";
        z.style.display="none";
        z1.style.display="none";
        x3.style.display="none";
        x4.style.display="none";
        x5.style.display="none";
        x6.style.display="block";
        z2.style.display="none";
        z3.style.display="none";
        setTimeout(function(){location.href="sellwood.php"},3000);
        
    }
    else {
        x6.style.display="none";
    }}
}
function paperdisp(){
    var x = document.getElementById("plastic");
    var x2=document.getElementById("print1");
    var z=document.getElementById("content1");
    var z1=document.getElementById("printa");
    var z4=document.getElementById("printb");
    var z5=document.getElementById("printc");
    var z2=document.getElementById("content2");
    var z3=document.getElementById("content3");
    var x3=document.getElementById("print2");
    var x4=document.getElementById("paper");
    var x5=document.getElementById("wood");
    var x6=document.getElementById("print3");
     if (x4.style.display === "none") {
        x4.style.display = "block";
        z2.style.display="block";
        z.style.display="none";
        z1.style.display="none";
        x2.style.display="none";
        x.style.display="none";
        x3.style.display="none";
        x5.style.display="none";
        x6.style.display="none";
        z3.style.display="none";
        z4.style.display="none";
        z5.style.display="none";
        }
    else {
        x4.style.display = "none";
    }
}   
function wooddisp(){
    var x = document.getElementById("plastic");
    var x2=document.getElementById("print1");
    var z=document.getElementById("content1");
    var z1=document.getElementById("printa");
    var z2=document.getElementById("content2");
    var z3=document.getElementById("content3");
    var x3=document.getElementById("print2");
    var x4=document.getElementById("paper");
    var x5=document.getElementById("wood");
    var x6=document.getElementById("print3");
    var z4=document.getElementById("printb");
    var z5=document.getElementById("printc");
     if (x5.style.display === "none") {
        x5.style.display = "block";
        z.style.display="none";
        z1.style.display="none";
        x2.style.display="none";
        x.style.display="none";
        x3.style.display="none";
        x4.style.display="none";
        x6.style.display="none";
        z2.style.display="none";
        z3.style.display="block";
        z4.style.display="none";
        z5.style.display="none";
        }
    else {
        x5.style.display = "none";
    }
}         
function show(){
    var ans=confirm('Are you sure to buy plastic?');
    var x1= document.getElementById("content1");
    var x2=document.getElementById("printa");
    var select = document.getElementById('quan1');
    var val = select.options[select.selectedIndex].value;
    if(ans){
    alert('Price:Rs.'+val*30);
    x2.style.display="block";
    x1.style.display="none";
    setTimeout(function(){location.href="buyplastic.php?price="+val*30+"&quan="+val},3000);
}
    else{
        x1.style.display="block";
        x2.style.display="none";
    }
}
function show1(){
    var x1= document.getElementById("content2");
    var x2=document.getElementById("printb");
    var select = document.getElementById('quan2');
    var val = select.options[select.selectedIndex].value;
    var ans=confirm('Are you sure to buy paper?');
    if(ans){
       alert('Price:Rs.'+val*8);
        x2.style.display="block";
        x1.style.display="none";
        setTimeout(function(){location.href="buypaper.php?price="+val*8+"&quan="+val},3000);
}
    else{
        x1.style.display="block";
        x2.style.display="none";
    }
}
function show2(){
    var x1= document.getElementById("content3");
    var x2=document.getElementById("printc");
    var ans=confirm('Are you sure to buy wood?');    
    if(ans){
        alert('Price:Rs.'+val*10);
    x2.style.display="block";
    x1.style.display="none";
    setTimeout(function(){location.href="buywood.php?price="+val*10+"&quan="+val},3000);
}
    else{
        x1.style.display="block";
        x2.style.display="none";
    }
}
