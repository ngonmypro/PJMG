<?php session_start();
date_default_timezone_set("Asia/Bangkok");
	include '../js/conn.php';

	$logpass = MD5($_POST['pass1']);

    $sql_login = 'SELECT * FROM tbl_users WHERE UserName = "'.$_POST['user1'].'" ';
	$result_login = mysql_query($sql_login) or die(mysql_error());

	$member = mysql_fetch_array($result_login);
	if($member['UserPass'] == $_POST['pass1']){

		$_SESSION['ssUserID'] = $member['UserID'];
		$_SESSION['ssUserSname'] = $member['UserSname'];
		$_SESSION['ssUserStatus'] = $member['UserStatus'];
		echo "Y";
	}elseif($member['UserPass'] == $logpass){

		$_SESSION['ssUserID'] = $member['UserID'];
		$_SESSION['ssUserSname'] = $member['UserSname'];
		$_SESSION['ssUserStatus'] = $member['UserStatus'];
		echo "Y";
	}else {
		echo "<p class='test-danger'>username หรือ password ไม่ถูกต้อง</p>";
	}
?>
