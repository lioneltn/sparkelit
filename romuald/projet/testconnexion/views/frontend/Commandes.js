//review and payments


var tab = ["&", '"', "'", "(", ")", "_", "=", "-", "+", ".", "1", "2", "3", "4", "5", "6", "7", "8", "9", "/", "*", "$", "^", "¨", "!", ":", ";", ",", "?"];
var tab2 = ["&", '"', "'", "(", ")", "_", "=", "-", "+", ".", "/", "*", "$", "^", "¨", "!", ":", ";", ",", "?"];

function controlSaisie(obj) {
    if (obj.id == "firstName" || obj.id == "lastName" || obj.id == "company" || obj.id == "city" ) {

        try {
            if (obj.value.indexOf(" ") == 0) throw "il ne doit pas commencer par un espace";
            for (var i = 0; i < tab.length; i++) {
                if (obj.value.indexOf(tab[i]) >= 0) {
                    throw "pas de caracteres speciaux ou de chirffres";
                    break;
                }
            }
            // si l'erreur n'est pas detecte
            obj.parentElement.querySelector("p").textContent = "";
            obj.style.borderColor = "#ced4da";

        } //si l'eereru et détecté 
        catch (err) {
            obj.style.borderColor = "red";
            console.log(obj.parentElement.querySelector("p"));
            if (!obj.parentElement.querySelector("p"))
                obj.insertAdjacentHTML("afterend", "<p style='color:red;'>" + err + "</p>");
            else obj.parentElement.querySelector("p").textContent = err;

        }

    } else if (obj.type == "password") {
        try {
            if (obj.value.length < 5) 
            {
//              document.getElementById("login").disabled="true";
//                console.log("manger");
                throw "minimum cinq caracteres";
            }
             else document.getElementById("login").disabled="false";
            // si l'erreur n'est pas detecte
            obj.parentElement.querySelector("p").textContent = "";
            obj.style.borderColor = "#ced4da";

        } //si l'eereru et détecté 
        catch (err) {
            obj.style.borderColor = "red";
            console.log(obj.parentElement.querySelector("p"));
            if (!obj.parentElement.querySelector("p"))
                obj.insertAdjacentHTML("afterend", "<p style='color:red;'>" + err + "</p>");
            else obj.parentElement.querySelector("p").textContent = err;

        }

    } else if (obj.id == "streetAddress1" || obj.id == "streetAddress2") {

        try {
            if (obj.value.indexOf(" ") == 0) throw "il ne doit pas commencer par un espace";
            for (var i = 0; i < tab2.length; i++) {
                if (obj.value.indexOf(tab2[i]) >= 0) {
                    throw "pas de caracteres speciaux";
                    break;
                }
            }
            // si l'erreur n'est pas detecte
            obj.parentElement.querySelector("p").textContent = "";
            obj.style.borderColor = "#ced4da";

        } //si l'eereru et détecté 
        catch (err) {
            obj.style.borderColor = "red";
            console.log(obj.parentElement.querySelector("p"));
            if (!obj.parentElement.querySelector("p"))
                obj.insertAdjacentHTML("afterend", "<p style='color:red;'>" + err + "</p>");
            else obj.parentElement.querySelector("p").textContent = err;

        }
    } else if (obj.id == "zipCode") {

        try {
            for (var i = 0; i < obj.value.length; i++) {
                if (isNaN(obj.value[i])) {
                    throw "ce n'est pas un chiffre";
                    break;
                }
                if (obj.value.length != 5) throw "le format doit etre de la forme NNNNN";
            }
            // si l'erreur n'est pas detecte
            obj.parentElement.querySelector("p").textContent = "";
            obj.style.borderColor = "#ced4da";

        } //si l'eereru et détecté 
        catch (err) {
            obj.style.borderColor = "red";
            console.log(obj.parentElement.querySelector("p"));
            if (!obj.parentElement.querySelector("p"))
                obj.insertAdjacentHTML("afterend", "<p style='color:red;'>" + err + "</p>");
            else obj.parentElement.querySelector("p").textContent = err;

        }
    } else if (obj.id == "phoneNumber") {

        try {
            if (isNaN(obj.value[0]) && (obj.value[0] != "+" || obj.value[0] == " ")) throw "ce champ doit commencer soit pas + soit par un chiffre";
            for (var i = 1; i < obj.value.length; i++) {
                if (isNaN(obj.value[i])) {
                    throw "ce n'est pas un chiffre";
                    break;
                }

            }
            // si l'erreur n'est pas detecte
            obj.parentElement.querySelector("p").textContent = "";
            obj.style.borderColor = "#ced4da";

        } //si l'eereru et détecté 
        catch (err) {
            obj.style.borderColor = "red";
            console.log(obj.parentElement.querySelector("p"));
            if (!obj.parentElement.querySelector("p"))
                obj.insertAdjacentHTML("afterend", "<p style='color:red;'>" + err + "</p>");
            else obj.parentElement.querySelector("p").textContent = err;

        }
    }
    
    else if (obj.id == "cardNumber") {

        try {

            for (var i = 1; i < obj.value.length; i++) {
                if (isNaN(obj.value[i] && obj.value[i]!="-" && obj.value.length!=19 )) {
                    throw "soit un tiret ou un chiffre";
                    break;
                }
                                if ( obj.value.length!=19 ){
                                    throw "respecter la longeur";
                                }
                

            }
            // si l'erreur n'est pas detecte
            obj.parentElement.querySelector("p").textContent = "";
            obj.style.borderColor = "#ced4da";

        } //si l'eereru et détecté 
        catch (err) {
            obj.style.borderColor = "red";
            console.log(obj.parentElement.querySelector("p"));
            if (!obj.parentElement.querySelector("p"))
                obj.insertAdjacentHTML("afterend", "<p style='color:red;'>" + err + "</p>");
            else obj.parentElement.querySelector("p").textContent = err;

        }
    }
    
        else if (obj.id == "CVV") {

        try {
            for (var i = 1; i < obj.value.length; i++) {
                if (isNaN(obj.value[i])) {
                    throw "soit un tiret ou un chiffre";
                    break;
                }
                 if (isNaN(obj.value[i]=!3)) {
                     throw "respecter la longeur"

            }
            // si l'erreur n'est pas detecte
            obj.parentElement.querySelector("p").textContent = "";
            obj.style.borderColor = "#ced4da";

        } //si l'eereru et détecté 
        }
        catch (err) {
            obj.style.borderColor = "red";
            console.log(obj.parentElement.querySelector("p"));
            if (!obj.parentElement.querySelector("p"))
                obj.insertAdjacentHTML("afterend", "<p style='color:red;'>" + err + "</p>");
            else obj.parentElement.querySelector("p").textContent = err;

        }
    }
    
}





