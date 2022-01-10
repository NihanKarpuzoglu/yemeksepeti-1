
<?php 
session_start(); 
include "config.php";

if (isset($_POST['UserName']) && isset($_POST['Password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $uname_email = validate($_POST['UserName']);
    $password = validate($_POST['Password']);
	$uname_email=str_replace("'","*****",$uname_email);
	$password=str_replace("'","*****",$password);
    if (empty($uname_email)) {
        header("Location: MainPage.html?error=User Name is required");
        exit();
    }else if(empty($password)){
        header("Location: MainPage.html?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE (uname='$uname_email' OR email='$uname_email') AND password='$password'";
        //$result = mysqli_query($conn, $sql);
		$user = mysqli_query($conn,$sql) or trigger_error(mysqli_error($conn)." ".$sql);
		//$user=$conn->query($sql);
		if(!$user){
			header("Location: MainPage.html?error=Query Error");
				//echo $user;
				exit();	
		}elseif(mysqli_num_rows($user) == 0){
				header("Location: MainPage.html?error=Incorect User name or password");
				//echo $user;
				exit();	
        }else{
			if (mysqli_num_rows($user) === 1) {
				$row = mysqli_fetch_assoc($user);
				if ($row['password'] === $password) {
					if($row['uname'] === $uname_email) {
						echo "Logged in!";
						$_SESSION['uname'] = $row['uname'];
						$_SESSION['name'] = $row['name'];
						$_SESSION['user_id'] = $row['user_id'];
						$_SESSION['city_id']= $row['city_id'];
						header("Location:list.php?city_id=".$_SESSION['city_id']);	
						exit();
					}else if($row['email'] === $uname_email){
						echo "Logged in!";
						$_SESSION['uname'] = $row['email']; //????????????????????????????????????????????????????
						$_SESSION['name'] = $row['name'];
						$_SESSION['user_id'] = $row['user_id'];
						$_SESSION['city_id']= $row['city_id'];
						header("Location:list.php?city_id=".$_SESSION['city_id']);
						exit();
					}
				}else{
					header("Location: index.php?error=Incorect User name or password");
					exit();
				}
			}
			else{
				echo 1;
			}
        }
    }
}else{
    header("Location: index.php");
    exit();
}
?>