<?php 
	include("./header.inc"); 
?>


<?php

	if($user->isLoggedin()) {
	    // user is already logged in, so they don't need to be here
	    $session->redirect("/somewhere/"); 
	}

	// check for login before outputting markup
	if($input->post->user && $input->post->pass) {

	    $user = $sanitizer->username($input->post->user);
	    $pass = $input->post->pass; 

	    if($session->login($user, $pass)) {
	        // login successful
	        $session->redirect("/somewhere/"); 
	    }
	}

?>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form action='./' method='post'>
        <?php if($input->post->user) echo "<h2 class='error'>Login failed</h2>"; ?>
        <p><label>User <input type='text' name='user' /></label></p>
        <p><label>Password <input type='password' name='pass' /></label></p>
        <p><input type='submit' name='submit' value='Login' /></p>
    </form>
</body>
</html>


<?php
	include("./footer.inc"); 
?>