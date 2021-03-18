<?php	
include_once('DB.class.php');
$db = new DB();	
	
	function login($user, $password){
	
			//check the user information in the database.
			$user = $this->db->getUserInfo($user, $password);
			foreach($user as $u){
				$userName = $u['username'];
			}
			//if there is a user, set session variables
    		if(!empty($userName)){
           		$_SESSION['loggedIn'] = 'true';
           		$_SESSION['username'] = $userName;
							
echo '<script>

setTimeout(function()
{ 
     window.location = "welcomeUser.php"; 
}, 0000);

</script>';
	
						}


       		}else { //If not
            	echo $this->showMessage("wroooooong user or pass");
       		}
		}
	}
	
?>
