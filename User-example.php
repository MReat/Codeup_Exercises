<?php 
require_once "Log.php";
require_once "Car-example.php"
// can add other files with more require_once "filename.php" (filename = what other files we need to invoke)

// this is just an example.  the class should be separated out the bottom portion should be in another file

class User
{
	public $username;
	public $password;
	public $isAdministrator;

	public function tryLogin ()
	{
		// process login
	}

	public function logout ()
	{
		// log user out
	}

	public function editOtherUser ()
	{
		if($this->isAdministrator == true) {
		// process edit
		} else {
			return "Non-administrators prohibited from editting other users.";
		}
	}
}

if(!empty($_POST)){
	if(isset($_POST['username']) && isset($_POST['password'])) {
		$someUser = new User();
		$someUser->username = $_POST['username'];
		$someUser->password = $_POST['password'];
		
		$log - new Log();
		
		if($someUser->tryLogin()){
			$log->logInfo('user with username' . $someUser->username . ' logged in OK.');
		} else {
			$log->logError('user did not authenticate');
		}
}



?>
<html>
<head>
	<title>Usewr</title>
</head>
<body>
	<form action='#' method="POST">
		<input type="text" name="username" value="" placeholder="username"></br>
		<input type="password" name="password" value="" placeholder="password"></br>
		<input type="submit">
	</form>

</body>
</html>
