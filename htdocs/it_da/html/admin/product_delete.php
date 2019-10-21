<?
include "common.php";

$no=$_REQUEST[no];

$query="delete from product where no22=$no;";
$result=mysqli_query($db,$query);
if(!$result) exit("¿¡·¯: $query");

echo("<script>location.href='product.php'</script>");
?>
