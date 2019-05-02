<?php 
/*array_change_case_key     */
$employeedata=array(
 'JOHN'=>35,
 'Brad'=>37,
 'Morrison'=>25
);
echo '<pre>';
// print_r(array_change_key_case($employeedata));
print_r(array_change_key_case($employeedata,CASE_UPPER));
echo '</pre>';

?>