<?
	include "common.php";

	$no=$_REQUEST[no];
	$name=$_REQUEST[name];
	$gender=$_REQUEST[gender];
	$uid=$_REQUEST[uid];
	$pwd=$_REQUEST[pwd];
	$account=$_REQUEST[account];

	$birthday1=$_REQUEST[birthday1];
	$birthday2=$_REQUEST[birthday2];
	$birthday3=$_REQUEST[birthday3];

	$birthday=sprintf("%04d-%02d-%02d", $birthday1, $birthday2, $birthday3);

	$query="update member set name='$name', gender='$gender', pwd='$pwd', birthday='$birthday' where no=$no;";

	$result=mysqli_query($db,$query);
	if(!$result) exit("¿¡·¯: $query");
	echo("<script>location.href='member.php'</script>");
?>
