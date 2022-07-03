<?php  
include '../model/rawDataHandle.php';

function loadData(){
return readData();

}
function addData($data){
	$final_data = storeData($data);
    if(file_put_contents('../data/userData.json', $final_data))  
        {  
            header("location:../View/SignIn.php");
        }  

}
function studentInfo($data){

$all_data = readData();
    foreach($all_data as $row)  {
        if ($row['name']==$data) {
            $d_data = array(
              'name' =>$row['name'],
              'username'=>$row["uname"],   
              'e-mail'=>$row["email"],  
              'password' =>$row["pass"],
              'nid'=>$row["nid"]
            );
        return $d_data;
        }
    }

}