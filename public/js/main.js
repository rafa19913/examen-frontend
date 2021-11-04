

function addNewRow(){
	
	let sku = document.getElementById('sku').value;
	let name = document.getElementById('name').value;
	let quantity = document.getElementById('quantity').value;
	let price = document.getElementById('price').value;
	
	if (validate(sku, name, quantity, price)){
		messageSuccess();
		addRowToTable(sku, name, quantity, price);
	}else{
		sendMessageError();
	}
	
	
}

function messageSuccess(){
	iziToast.success({
		title: 'Correct',
		message: 'New row has inserted!',
	});
	
}

function addRowToTable(sku, name, quantity, price){
		
	let tableRef = document.getElementById('myTable');	
	let newRow   = tableRef.insertRow(-1);
	
	let newCell  = newRow.insertCell(0);      
	let newCel2  = newRow.insertCell(1);
	let newCel3  = newRow.insertCell(2);
	let newCel4  = newRow.insertCell(3);
	
	let newText1  = document.createTextNode(sku);
	let newText2  = document.createTextNode(name);
	let newText3  = document.createTextNode(quantity);
	let newText4  = document.createTextNode("$"+price);
	
	newCell.appendChild(newText1);
	newCel2.appendChild(newText2);
	newCel3.appendChild(newText3);
	newCel4.appendChild(newText4);
	
	addRow('myTable');
	
}


function cleanFields(){
	document.getElementById('sku').value = " ";
	document.getElementById('name').value = " ";
	document.getElementById('quantity').value = " ";
	document.getElementById('price').value = " ";
}

function sendMessageError(){

	iziToast.error({
		title: 'Error',
		message: 'Illegal operation',
	});

}


function validate(sku, name, quantity, price){
	if (sku == "" || name == "" || quantity == "" || price == "" ){
		return false;
	}else{
		return true;
	}
	
	
	
}