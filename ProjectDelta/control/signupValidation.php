<?php
function nameVal($name){
  $flag = true;
  if($name==""){
    return $flag;
  }
  elseif(!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
    return $flag;
  }
  else{
    $flag=false;
    return $flag;
  }
}
function unameVal($uname){
  $flag = true;
  if($uname==""){
    return $flag;
  }
  elseif(!preg_match("/^[a-zA-Z-' ]*$/",$uname)) {
    return $flag;
  }
  else{
    $flag=false;
    return $flag;
  }

}
function emailVal($email){
  $flag = true;
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    return $flag;
  }
  else{
    $flag = false;
    return $flag;
  }
}
function passVal($pass){
  $flag = true;
  if($pass==""){
    return $flag;
  }
  elseif(strlen($pass)<8){
    return $flag;
  }
  else{
    $flag=false;
    return $flag;
  }
}
function nidVal($nid){
  $flag = true;
  if (!preg_match('/^[0-9]*$/', $nid)) {
    return $flag;
  }
  else {
    $flag = false;
    return $flag;
  }
}
function repassVal($pass,$repass){
  $flag = true;
  if($pass!=$repass){
    return $flag;
  }
  else{
    $flag=false;
    return $flag;
  }
}
?>