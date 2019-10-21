<?
include "common.php";

$no=$_REQUEST[no];

$query="delete from member where no=$no;";
$result=mysqli_query($db,$query);
if(!$result) exit("¿¡·¯: $query");

echo("<script>location.href='company.php'</script>");
?>
