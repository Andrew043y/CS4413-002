// JavaScript Document
var fnFeedback = document.getElementById('fnFeedback'); // Get feedback element
var lnFeedback = document.getElementById('lnFeedback'); 
var emailFeedback = document.getElementById('emailFeedback');
var phoneFeedback = document.getElementById('phoneFeedback');
var userFeedback = document.getElementById('userFeedback');
var pwFeedback = document.getElementById('pwFeedback');
var commentFeedback = document.getElementById('commentFeedback');

var elFirstName = document.getElementById('firstname'); // Get firstname input
var elLastName = document.getElementById('lastname');
var elEmail = document.getElementById("email");
var elPhone = document.getElementById("phone");
var elUser = document.getElementById("username");
var elPw = document.getElementById("password");
var elComment = document.getElementById("comment");

var fnGroup=document.getElementById('fnGroup');
var lnGroup=document.getElementById('lnGroup');
var emailGroup=document.getElementById("emailGroup");
var phoneGroup=document.getElementById("phoneGroup");
var userGroup=document.getElementById("userGroup");
var pwGroup=document.getElementById("pwGroup");
var commentGroup=document.getElementById("commentGroup");

const nameRegex=new RegExp("^[a-zA-Z]+$");
const emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
const phoneRegex=/^[0-9]{10}$/;
const userRegex=/^.+$/



function checkInput(minLength, input, group, feedback)	//nameInput
{ // Declare function

	if (input.value.length < minLength || (nameRegex.test(input.value)==false))
	{ // If username too short
		group.classList.add('has-error');
		feedback.innerHTML = 'Input must be '+minLength+' characters or more. Cannot contain numbers or symbols'; // Set msg
	}
	else
	{ // Otherwise
			feedback.innerHTML = ''; // Clear message
			group.classList.remove('has-error');
			group.classList.add('has-success');
		
	}
}

function checkEmailInput(input, group, feedback){
	if (emailRegex.test(input.value)==false)
	{ 
		group.classList.add('has-error');
		feedback.innerHTML = 'Invalid email.'; // Set msg
	}
	else
	{ // Otherwise
			feedback.innerHTML = ''; // Clear message
			group.classList.remove('has-error');
			group.classList.add('has-success');
		
	}
}

function checkPhoneInput(input, group, feedback){
	if (phoneRegex.test(input.value)==false)
	{ 
		group.classList.add('has-error');
		feedback.innerHTML = 'Invalid phone Number.'; // Set msg
	}
	else
	{ // Otherwise
			feedback.innerHTML = ''; // Clear message
			group.classList.remove('has-error');
			group.classList.add('has-success');
		
	}
}

function checkUserInput(minLength, input, group, feedback){
	if (input.value.length < minLength || userRegex.test(input.value)==false)
	{ // If username too short
		group.classList.add('has-error');
		feedback.innerHTML = 'Must be a minimum of '+minLength+' characters or more.'; // Set msg
	}
	else
	{ // Otherwise
			feedback.innerHTML = ''; // Clear message
			group.classList.remove('has-error');
			group.classList.add('has-success');
		
	}
}

function checkCommentInput(input, group, feedback){
	if (userRegex.test(input.value)==false)
	{ 
		group.classList.add('has-error');
		feedback.innerHTML = 'Invalid phone Number.'; // Set msg
	}
	else
	{ // Otherwise
			feedback.innerHTML = ''; // Clear message
			group.classList.remove('has-error');
			group.classList.add('has-success');
		
	}
}

elFirstName.addEventListener('blur', function(){
	checkInput(2, elFirstName, fnGroup, fnFeedback);},
	false);
elLastName.addEventListener('blur', function(){
	checkInput(2, elLastName, lnGroup, lnFeedback);},
	false);
elEmail.addEventListener('blur', function(){
	checkEmailInput(elEmail, emailGroup, emailFeedback);},
	false);
elPhone.addEventListener('blur', function(){
	checkPhoneInput(elPhone, phoneGroup, phoneFeedback);},
	false);
elUser.addEventListener('blur', function(){
	checkUserInput(6, elUser, userGroup, userFeedback);},
	false);
elPw.addEventListener('blur', function(){
	checkUserInput(6, elPw, pwGroup, pwFeedback);},
	false);
elComment.addEventListener('blur', function(){
	checkCommentInput(elComment, commentGroup, commentFeedback);},
	false);