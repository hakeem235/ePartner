<?php


class DB{
	private $dbh;

	function __construct(){
        require_once("dbinfo.php");
		$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
		try{
			$this->dbh = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user,$pass, $options);
			//change error reporting
			$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		}catch(PDOException $e){
			die("Bad database connection");
		}
	}//Constructor
	
//****************** Users ************************

	function checkUseremail($email){
		try{
		$data = Array();
		$stmt = $this->dbh->prepare("select count(*) from Users where User_Email= :email");
		$stmt->execute(array("email"=>$email));
		$rowsNum = $stmt->fetchColumn();

		return $rowsNum;

		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
	}//end checkUsername
	
	 
	 function insertUser($email, $password){
		try{
			$query = "insert into Users (User_Email, Password)
						values (:email, :password)";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array(
				"email"=> $email,
				"password"=> $password,
			));
			$affectedRows =$stmt->rowCount();
		}catch(PDOException $e){
			echo $e->getMessage();
			$affectedRows=-1;
		}
		return $affectedRows;

	}//insertCompanion
	
		function checkUserInfo($email, $pass){
		try{
			$data = Array();
			$query = "select User_Email from Users where User_Email= :email AND Password= :pass";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("email"=>$email,
								 "pass"=>$pass));
			$data = $stmt->fetchAll();
			return $data;

		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
	}//checkUserInfo
	
	
	function updateProfile($name, $brithday, $email, $nationality, $mobile, $iban, $address, $country, $city, $about, $category){
	try{
			$query = "update Users set User_Name= 	:name,
										Brithday= 	:brithday,
										Nationality= :nationality,
										Mobile= 	:mobile,
										IBAN= 		:iban,
										Address= 	:address,
										Country= 	:country,
										City= 		:city,
										About_Me= 	:about,
										Category= 	:category
							where User_Email = :email";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("email"=> $email,
								"name"=> $name,
								"brithday"=> $brithday,
								"nationality"=> $nationality,
								"mobile"=> $mobile,
								"iban"=> $iban,
								"address"=> $address,
								"country"=> $country,
								"city"=> $city,
								"about"=> $about,
								"category"=> $category));
			$affectedRows =$stmt->rowCount();
		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
		return $affectedRows;
	}//updateProfile
	
	function uploadAvatar($userID, $path){
	try{
			$query = "update Users set Avatar = :path where User_ID = :userID";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("userID"=> $userID,
								"path"=> $path));
			$affectedRows =$stmt->rowCount();
		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
		return $affectedRows;
	}//upload Avatar
	
	function updatetoken($email, $token){
	try{
			$query = "update Users set token = :token where User_Email = :email";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("email"=> $email,
								"token"=> $token));
			$affectedRows =$stmt->rowCount();
		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
		return $affectedRows;
	}//upload Avatar
	
	function changePass($userID, $pass){
	try{
			$query = "update Users set Password = :pass where User_ID = :userID";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("userID"=> $userID,
								"pass"=> $pass));
			$affectedRows =$stmt->rowCount();
		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
		return $affectedRows;
	}//change password
	
	function getInfoByEmailToken($email, $token){
		try{
			$data = Array();
			$query = "select * from Users where User_Email = :email and token = :token";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("email"=>$email,
									"token"=>$token));
			$data = $stmt->fetchAll();
			return $data;

		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
	}//getUserInfo
	
	function restToken($userID){
	try{
			$query = "update Users set token = '' where User_ID = :userID";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("userID"=> $userID));
			$affectedRows =$stmt->rowCount();
		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
		return $affectedRows;
	}//restToken
	
	function getUserInfo($email){
		try{
			$data = Array();
			$query = "select * from Users where User_Email = :email";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("email"=>$email));
			$data = $stmt->fetchAll();
			return $data;

		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
	}//getUserInfo
	
	function getUserInfoByID($userID){
		try{
			$data = Array();
			$query = "select * from Users where User_ID = :userID";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("userID"=>$userID));
			$data = $stmt->fetchAll();
			return $data;

		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
	}//getUserInfoByID
	
	function getAllUserInfo(){
		try{
			$data = Array();
			$query = "select * from Users";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array());
			$data = $stmt->fetchAll();
			return $data;

		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
	}//getAllUserInfo
	
