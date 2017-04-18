<?php 
function login ($conn,$data,&$error) {
	$stmt = $conn->prepare("SELECT * FROM `u8tr_user` WHERE email = :email AND status = :status AND level = :level");
	$stmt->bindParam(":email",$data["email"],PDO::PARAM_STR);
	$stmt->bindParam(":status",$data["status"],PDO::PARAM_STR);
	$stmt->bindParam(":level",$data["level"],PDO::PARAM_INT);
	$stmt->execute();
	$row = $stmt->rowCount();
	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	if ($row != 0 && password_verify($data["password"],$user["password"])) {
		$_SESSION["login"]["kt3V_id"]        = $user["id"];
		$_SESSION["login"]["kt3V_email"]     = $user["email"];
		$_SESSION["login"]["kt3V_level"]     = $user["level"];
		$_SESSION["login"]["kt3V_firstname"] = $user["firstname"];
		$_SESSION["login"]["kt3V_lastname"]  = $user["lastname"];
		$_SESSION["login"]["kt3V_avatar"]    = $user["avatar"];
		redirect();
	} else {
		$error[] = "Tài khoản này không tồn tại";
		if (!isset($_SESSION["login_fail"])) {
			$_SESSION["login_fail"] = 1;
			$error[] = "Bạn đã đăng nhập sai 1 lần.Sau 3 lần sai tài khoản sẽ bị lock";
		} else {
			$_SESSION["login_fail"]++;
			$error[] = "Bạn đã đăng nhập sai ".$_SESSION["login_fail"]." lần.Sau 3 lần sai tài khoản sẽ bị lock";
		}

//		if ($_SESSION["login_fail"] >= 3) {
//			unset($_SESSION["login_fail"]);
//			$fbanned = fopen("banned_ip.txt", "a");
//			$ip = get_client_ip()."\r\n";
//			fwrite($fbanned, $ip);
//			fclose($fbanned);
//		    echo "Your ip: ".get_client_ip(). " has been blocked";
//			die();
//		}
	}
}
?>