<?php 
$gadgetbrands=array('Samsung','Huawei','Apple','Vivo','Lenevo','Samsung');
$countbrands=array_count_values($gadgetbrands);

echo "<pre>";
print_r($countbrands);
echo '</pre>';




?>