//****************** Projects ************************
	
	function insertPrj($userID, $prjname, $prjdes, $prjbudget, $prjperiod, $prjcategory){
		try{
			$query = "insert into Projects (Prj_Name, Prj_Description, Prj_Budget, Prj_Period, Prj_Category, User_ID)
						values (:prjname, :prjdes, :prjbudget, :prjperiod, :prjcategory, :userID)";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array(
				"prjname"=> $prjname,
				"prjdes"=> $prjdes,
				"prjbudget"=> $prjbudget,
				"prjperiod"=> $prjperiod,
				"prjcategory"=> $prjcategory,
				"userID"=> $userID));
			$affectedRows =$stmt->rowCount();
		}catch(PDOException $e){
			echo $e->getMessage();
			$affectedRows=-1;
		}
		return $affectedRows;

	}//insert Project
	
	function updatePrj($prjID, $prjname, $prjcategory, $prjdes, $prjbudget, $prjperiod){
	try{
			$query = "update Projects set  Prj_Name= 		:prjname,
											Prj_Category= 	:prjcategory,
											Prj_Description=:prjdes,
											Prj_Budget= 	:prjbudget,
											Prj_Period= 	:prjperiod
							where Prj_ID = :prjID";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("prjID"=> $prjID,
								"prjname"=> $prjname,
								"prjcategory"=> $prjcategory,
								"prjdes"=> $prjdes,
								"prjbudget"=> $prjbudget,
								"prjperiod"=> $prjperiod));
			$affectedRows =$stmt->rowCount();
		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
		return $affectedRows;
	}//update Project
	
	function updatePrjStat($prjID, $prjstat){
	try{
			$query = "update Projects set  Prj_Stat= :prjstat
							where Prj_ID = :prjID";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("prjID"=> $prjID,
								 "prjstat"=> $prjstat));
			$affectedRows =$stmt->rowCount();
		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
		return $affectedRows;
	}//update Project Status
	
	function uploadPrjFile($prjID, $path){
	try{
			$query = "update Projects set  Prj_Stat= 'Finished', Prj_file = :path
							where Prj_ID = :prjID";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("prjID"=> $prjID,
								 "path"=> $path));
			$affectedRows =$stmt->rowCount();
		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
		return $affectedRows;
	}//update Project Status = Finished and Project file = path
	
	function updatePrjAmount($prjID, $prjamount){
	try{
			$query = "update Projects set  Prj_Budget= :prjamount
							where Prj_ID = :prjID";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("prjID"=> $prjID,
								 "prjamount"=> $prjamount));
			$affectedRows =$stmt->rowCount();
		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
		return $affectedRows;
	}//update Project Amount
	
	function getPrjByID($prjID){
		try{
			$data = Array();
			$query = "select * from Projects where Prj_ID = :prjID";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("prjID"=>$prjID));
			$data = $stmt->fetchAll();
			return $data;

		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
	}//getProjectByID
	
	function getPrjByUserID($userID){
		try{
			$data = Array();
			$query = "select * from Projects where User_ID = :userID";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("userID"=>$userID));
			$data = $stmt->fetchAll();
			return $data;

		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
	}//getProjectByUserID
	
	function getPrjNumByUserID($userID){
		try{
			$query = "select * from Projects where User_ID = :userID";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("userID"=>$userID));
			$affectedRows =$stmt->rowCount();
		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
		return $affectedRows;
	}//get Project number By UserID
	
	function getPrjByUserIDstat($userID, $prjstat){
		try{
			$query = "select * from Projects where User_ID = :userID and Prj_Stat = :prjstat";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("userID"=>$userID,"prjstat"=>$prjstat));
			$affectedRows =$stmt->rowCount();
		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
		return $affectedRows;
	}//get Project By UserID and status
	
	function getAllPrjs(){
		try{
			$data = Array();
			$query = "select * from Projects where Prj_Stat = 'New' ORDER BY Prj_postDate DESC";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array());
			$data = $stmt->fetchAll();
			return $data;

		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
	}//getAllProjects
	
	function getPrjsBy($category){
		try{
			$data = Array();
			$query = "select * from Projects where Prj_Category = :category and Prj_Stat = 'New' ORDER BY Prj_postDate DESC";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("category"=>$category));
			$data = $stmt->fetchAll();
			return $data;

		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
	}//get Projects by category and status = new
	
	function getPrjByCategoryStat($category){
		try{
			$data = Array();
			$query = "select * from Projects where Prj_Category = :category and Prj_Stat = 'New' ORDER BY Prj_postDate DESC";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("category"=>$category));
			$data = $stmt->fetchAll();
			return $data;

		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
	}//get Projects by category and status = New
	
	function getPrjWithNewPro($userID){
		try{
			$data = Array();
			$query = "SELECT `Prj_Name` FROM Projects, Proposals	 
						WHERE Projects.Prj_ID = Proposals.ProID 
						AND Projects.User_ID = :userID 
						AND Proposals.ProStat= 'New'
						ORDER BY Proposals.ProDate DESC";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("userID"=>$userID));
			$data = $stmt->fetchAll();
			return $data;

		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
	}// get project by user that have new proposal and sort by proposal date last is frist
	
	function getUserAchievements($userID){
		try{
			$data = Array();
			$query = "SELECT `Prj_Name`, `Prj_Category`, Projects.User_ID , `Prj_Budget`, `Prj_Period`
						FROM Projects,Proposals WHERE 
						Projects.Prj_ID = Proposals.Project_ID 
						AND Projects.Prj_Stat = 'Closed' 
						AND Proposals.ProStat = 'Accepted' 
						AND Proposals.User_ID = :userID";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("userID"=>$userID));
			$data = $stmt->fetchAll();
			return $data;

		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
	}// get user achievments where propsal status = Accepted and Project  status = Closed

//****************** Proposals ************************
	
	function insertPro($userID, $prjID, $proamount, $properiod, $proEnquiry){
		try{
			$query = "insert into Proposals (User_ID, Project_ID, ProAmount, ProPeriod, ProEnquiry)
						values (:userID, :prjID, :proamount, :properiod, :proEnquiry)";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array(
				"userID"=> $userID,
				"prjID"=> $prjID,
				"proamount"=> $proamount,
				"properiod"=> $properiod,
				"proEnquiry"=> $proEnquiry));
			$affectedRows =$stmt->rowCount();
		}catch(PDOException $e){
			echo $e->getMessage();
			$affectedRows=-1;
		}
		return $affectedRows;

	}//insert Proposal
	
	function updatePro($proID, $proAmount, $proPeriod, $proEnquiry){
	try{
			$query = "update Proposals set  ProAmount= 	:proAmount,
											ProPeriod= 	:proPeriod,
											ProEnquiry= :proEnquiry
							where ProID = :proID";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("proID"=> $proID,
								"proAmount"=> $proAmount,
								"proPeriod"=> $proPeriod,
								"proEnquiry"=> $proEnquiry));
			$affectedRows =$stmt->rowCount();
		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
		return $affectedRows;
	}//updateProposal
	
	function updateProStat($proID, $prostat){
	try{
			$query = "update Proposals set  ProStat= :prostat
							where ProID = :proID";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("proID"=> $proID,
								 "prostat"=> $prostat));
			$affectedRows =$stmt->rowCount();
		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
		return $affectedRows;
	}//updateProposal Status
	
	function updateAllProStat($prjID){
	try{
			$query = "update Proposals set  ProStat= 'Rejected'
							where Project_ID = :prjID and ProStat = 'New'";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("prjID"=> $prjID));
			$affectedRows =$stmt->rowCount();
		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
		return $affectedRows;
	}//update All Proposal Status
	
	function getProByUserID($userID){
		try{
			$data = Array();
			$query = "select * from Proposals where User_ID = :userID";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("userID"=>$userID));
			$data = $stmt->fetchAll();
			return $data;

		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
	}//getProposalByUserID
	
	function getProByUserPrj($userID, $prjID){
		try{
			$data = Array();
			$query = "select * from Proposals 
						where User_ID = :userID and Project_ID = :prjID";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("userID"=>$userID,
									"prjID"=>$prjID));
			$data = $stmt->fetchAll();
			return $data;

		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
	}//getProposalByUserID

	function getProByPrjID($prjID){
		try{
			$data = Array();
			$query = "select * from Proposals where Project_ID = :prjID";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("prjID"=>$prjID));
			$data = $stmt->fetchAll();
			return $data;

		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
	}//getProposalByProjectID
	
	function getProByID($proID){
		try{
			$data = Array();
			$query = "select * from Proposals where ProID = :proID";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("proID"=>$proID));
			$data = $stmt->fetchAll();
			return $data;

		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
	}//getProposalByID
	
	function getNumProByPrjID($prjID){
	try{
			$query = "select * from Proposals where Project_ID = :prjID";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("prjID"=> $prjID));
			$affectedRows =$stmt->rowCount();
		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
		return $affectedRows;
	}//get the number of proposals submitted to the project
	
	function getAcceptedProByUserID($userID){
		try{
			$data = Array();
			$query = "select Project_ID from Proposals where ProStat = 'Accepted' and User_ID = :userID";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("userID"=>$userID));
			$data = $stmt->fetchAll();
			return $data;

		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
	}//getProposalByID
	
	function getProNumByUserID($userID){
		try{
			$query = "select * from Proposals where User_ID = :userID";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("userID"=>$userID));
			$affectedRows =$stmt->rowCount();
		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
		return $affectedRows;
	}//get Project number By UserID
	
	function getProByUserIDstat($userID, $prostat){
		try{
			$query = "select * from Proposals where User_ID = :userID and ProStat = :prostat";
			$stmt = $this->dbh->prepare($query);
			$stmt->execute(array("userID"=>$userID,"prostat"=>$prostat));
			$affectedRows =$stmt->rowCount();
		}catch(PDOException $e){
			echo $e->getMessage();
			die();
		}
		return $affectedRows;
	}//get Proposal number By UserID and status
	
	
	
}//end class

?>