<?
include "common.php";

$no=$_REQUEST[no];
$name=$_REQUEST[name];

$query="insert into opt (name22) values ('$name');";
$result=mysqli_query($db,$query);
if(!$result) exit("에러: $query");

echo("<script>location.href='opt.php'</script>");
?>
