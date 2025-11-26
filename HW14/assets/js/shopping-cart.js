// JavaScript Document
var addBtn = document.getElementById('addToList');
var elList = document.getElementById('list');
var inputName = document.getElementById('itemName');
var counter = document.getElementById('counter');


function addItem(){
	var newEl, newElText;
	newEl=document.createElement('div');
	if(!inputName.value==""){
		newElText=document.createTextNode(""+inputName.value);
	}
	newEl.appendChild(newElText);
	newEl.classList.add('alert');
	newEl.classList.add('alert-info');
	elList.appendChild(newEl);
	counter.textContent++;
	
}

addBtn.addEventListener('click', addItem, false);