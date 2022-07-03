<?php
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
?>