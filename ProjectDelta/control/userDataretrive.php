<?php  
include '../model/rawDataHandle.php';
function loadData($uname,$pass){
  $flag=false;
  $passchk = "";
  $all_data = readData();
  foreach($all_data as $row)  {
    if ($row['name']==$uname) {
      $passchk=$row["pass"];
      if($passchk==$pass){
        $flag=true;
        return $flag;
      }
    }
  }
  return $flag;
}
?>