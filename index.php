<?php 
$result=array();
$substr="shanmukh rajendra srishan delliswa rao";
$find=" ";
//total string assigning to result array
$result[]=$substr=trim($substr);
//get the count of the substr
$i=substr_count($substr,$find);

for($ii=0;$ii<$i;$ii++){
	$p=strrpos($substr,$find);
	substr($substr,$p);
	$result[]=$substr=trim(substr($substr,0,$p));
}
/* output */
echo '<pre>';
print_r($result);
?>
