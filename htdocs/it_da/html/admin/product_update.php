<?
include "common.php";

$no=$_REQUEST[no];
$menu=$_REQUEST[menu];
$code=$_REQUEST[code];
$name=$_REQUEST[name];
$coname=$_REQUEST[coname];
$price=$_REQUEST[price];
$opt1=$_REQUEST[opt1];
$opt2=$_REQUEST[opt2];
$contents=$_REQUEST[contents];
$status=$_REQUEST[status];
$icon_new=$_REQUEST[icon_new];
$icon_hit=$_REQUEST[icon_hit];
$icon_sale=$_REQUEST[icon_sale];
$discount=$_REQUEST[discount];
$image1=$_REQUEST[image1];
$image2=$_REQUEST[image2];
$image3=$_REQUEST[image3];

$imagename1=$_REQUEST[imagename1];
$imagename2=$_REQUEST[imagename2];
$imagename3=$_REQUEST[imagename3];

$checkno1=$_REQUEST[checkno1];
$checkno2=$_REQUEST[checkno2];
$checkno3=$_REQUEST[checkno3];

$regday1=$_REQUEST[regday1];
$regday2=$_REQUEST[regday2];
$regday3=$_REQUEST[regday3];

$page=$_REQUEST[page];

$regday=sprintf("%04d-%02d-%02d",$regday1,$regday2,$regday3);

$name=addslashes($name);
$contents=addslashes($contents);

			if($icon_new)  $icon_new=1;   else   $icon_new=0;
			if($icon_hit)  $icon_hit=1;   else   $icon_hit=0;
			if($icon_sale)  $icon_sale=1;   else   $icon_sale=0;

	$query = "select * from product where no22 = $no;";
	$result=mysqli_query($db,$query); 
	if (!$result) exit("에러:$query");
	$count=mysqli_num_rows($result);    // 레코드개수
	$row=mysqli_fetch_array($result);

$fname1=$imagename1;
if($checkno1=="1") $fname1="";
if ($_FILES["image1"]["error"]==0)      // 선택한 파일이 있는지 조사
{
  $fname1=$_FILES["image1"]["name"];
  if (!move_uploaded_file($_FILES["image1"]["tmp_name"], "../product/" .$fname1)) exit("업로드 실패");
}

$fname2=$imagename2;
if($checkno2=="1") $fname2="";
if ($_FILES["image2"]["error"]==0)      // 선택한 파일이 있는지 조사
{
  $fname2=$_FILES["image2"]["name"];
  if (!move_uploaded_file($_FILES["image2"]["tmp_name"], "../product/" .$fname2)) exit("업로드 실패");
}

$fname3=$imagename3;
if($checkno3=="1") $fname3="";
if ($_FILES["image3"]["error"]==0)      // 선택한 파일이 있는지 조사
{
  $fname3=$_FILES["image3"]["name"];
  if (!move_uploaded_file($_FILES["image3"]["tmp_name"], "../product/" .$fname3)) exit("업로드 실패");
}

$query="update product set menu22=$menu, code22='$code' ,name22='$name' ,coname22='$coname' ,price22=$price ,opt122=$opt1 ,opt222=$opt2 ,contents22='$contents' ,status22=$status ,regday22='$regday ',icon_new22=$icon_new ,icon_hit22=$icon_hit ,icon_sale22=$icon_sale ,discount22=$discount ,image122='$fname1' ,image222='$fname2' ,image322='$fname3' where no22=$no;";
$result=mysqli_query($db,$query);
if(!$result) exit("에러: $query");

echo("<script>location.href='product.php?page=$page'</script>");
?>
