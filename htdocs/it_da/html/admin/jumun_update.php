<?
include "common.php";

$no=$_REQUEST[no];
$state=$_REQUEST[state];

$query="update jumun set state22=$state where no22='$no';";
$result=mysqli_query($db,$query);
if(!$result) exit("에러: $query");
echo("<script>location.href='jumun.php?'</script>");
?>
