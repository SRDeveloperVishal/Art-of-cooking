function comment(){
 p = document.getElementById("review").value;
 
 result = document.getElementById("result");  
 result.innerHTML =  p; }
window.onload = function () {
    document.getElementById("btn_append").onclick = addTable;
    
    document.getElementById("btn_alert").onclick = alertTable;
};

 