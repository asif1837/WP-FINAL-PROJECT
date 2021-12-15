//Creating a function For Ajax to Handle Search
function handleFunctionAjax(){

            var pid=document.getElementById("pid").value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            }else{
                document.getElementById("demo").innerHTML= this.statusText;
            }
            };
            xhttp.open("POST", "searchandupdatecheck.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("pid="+pid);
         

 }
        