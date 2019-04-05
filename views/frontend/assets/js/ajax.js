function getSize(color,ref) {
    if (color == "") {
        //document.getElementById("size").innerHTML = "HELLO";
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


function sortBy(option) {
    if (option == "") {
        document.getElementById("product_sorted").innerHTML = "";
        return;
    } else { 
        console.log(option);
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("product_sorted").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","../afficherProduitSorted.php?option="+option,true);
        xmlhttp.send();
    }
}


function search(query) {
    if (query == "") {
        document.getElementById("searchresult").innerHTML = "";
        return;
    } else { 
        console.log(query);
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("searchresult").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","../search.php?query="+query,true);
        xmlhttp.send();
    }
}

function test(){
    alert(document.getElementById("searchresult").value);
    document.getElementById("searchresult").innerHTML=Hello;
    

}
