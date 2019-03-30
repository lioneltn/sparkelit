// Input fields
const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirmPassword");
const numTel = document.getElementById("numTel");
const dateNaissance = document.getElementById("dateNaissance");
const email = document.getElementById("email");
const pays = document.getElementById("pays");
const codePostal = document.getElementById("codePostal");
const addLivraison = document.getElementById("addLivraison");
const addLivraison_2 = document.getElementById("addLivraison_2");
const firstName = document.getElementById("fisrtName");
const lastName = document.getElementById("lastName");
const firstName_2 = document.getElementById("firstName_2");
// Form
const form = document.getElementById("newAccount");
// Validation colors
const green = '#4CAF50';
const red = '#F44336';

function validateFirstName(field){
	if(checkIfEmty(field)) return;
	if(!checkIfOnlyLetters(field)) return;
	if(!beginSpace(field)) return;
	return true;
}

function checkIfEmty(field){
	if(isEmpty(field.value)){
		//set field invalid
		setInvalid(field, " ne doit pas être vide");
		return true;
	} else {
		setValid(field);
		return false;
	}
}
function isEmpty(value){
	if(value == '') return true;
	return false;
}
function setInvalid(field, message){
	//field.className = 'invalid';
	if(!field.parentElement.querySelector("p"))
	field.insertAdjacentHTML("afterend", "<p style='color:red;'>"+message+"</p>");
	else field.parentElement.querySelector("p").textContent=message;
	//field.innerHTML = message;
	field.style.borderColor = red;
}
function setValid(field){
	//field.className = 'valid';
	if(!field.parentElement.querySelector("p"))
	field.insertAdjacentHTML("afterend", "<p style='color:red;'>"+""+"</p>");
	else field.parentElement.querySelector("p").textContent="";
	//field.innerHTML = '';
	field.style.borderColor = green;
}
function checkIfOnlyLetters(field){
	if(/^[a-zA-Z ]+$/.test(field.value)){
		setValid(field);
		return true;
	} else {
		setInvalid(field, " must contain only letters");
		return false;
	}
}
function beginSpace(field){
	if(field.value.indexOf(" ") != 0){
		setValid(field);
		return true;
	} else {
		setInvalid(field, "mustn't begin by space");
		return false;
	}
}

function validatePassword(field){
	if(checkIfEmty(field)) return;
	if(!meetLength(field, 6, 100)) return;
	if(!containsCharacters(field, 4)) return;
	return true;
}
function meetLength(field, minLength, maxLength){
	if(field.value.length >= minLength && field.value.length < maxLength){
		setValid(field);
		return true;
	} else if(field.value.length < minLength){
		setInvalid(field, `${field.name} mot de passe trop court ${minLength} characters long`)
	} else {
		setInvalid(field, `${field.name} mot de passe doit être inférieur à ${maxLength} characters`)
	}
}
function containsCharacters(field, nbre){
	let regEx;
	switch(nbre){
		case 1:
			regEx = /(?=.*[a-zA-Z])/;
			return matchWidthRegEx(regEx, field, `${field.name} doit contenir au-moins une lettre`);
		case 2:
			regEx = /(?=.*\d)(?=.*[a-zA-Z])/;
			return matchWidthRegEx(regEx, field, 'doit contenir au-moins une lettre et un nombre');
		case 3:
			regEx = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/;
			return matchWidthRegEx(regEx, field, 'doit contenir au-moins une lettre majuscule et miniscule et un nombre');
		case 4:
			regEx = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*["&","'","(","-","è","_",")","=","!",":",";","ù","*","^","$",".",","])/;
			return matchWidthRegEx(regEx, field, 'doit contenir au-moins une lettre majuscule et miniscule et un nombre et un caractère spéciale');
		case 5:
			regEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return matchWidthRegEx(regEx, field, 'entrer une e-mail valide');
		case 6:
			regEx = /(?=.*[a-zA-Z]["-"])/;
			return matchWidthRegEx(regEx, field, 'doit contenir au-moins une lettre, . ou -');
			default:
			return false;
	}
}
function matchWidthRegEx(regEx, field, message){
	if(field.value.match(regEx)){
		setValid(field);
		return true;
	} else {
		setInvalid(field, message);
		return false;
	}
}

function validateConfirmPassword(field){
	if(!validatePassword(document.getElementById("password"))){
		setInvalid(field, 'mot de passe doit être valide');
		return;
	}
	if(field.value !== document.getElementById("password").value){
		setInvalid(field, 'mot de passe doit être pareil ');
		return;
	} else {
		setValid(field);
	}
	return true;
}
function validateEmail(field){
	if(checkIfEmty(field)) return;
	if(!containsCharacters(field, 5)) return;
	return true;
}
function verification(field) 
{
	if(
		validateConfirmPassword() &&
		validateEmail() &&
		validateFirstName() &&
		validatePassword()
	) {
		
	}
}
function validateDateNaissance(field) {
	ladate=new Date()
	var dateNaissance = new Date(document.getElementById("dateNaissance").value);
	var annee = dateNaissance.getFullYear();
	if(annee > (ladate.getFullYear() - 5 )) {
		setInvalid(field, 'année de naissance invalide');
		return;
	} else {
		setValid(field);
	}
}
function checkPositiveNumber(field) {
	if(/^[0-9]+$/.test(field.value) && field.value > 0){
		setValid(field);
		return true;
	} else {
		setInvalid(field, 'numéro  invalide');
		return false;
	}
}
function validateNumTel(field)
{
	if(!checkPositiveNumber(field)) {
		return;
	}
	if(field.value.length > 13 || field.value.length < 8) {
		setInvalid(field, 'nombre de chiffre du numéro de téléphone invalide');
		return;
	} else {
		setValid(field);
	}
}
function validatePays(field) {
	if(!containsCharacters(field, 6)){
		return ;
	}
	return true;
}
function validateCodePostal(field) {
	if(!checkPositiveNumber(field)) {
		return;
	} 
	
	if(field.value.length != 4)
	{
		setInvalid(field, 'nombre de chiffre du code postal invalide');
		return;
	}else {
		setValid(field);	
		
	}
	return true;
}

function verification()
{
	
}