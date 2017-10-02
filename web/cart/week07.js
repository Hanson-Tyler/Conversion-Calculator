function addItems(){
var count = 0;
var cost = 0;
var tax = 0;
var shipping = 15.00;
var combined = 0;
//add checked items to the cost
for(i = 1; i < 11; i++){
	var temp = "item" + i.toString();
	if(document.getElementById(temp).checked == true){
		cost += calculateCost(i);
		count++;
	}
}
//calculate tax
tax = .08 * cost;
//check if shipping meets promotion
if(cost >= 100){
	shipping = 0.00;
}
//finalize total
combined = (cost + tax + shipping);
//update costs
document.getElementById("itemtotal").textContent = "Item Total: $" + cost.toFixed(2);
document.getElementById("itemcount").textContent = "Item Count: " + count;
document.getElementById("tax").textContent = "Tax: $" + tax.toFixed(2);
document.getElementById("shipping").textContent = "Shipping: $" + shipping;
document.getElementById("total").textContent = "Total: $" + combined.toFixed(2);

}

function calculateCost(item){
	if(item == "1" || item == "5"){
		return 49.99;
	}
	else if(item == "2" || item == "10"){
		return 39.99;
	}
	else if(item == "3" || item == "8"){
		return 59.99;
	}
	else if(item == "9"){
		return 69.99;
	}
	else if(item == "4" || item == "7"){
		return 34.99;
	}
	else if(item == "6"){
		return 29.99;
	}

}

function validateFirstName(){
	var x = document.getElementById("firstname");
	var span = document.getElementById("fnerror");

	if(/^([a-zA-Z]+)$/.test(x.value)){
		span.textContent = "";
	}
	else{
		span.textContent = "Please enter a valid First Name";
	}
}

function validateLastName(){
	var x = document.getElementById("lastname");
	var span = document.getElementById("lnerror");

	if(/^([a-zA-Z]+)$/.test(x.value)){
		span.textContent = "";
	}
	else{
		span.textContent = "Please enter a valid Last Name";
	}
}

function validatePhone(){
	var x = document.getElementById("phone");
	var span = document.getElementById("pnerror");

	if(/^(\d\d\d\-*\d\d\d\-*\d\d\d\d)$/.test(x.value)){
		span.textContent = "";
	}
	else{
		span.textContent = "Please enter a valid Phone Number";
	}
}

function validateStreetNumber(){
	var x = document.getElementById("streetnumber");
	var span = document.getElementById("snerror");

	if(/^(\d+)$/.test(x.value)){
		span.textContent = "";
	}
	else{
		span.textContent = "Please enter a valid Street Number";
	}
}

function validateApartment(){
	var x = document.getElementById("apt");
	var span = document.getElementById("anerror");

	if(/^(\d+)*$/.test(x.value)){
		span.textContent = " ";
	}
	else{
		span.textContent = "Please enter a valid Apartment Number";
	}
}

function validateStreetName(){
	var x = document.getElementById("streetname");
	var span = document.getElementById("sn2error");

	if(/^(([a-zA-Z]+)(\s[a-zA-Z]+)$/.test(x.value)){
		span.textContent = "";
	}
	else{
		span.textContent = "Please enter a valid Street Name";
	}
}

function validateCity(){
	var x = document.getElementById("city");
	var span = document.getElementById("cerror");

	if(/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/.test(x.value)){
		span.textContent = "";
	}
	else{
		span.textContent = "Please enter a valid City Name";
	}
}

function validateState(){
	var x = document.getElementById("state");
	var span = document.getElementById("serror");

	if(/^(A[LKZR]|C[AOT]|DE|FL|GA|HI|I[DLNA]|K[SY]|LA|M[EDAINSOT]|N[EVHJMYCD]|O[HKR]|PA|RI|S[CD]|T[NX]|UT|V[TA]|W[AVIY])$/.test(x.value)){
		span.textContent = "";
	}
	else{
		span.textContent = "Please enter a valid State Abbreviation";
	}
}

function validateZIP(){
	var x = document.getElementById("zip");
	var span = document.getElementById("zerror");

	if(/^(\d\d\d\d\d)(\-\d\d\d\d)?$/.test(x.value)){
		span.textContent = "";
	}
	else{
		span.textContent = "Please enter a valid Zip Code";
	}
}


function validateCountry(){
	var x = document.getElementById("country");
	var span = document.getElementById("c2error");

	if(/^([a-zA-Z]+)(\s[a-zA-Z]+)$/.test(x.value)){
		span.textContent = "";
	}
	else{
		span.textContent = "Please enter a valid Country";
	}
}

function validateCreditCard(){
	var x = document.getElementById("cc");
	var span = document.getElementById("creditcard");

	if(/^(\d\d\d\d(\s|\-)?\d\d\d\d(\s|\-)?\d\d\d\d(\s|\-)?\d\d\d\d)$/.test(x.value)){
		span.textContent = "";
	}
	else{
		span.textContent = "Please Enter a valid credit card number";
	}
}

function validateExpiration(){
	var x = document.getElementById("expiration");
	var span = document.getElementById("ex");

	if(/^(\d?\d\/\d\d)$/.test(x.value)){
		span.textContent = "";
	}
	else{
		span.textContent = "Please enter a valid credit card";
	}
}

function resetInfo(){
	alert("Customer information reset. Please enter your information.")
}

function paymentChecked(){
	for(i = 1; i < 5; i++){
		var temp = "payment" + i;
		if(document.getElementById(temp).checked){
			return true;
		}
	}
	return false;
}

function checkInformation(){
	if(document.getElementById("fnerror").textContent == "Please enter a valid First Name"){
		return false;
	}
	else if(document.getElementById("lnerror").textContent == "Please enter a valid Last Name"){
		return false;
	}
	else if(document.getElementById("pnerror").textContent == "Please enter a valid Phone Number"){
		return false;
	}
	else if(document.getElementById("snerror").textContent == "Please enter a valid Street Number"){
		return false;
	}
	else if(document.getElementById("anerror").textContent == "Please enter a valid Apartment Number"){
		return false;
	}
	else if(document.getElementById("sn2error").textContent == "Please enter a valid Street Name"){
		return false;
	}
	else if(document.getElementById("cerror").textContent == "Please enter a valid City Name"){
		return false;
	}
	else if(document.getElementById("serror").textContent == "Please enter a valid State Abbreviation"){
		return false;
	}
	else if(document.getElementById("zerror").textContent == "Please enter a valid Zip Code"){
		return false;
	}
	else if(document.getElementById("c2error").textContent == "Please enter a valid Country"){
		return false;
	}
	else if(document.getElementById("ex").textContent == "Please enter a valid credit card"){
		return false;
	}
	else if(document.getElementById("creditcard").textContent == "Please Enter a valid credit card number"){
		return false;
	}
	else{
		return true;
	}	
}


function submitOrder(){
	if(paymentChecked() && checkInformation()){
		alert("Information is valid and order was submitted")
	}
	else{
		alert("There was a problem with your order and it was not submitted.\nPossible causes:\n  -Information not filled out\n  -Error in the information\n  -No items selected")
	}
}