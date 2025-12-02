<?php
if($page=="home.php"){
	echo '<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=work">Work</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=school">School</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=interests">Interests</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=contact">Contact</a></li>';
}
elseif($page=="work.php"){
	echo '<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
		<li class="nav-item active"><a class="nav-link" href="index.php?page=work">Work</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=school">School</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=interests">Interests</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=contact">Contact</a></li>';
}
elseif($page=="school.php"){
	echo '<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=work">Work</a></li>
		<li class="nav-item active"><a class="nav-link" href="index.php?page=school">School</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=interests">Interests</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=contact">Contact</a></li>';
}
elseif($page=="interests.php"){
	echo '<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=work">Work</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=school">School</a></li>
		<li class="nav-item active"><a class="nav-link" href="index.php?page=interests">Interests</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=contact">Contact</a></li>';
}
elseif($page=="contact.php"){
	echo '<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=work">Work</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=school">School</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=interests">Interests</a></li>
		<li class="nav-item active"><a class="nav-link" href="index.php?page=contact">Contact</a></li>';
}
?>