<?
	include "common.php";
	$adminid =$_POST[adminid];
	$adminpw=$_POST[adminpw];

	if (($adminid == $admin_id) && ($adminpw == $admin_pw)) {
		setcookie("cookie_admin", "yes");
	   echo("<script>location.href='member.php'</script>");
	}
	Else {
		setcookie("cookie_admin");
	   echo("<script>location.href='index.html'</script>");
	}

?>