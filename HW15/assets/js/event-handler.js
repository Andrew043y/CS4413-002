// JavaScript Document
var elMsg = document.getElementById('feedback'); // Get feedback element
var elUsername = document.getElementById('username'); // Get username input
var elunGroup=document.getElementById('unGroup');
var elpwdGroup=document.getElementById('pwdGroup');
var elPwd = document.getElementById('password');
function checkInput(minLength, input, group)
{ // Declare function

	if (input.value.length < minLength)
	{ // If username too short
		group.classList.add('has-error');
		elMsg.innerHTML = 'Input must be '+minLength+' characters or more'; // Set msg
	}
	else
	{ // Otherwise
		elMsg.innerHTML = ''; // Clear message
		group.classList.remove('has-error');
		group.classList.add('has-success');
		
	}
}
elUsername.addEventListener('blur', function(){
	checkInput(5, elUsername, elunGroup);},
	false);
elPwd.addEventListener('blur', function(){
	checkInput(8, elPwd, elpwdGroup);},
	false);