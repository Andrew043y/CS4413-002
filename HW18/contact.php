<?php
session_start();
include("functions.php");
?>
<!doctype html>
		<div class="container h-100">
                <div class="row h-100 align-items-end">
                    <div class="col-100 col-md-20 col-lg-12">
                        <div class="offer-content-area wow fadeInUp" data-wow-delay="1s">
							<?php
								if(isset($_GET['msg']) && $_GET['msg']=="Error")
									echo '<div class="alert alert-danger">You must fill out the contact form first!</div>';
							?>
							<?php
								if(!isset($_POST['submit'])){
									echo '<h3>Please Fill out the Contact Form:</h3>';
									echo '<form method="post" action="">';
									if(isset($_GET['error']) && strstr($_GET['error'],'fnNull')){
										echo '<div class="form-group has-error" id="fnGroup">';
										echo '<label class="control-label"> First Name</label>';
										echo '<input type="text" id = "firstname" name="firstName" class = "form-control">';	
										echo '<span class="help-block" id="fnFeedback">First name cannot be blank!</span>';
										echo '</div>';
									}
									elseif(isset($_GET['error']) && strstr($_GET['error'],'fnInvalidChar')){
										echo '<div class="form-group has-error" id="fnGroup">';
										echo '<label class="control-label"> First Name</label>';
										echo '<input type="text" id = "firstname" name="firstName" class = "form-control" value="'.$_SESSION['fnData'].'">';
										echo '<span class="help-block" id="fnFeedback">First name contains invalid characters!</span>';
										echo '</div>';
									}
									else{
										if(isset($_SESSION['fnData'])){
											echo '<div class="form-group has-success" id="fnGroup">';
											echo '<label class="control-label"> First Name</label>';
											echo '<input type="text" id = "firstname" name="firstName" class = "form-control" value="'.$_SESSION['fnData'].'">';
											echo '<span class="help-block" id="fnFeedback"></span>';
											echo '</div>';
										}
										else{
											echo '<div class="form-group" id="fnGroup">';
											echo '<label class="control-label"> First Name</label>';
											echo '<input type="text" id = "firstname" name="firstName" class = "form-control">';
											echo '<span class="help-block" id="fnFeedback"></span>';
											echo '</div>';
										}
									}
									
									if(isset($_GET['error']) && strstr($_GET['error'],'lnNull')){
										echo '<div class="form-group has-error" id="lnGroup">';
										echo '<label class="control-label"> Last Name</label>';
										echo '<input type="text" id = "lastname" name="lastName" class = "form-control">';	
										echo '<span class="help-block" id="lnFeedback">Last name cannot be blank!</span>';
										echo '</div>';
									}
									elseif(isset($_GET['error']) && strstr($_GET['error'],'lnInvalidChar')){
										echo '<div class="form-group has-error" id="lnGroup">';
										echo '<label class="control-label"> Last Name</label>';
										echo '<input type="text" id = "lastname" name="lastName" class = "form-control" value="'.$_SESSION['lnData'].'">';
										echo '<span class="help-block" id="lnFeedback">Last name contains invalid characters!</span>';
										echo '</div>';
									}
									else{
										if(isset($_SESSION['lnData'])){
											echo '<div class="form-group has-success" id="lnGroup">';
											echo '<label class="control-label"> Last Name</label>';
											echo '<input type="text" id = "lastname" name="lastName" class = "form-control" value="'.$_SESSION['lnData'].'">';
											echo '<span class="help-block" id="lnFeedback"></span>';
											echo '</div>';
										}
										else{
											echo '<div class="form-group" id="lnGroup">';
											echo '<label class="control-label"> Last Name</label>';
											echo '<input type="text" id = "lastname" name="lastName" class = "form-control">';
											echo '<span class="help-block" id="lnFeedback"></span>';
											echo '</div>';
										}
									}
									if(isset($_GET['error']) && strstr($_GET['error'],'emailNull')){
										echo '<div class="form-group has-error" id="emailGroup">';
										echo '<label class="control-label"> Email</label>';
										echo '<input type="text" id = "email" name="email" class = "form-control">';	
										echo '<span class="help-block" id="emailFeedback">Email name cannot be blank!</span>';
										echo '</div>';
									}
									elseif(isset($_GET['error']) && strstr($_GET['error'],'emailInvalidChar')){
										echo '<div class="form-group has-error" id="emailGroup">';
										echo '<label class="control-label"> Email</label>';
										echo '<input type="text" id = "email" name="email" class = "form-control" value="'.$_SESSION['emailData'].'">';
										echo '<span class="help-block" id="emailFeedback">Email name contains invalid characters!</span>';
										echo '</div>';
									}
									else{
										if(isset($_SESSION['emailData'])){
											echo '<div class="form-group has-success" id="emailGroup">';
											echo '<label class="control-label"> Email</label>';
											echo '<input type="text" id = "email" name="email" class = "form-control" value="'.$_SESSION['emailData'].'">';
											echo '<span class="help-block" id="emailFeedback"></span>';
											echo '</div>';
										}
										else{
											echo '<div class="form-group" id="emailGroup">';
											echo '<label class="control-label"> Email</label>';
											echo '<input type="text" id = "email" name="email" class = "form-control">';
											echo '<span class="help-block" id="emailFeedback"></span>';
											echo '</div>';
										}
									}
									if(isset($_GET['error']) && strstr($_GET['error'],'phoneNull')){
										echo '<div class="form-group has-error" id="phoneGroup">';
										echo '<label class="control-label"> Phone Number</label>';
										echo '<input type="text" id = "phone" name="phone" class = "form-control">';	
										echo '<span class="help-block" id="phoneFeedback">Phone number cannot be blank!</span>';
										echo '</div>';
									}
									elseif(isset($_GET['error']) && strstr($_GET['error'],'phoneInvalidChar')){
										echo '<div class="form-group has-error" id="phoneGroup">';
										echo '<label class="control-label"> Phone Number</label>';
										echo '<input type="text" id = "phone" name="phone" class = "form-control" value="'.$_SESSION['phoneData'].'">';
										echo '<span class="help-block" id="phoneFeedback">Phone number contains invalid characters!</span>';
										echo '</div>';
									}
									else{
										if(isset($_SESSION['phoneData'])){
											echo '<div class="form-group has-success" id="phoneGroup">';
											echo '<label class="control-label"> Phone Number</label>';
											echo '<input type="text" id = "phone" name="phone" class = "form-control" value="'.$_SESSION['phoneData'].'">';
											echo '<span class="help-block" id="phoneFeedback"></span>';
											echo '</div>';
										}
										else{
											echo '<div class="form-group" id="phoneGroup">';
											echo '<label class="control-label"> Phone Number</label>';
											echo '<input type="text" id = "phone" name="phone" class = "form-control">';
											echo '<span class="help-block" id="phoneFeedback"></span>';
											echo '</div>';
										}
									}
									if(isset($_GET['error']) && strstr($_GET['error'],'userNull')){
										echo '<div class="form-group has-error" id="userGroup">';
										echo '<label class="control-label"> User Name</label>';
										echo '<input type="text" id = "username" name="userName" class = "form-control">';	
										echo '<span class="help-block" id="userFeedback">User name cannot be blank!</span>';
										echo '</div>';
									}
									elseif(isset($_GET['error']) && strstr($_GET['error'],'userInvalidChar')){
										echo '<div class="form-group has-error" id="userGroup">';
										echo '<label class="control-label"> User Name</label>';
										echo '<input type="text" id = "username" name="userName" class = "form-control" value="'.$_SESSION['userData'].'">';
										echo '<span class="help-block" id="userFeedback">User name contains invalid characters!</span>';
										echo '</div>';
									}
									else{
										if(isset($_SESSION['userData'])){
											echo '<div class="form-group has-success" id="userGroup">';
											echo '<label class="control-label"> User Name</label>';
											echo '<input type="text" id = "username" name="userName" class = "form-control" value="'.$_SESSION['userData'].'">';
											echo '<span class="help-block" id="userFeedback"></span>';
											echo '</div>';
										}
										else{
											echo '<div class="form-group" id="userGroup">';
											echo '<label class="control-label"> User Name</label>';
											echo '<input type="text" id = "username" name="userName" class = "form-control">';
											echo '<span class="help-block" id="userFeedback"></span>';
											echo '</div>';
										}
									}
									if(isset($_GET['error']) && strstr($_GET['error'],'pwNull')){
										echo '<div class="form-group has-error" id="pwGroup">';
										echo '<label class="control-label"> Password</label>';
										echo '<input type="text" id = "password" name="password" class = "form-control">';	
										echo '<span class="help-block" id="pwFeedback">Password cannot be blank!</span>';
										echo '</div>';
									}
									elseif(isset($_GET['error']) && strstr($_GET['error'],'pwInvalidChar')){
										echo '<div class="form-group has-error" id="pwGroup">';
										echo '<label class="control-label"> Password</label>';
										echo '<input type="text" id = "password" name="password" class = "form-control" value="'.$_SESSION['pwData'].'">';
										echo '<span class="help-block" id="pwFeedback">Password contains invalid characters!</span>';
										echo '</div>';
									}
									else{
										if(isset($_SESSION['pwData'])){
											echo '<div class="form-group has-success" id="pwGroup">';
											echo '<label class="control-label"> Password</label>';
											echo '<input type="text" id = "password" name="password" class = "form-control" value="'.$_SESSION['pwData'].'">';
											echo '<span class="help-block" id="pwFeedback"></span>';
											echo '</div>';
										}
										else{
											echo '<div class="form-group" id="pwGroup">';
											echo '<label class="control-label"> Password</label>';
											echo '<input type="text" id = "password" name="password" class = "form-control">';
											echo '<span class="help-block" id="pwFeedback"></span>';
											echo '</div>';
										}
									}
									if(isset($_GET['error']) && strstr($_GET['error'],'pwNull')){
										echo '<div class="form-group has-error" id="commentGroup">';
										echo '<label class="control-label"> Comment</label>';
										echo '<input type="text" id = "comment" name="comment" class = "form-control">';	
										echo '<span class="help-block" id="commentFeedback">Comment cannot be blank!</span>';
										echo '</div>';
									}
									elseif(isset($_GET['error']) && strstr($_GET['error'],'pwInvalidChar')){
										echo '<div class="form-group has-error" id="commentGroup">';
										echo '<label class="control-label"> Comment</label>';
										echo '<input type="text" id = "comment" name="comment" class = "form-control" value="'.$_SESSION['pwData'].'">';
										echo '<span class="help-block" id="commentFeedback">Comment contains invalid characters!</span>';
										echo '</div>';
									}
									else{
										if(isset($_SESSION['pwData'])){
											echo '<div class="form-group has-success" id="commentGroup">';
											echo '<label class="control-label"> Comment</label>';
											echo '<input type="text" id = "comment" name="comment" class = "form-control" value="'.$_SESSION['pwData'].'">';
											echo '<span class="help-block" id="commentFeedback"></span>';
											echo '</div>';
										}
										else{
											echo '<div class="form-group" id="commentGroup">';
											echo '<label class="control-label"> Comment</label>';
											echo '<input type="text" id = "comment" name="comment" class = "form-control">';
											echo '<span class="help-block" id="commentFeedback"></span>';
											echo '</div>';
										}
									}
									echo '<hr>';
									echo '<div class="form-group">';
									echo '<button type="submit" class="btn btn-success" name="submit" value="submit">Submit</button>';
									echo '</div>';
									echo '</form> ';
								}
							else {
								$errors = "";
								$firstName=$_POST['firstName'];
								$_SESSION['fnData']=$firstName;
								$lastName=$_POST['lastName'];
								$_SESSION['lnData']=$lastName;
								$email=$_POST['email'];
								$_SESSION['emailData']=$email;
								$phone=$_POST['phone'];
								$_SESSION['phoneData']=$phone;
								$userName=$_POST['userName'];
								$_SESSION['userData']=$userName;
								$password=$_POST['password'];
								$_SESSION['pwData']=$password;
								$comment=addslashes($_POST['comment']);
								$_SESSION['commentData']=$comment;
								
								$nameRegex="/^[a-zA-Z-']+$/";
								$emailRegex = "/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|.(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
								$phoneRegex="/^[0-9]{10}$/";
								$userRegex="/^.+$/";
								
								
								if($firstName==NULL){
									$errors.="fnNull";
//									header("Location: contact.php?error=fnNull");
								}
								elseif(preg_match($nameRegex, $firstName)==0){
//								elseif(!ctype_alpha($firstName)){
									$errors.="fnInvalidChar";
//									header("Location: contact.php?error=fnInvalidChar");
								}
								
								if($lastName==NULL){
									$errors.="lnNull";
//									header("Location: contact.php?error=fnNull");
								}
								elseif(preg_match($nameRegex, $lastName)==0){
									$errors.="lnInvalidChar";
//									header("Location: contact.php?error=fnInvalidChar");
								}
								
								if($email==NULL){
									$errors.="emailNull";
//									header("Location: contact.php?error=fnNull");
								}
								elseif(preg_match($emailRegex, $email)==0){
									$errors.="emailInvalidChar";
//									header("Location: contact.php?error=fnInvalidChar");
								}
								
								if($phone==NULL){
									$errors.="phoneNull";
//									header("Location: contact.php?error=fnNull");
								}
								elseif(preg_match($phoneRegex, $phone)==0){
									$errors.="phoneInvalidChar";
//									header("Location: contact.php?error=fnInvalidChar");
								}
								
								if($userName==NULL){
									$errors.="userNull";
//									header("Location: contact.php?error=fnNull");
								}
								elseif(preg_match($userRegex, $userName)==0){
									$errors.="userInvalidChar";
//									header("Location: contact.php?error=fnInvalidChar");
								}
								
								if($password==NULL){
									$errors.="pwNull";
//									header("Location: contact.php?error=fnNull");
								}
								elseif(preg_match($userRegex, $password)==0){
									$errors.="pwInvalidChar";
//									header("Location: contact.php?error=fnInvalidChar");
								}
								
								if($comment==NULL){
									$errors.="commentNull";
//									header("Location: contact.php?error=fnNull");
								}
								elseif(preg_match($userRegex, $comment)==0){
									$errors.="commentInvalidChar";
//									header("Location: contact.php?error=fnInvalidChar");
								}
								
								if($errors!=''){
									redirect("index.php?page=contact&error=$errors");
								}
								$dblink= new mysqli("localhost", "web_user", "1PNra698H0nffDq4", "contact_data");
								$sql="Insert into `contact_info` (`first_name`, `last_name`, `email`, `phone`, `user_name`, `password`, `comments`) values ('$firstName', '$lastName', '$email', '$phone', '$userName', '$password', '$comment')";
								$dblink->query($sql) or
									die("<h2>Something went wrong with:<br>$sql<br>".$dblink->error."</h2>");
								echo '<h2>Data successfully entered into the database!</h2>';
								
////									header("Location: results.php");
									echo '<h3>Contact Form Data:</h3>';
									echo '<div>First Name: '.$firstName.'</div>';
									echo '<div>Last Name: '.$lastName.'</div>';
									echo '<div>Email: '.$email.'</div>';
									echo '<div>Phone Number: '.$phone.'</div>';
									echo '<div>User Name: '.$userName.'</div>';
									echo '<div>Password: '.$password.'</div>';
									echo '<div>Comment: '.$comment.'</div>';
							}
							session_unset();
							?>
<!--                            <a href="contact.php" class="btn karl-btn mt-30" target="_top">Back to Top</a>-->
                        </div>
                    </div>
                </div>
            </div>
