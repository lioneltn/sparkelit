function getSize(color,ref) {
    if (color == "") {
        document.getElementById("size").innerHTML = "HELLO";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("size").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","../getSize.php?ref="+ref+"&color="+color,true);
        xmlhttp.send();
    }
}

function test(){
    alert("Hello World");
}