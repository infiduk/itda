<?
include "common.php";

$no=$_REQUEST[no];

$query="delete from jumun where no22=$no;";
$result=mysqli_query($db,$query);
if(!$result) exit("����: $query");

$query="delete from jumuns where jumun_no22=$no;";
$result=mysqli_query($db,$query);
if(!$result) exit("����: $query");

echo("<script>location.href='jumun.php'</script>");
?>
