<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	include("connect_db.php");
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM member where email = '$email'";
	$result = mysql_query($sql);
	$row = mysql_fetch_row($result);

	//echo "$row[0] . $row[1] . $row[2] . $row[3] . $row[4]";

	//判斷帳號與密碼是否為空白
	//以及MySQL資料庫裡是否有這個會員
	if($email != null && $password != null && $row[2] == $email){

		if(crypt($password,$row[3])==true){
			//將帳號寫入session，方便驗證使用者身份
			$_SESSION['email'] = $email;
			$_SESSION['loginName'] = $row[1];
			$_SESSION['userID'] = $row[0];
			/*
			if($row[4]==1){
				$_SESSION['admin'] = 1;
				$url = "adminEdit.php";
				echo "<script type='text/javascript'>";
				echo "window.location.href='$url'";
				echo "</script>";
			}
			else{
				$_SESSION['admin'] = 0;
				$url = "customerList.php";
				echo "<script type='text/javascript'>";
				echo "window.location.href='$url'";
				echo "</script>";
			}
			*/
			$url = "member.php";
			echo "<script type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}
		$url = "login.php";
		echo "<script type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";
	}
	else{
		echo '登入失敗!';
		$url = "login.php";
		echo "<script type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";
	}
?>